<?php require "login/loginheader.php"; ?>
<!DOCTYPE html>
<html>
<head>
</head

<body>
<h1>Penmen Pride Event Form</h1>
<div class="EventName">
<form action="actioneventattendanceexport.php" method="post">
<p><label>Event: </label>
<select name="eventid">
<option value="">Select Event</option>
<?php 
require 'mysqlkeys.php';
$con=mysqli_connect($host , $user , $password , $dbname );

if (mysqli_connect_errno()){
	echo "Failed to connect:".mysqli_connect_errno();
	}
$query = "SELECT * FROM ppv0008003.eventnames order by eventnames.EventDate DESC;";
$results=mysqli_query($con, $query);

foreach ($results as $HostName){

?>
<option value="<?php echo $HostName["EventID"]; ?>"><?php echo $HostName["EventName"]; ?></option>
<?php
}
?>
</select></p>
<p> <input type="submit" /> </p>
</form>
</div>
</body>


</html>
