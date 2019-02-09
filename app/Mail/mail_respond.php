<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;

class mail_respond extends Mailable
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
    public function build(request $form){

        $client_name = $form->input('name');
        $client_email = $form->input('email');
        $phone = $form->input('phone');
        $subject = $form->input('subject');
        $mymessage = $form->input('message');



        return $this->view('welcome_mail')->to($client_email)->from('do-not-reply@mindfoxworks.com')->subject('Mindfox - Thanks for sending a message');

    }
}
