<?php require "login/loginheader.php"; ?>
<!DOCTYPE html>
<html>
<head>
</head

<body>
<h1>Penmen Pride Database Member Verification</h1>
<div class="HostName">
<form action="actionverifyadminmember.php" method="post">
<p><label>Select Member to Verify: </label>
<select name="member">
<option value="">Select Member</option>
<?php 
require '../mysqlkeys.php';
$con=mysqli_connect($host , $user , $password , $dbname );

if (mysqli_connect_errno()){
	echo "Failed to connect:".mysqli_connect_errno();
	}
$query = "SELECT * FROM ppv0008003.members;";
$results=mysqli_query($con, $query);

foreach ($results as $HostName){

?>
<option value="<?php echo $HostName["id"]; ?>"><?php echo $HostName["email"]; ?></option>
<?php
}
?>
</select></p>
    <p> <input type="submit" /> </p>
</form>
</div>
</body>


</html>
