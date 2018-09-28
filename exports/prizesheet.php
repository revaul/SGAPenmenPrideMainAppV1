<?php require "../login/loginheader.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <div class="divHeader">
            <h2 class="prizesheetfont prizesheetheading">Prize Sheet</h2>
        </div>
        <h2 class="no-print">Prize Sheet</h2>
      </div>
      <div class="col-sm-1">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-3">
        <p class="prizesheetfont prizesheetsubheading">Club: <u>SGA Penmen Pride</u></p>
      </div>
      <div class="col-sm-4">
        <p class="prizesheetfont prizesheetsubheading">Event: <u>SGA Penmen Pride Prize Give Away</u></p>
      </div>
      <div class="col-sm-3">
        <p class="prizesheetfont prizesheetsubheading">Check Number: <u><<!-- TODO: Insert PHP Post Here. --></u></p>
      </div>
      <div class="col-sm-1">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-10">
<table class="table table-striped">
      <col width="10%">
  <col width="35%">
      <col width="15%">
  <col width="10%">
      <col width="10%">
  <col width="20%">
<tr>
<th class="prizesheetfont prizesheettext">Date
</th>
<th class="prizesheetfont prizesheettext">Amount
</th>
<th class="prizesheetfont prizesheettext">Type of Prize
</th>
<th class="prizesheetfont prizesheettext">Name (Print)
</th>
<th class="prizesheetfont prizesheettext">Name (Signature)
</th>
<th class="prizesheetfont prizesheettext">School ID
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

$sql = "SELECT eventnames.EventID, eventnames.EventName, eventnames.EventDate, eventnames.PointValue, eventnames.DoublePoints, eventhosts.HostName FROM eventnames join eventhosts on eventnames.HostID=eventhosts.HostID order by eventnames.EventDate DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?><tr><td> <?php echo $row["EventID"];
	   ?></td><td><?php echo $row["EventName"];
	   ?></td><td><?php echo $row["EventDate"];
	   ?></td><td><?php echo $row["PointValue"];
	   ?></td><td><?php echo $row["DoublePoints"];
	   ?></td><td><?php echo $row["HostName"];
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
