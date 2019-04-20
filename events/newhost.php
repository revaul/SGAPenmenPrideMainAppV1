<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level4.php"; ?>
<?php include "../template/top.php"; ?>

<div id="about" class="container-fluid">
      <div class="row">
          <div class="col-sm-2">
          </div>
    <div class="col-sm-8">
    <h2>Penmen Pride Host Form</h2>
<form action="../actions/actionnewhost.php" method="post">
<p> <label> Host Name:   </label> <input type="text" name="name"/> </p>
<p><label>Host Type:   </label>
<select name="hosttype">
<option value="">Select Host Type</option>
<?php
require '../mysqlkeys.php';
$con=mysqli_connect($host , $user , $password , $dbname );

if (mysqli_connect_errno()){
	echo "Failed to connect:".mysqli_connect_errno();
	}
$query = "SELECT * FROM ppv0008003.eventhosttype;";
$results=mysqli_query($con, $query);

foreach ($results as $HostName){

?>
<option value="<?php echo $HostName["HostType"]; ?>"><?php echo $HostName["HostType"]; ?></option>
<?php
}
?>
</select></p>
<p> <label>Host Email:   </label> <input type="text" name="hostemail"/> </p>
<p> <label>Host Inactive:   </label><select name="hostinactive">
<option value="">Yes or No</option>
<option value="1">Yes</option>
<option value="0">No</option>
</select></p>
<p> <input type="submit" /> </p>
</form>
</div>
          <div class="col-sm-2">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
