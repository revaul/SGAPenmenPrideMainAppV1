<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level1.php"; ?>
<?php include "../template/top.php"; ?>
<?php require '../mysqlkeys.php'; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>My Profile</h2>
        <h4>Username: <?php echo $_SESSION['username']; ?></h4>
        <h4>First Name: <?php echo $_SESSION['first']; ?></h4>
        <h4>Last Name: <?php echo $_SESSION['last']; ?></h4>
        <h4>User Level: <?php echo $_SESSION['userlevel']; ?></h4>
        <?php


                  $con=mysqli_connect($host , $user , $password , $dbname );

                  if (mysqli_connect_errno()){
                    echo "Failed to connect:".mysqli_connect_errno();
                    }
                  ?>
        <form action="../actions/actionchangeuserpassword.php" method="post">

        <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>">

        <p> <label>New User Password:   </label>
          <input name="pw1" id="pw1" type="password">
        </p>
        <p> <label>Confirm: Password:   </label>
          <input name="pw2" id="pw2" type="password">
        </p>
        <p> <input type="submit" /> </p>
        </div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
