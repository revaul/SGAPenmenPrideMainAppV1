<?php
require "login/loginheader.php";
require 'mysqlkeys.php';
require
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM ppv0008003.NeedRamdomKey limit 100";
$result = $conn->query($sql);
$newinserts= array();
$insertamount=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $newkeystring = $hashforkeys . $row["EventID"];
       echo $newkeystring;
       echo "<br>";
       $newkey= md5($newkeystring);
       echo $newkey;
       echo "<br>";
       $newinserts[$insertamount] = $newkey;
       $insertamount++;
    }
} else {
 
}
$conn->close();

?>
