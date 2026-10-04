<?php

namespace App\Http\Controllers;

use App\Mail\SendEnquiryMail;
use App\Models\Inquiry;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    //

    public function viewInquiry()
    {

        $mInquiry = new Inquiry();
        $inqData = $mInquiry->getInquiry()->orderByDesc('created_at')->get();
        return view('admin.pages.inquiries', ["item" => $inqData]);
    }


    public function saveInquiry(Request $req)
    {

        $data = $req->all();
        // if (!$data['g-recaptcha-response']) {
        //     return back()->with('error', "Invalid access");
        // }
        $mInquiry = new Inquiry();
        $mInquiry->saveInquiry($req);
        $details = [
            'message' => $req->textarea1,
            'name' => $req->Name
        ];
        $status = Mail::to($req->Email)->send(new SendEnquiryMail($details));
        return view("pages/thank-you");
    }


    public function savesubscription(Request $req)
    {
        $data = $req->all();
        if (!$data['Name']) {
            return back()->with('error', "Please Fill the form properly");
        }
        $mSubscription = new Subscription();
        $mSubscription->saveSubscription($req);
        // return back();
        return back()->with('success', 'Thank you for subscribing us.!!');
    }

    public function viewSubscription()
    {
        $mSubscription = new Subscription();
        $subData = $mSubscription->getSubscription()->orderByDesc('created_at')->get();
        return view('admin.pages.subscription', ["item" => $subData]);
    }
}
