<?php require "../login/loginheader.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>Pending Emails To Be Sent/h2>
<table class="table table-striped">
      <col width="14%">
  <col width="43%">
      <col width="43%">
<tr>
<th>Infomation
</th>
<th>HTML Email
</th>
<th>Alt Text
</th>
</tr>

<?php
require '../mysqlkeys.php';
// Create connection
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
       ?><tr><td> Email ID: <?php echo $row["EmailID"];
	   ?></td><td rowspan="7"><?php echo base64_decode($row["ToBodyHtml"]);
	   ?></td><td rowspan="7"><?php echo base64_decode($row["ToBodyAlt"]);
	   ?></td></tr>
     <tr><td><?php echo $row["ToEmailAddress"];
	   ?></td></tr><tr><td><?php echo $row["ToSubject"];
	   ?></td></tr><tr><td><?php echo $row["ToFirstName"];
	   ?></td></tr><tr><td><?php echo $row["ToSent"];
	   ?></td></tr><tr><td><?php echo $row["ToLastModified"];
	   ?></td></tr><tr><td><?php echo $row["ToCreated"];
	   ?></td></tr><?php
    }
} else {

}
$conn->close();
?>
</table>
        </div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
