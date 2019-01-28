<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level2.php"; ?>
<?php include "../template/top.php"; ?>

<div id="about" class="container-fluid">
      <div class="row">
          <div class="col-sm-2">
          </div>
    <div class="col-sm-8">
        <center><h2>Scan Student ID</h2>
            <br>
            <!-- TODO: Need to Re-Evaluate the Pickup System. -->
<form action="../misc/actionprizegiveawaypickupstudentid.php" method="post">
   <input type="text" name="cardscan" autofocus><br>
    <br>
  <input type="submit">
</form>

        </center>
</div>
          <div class="col-sm-2">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
