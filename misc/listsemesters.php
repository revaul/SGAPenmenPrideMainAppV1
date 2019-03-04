<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level4.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>Penmen Pride Semester Listing</h2>
<table class="table table-striped">
      <col width="12.5%">
  <col width="12.5%">
      <col width="12.5%">
  <col width="12.5%">
      <col width="12.5%">
      <col width="12.5%">
  <col width="12.5%">
  <col width="12.5%">
<tr>
<th>Semester
</th>
<th>Semester Code
</th>
<th>School Year
</th>
<th>Semester Type
</th>
<th>Goal
</th>
<th>Begin Date
</th>
<th>End Date
</th>
<th>Edit Event
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

$sql = "select Semester, SemShort, SchoolYear, SemType, Goal, BeginDate, EndDate, SemIDNum from semester";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?><tr><td> <?php echo $row["Semester"];
	   ?></td><td><?php echo $row["SemShort"];
	   ?></td><td><?php echo $row["SchoolYear"];
	   ?></td><td><?php echo $row["SemType"];
	   ?></td><td><?php echo $row["Goal"];
     ?></td><td><?php echo $row["BeginDate"];
	   ?></td><td><?php echo $row["EndDate"];
	   ?></td><td><?php echo $row["SemIDNum"];
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
