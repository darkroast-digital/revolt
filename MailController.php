<?php 

require 'vendor/autoload.php';
use Mailgun\Mailgun;

$mg = Mailgun::create('key-1715c074f053673f6e3c4c79e8595390');

$email = $_POST['email'];

# Now, compose and send your message.
# $mg->messages()->send($domain, $params);
$mg->messages()->send('sandbox54da33a8b2644faebc547af411755bc1.mailgun.org', [
  'from'    => $email,
  'to'      => 'kim@darkroast.co',
  'subject' => 'New Revolt Subscriber',
  'html'    => "The following email would like to receive the Revolt presentation on digital currency, e-commerce, and e-learning: " . $email
]);