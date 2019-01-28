<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level2.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-10">
<table class="table table-striped">
      <col width="10.64%">
  <col width="11.14%">
      <col width="20.90%">
  <col width="19.15%">
      <col width="23.90%">
  <col width="14.27%">
  <thead>
    <tr>
    <th colspan="6">
      <table class="prizesheettable">
        <col width="33%">
        <col width="34%">
        <col width="33%">
        <tr>
          <th colspan="3">
            <h2 class="prizesheet prizesheetheading">Prize Sheet</h2>
          </th>
        </tr>
        <tr>
          <td><p class="prizesheet prizesheetsubheading">Club: <u>SGA-Penmen Pride</u></p></td>
          <td><p class="prizesheet prizesheetsubheading">Event: <u>Prize Give Away <?php echo $_POST["semester"]; ?> <?php echo $_POST["dateyear"]; ?></u></p></td>
          <td><p class="prizesheet prizesheetsubheading">Check Number: <u> <?php echo $_POST["check"] ?></u></p></td>
        </tr>
      </table>
    </th>
  </tr>
<tr>
<th class="prizesheet prizesheettext">Date
</th>
<th class="prizesheet prizesheettext">Amount
</th>
<th class="prizesheet prizesheettext">Type of Prize
</th>
<th class="prizesheet prizesheettext">Name (Print)
</th>
<th class="prizesheet prizesheettext">Name (Signature)
</th>
<th class="prizesheet prizesheettext">School ID
</th>
</tr>
</thead>
<tbody>
<?php
$giveawayyear= $_POST["dateyear"];
$giveawaymonth= $_POST["datemonth"];
$giveawayday= $_POST["dateday"];

$date=$giveawaymonth.'-'.$giveawayday.'-'.$giveawayyear;

$tier1cost= $_POST["tier1cost"];
$tier1description= $_POST["tier1desc"];

$tier2cost= $_POST["tier2cost"];
$tier2description= $_POST["tier2desc"];

$tier3cost= $_POST["tier3cost"];
$tier3description= $_POST["tier3desc"];

require '../mysqlkeys.php';
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ppv0008003.prizesheetexport;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$tier=$row["tier"];
$tiercost;
$tierdescription;
if($tier=="Tier One"){
  $tiercost = $tier1cost;
  $tierdescription = $tier1description;
}
 elseif($tier=="Tier Two"){
   $tiercost = $tier2cost;
   $tierdescription = $tier2description;
 }
  else{
    $tiercost = $tier3cost;
    $tierdescription = $tier3description;
  }
  $tiercostformatted = number_format($tiercost, 2, '.', '')
       ?><tr>
         <td class="prizesheet prizesheettext"><?php echo $date ?></td>
         <td class="prizesheet prizesheettext">$<?php echo $tiercostformatted; ?></td>
         <td class="prizesheet prizesheettext"><?php echo $tierdescription; ?></td>
         <td class="prizesheet prizesheettext"><?php echo $row["studentname"]; ?></td>
         <td class="prizesheet prizesheettext"></td>
         <td class="prizesheet prizesheettext"><?php echo $row["StudentID"]; ?></td></tr><?php
    }
} else {

}
$conn->close();
?>
</tbody>
<tfoot>
<tr>
  <th colspan="6" class="prizesheet prizesheetsubheading">PLEASE FILL OUT AND RETURN TO SGA BUSINESS MANAGER AS SOON AS POSSIBLE</th>
</tr>
</tfoot>
</table>
        </div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
