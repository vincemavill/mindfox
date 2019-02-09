<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;

class client_inquiry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $form)
    {
        $client_name = $form->input('name');
        $client_email = $form->input('email');
        $phone = $form->input('phone');
        $subject = $form->input('subject');
        $mymessage = $form->input('message');

        // $admin_email = "mindfoxwebsite@gmail.com";
        $admin_email = "mindfox.works@gmail.com";
      
        return $this->view('client_mail',compact('client_name','client_email','phone','mymessage','subject'))
                ->to($admin_email)->from('do-not-reply@mindfoxworks.com')->subject('Mindfox Client Inquiry');
    }
}
