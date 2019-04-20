<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level3.php"; ?>
<?php include "../template/top.php"; ?>
<?php require '../mysqlkeys.php'; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
<?php
// TODO: Post Field Verification
$hostname= $_POST["name"];
$hosttype= $_POST["hosttype"];
$hostemail= $_POST["hostemail"];
$hostinactive= $_POST["hostinactive"];
ini_set('max_execution_time', 300);

                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO ppv0008003.eventhosts (HostName, HostType, HostEmail, HostInactive) VALUES (?, ?, ?, ?);");
$stmt->bind_param("sssi", $field1, $field2, $field3, $field4);

$field1=$hostname;
$field2=$hosttype;
$field3=$hostemail;
$field4=$hostinactive;
$stmt->execute();
$stmt->close();
$conn->close();

?>
<h2>Success Host Added!</h2></div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
