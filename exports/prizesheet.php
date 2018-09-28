<?php require "../login/loginheader.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">

        <h2 class="prizesheet prizesheetheading">Prize Sheet</h2>
      </div>
      <div class="col-sm-1">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-10">

        <table class="prizesheettable">
          <col width="33%">
          <col width="34%">
          <col width="33%">
          <tr>
            <td><p class="prizesheet prizesheetsubheading">Club: <u>SGA-Penmen Pride</u></p></td>
            <td><p class="prizesheet prizesheetsubheading">Event: <u>Prize Give Away<!-- TODO:Insert PHP Post Here. --></u></p></td>
            <td><p class="prizesheet prizesheetsubheading">Check Number: <u><!-- TODO: Insert PHP Post Here. --> who knows</u></p></td>
          </tr>
        </table>
      </div>

      <div class="col-sm-1">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-10">
<table class="table table-striped">
      <col width="8.64%">
  <col width="13.14%">
      <col width="20.90%">
  <col width="19.15%">
      <col width="23.90%">
  <col width="14.27%">
<tr>
<th class="prizesheet prizesheettext">Date
</th>
<th class="prizesheet prizesheettext">Amount
</th>
<th class="prizesheet prizesheettext">Type of Prize
</th>
<th class="prizesheet prizesheettext">Name (Print)
</th>
<th class="prizesheet prizesheettext">Name (Signature)
</th>
<th class="prizesheet prizesheettext">School ID
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
       ?><tr>
         <td>9-29-2018</td>
         <td>$14.53</td>
         <td>Blah Blah Blah</td>
         <td><?php echo $row["studentname"]; ?></td>
         <td></td>
         <td><?php echo $row["StudentID"]; ?></td></tr><?php
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
