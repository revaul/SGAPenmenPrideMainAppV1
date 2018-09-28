<?php

require "../login/loginheader.php";
require '../mysqlkeys.php';
$subjectvar= $_POST["subject"];
$rawbody= $_POST["message"];


$InsertStatements = array(array(), array());
$arrayamount = 0;
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ppv0008003.emailmailmergeexport;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $healthy = array("[[First Name]]", "[[Last Name]]", "[[Points]]", "[[Email Address]]", "[[Tier]]", "[[Portal Link]]");


      $yummy   = array($row["StudentFirstName"], $row["StudentLastName"], $row["Points"], $row["EmailAddress"], $row["tier"], $row["randomkeycol"]);

      $newbodyhtml = str_replace($healthy, $yummy, $rawbody);
      $fullbodyhtml = base64_encode($newbodyhtml);
      $newbodyalt = strip_tags($newbodyhtml);
      $fullbodyalt = base64_encode($newbodyalt);
$InsertStatements[$arrayamount][0] = $row["EmailAddress"];
$InsertStatements[$arrayamount][1] = $subjectvar;
$InsertStatements[$arrayamount][2] = $row["StudentFirstName"];
$InsertStatements[$arrayamount][3] = $fullbodyhtml;
$InsertStatements[$arrayamount][4] = $fullbodyalt;
$arrayamount++;


    }
} else {

}
echo $arrayamount;
for($x = 0; $x < $arrayamount; $x++) {
   $insertdaystmt = "INSERT INTO `ppv0008003`.`emailsystem` (`ToEmailAddress`, `ToSubject`, `ToFirstName`, `ToBodyHtml`, `ToBodyAlt`) VALUES ('".$InsertStatements[$x][0]."',
      '".$InsertStatements[$x][1]."',
    '".$InsertStatements[$x][2]."',
  '".$InsertStatements[$x][3]."',
'".$InsertStatements[$x][4]."'); ";
	 if ($conn->query($insertdaystmt) === TRUE) {
            } else {
                echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
            }

}
$conn->close();


?>
