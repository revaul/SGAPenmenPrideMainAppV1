<?php require "login/loginheader.php"; ?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head

<body>
<h1>Penmen Pride Database Member Listing</h1>
<div class="EventName">
<table>
<tr>
<th>Member Username
</th>
<th>Member Email
</th>
<th>Member Verified
</th>
</tr>

<?php
require '../mysqlkeys.php';
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT members.username, members.email, members.verified FROM loginsystem.members;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?><tr><td> <?php echo $row["username"];
	   ?></td><td><?php echo $row["email"];
	   ?></td><td><?php echo $row["verified"];
	   ?></td></tr><?php
    }
} else {
 
}
$conn->close();
?>
</table>
</div>
</body>
</head>
</html>