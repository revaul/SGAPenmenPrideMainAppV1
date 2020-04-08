<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level6.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
<?php
// TODO: Post Field Verification
$optionid= $_POST["oid"];
$option_value=$_POST["ovu"];
ini_set('max_execution_time', 300);
                    require '../mysqlkeys.php';
                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

            $stmt = $conn->prepare("UPDATE `ppv0008003`.`options` SET `optionvalue` = ? WHERE `idoptions` = ?");
            $stmt->bind_param("si", $field1, $field2);
            $field1=$option_value;
            $field2=$optionid;
            $stmt->execute();
            $stmt->close();
            $conn->close();
?>
<h2>Success Option Updated!</h2></div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
