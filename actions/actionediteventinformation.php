<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level3.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
      <?php
      require '../mysqlkeys.php';

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
      function scrubnum($x) {
        $z;
                $idnumlower = strtolower($x);
                $y = str_replace($vowels, "", $idnumlower);
                if($idnumlower==$y){
                  $z=$x;
                }
                else {
                  $z=$y;
                }
                if (is_numeric($z)) {
                   }
                   else{
                     $z=0;
                   }
                  return $z;
      }
      function scrubmarkercheck($x) {
        $z;
                $idnumlower = strtolower($x);
                $y = str_replace($vowels, "", $idnumlower);
                if($idnumlower==$y){
                  $z=$x;
                }
                else {
                  $z=$y;
                }
                if (is_numeric($z)) {
                  if($z==0 || $z==1){
                    $z=1;
                  }
                  else{
                    $z=0;
                  }
                   }
                   else{
                     $z=0;
                   }

                  return $z;
      }
      ini_set('max_execution_time', 300);

                          $conn = new mysqli($host, $user, $password, $dbname);
                               if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }


$eventid= $_POST["eventid"];
$eventid2 = scrubnum($eventid);



      $checkeventname= $_POST["checkeventname"];
      $eventname= $_POST["eventname"];

      $checkeventdate= $_POST["checkeventdate"];
      $eventdatewrong= $_POST["eventdate"];

      $checkpointvalue= $_POST["checkpointvalue"];
      $pointvalue= $_POST["pointvalue"];

      $checkdoublepoints= $_POST["checkdoublepoints"];
      $doublepoints= $_POST["doublepoints"];

      $checkgiveaway= $_POST["checkgiveaway"];
      $semestergiveaway= $_POST["semestergiveaway"];

      $checkdonottotal= $_POST["checkdonottotal"];
      $donottotal= $_POST["donottotal"];

      $checkeventhost= $_POST["checkeventhost"];
      $hostname= $_POST["hostname"];

      $checkeventtype= $_POST["checkeventtype"];
      $eventtype= $_POST["eventtype"];

if ($checkeventname==1 && $eventid2!=0) {
    $eventname2 = scrub($eventname);
    $stmt = $conn->prepare("UPDATE ppv0008003.eventnames SET EventName = ? WHERE EventID =?");
    $stmt->bind_param("si", $field1, $field2);
    $field1=$eventname2;
    $field2=$eventid2;
    $stmt->execute();
    $stmt->close();
}
if ($checkpointvalue==1 && $eventid2!=0) {
    $pointvalue2 = scrubnum($pointvalue);
    $stmt = $conn->prepare("UPDATE ppv0008003.eventnames SET PointValue = ? WHERE EventID =?");
    $stmt->bind_param("ii", $field1, $field2);
    $field1=$pointvalue2;
    $field2=$eventid2;
    $stmt->execute();
    $stmt->close();

}
if ($checkdoublepoints==1 && $eventid2!=0 && scrubmarkercheck($doublepoints)==1) {
    $pointvalue2 = scrubnum($doublepoints);
    $stmt = $conn->prepare("UPDATE ppv0008003.eventnames SET DoublePoints = ? WHERE EventID =?");
    $stmt->bind_param("ii", $field1, $field2);
    $field1=$pointvalue2;
    $field2=$eventid2;
    $stmt->execute();
    $stmt->close();
}
if ($checkgiveaway==1 && $eventid2!=0 && scrubmarkercheck($semestergiveaway)==1) {
    $pointvalue2 = scrubnum($semestergiveaway);
    $stmt = $conn->prepare("UPDATE ppv0008003.eventnames SET SemesterGiveaway = ? WHERE EventID =?");
    $stmt->bind_param("ii", $field1, $field2);
    $field1=$pointvalue2;
    $field2=$eventid2;
    $stmt->execute();
    $stmt->close();
}
if ($checkdonottotal==1 && $eventid2!=0 && scrubmarkercheck($donottotal)==1) {
    $pointvalue2 = scrubnum($donottotal);
    $stmt = $conn->prepare("UPDATE ppv0008003.eventnames SET DoNotTotal = ? WHERE EventID =?");
    $stmt->bind_param("ii", $field1, $field2);
    $field1=$pointvalue2;
    $field2=$eventid2;
    $stmt->execute();
    $stmt->close();

}
if ($checkeventhost==1 && $eventid2!=0) {
    $pointvalue2 = scrubnum($hostname);
    $stmt = $conn->prepare("UPDATE ppv0008003.eventnames SET HostID = ? WHERE EventID =?");
    $stmt->bind_param("ii", $field1, $field2);
    $field1=$pointvalue2;
    $field2=$eventid2;
    $stmt->execute();
    $stmt->close();
}
if ($checkeventtype==1 && $eventid2!=0) {
    $pointvalue2 = scrubnum($eventtype);
    $stmt = $conn->prepare("UPDATE ppv0008003.eventnames SET EventType = ? WHERE EventID =?");
    $stmt->bind_param("ii", $field1, $field2);
    $field1=$pointvalue2;
    $field2=$eventid2;
    $stmt->execute();
    $stmt->close();
}
if ($checkeventdate==1 && $eventid2!=0) {
    $eventdatescrubbed = scrub($eventdatewrong);
    $eventmonth = substr($eventdatescrubbed, 0, 2);
    $eventday = substr($eventdatescrubbed, 3, 2);
$eventyear=substr($eventdatescrubbed, 6, 4);
    $eventnewdate= $eventyear."-".$eventmonth."-".$eventday;
    $stmt = $conn->prepare("UPDATE ppv0008003.eventnames SET EventDate = ? WHERE EventID =?");
    $stmt->bind_param("si", $field1, $field2);
    $field1=$eventnewdate;
    $field2=$eventid2;
    $stmt->execute();
    $stmt->close();
}
  $conn->close();
       ?>
       <h2>All Changes Made</h2>
     </div>
         <div class="col-sm-1">
         </div>
       </div>
     </div>
     <?php include "../template/bottom.php" ?>
