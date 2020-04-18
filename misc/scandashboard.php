<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level4.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">

    <div class="col-sm-12">
        <h2>Penmen Pride Scan Dashboard</h2>
        </div>
        </div>


<?php
$c=1;
require '../mysqlkeys.php';
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ppv0008003.recentscandashboard;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
if($c==1){
       ?>  <div class="row">
       <?php } ?>
         <div class="col-sm-1"> <center><img src="https://snhuweb.snhu.edu/snhuimages/<?php echo $row["IDPhoto"]; ?>.jpg" alt="Student ID Photo" style="width:100%;"></center></div>
          <div class="col-sm-2"> <?php echo $row["times"]; ?></br>
         <?php echo $row["EventID"]." - ".$row["EventName"]; ?></br>
       <?php echo $row["HostName"]; ?></br>
     <?php echo $row["IDLast"].", ".$row["IDFirst"]; ?></br></div>
  <?php if($c==4){?></div><?php
    $c=0;
}
$c++;
    }
} else {

}
$conn->close();
?>


</div>
<?php include "../template/bottom.php" ?>
