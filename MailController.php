<?php 

require 'vendor/autoload.php';
use Mailgun\Mailgun;



function sendToRevolt() {

    $email = $_POST['email'];
    $name = $_POST['name'];

    $mg = Mailgun::create('key-1715c074f053673f6e3c4c79e8595390');
    # Now, compose and send your message.
    # $mg->messages()->send($domain, $params);
    $mg->messages()->send('revoltdigital.ca', [
      'from'    => $email,
      'to'      => 'kim@darkroast.co',
      'subject' => 'New Revolt Subscriber',
      'html'    => $name . " at " . $email . " would like to receive the Revolt presentation on digital currency, e-commerce, and e-learning."
    ]);

}

function sendToUser() {

    $email = $_POST['email'];
    $name = $_POST['name'];

    $mg = Mailgun::create('key-1715c074f053673f6e3c4c79e8595390');
    # Now, compose and send your message.
    # $mg->messages()->send($domain, $params);
    $mg->messages()->send('revoltdigital.ca', [
      'from'    => 'contact@revoltdigital.ca',
      'to'      => $email,
      'subject' => 'Thanks for subscribing!',
      'html'    => "<p>Thank you for your interest in ReVolt Evolution of Digital Currency.  You will receive follow up emails with details on ReVolt Events in your area.</p>
        <p>Please find us on Facebook at <a href='https://www.facebook.com/revoltdigitalcurrency/'>https://www.facebook.com/revoltdigitalcurrency/</a> for updates and info on the Digital Currency world.</p>
        <p>Respectfully,</p>
        <p>Team ReVolt</p>"
    ]);

}

sendToRevolt();
sendToUser();