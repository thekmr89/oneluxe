<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data) {
        $this->data = $data;
    }

    // public function build() {
    //     return $this->view('emails.admin_mail')
    //                 ->subject('Payment Details')
    //                 ->with(['data' => $this->data]);
    // }
    public function build()
{
    return $this->from('noreply@farandbeyond.in', 'noreply |Far and beyond')
                ->to('info@farandbeyond.in', 'Far and beyond')
                ->subject("Payment Details :". $this->data['name'])
                ->view('emails.admin_mail')
                ->with(['data' => $this->data])
                ->withSwiftMessage(function ($message) {
             $message->getHeaders()
                ->addTextHeader('X-Mail-Sent-Time', now()->toDateTimeString());
        });
}
}
