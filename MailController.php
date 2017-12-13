<?php 

require 'vendor/autoload.php';
//use Mailgun\Mailgun;
use PHPMailer\PHPMailer\PHPMailer;


function sendToRevolt() {

        $mail = new PHPMailer;

        $name = $_POST['name'];
        $email = $_POST['email'];
        
        $subject = "New Revolt Subscriber";

        $mail->setFrom($email, $name);
        $mail->addAddress('contact@revoltdigital.ca', 'Revolt Digital');
        $mail->addReplyTo('contact@revoltdigital.ca', 'Revolt Digital');
        $mail->ReturnPath='contact@revoltdigital.ca';

        $mail->isHTML(true);

        $body = $name . ' at ' . $email . ' has just subscribed to receive a free presentation on digital currency, e-commerce, and e-learning.';

        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = $body;

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Success!';
        }

}

function sendToUser() {

      $mail = new PHPMailer;

        $name = $_POST['name'];
        $email = $_POST['email'];
        
        $subject = "Thanks for subscribing, " . $name . "!";

        $mail->setFrom('contact@revoltdigital.ca');
        $mail->addAddress($email, $name);
        $mail->addReplyTo('contact@revoltdigital.ca', 'Revolt Digital');
        $mail->ReturnPath='contact@revoltdigital.ca';

        $mail->isHTML(true);

        $body = "<p>Thank you for your interest in ReVolt Evolution of Digital Currency.  You will receive follow up emails with details on ReVolt Events in your area.</p>
                <p>Please find us on Facebook at <a href='https://www.facebook.com/revoltdigitalcurrency/'>https://www.facebook.com/revoltdigitalcurrency/</a> for updates and info on the Digital Currency world.</p>
                <p>Respectfully,</p>
                <p>Team ReVolt</p>";

        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = $body;

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Success!';
        }

}

sendToRevolt();
sendToUser();