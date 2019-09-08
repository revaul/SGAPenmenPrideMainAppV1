<?php require '../mysqlkeys.php';
// TODO: Post Field Verification
$eventname= $_POST["name"];
$eventloc= $_POST["location"];
$eventtypemask= $_POST["eventtypemask"];
$eventhost= $_POST["host"];
$eventdateinit= $_POST["eventdate"];
$eventstartdateinit= $_POST["eventstartdate"];
$eventenddateinit= $_POST["eventenddate"];
$eventreoccuring= $_POST["reocurring"];
$eventpoints;
$eventdoublepoints=0;
$eventtest=0;

function scrub($x) {
$z;
  $idnumlower = strtolower($x);
  $y = str_replace($vowels, "", $idnumlower);
  if($idnumlower==$y){
    $z=$x;  }
  else {
      $z=$y; }
    return $z; }
function fixdate($x) {
  $eventdatescrubbed = scrub($x);
  $eventmonth = substr($eventdatescrubbed, 0, 2);
  $eventday = substr($eventdatescrubbed, 3, 2);
  $eventyear=substr($eventdatescrubbed, 6, 4);
  $eventnewdate= $eventyear."-".$eventmonth."-".$eventday;
  return $eventnewdate; }
$eventtypenum;
if($eventtypemask=="Event"){
  $eventtypenum=1;
  $eventpoints=3;
}
else{
  $eventtypenum=2;
  $eventpoints=2;
}
if($eventreoccuring=="Reocurring"){
  $eventstartdatefin = fixdate($eventstartdateinit);
  $eventenddatefin = fixdate($eventenddateinit);
}
else{
  $eventdatefin = fixdate($eventdateinit);
  ini_set('max_execution_time', 300);

                      $conn = new mysqli($host, $user, $password, $dbname);
                           if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $stmt = $conn->prepare("INSERT INTO ppv0008003.eventnames (EventName, EventDate, PointValue, DoublePoints, HostID, EventType, DoNotTotal, eventLocation) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssiiiiis", $field1, $field2, $field3, $field4, $field5, $field6, $field7, $field8);

  $field1=$eventname;
  $field2=$eventdatefin;
  $field3=$eventpoints;
  $field4=$eventdoublepoints;
  $field5=$eventhost;
  $field6=$eventtypenum;
  $field7=$eventtest;
  $field8=$eventloc;
  $stmt->execute();
  $stmt->close();
  $conn->close();
}


?>
