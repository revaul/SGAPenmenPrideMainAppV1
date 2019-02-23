<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../phpmailer/vendor/autoload.php';
require '../mysqlkeys.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = $mailhost;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->SMTPKeepAlive = true;
$mail->Port = $mailport;
$mail->Username = $mailusername;
$mail->Password = $mailpassword;
$mail->setFrom($mailusername, $mailnamefrom);

$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ppv0008003.PendingEmails;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mail->addAddress($row["ToEmailAddress"], $row["ToFirstName"]);
      $mail->Subject = $row["ToSubject"];
      $mail->Body = base64_decode($row["ToBodyHtml"]);
      $mail->AltBody = base64_decode($row["ToBodyAlt"]);
      if (!$mail->send()) {
       echo "Mailer Error (" . str_replace("@", "&#64;", $row["email"]) . ') ' . $mail->ErrorInfo . '<br />';
       break; //Abandon sending
   } else {

$stmt = $conn->prepare("UPDATE 'ppv0008003'.'emailsystem' SET 'ToSent' = 1 WHERE 'EmailID' = ?;
");
$stmt->bind_param("i", $field1);

$field1=$row["EmailID"];

$stmt->execute();
   }
    }
} else {

}
$conn->close();

                       // Passing `true` enables exceptions
?>
