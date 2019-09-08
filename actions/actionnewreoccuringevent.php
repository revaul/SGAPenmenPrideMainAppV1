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

$stmt = $conn->prepare("CALL `ppv0008003`.`newreoccuringevent`(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("siiiisisss", $field1, $field2, $field3, $field4, $field5, $field6, $field7, $field8, $field9, $field10);

$field1=$eventname;
$field2=$eventpoints;
$field3=$eventhost;
$field4=$eventtest;
$field5=$eventdoublepoints;
$field6=$eventloc;
$field7=$eventtype;
$field8=$eventstart;
$field9=$eventend;
$field10=$eventdow;
$stmt->execute();
$stmt->close();
$conn->close();

?>
<h2>Success Events Added!</h2></div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
