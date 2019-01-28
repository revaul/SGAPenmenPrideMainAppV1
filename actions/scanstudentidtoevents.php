<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level1.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
      <?php
      // TODO: Post Field Verification
      $scannertype= $_POST["scannertype"];
      $eventname= $_POST["event"];
      $bothpass=TRUE;
      if (!is_numeric($scannertype)) {
              $bothpass=FALSE;
          }
          else{

          }
          if (!is_numeric($eventname)) {
                  $bothpass=FALSE;
              }
              else{

              }
              if($bothpass){
                  ?>
      <h2 style="text-align:center"><?php if($scannertype==3){echo "Enter Student ID (Including Zero)"; } else { echo "Scan ID"; } ?></h2>
      <form action="actionscanstudentidtoevents.php" method="post">

<input type="hidden" name="eventname" value="<?php echo $eventname; ?>">
<input type="hidden" name="scannertype" value="<?php echo $scannertype; ?>">
<input type="text" style="display:block;margin:auto;text-align:center;<?php if($scannertype==3){} else{ ?>height:.01px;width:.01px<?php } ?>" name="scanner" autofocus>
<br>
<input style="display:block;margin:auto;text-align:center" type="submit">
    </form>
    <?php
        }
else{
          ?> <h3>Error</h3> <?php
        }

?>
</div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
