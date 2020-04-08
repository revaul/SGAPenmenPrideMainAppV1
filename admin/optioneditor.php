<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level6.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>Penmen Pride Email Information</h2>
<table class="table table-striped">
      <col width="40%">
  <col width="40%">
      <col width="20%">
<tr>
  <th>Option Grouping
  </th>
  <th>Option Description
</th>
<th>Option Value
</th>
<th>Edit Value
</th>
</tr>

<?php
require '../mysqlkeys.php';
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ppv0008003.options left join optionsgroups on options.optionsgroup=optionsgroups.idoptionsgroups;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?><tr><td><?php echo $row["groupdesc"];
  	   ?></td><td> <?php echo $row["optiondesc"];
	   ?></td><td><?php
if($row["idoptions"]==1){
  ?>&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;<?php
}
else{
     echo $row["optionvalue"];
   }
	   ?></td><td><?php echo $row["idoptions"];
	   ?></td></tr><?php
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
