<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level1.php"; ?>
<?php include "../template/top.php"; ?>

<div id="about" class="container-fluid">
      <div class="row">
          <div class="col-sm-2">
          </div>
    <div class="col-sm-8">
        <center><h2>Choose an Event To Scan At</h2>
            <br>
            <!-- TODO: Need to Re-Evaluate the Pickup System. -->
<form action="../actions/scanstudentidtoevents.php" method="post">
  <p><label>Choose Event:   </label>
  <select name="event">
  <?php
  $test;
  require '../mysqlkeys.php';
  $con=mysqli_connect($host , $user , $password , $dbname );

  if (mysqli_connect_errno()){
  	echo "Failed to connect:".mysqli_connect_errno();
  	}
    $userlevel = $_SESSION['userlevel'];
$query;
    if($userlevel==1){

      $query = "SELECT * FROM ppv0008003.scanningpeople join loginsystem.members on members.id=scanningpeople.personid join eventnames on eventnames.EventID=scanningpeople.eventids  where eventnames.eventdate='". date("Y")."-". date("m"). "-" .date("d") ."' and scanningpeople.personid='".$_SESSION['userid']."';";


    }
      elseif($userlevel==2 || $userlevel==3){
      $query = "SELECT * FROM ppv0008003.eventnames where eventnames.eventdate='". date("Y")."-". date("m"). "-" .date("d") ."';";
        }
        else{
          $query = "SELECT * FROM ppv0008003.eventnames order by eventnames.EventDate DESC;";
        }

  $results=mysqli_query($con, $query);

  foreach ($results as $HostName){

  ?>
  <option value="<?php echo $HostName["EventID"]; ?>"><?php echo $HostName["EventDate"]." - ".$HostName["EventName"]." - "."Event ID: ".$HostName["EventID"] ; ?></option>
  <?php
  }
  $con->close();
  ?>
  </select></p>
  <?php
   if($userlevel<4){ ?> <input type="hidden" name="scannertype" value="0"> <?php } else { ?>
  <p><label>Choose Scanning Method:   </label><select name="scannertype">
<option value="1">Scanning Via iPad</option>
<!--<option value="1">Scanning Via Laptop USB Scanner</option>
<option value="2">Scanning Via Manually Entering Email</option>-->
<option value="3">Manually Enter Student ID Number</option>-->
  </select>
  </p>
<?php } ?>
  <input type="submit">
</form>

        </center>
</div>
          <div class="col-sm-2">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
