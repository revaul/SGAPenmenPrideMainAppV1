<?php include "template/top.php"; 
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
echo $idclean;
$sql = "SELECT SELECT * FROM ppv0008004.pubtotalpointsandeventcurrentsem where Pubrandomkeycol='".$idclean."' ;";
echo $sql;
$result = $conn->query($sql);
$totevents;
$totpoints;
$name;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $totevents = $row["TotalEvents"];
	    echo $totevents;
	    $totpoints = $row["TotalPoints"];
	    echo $totpoints;
	    $name = $row["PubFirstName"];
	    echo $name;
	    
	     }
}
else {
 
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
<th>Event ID
</th>
<th>Event Name
</th>
<th>Event Date
</th>
<th>Points
</th>
<th>Double Points
</th>
<th>Host Name
</th>
</tr>

<?php
$sql = "SELECT eventnames.EventID, eventnames.EventName, eventnames.EventDate, eventnames.PointValue, eventnames.DoublePoints, eventhosts.HostName FROM eventnames join eventhosts on eventnames.HostID=eventhosts.HostID order by eventnames.EventDate DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?><tr><td> <?php echo $row["EventID"];
	   ?></td><td><?php echo $row["EventName"];
	   ?></td><td><?php echo $row["EventDate"];
	   ?></td><td><?php echo $row["PointValue"];
	   ?></td><td><?php echo $row["DoublePoints"];
	   ?></td><td><?php echo $row["HostName"];
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
<?php include "template/bottom.php" ?>
