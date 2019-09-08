<?php require '../mysqlkeys.php';
// TODO: Post Field Verification
$eventname= $_POST["name"];
$eventloc= $_POST["location"];
$eventtypemask= $_POST["eventtypemask"];
$eventhost= $_POST["host"];
$eventpoints= $_POST["pointvalue"];
$eventdoublepoints= $_POST["doublepoints"];
$eventdateinit= $_POST["eventdate"];
$eventtest= $_POST["eventtest"];
$eventstartdateinit= $_POST["eventstartdate"];
$eventenddateinit= $_POST["eventenddate"];
$eventdatefin = fixdate($eventdateinit);
$eventstartdatefin = fixdate($eventstartdateinit);
$eventenddatefin = fixdate($eventenddateinit);

echo $eventname. "<br />";
echo $eventloc. "<br />";
echo $eventtypemask. "<br />";
echo $eventhost. "<br />";
echo $eventpoints. "<br />";
echo $eventdoublepoints. "<br />";
echo $eventdatefin. "<br />";
echo $eventstartdatefin. "<br />";
echo $eventenddatefin. "<br />";

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
  $eventdatescrubbed = scrub($x);
  $eventmonth = substr($eventdatescrubbed, 0, 2);
  $eventday = substr($eventdatescrubbed, 3, 2);
  $eventyear=substr($eventdatescrubbed, 6, 4);
  $eventnewdate= $eventyear."-".$eventmonth."-".$eventday;
  return $eventnewdate;
}
/**ini_set('max_execution_time', 300);

                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO ppv0008003.eventnames (EventName, EventDate, PointValue, DoublePoints, HostID, EventType, DoNotTotal, eventLocation) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssiiiiis", $field1, $field2, $field3, $field4, $field5, $field6, $field7, $field8);

$field1=$eventname;
$field2=$eventnewdate;
$field3=$eventpoints;
$field4=$eventdoublepoints;
$field5=$eventhost;
$field6=$eventtype;
$field7=$eventtest;
$field8=$eventloc;
$stmt->execute();
$stmt->close();
$conn->close();
**/
?>
