<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level3.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
<?php
// TODO: Post Field Verification
$eventname= $_POST["name"];
$eventhost= $_POST["host"];
$eventpoints= $_POST["pointvalue"];
$eventdoublepoints= $_POST["doublepoints"];
$eventyear= $_POST["eventyear"];
$eventmonth= $_POST["eventmonth"];
$eventday= $_POST["eventday"];
$date= $eventyear."-".$eventmonth."-".$eventday;
ini_set('max_execution_time', 300);
                    require '../mysqlkeys.php';
                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$insertdaystmt = "INSERT INTO `ppv0008003`.`eventnames` (`EventName`, `EventDate`, `PointValue`, `DoublePoints`, `HostID`) VALUES ('".$eventname."', '".$date."', ".$eventpoints.", ".$eventdoublepoints.", '".$eventhost."');";
            if ($conn->query($insertdaystmt) === TRUE) {
            } else {
                echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
            }

?>
<h2>Success Event Added!</h2></div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
