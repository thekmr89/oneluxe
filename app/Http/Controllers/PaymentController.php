<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use App\Models\Transaction;
use Carbon\Carbon;
use Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\TransactionMail;
use App\Mail\AdminMail;
class PaymentController extends Controller
{
    
public function processPayments(Request $request)
{
    
    //  $array_data = [
    //                     'order_id' =>12345,
    //                     'txn_id' => 1234,
    //                     'status' => 'success',
    //                     'amount' =>1,
    //                     'customer_email' =>'sanoj@bitgaintech.com',
    //                     'customer_phone' =>'9472050291',
    //                     'currency' => $data['currency'] ?? 'INR',
    //                     'name' =>'sanoj kumar',
    //                 ];
    //                 // Send to admin
    //                 Mail::to('jayraj@bitgaintech.com')
    //                 ->queue(new TransactionMail($array_data));
    //                 // Send to admin
    //                 Mail::to('sanoj@bitgaintech.com')->queue(new  AdminMail($array_data));
    // $amountMap = [
    //     "1#424915#4999" => ['INR' => 424915, 'USD' => 4999],
    //     "2#594915#6999" => ['INR' => 594915, 'USD' => 6999],
    //     "3#467415#5499" => ['INR' => 467415, 'USD' => 5499],
    //     "4#552415#6499" => ['INR' => 552415, 'USD' => 6499],
    //     "5#1#1#1#1" => ['INR' => 100, 'USD' => 11,'EUR' => 11, 'GBP' => 11],
        
    // ];

    // $currency = strtoupper($request->input('currency', 'INR'));
    // $package = $request->input('package_name');
    // $amount = null;

    // try {
    //     if (isset($amountMap[$package])) {
    //         $amount = $currency === 'INR' ? $amountMap[$package]['INR'] : $amountMap[$package]['USD'];
    //     }
    // } catch (\Throwable $th) {
    //     $amount = null;
    // }

    // if (!$amount) {
    //     return back()->with('error', 'Payment failed!');
    // }

    $orderId = 'ORD' . now()->format('YmdHis') . rand(100, 999);
    $returnUrl = url('payment-success');

   if($request->currency == 'INR')
   { $payload = [
        "order_id" => $orderId,
        "amount" => $request->TxtAmt,
        "customer_id" => $request->input('customer_id'),
        "customer_email" => $request->input('email'),
        "customer_phone" => $request->input('mobile'),
        "payment_page_client_id" => "47542",
        "action" => "paymentPage",
        "currency" => $request->currency,
        "return_url" => $returnUrl,
        "description" => $request->input('payment_for'),
        "first_name" => $request->input('first_name'),
        "last_name" => $request->input('last_name'),
        "metadata.package_name" =>$request->package_name,
    ]; }
    else{
         $payload = [
        "order_id" => $orderId,
        "amount" => $request->TxtAmt,
        "customer_id" => $request->input('customer_id'),
        "customer_email" => $request->input('email'),
        "customer_phone" => $request->input('mobile'),
        "payment_page_client_id" => "47542",
        "action" => "paymentPage",
        "currency" => $request->currency,
        "return_url" => $returnUrl,
        "description" => $request->input('payment_for'),
        "first_name" => $request->input('first_name'),
        "last_name" => $request->input('last_name'),
        // "metadata.txns.auto_capture" => "false",
        "metadata.package_name" =>$request->package_name,
        "metadata.JUSPAY:gateway_reference_id" => $request->currency
    ]; 
    }
   // dd($payload);
    $response = Http::withHeaders([
        'Authorization' => 'Basic ' . base64_encode(env('HDFC_API_KEY')),
        'Content-Type' => 'application/json',
        'x-merchantid' => '47542',
        'version' => '2024-05-01',
    ])->post('https://smartgateway.hdfcbank.com/session', $payload);

    $data = $response->json();

    if (isset($data['payment_links']['web'])) {
        return redirect()->away($data['payment_links']['web']);
    }

    return back()->with('error', 'Unable to initiate payment session.');
}
public function successPayment(Request $request)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Basic ' . base64_encode(env('HDFC_API_KEY')),
                'version' => '2023-06-30',
                'Content-Type' => 'application/x-www-form-urlencoded',
                'x-merchantid' => '47542',
                'x-customerid' => 'your_customer_id',
            ])->get('https://smartgateway.hdfcbank.com/orders/' . $request->order_id);
            $data = $response->json();
            //dd($data);
            if ($data) {
                $txnId = $data['txn_id'] ?? ($data['txn_detail']['txn_id'] ?? null);

                // Check if txn_id already exists
                $existingTransaction = Transaction::where('txn_id', $txnId)->first();

                if (!$existingTransaction) {
                    $authId = isset($data['payment_gateway_response']['auth_id_code'])
                            ? $data['payment_gateway_response']['auth_id_code']
                            : null;
                    $rrn = isset($data['payment_gateway_response']['rrn'])
                            ? $data['payment_gateway_response']['rrn']
                            : null;
                    Transaction::create([
                        'order_id' => $data['order_id'],
                        'txn_id' => $txnId,
                        'payment_status' => $data['status'] ?? null,
                        'payment_method' => $data['payment_method'] ?? null,
                        'payment_gateway' => $data['txn_detail']['gateway'] ?? null,
                        'auth_id_code' => $authId ?? null,
                        'rrn' => $rrn ?? null,
                        'currency' => $data['currency'],
                        'customer_email' => $data['customer_email'] ?? null,
                        'customer_phone' => $data['customer_phone'] ?? null,
                        'customer_id' => $data['customer_id'] ?? null,
                        'amount' => $data['amount'],
                        'captured_amount' => $data['captured_amount'] ?? 0,
                        'refundable_amount' => $data['refundable_amount'] ?? 0,
                        'gateway_response' => json_encode($data['payment_gateway_response']??null),
                        'txn_detail' => json_encode($data['txn_detail']),
                        'metadata' => json_encode($data['metadata']),
                        'order_created_at' => isset($data['date_created']) ? date('Y-m-d H:i:s', strtotime($data['date_created'])) : null,
                        'order_updated_at' => isset($data['last_updated']) ? date('Y-m-d H:i:s', strtotime($data['last_updated'])) : null,
                    ]);
                }
                else
                {
                    return redirect()->route('payment.process.get')->with([
                        'error' => 'Payment already recorded.',
                        'message' => 'If you believe this is a mistake, please contact support.'
                    ]);
                }
                if ($data['status'] == "CHARGED") 
                {
                    
                    //  return view('payment.success', [
                    //     'order_id' => $data['order_id'] ?? null,
                    //     'txn_id' => $txnId,
                    //     'status' => $data['status'] ?? null,
                    //     'amount' => $data['amount'],
                    //     'customer_email' => $data['customer_email'] ?? null,
                    //     'customer_phone' => $data['customer_phone'] ?? null,
                    //     'currency' => $data['currency'] ?? 'INR',
                    // ]);
                    $array_data = [
                        'order_id' => $data['order_id'] ?? null,
                        'txn_id' => $txnId,
                        'status' => $data['status'] ?? null,
                        'amount' => $data['amount'],
                        'customer_email' => $data['customer_email'] ?? null,
                        'customer_phone' => $data['customer_phone'] ?? null,
                        'currency' => $data['currency'] ?? 'INR',
                        'name' => json_decode($data['metadata']['payment_page_sdk_payload'])->firstName,
                        'lastName' => json_decode($data['metadata']['payment_page_sdk_payload'])->lastName,
                        'description' => json_decode($data['metadata']['payment_page_sdk_payload'])->description,
                        
                    ];
                  // Send to admin
                    Mail::to($data['customer_email'] ?? null)
                    ->queue(new TransactionMail($array_data));
                  // Send to admin
                  Mail::to('info@farandbeyond.in')->send(new AdminMail($array_data));
                    return view('payment.success',$array_data);
                }
                else
                {
                    return redirect()->route('payment.process.get')->with(['error'=>'Payment Failed','message' => 'If you believe this is a mistake, please contact support.']);
                }
            }
              return redirect()->route('payment.process.get')->with(['error'=>'Payment Failed','message' => 'If you believe this is a mistake, please contact support.']);

        } catch (QueryException $e) {
            // Check for duplicate entry error
            if ($e->getCode() == 23000) {
                Log::warning("Duplicate transaction entry: " . $e->getMessage());
                return redirect('/');
            }

            // Log and rethrow or handle other query errors
            Log::error("Query error: " . $e->getMessage());
            return redirect('/');
        } catch (\Throwable $th) {
            Log::error("Unhandled error: " . $th->getMessage());
            return redirect('/');
        }
    }
    public function transaction_list()
    {
        $transaction_list = Transaction::orderByDesc('created_at')->paginate(10);
        return view('admin.pages.transaction_list', ["transaction_list" => $transaction_list]);
    }
    public function transaction_delete($id)
    {
        $transaction = Transaction::findOrFail($id);
        // $transaction->delete();
        return back()->with('success', "Transaction detail deleted Successfully");
    }
}
