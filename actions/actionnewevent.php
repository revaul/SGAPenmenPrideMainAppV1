<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level3.php"; ?>
<?php include "../template/top.php"; ?>
<?php require '../mysqlkeys.php'; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
<?php
// TODO: Post Field Verification
$eventname= $_POST["name"];
$eventtype= $_POST["eventtype"];
$eventhost= $_POST["host"];
$eventpoints= $_POST["pointvalue"];
$eventdoublepoints= $_POST["doublepoints"];
$eventdatewrong= $_POST["eventdate"];
$eventtest= $_POST["eventtest"];
$eventdatescrubbed = scrub($eventdatewrong);
$eventmonth = substr($eventdatescrubbed, 0, 2);
$eventday = substr($eventdatescrubbed, 3, 2);
$eventyear=substr($eventdatescrubbed, 6, 4);
$eventnewdate= $eventyear."-".$eventmonth."-".$eventday;
function scrub($x) {
$z;
  $idnumlower = strtolower($x);
  $y = str_replace($vowels, "", $idnumlower);
  if($idnumlower==$y){
    $z=$x;
  }
  else {
    $z=$y;
  }
    return $z;
}
ini_set('max_execution_time', 300);

                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO ppv0008003.eventnames (EventName, EventDate, PointValue, DoublePoints, HostID, EventType, DoNotTotal) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssiiiii", $field1, $field2, $field3, $field4, $field5, $field6, $field7);

$field1=$eventname;
$field2=$eventnewdate;
$field3=$eventpoints;
$field4=$eventdoublepoints;
$field5=$eventhost;
$field6=$eventtype;
$field7=$eventtest;
$stmt->execute();
$stmt->close();
$conn->close();

?>
<h2>Success Event Added!</h2></div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
