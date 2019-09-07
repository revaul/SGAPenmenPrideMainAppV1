<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level1.php"; ?>
<?php include "../template/top.php"; ?>
<?php require '../mysqlkeys.php'; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
      <h2 style="text-align:center">Scan Logged</h2>
<i class="fa fa-check-square-o" style="font-size:200px;color:green;display:block;text-align:center"></i>
<?php
// TODO: Post Field Verification
$scannertype= $_POST["scannertype"];
$eventname= $_POST["eventname"];
$bothpass=TRUE;
$scanner= $_POST["scanner"];

if (!is_numeric($scannertype)) {
        $bothpass=FALSE;
    }
    else{

    }
    if (!is_numeric($eventname)) {
            $bothpass=FALSE;
        }
        else{

        }
if($bothpass){
      $vowels = array("e", "E", "+", "%", "?", ";");
      $idbeforenotsafenosemi = str_replace($vowels,"",$scanner);
      $idbeforenotsafe= ";" . $idbeforenotsafenosemi .  "?";
    if($scanner){
      $idnumnotsafe = $idbeforenotsafe;
      $idnumlenchecked;
      if($scannertype==3){
        if (strlen($idnumnotsafe)!=7){
        $idnumlenchecked="0000001";
        }
        else{
        $idnumlenchecked = $idnumnotsafe;
        }
      }
      else{
        $idnumlower = strtolower($idnumnotsafe);
        $vowels = array("e");
        $idnumnotsafe = str_replace($vowels,"",$idnumlower);
      if (strlen($idnumnotsafe)!=16){
      $idnumlenchecked="0000001";
      }
      else{
      $idnumlenchecked = $idnumnotsafe;
      }
    }
      $idnumlower = strtolower($idnumlenchecked);
      $vowels = array("select", "and", "or", "insert", "update", "delete", "execute", "show", "view", "create", "alter", "references", "index", "create", "view", " ", "routine", "event", "drop", "trigger", "grant", "option", "temporary", "table", "lock", ",", "echo", "$");
      $idnocommands = str_replace($vowels,"",$idnumlower);
      $idclean;

if($scannertype==3){
      if (strlen($idnocommands)!=7){
      $idclean="0000001";
      }
      else{
      $idclean = $idnocommands;
      }
    }
    else{
      if (strlen($idnocommands)!=16){
      $idclean="0000001";
            
      }
      else{
      $idclean = $idnocommands;
      }
    }
    ini_set('max_execution_time', 300);

                        $conn = new mysqli($host, $user, $password, $dbname);
                             if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("INSERT INTO ppv0008003.scanner (EventID, Scanner, user) VALUES (?,?,?)");
    $stmt->bind_param("iss", $field1, $field2, $field3);

    $field1=$eventname;
    $field2=$idclean;
    $field3=$_SESSION['username'];
    $stmt->execute();
    $stmt->close();
    $conn->close();

?>

<script>
//$(document).ready(function(){
    // $("#newformtorevertback").submit();
//});
</script>
<form name="newformtorevertback" id="newformtorevertback" action="scanstudentidtoevents.php" method="post">
  <input type="hidden" name="event" value="<?php echo $eventname; ?>">
  <input type="hidden" name="scannertype" value="<?php echo $scannertype; ?>">
</form>
 <?php

    }
        }
else{
          ?> <h3>Error</h3> <?php
        }

?>

</div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
