<?php 

require 'vendor/autoload.php';
use Mailgun\Mailgun;



function sendToRevolt() {

    $email = $_POST['email'];
    $name = $_POST['name'];

    $mg = Mailgun::create('key-1715c074f053673f6e3c4c79e8595390');
    # Now, compose and send your message.
    # $mg->messages()->send($domain, $params);
    $mg->messages()->send('sandbox54da33a8b2644faebc547af411755bc1.mailgun.org', [
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
    $mg->messages()->send('sandbox54da33a8b2644faebc547af411755bc1.mailgun.org', [
      'from'    => 'contact@revoltdigital.ca',
      'to'      => $email,
      'subject' => 'Thanks for subscribing!',
      'html'    => "Hey, " . $name . "! Thanks for subscribing!"
    ]);

}

sendToRevolt();
sendToUser();