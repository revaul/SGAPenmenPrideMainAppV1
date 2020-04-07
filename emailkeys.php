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
       $_SESSION['mailfrom']= $row["ef"];
$_SESSION['mailhost']= $row["eh"];
$_SESSION['mailport']= $row["ep"];
$_SESSION['mailnamefrom']= $row["efn"];
$_SESSION['mailusername']= $row["ea"];
$_SESSION['mailpassword']= $row["epw"];
$_SESSION['mailsecurity']= $row["es"];

    }
} else {
}
$conn->close();

echo $_SESSION['mailhost'];
echo $_SESSION['mailport'];
echo $_SESSION['mailnamefrom'];
echo $_SESSION['mailusername'];
echo $_SESSION['mailpassword'];
echo $_SESSION['mailsecurity'];
//}
?>
