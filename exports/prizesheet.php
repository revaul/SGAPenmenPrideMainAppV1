<?php require "../login/loginheader.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">

        <h2 class="prizesheet prizesheetheading">Prize Sheet</h2>
      </div>
      <div class="col-sm-1">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-10">

        <table class="prizesheettable">
          <col width="33%">
          <col width="34%">
          <col width="33%">
          <tr>
            <td><p class="prizesheet prizesheetsubheading">Club: <u>SGA-Penmen Pride</u></p></td>
            <td><p class="prizesheet prizesheetsubheading">Event: <u>Prize Give Away<!-- TODO:Insert PHP Post Here. --></u></p></td>
            <td><p class="prizesheet prizesheetsubheading">Check Number: <u><!-- TODO: Insert PHP Post Here. --> who knows</u></p></td>
          </tr>
        </table>
      </div>

      <div class="col-sm-1">
      </div>
    </div>
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

<?php
$tier1cost=14.99;
$tier1description="Tier 1 Prize";

$tier2cost=10.00;
$tier2description="Tier 2 Prize";

$tier3cost=5.99;
$tier3description="Tier 3 Prize";

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
         <td class="prizesheet prizesheettext">9-29-2018</td>
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
</table>
        </div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
