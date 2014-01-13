<?php
require_once '../SwiftMailer/lib/swift_required.php';

$data = json_decode( file_get_contents('php://input') );

$email = $data->data[0]->email;
$message = $data->data[1]->message;
$name = $data->data[2]->name;

// Create the message
$message = Swift_Message::newInstance()
	->setSubject('tks-universe contact')
	->setFrom(array("tks.universe@gmail.com" => "Contact"))
	->setTo('taylor_kaplan@yahoo.com')
	->setBody(
		"From: <" . $email . "> " . $name . "\n" .
		$message);

// Create Transport
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl')
	->setUsername("")
	->setPassword("");

$mailer = Swift_Mailer::newInstance($transport);

$mailer->send($message);

header(204);

return;