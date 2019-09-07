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
$eventloc= $_POST["location"];
$eventtype= $_POST["eventtype"];
$eventhost= $_POST["host"];
$eventpoints= $_POST["pointvalue"];
$eventdoublepoints= $_POST["doublepoints"];
$eventtest= $_POST["eventtest"];
$eventdow= $_POST["eventDoW"];
$eventdowstr = strval($eventdow);
$eventdatestart= $_POST["eventdatestart"];
$eventstart = fixdate($eventdatestart);
$eventdateend= $_POST["eventdateend"];
$eventend = fixdate($eventdateend);


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
function fixdate($x) {
  $eventdatescrubbed=scrub($x);
  $eventmonth = substr($eventdatescrubbed, 0, 2);
  $eventday = substr($eventdatescrubbed, 3, 2);
  $eventyear=substr($eventdatescrubbed, 6, 4);
  $eventnewdate= $eventyear."-".$eventmonth."-".$eventday;
  return $eventnewdate;
}
ini_set('max_execution_time', 300);

                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO ppv0008003.eventnames (EventName, EventDate, PointValue, DoublePoints, HostID, EventType, DoNotTotal, eventLocation) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssiiiiis", $field1, $field2, $field3, $field4, $field5, $field6, $field7, $field8);

$eventstarttime=strtotime($eventstart);
$eventendtime=strtotime($eventend);
While($eventstarttime<=$eventendtime){
if(date_format($eventstarttime,"N")=$eventdowstr){
$field1=$eventname;
$field2=date_format($eventstarttime,"Y-m-d");
$field3=$eventpoints;
$field4=$eventdoublepoints;
$field5=$eventhost;
$field6=$eventtype;
$field7=$eventtest;
$field8=$eventloc;
$stmt->execute();
}
date_add($eventstarttime,date_interval_create_from_date_string("1 days"));
}
$stmt->close();
$conn->close();

?>
<h2>Success Event Added!</h2></div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
