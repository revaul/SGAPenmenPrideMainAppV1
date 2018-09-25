<?php
require "../login/loginheader.php";
require '../mysqlkeys.php';
include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
	    <?php
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM ppv0008003.NeedRamdomKey";
$result = $conn->query($sql);
$newinserts= array();
$newinsertsemail= array();
$insertamount=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $newkeystring = $row["StudentID"] . $hashforkeys . $row["EmailAddress"];
       // NOTE: Encryption for Key Hashing is StudentID.HashKey.Email
       $newkey= md5($newkeystring);

       $newinserts[$insertamount] = $newkey;
        $newinsertsemail[$insertamount] = $row["EmailAddress"];
       $insertamount++;
    }
} else {

}

$arrlength = count($newinserts);

for($x = 0; $x < $arrlength; $x++) {
   $insertdaystmt = "INSERT INTO `ppv0008003`.`randomkeys` (`email`, `randomkeycol`) VALUES ('".$newinsertsemail[$x]."', '".$newinserts[$x]."' ); ";
	 if ($conn->query($insertdaystmt) === TRUE) {
            } else {
                echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
            }

}
$conn->close();
?>
	    <h2> All Keys Created </h2>
	    </div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
