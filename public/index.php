<?php include "./template/publictop.php"; 
require 'publicmysqlkeys.php';
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$idnumnotsafe = $_GET["id"];
$idnumlenchecked;
if (strlen($idnumnotsafe)!=32){
$idnumlenchecked="9bce422057d28895fa132da3d68f065b";
}
else{
$idnumlenchecked = $idnumnotsafe;
}
$idnumlower = strtolower($idnumlenchecked);
$vowels = array("select", "insert", "update", "delete", "execute", "show", "view", "create", "alter", "references", "index", "create", "view", " ", "routine", "event", "drop", "trigger", "grant", "option", "temporary", "table", "lock", ";" ,"and", "or", ",", "echo", "$");
$idnocommands = str_replace($vowels,"",$idnumlower);
$idclean;

if (strlen($idnocommands)!=32){
$idclean="9bce422057d28895fa132da3d68f065b";
}
else{
$idclean = $idnocommands;
}
$sql = "SELECT * FROM ppv0008004.pubtotalpointsandeventcurrentsem where Pubrandomkeycol='".$idclean."' ;";

$result = $conn->query($sql);
$totevents;
$totpoints;
$name;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $totevents = $row["TotalEvents"];
	    
	    $totpoints = $row["TotalPoints"];
	   
	    $name = $row["PubFirstName"];
	   
	    
	     }
}
else {
 
}
if ($totpoints==0){
$totevents=0;
}
else{
}
	   ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>Welcome <?php echo $name; ?>, This semester you have earned <?php echo $totpoints; ?> points and attended <?php echo $totevents; ?> events.</h2>
<table class="table table-striped">
      <col width="10%">
  <col width="35%">
      <col width="15%">
  <col width="10%">
      <col width="10%">
  <col width="20%">
<tr>
<th>Event Date
</th>
<th>Event Name
</th>
<th>Event Host
</th>
<th>Semester
</th>
<th>Points
</th>
</tr>

<?php
$sql = "SELECT * FROM ppv0008004.pubscanner where Pubrandomkeycol='".$idclean."' ;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?><tr><td> <?php echo $row["PubEventDate"];
	   ?></td><td><?php echo $row["PubEventName"];
	   ?></td><td><?php echo "Unknown";
	   ?></td><td><?php echo $row["PubSemester"];
	   ?></td><td><?php echo $row["PubPointValue"];
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
<?php include "./template/bottom.php" ?>
