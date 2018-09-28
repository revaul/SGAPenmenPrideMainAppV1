<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
require "../login/loginheader.php";
require '../mysqlkeys.php';
$subjectvar= $_POST["subject"];
$rawbody= $_POST["message"];



// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ppv0008003.emailmailmergeexport limit 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $healthy = array("[[First Name]]", "[[Last Name]]", "[[Points]]", "[[Email Address]]", "[[Tier]]", "[[Portal Link]]");


      $yummy   = array($row["StudentFirstName"], $row["StudentLastName"], $row["Points"], $row["EmailAddress"], $row["tier"], $row["randomkeycol"]);

      $newbodyhtml = str_replace($healthy, $yummy, $rawbody);
      $newbodyalt = strip_tags($newbodyhtml);
       $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
       try {
           //Server settings
           $mail->SMTPDebug = 0;                                 // Enable verbose debug output
           $mail->isSMTP();                                      // Set mailer to use SMTP
           $mail->Host = $mailhost;  // Specify main and backup SMTP servers
           $mail->SMTPAuth = true;                               // Enable SMTP authentication
           $mail->Username = $mailusername;                 // SMTP username
           $mail->Password = $mailpassword;                           // SMTP password
           $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
           $mail->Port = $mailport;                                    // TCP port to connect to

           //Recipients
           $mail->setFrom($mailusername, 'Ryan Evaul');
           $mail->addAddress($row["EmailAddress"], $row["StudentFirstName"]);     // Add a recipient

           //Content
           $mail->isHTML(true);                                  // Set email format to HTML
           $mail->Subject = $subjectvar;
           $mail->Body    = $newbodyhtml;
           $mail->AltBody = $newbodyalt;

           $mail->send();
           echo 'Message has been sent';
       } catch (Exception $e) {
           echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
       }
    }
} else {

}
$conn->close();


?>
