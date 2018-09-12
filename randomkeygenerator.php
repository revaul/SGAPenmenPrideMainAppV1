<?php
require "login/loginheader.php";
require 'mysqlkeys.php';
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM ppv0008003.NeedRamdomKey limit 100";
$result = $conn->query($sql);
$newinserts= array();
$newinsertsemail= array();
$insertamount=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $newkeystring = $row["StudentID"] . $hashforkeys . $row["EmailAddress"];
       echo $newkeystring;
       echo "<br>";
       $newkey= md5($newkeystring);
       echo $newkey;
       echo "<br>";
       $newinserts[$insertamount] = $newkey;
        $newinsertsemail[$insertamount] = $row["EmailAddress"];
       $insertamount++;
    }
} else {
 
}
echo "<br>";
echo "<br>";
echo "<br>";
$arrlength = count($newinserts);
echo $arrlength;
echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
    $insertdaystmt = "INSERT INTO `ppv0008003`.`randomkeys` (`email`, `randomkeycol`) VALUES ('".$newinsertsemail[$x]."', '".$newinserts[$x]."' ); ";
            if ($conn->query($insertdaystmt) === TRUE) {
            } else {
                echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
            }
			
$conn->close();

?>
