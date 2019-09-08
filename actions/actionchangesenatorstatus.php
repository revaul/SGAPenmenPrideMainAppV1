<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level4.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
<?php
// TODO: Post Field Verification
$personscannerid= $_POST["useremail"];
ini_set('max_execution_time', 300);
                    require '../mysqlkeys.php';
                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

            $stmt = $conn->prepare("UPDATE `ppv0008003`.`studentlisting` SET `Senator` = 0, WHERE `EmailAddress` = ?");
            $stmt->bind_param("s", $field1);
            $field1=$personscannerid;
            $stmt->execute();
?>
<h2>Success User Status Changed!</h2></div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
