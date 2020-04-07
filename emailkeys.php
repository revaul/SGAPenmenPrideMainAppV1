<?php
//if $mailfrom == null) {
include 'mysqlkeys.php';
// Create connection

$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM ppv0008003.EmailLoginInfo;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
       echo $row["epw"];
       echo $row["ea"];
       echo $row["efn"];
       echo $row["eh"];
       echo $row["es"];
       echo $row["ep"];
       echo $row["ef"];
    }
} else {
}
$conn->close();

//}
?>
