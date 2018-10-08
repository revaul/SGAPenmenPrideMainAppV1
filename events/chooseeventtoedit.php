<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level3.php"; ?>
<?php include "../template/top.php"; ?>

<div id="about" class="container-fluid">
      <div class="row">
          <div class="col-sm-2">
          </div>
    <div class="col-sm-8">
    <h2>Penmen Pride Edit Event Information</h2>
<form action="../actions/editeventinformation.php" method="post">

<p><label>Choose Event to Edit:   </label>
<select name="event">
<?php
require '../mysqlkeys.php';
$con=mysqli_connect($host , $user , $password , $dbname );

if (mysqli_connect_errno()){
	echo "Failed to connect:".mysqli_connect_errno();
	}
$query = "SELECT * FROM ppv0008003.eventnames order by eventnames.EventDate DESC;";
$results=mysqli_query($con, $query);

foreach ($results as $HostName){

?>
<option value="<?php echo $HostName["EventID"]; ?>"><?php echo $HostName["EventID"]." - ".$HostName["EventDate"]." - ". $HostName["EventName"]; ?></option>
<?php
}
$con->close();
?>
</select></p>
<p> <input type="submit" /> </p>
</form>
</div>
          <div class="col-sm-2">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
