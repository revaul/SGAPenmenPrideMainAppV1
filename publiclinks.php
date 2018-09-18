<?php require "login/loginheader.php"; ?>
<?php include "template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>Penmen Pride Public Link Listing</h2>
<table class="table table-striped">
      <col width="10%">
  <col width="35%">
      <col width="15%">
  <col width="10%">
      <col width="10%">
  <col width="20%">
<tr>
<th>Email Address
</th>
<th>Student ID
</th>
<th>Last Name
</th>
<th>First Name
</th>
<th>Senator
</th>
<th>Faculty
</th>
<th>Portal
</th>
</tr>

<?php
require 'mysqlkeys.php';
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM ppv0008003.randomkeyswithlink";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?><tr><td> <?php echo $row["email"];
	   ?></td><td><?php echo $row["StudentID"];
	   ?></td><td><?php echo $row["Student Last Name"];
	   ?></td><td><?php echo $row["Student First Name"];
	   ?></td><td><?php echo $row["Senator"];
	   ?></td><td><?php echo $row["Faculty"];
	   ?></td><td><a href="<?php echo $row["link"];?>" target="_blank"><div class="linkbuttontopublic">This is a link</div></a></td></tr><?php
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
<?php include "template/bottom.php" ?>
