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

  $query = "SELECT * FROM ppv0008003.eventnames order by eventnames.EventDate DESC;";


  $results=mysqli_query($con, $query);

  foreach ($results as $HostName){

  ?>
  <option value="<?php echo $HostName["EventID"]; ?>"><?php echo $HostName["EventDate"]." - ".$HostName["EventName"]." - "."Event ID: ".$HostName["EventID"] ; ?></option>
  <?php
  }

  ?>
  </select></p>
  <?php ?>

  <p><label>Choose A Person:   </label><select name="scannertype">

  <?php

  $query = "SELECT * FROM loginsystem.members order by members.lastname, members.firstname;";


  $results=mysqli_query($con, $query);

  foreach ($results as $HostName){

  ?>
  <option value="<?php echo $HostName["id"]; ?>"><?php echo $HostName["lastname"].", ".$HostName["firstname"]." - ".$HostName["email"] ; ?></option>
  <?php
  }

  ?>
  </select>
  </p>
<?php

$con->close(); ?>
  <input type="submit">
</form>

        </center>
</div>
          <div class="col-sm-2">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
