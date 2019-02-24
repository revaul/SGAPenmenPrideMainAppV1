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
$eventid= $_POST["event"];
$scannerperson= $_POST["scannerperson"];
ini_set('max_execution_time', 300);
                    require '../mysqlkeys.php';
                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO ppv0008003.scanningpeople (eventids, personid) VALUES (?, ?)");
$stmt->bind_param("is", $field1, $field2);

$field1=$eventid;
$field2=$scannerperson;
$stmt->execute();
$stmt->close();
$conn->close();
?>
<h2>Success User Added!</h2></div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
