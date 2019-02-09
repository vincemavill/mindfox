// CLIENT MAIL

        Mail::send(['message'=> $contentmail ],['name', 'Mindfox'], 

        function($message) use ($admin_name, $admin_email,$subject){

            $message->to($admin_email ,$admin_name)->subject($subject);

            $message->from('do-not-reply@mindfoxworks.com','Mindfox Inquiry');

        });

// EMAIL RESPONDER

        Mail::send(['text'=>'welcome_mail'],['name', 'Mindfox'], 
        function($message) use ($client_name, $client_email){

            $message->to($client_email,$client_name)->subject('Mindfox - Thanks for sending a message');

            $message->from('do-not-reply@mindfoxworks.com','Mindfox Contact Page');

        });
