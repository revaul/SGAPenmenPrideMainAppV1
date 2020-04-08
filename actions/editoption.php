<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level3.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
      <h2>Penmen Pride Edit Option Value Information</h2>
      <form action="actioneditoption.php" method="post">
<?php
// TODO: Post Field Verification
$eventname= $_GET["oid"];
if (is_numeric($eventname)) { ?>
 <input type="hidden" name="oid" value="<?php echo $eventname; ?>">
            <label> New Value:   </label> <input type="text" name="ovu"/>

   <input type="submit" /> </p>
</form>
</div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
