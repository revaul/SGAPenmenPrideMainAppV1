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

<?php
// TODO: Post Field Verification

$scannertype= $_POST["scannertype"];
$eventname= $_POST["eventname"];
$bothpass=TRUE;
$scanner= $_POST["scanner"];
$scanner_first = substr($scanner,0,1);
$scanner_length = strlen($scanner);
$scanner_id="";

if(($scanner_first=='+' || $scanner_first==';') && $scannertype==1 && ($scanner_length==16 || $scanner_length==15)) {
$scanner_id=substr($scanner,2,7);
}
elseif($scanner_first=='7' && $scannertype==1){
  $scanner_id=substr($scanner,1,7);
}
elseif(($scanner_first=='0' || $scanner_first=='1'|| $scanner_first=='2') && $scannertype==3 && $scanner_length==7){
  $scanner_id=$scanner;
}
elseif($scanner_first=='9' && $scannertype==3 && $scanner_length==6){
  $scanner_id= "0" . $scanner;
  $scanner=$scanner_id;
}
elseif($scanner_first=='8' && $scannertype==3 && $scanner_length==6){
  $scanner_id= "0" . $scanner;
  $scanner=$scanner_id;
}
else{
  $bothpass=FALSE;
}


ini_set('max_execution_time', 300);

                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($bothpass){
    $stmt = $conn->prepare("INSERT INTO ppv0008003.scanner (EventID, Scanner, user) VALUES (?,?,?)");
    $stmt->bind_param("iss", $field1, $field2, $field3);

    $field1=$eventname;
    $field2=$scanner;
    $field3=$_SESSION['username'];
    $stmt->execute();
    $stmt->close();
  }
else{
      $stmt = $conn->prepare("INSERT INTO ppv0008003.badscans (badscanevent, badscan, scanner, scannertype) VALUES (?,?,?,?)");
    $stmt->bind_param("issi", $field1, $field2, $field3, $field4);

    $field1=$eventname;
    $field2=$scanner;
    $field3=$_SESSION['username'];
    $field4=$scannertype;
    $stmt->execute();
    $stmt->close();
  }
    $conn->close();

?>
<img src="https://snhuweb.snhu.edu/snhuimages/<?php echo $scanner_id; ?>.jpg" alt="Student ID Photo">

<i class="fa fa-check-square-o" style="font-size:200px;color:green;display:block;text-align:center"></i>
<script>
//$(document).ready(function(){
    // $("#newformtorevertback").submit();
//});
</script>
<form name="newformtorevertback" id="newformtorevertback" action="scanstudentidtoevents.php" method="post">
  <input type="hidden" name="event" value="<?php echo $eventname; ?>">
  <input type="hidden" name="scannertype" value="<?php echo $scannertype; ?>">
</form>
</div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
