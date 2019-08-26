<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level6.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>Penmen Pride Date to Semester Information</h2>
        <table class="table table-striped">
      <col width="30%">
  <col width="25%">
      <col width="25%">
<tr>
<th>Date ID
</th>
<th>Date
</th>
<th>Semester
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

$sql = "SELECT datestosemesters.Date, datestosemesters.Semester, datestosemesters.DatesToSemesterID from datestosemesters;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?><tr><td> <?php echo $row["DatesToSemesterID"];
	   ?></td><td><?php echo $row["Date"];
	   ?></td><td><?php echo $row["Semester"];
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
