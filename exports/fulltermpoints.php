<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level2.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>Full Term Points</h2>
<table class="table table-striped">
      <col width="35%">
  <col width="15%">
      <col width="15%">
  <col width="10%">
      <col width="20%">
<tr>
<th>Email Address
</th>
<th>Points
</th>
<th>Ranking
</th>
<th>Semester
</th>
<th>First Name
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


$sql = "SELECT * FROM ppv0008003.finaltiersscaled;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?><tr><td> <?php echo $row["EmailAddress"];
	   ?></td><td><?php echo $row["Points"];
     ?></td><td><?php echo $row["ranking"];
	   ?></td><td><?php echo $row["Semester"];
	   ?></td><td><?php echo $row["StudentFirstName"];
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
