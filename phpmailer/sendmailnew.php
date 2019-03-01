<?php
require "../login/loginheader.php";
require "../login/permissions/level4.php";
require '../mysqlkeys.php';
include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
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
      $healthy = array("[[First Name]]", "[[Last Name]]", "[[Points]]", "[[Email Address]]", "[[Tier]]", "[[Portal Link]]", "[[Ranking]]");


      $yummy   = array($row["StudentFirstName"], $row["StudentLastName"], $row["Points"], $row["EmailAddress"], $row["tier"], $row["randomkeycol"], $row["ranking"]);

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
<h2> All Emails Created </h2>
</div>
<div class="col-sm-1">
</div>
</div>
</div>
<?php include "../template/bottom.php" ?>
