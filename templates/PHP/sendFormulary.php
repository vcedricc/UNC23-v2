<?php

        // send formulary
            $user_name = htmlspecialchars($_POST['name']);
            $user_mail = htmlspecialchars($_POST['mail']);
            $user_phone = htmlspecialchars($_POST['phone']);
            $user_msg = htmlspecialchars($_POST['msg']);

            $email_to = "casper.cv@hotmail.fr";
            $email_subject = "UNC 23 - Envoi depuis la page Contact du site Internet";

            $email_message = "Les information suivantes ont été saisies :\n\n";
            $email_message = "Nom et prénom : ".$user_name."\n";
            $email_message = "Adresse mail : ".$user_mail."\n";
            $email_message = "Téléphone : ".$user_phone."\n";
            $email_message = "Message : ".$user_msg."\n";

            $headers = 'From: '.$user_mail."\r\n";
            'Reply-To: '.$user_mail."\r\n";
            'X-Mailer: PHP/'.phpversion();
            mail($email_to, $email_subject, $email_message, $headers);
            
            echo '<h1>Votre message a bien été envoyé.</h1>';

        // security of formulary
            function died($error) {
            echo
                "Nous sommes désolés, mais des erreurs ont été détectées dans le" .
                " formulaire que vous avez envoyé. ";
            echo "Ces erreurs apparaissent ci-dessous :<br /><br />";
            echo $error."<br /><br />";
            echo "Merci de corriger ces erreurs.<br /><br />";
            die();
            }

        // name verification
            $string_exp = "/[A-Za-z .'-]+$/";
            if(!preg_match($string_exp,$user_name)) {
                $error_message .= 'Le nom que vous avez entré ne semble pas être valide.<br />';
            }

        // mail verification
            $error_message = "";
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
            if(!preg_match($email_exp,$user_mail)) {
                $error_message .= 'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
            }

        // message verification
            if(strlen($user_msg) < 2) {
                $error_message .= 'Le message que vous avez entré ne semble pas être valide.<br />';
            }

            if(strlen($error_message) > 0) {
            died($error_message);
            }

 ?>