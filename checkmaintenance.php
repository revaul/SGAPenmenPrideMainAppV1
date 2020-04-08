<?php
if (session_id() == "")
  session_start();
//if $mailfrom == null) {
include 'mysqlkeys.php';
// Create connection

$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM ppv0008003.options where idoptions=12;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
       $_SESSION['maintenance']= $row["optionvalue"];

    }
} else {
}
$conn->close();

//}
?>
