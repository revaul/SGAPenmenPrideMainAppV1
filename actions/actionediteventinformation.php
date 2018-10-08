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

if ($checkeventname==1 && $eventid2!=0) {
    $eventname2 = scrub($eventname);
    $insertdaystmt = "UPDATE ppv0008003.eventnames SET EventName = '". $eventname2 . "' WHERE EventID =" . $eventid2 . ";";
    if ($conn->query($insertdaystmt) === true) {
    } else {
        echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
    }
}
if ($checkpointvalue==1 && $eventid2!=0) {
    $pointvalue2 = scrubnum($pointvalue);
    $insertdaystmt = "UPDATE ppv0008003.eventnames SET PointValue = '". $pointvalue2 . "' WHERE EventID =" . $eventid2 . ";";
    if ($conn->query($insertdaystmt) === true) {
    } else {
        echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
    }
}
if ($checkdoublepoints==1 && $eventid2!=0 && scrubmarkercheck($doublepoints)==1) {
    $pointvalue2 = scrubnum($doublepoints);
    $insertdaystmt = "UPDATE ppv0008003.eventnames SET DoublePoints = '". $pointvalue2 . "' WHERE EventID =" . $eventid2 . ";";
    if ($conn->query($insertdaystmt) === true) {
    } else {
        echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
    }
}
if ($checkgiveaway==1 && $eventid2!=0 && scrubmarkercheck($semestergiveaway)==1) {
    $pointvalue2 = scrubnum($semestergiveaway);
    $insertdaystmt = "UPDATE ppv0008003.eventnames SET SemesterGiveaway = '". $pointvalue2 . "' WHERE EventID =" . $eventid2 . ";";
    if ($conn->query($insertdaystmt) === true) {
    } else {
        echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
    }
}
if ($checkdonottotal==1 && $eventid2!=0 && scrubmarkercheck($donottotal)==1) {
    $pointvalue2 = scrubnum($donottotal);
    $insertdaystmt = "UPDATE ppv0008003.eventnames SET DoNotTotal = '". $pointvalue2 . "' WHERE EventID =" . $eventid2 . ";";
    if ($conn->query($insertdaystmt) === true) {
    } else {
        echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
    }
}
if ($checkeventhost==1 && $eventid2!=0) {
    $pointvalue2 = scrubnum($hostname);
    $insertdaystmt = "UPDATE ppv0008003.eventnames SET HostID = '". $pointvalue2 . "' WHERE EventID =" . $eventid2 . ";";
    if ($conn->query($insertdaystmt) === true) {
    } else {
        echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
    }
}
if ($checkeventdate==1 && $eventid2!=0) {
    $eventdatescrubbed = scrub($eventdatewrong);
    $eventmonth = substr($eventdatescrubbed, 0, 2);
    $eventday = substr($eventdatescrubbed, 3, 2);
$eventyear=substr($eventdatescrubbed, 6, 4);
    $eventnewdate= $eventyear."-".$eventmonth."-".$eventday;
  $insertdaystmt = "UPDATE ppv0008003.eventnames SET EventDate = '". $eventnewdate . "' WHERE EventID =" . $eventid2 . ";";
    if ($conn->query($insertdaystmt) === true) {
    } else {
        echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
    }
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
