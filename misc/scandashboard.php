<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level4.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>Penmen Pride Scan Dashboard</h2>
<table class="table table-striped">
      <col width="15%">
  <col width="10%">
      <col width="15%">
      <col width="10%">
      <col width="15%">
  <col width="10%">
      <col width="15%">
      <col width="10%">
<tr>
<th> </th>
<th> </th>
<th> </th>
<th> </th>
<th> </th>
<th> </th>
<th> </th>
<th> </th>
</tr>

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
       ?><tr><?php } ?>
         <td> <center><img src="https://snhuweb.snhu.edu/snhuimages/<?php echo $row["IDPhoto"]; ?>.jpg" alt="Student ID Photo" style="width:200px;"></center></td>
         <td><?php echo $row["times"]; ?></br>
         <?php echo $row["EventID"]." - ".$row["EventName"]; ?></br>
       <?php echo $row["HostName"]; ?></br>
     <?php echo $row["IDLast"].", ".$row["IDFirst"]; ?></br></td>
  <?php if($c==4){?></tr><?php
    $c++;
}
    }
} else {

}
$conn->close();
?>
</table>
        </div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
