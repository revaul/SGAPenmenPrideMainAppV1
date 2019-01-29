<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level5.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
<?php
// TODO: Post Field Verification
$userid= $_POST["userid"];
$pw1=$_POST["pw1"];
$pw2=$_POST["pw2"];
if($pw1!=$pw2){
  echo "ERROR Passwords Did Not Match";
}
else{
  $newpw = password_hash($pw1, PASSWORD_DEFAULT);
ini_set('max_execution_time', 300);
                    require '../mysqlkeys.php';
                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$insertdaystmt = "UPDATE loginsystem.members SET password = " . $newpw . " WHERE id = '" . $userid . "';";
            if ($conn->query($insertdaystmt) === TRUE) {
            } else {
                echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
            }
}
?>
<h2>Success User Permissions Changed!</h2></div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
