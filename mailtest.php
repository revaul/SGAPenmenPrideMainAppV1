<?php 
require_once "/usr/share/php/Mail.php";
require 'mysqlkeys.php';
require "login/loginheader.php";
$from = $mailfrom;
$to = "Ryan Evaul <ryan.evaul@snhu.edu>";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
$host = $mailhost;
$username = $mailusername;
$password = $mailpassword;
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<p>Message successfully sent!</p>");
 }
 ?>
