<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level3.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>Points Tallied</h2>
<?php
        require '../mysqlkeys.php';
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$insertdaystmt = "call pullranks();";
            if ($conn->query($insertdaystmt) === TRUE) {
            } else {
                echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
            }
        ?>
        </div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
