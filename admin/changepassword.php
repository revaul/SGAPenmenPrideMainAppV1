<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level5.php"; ?>
<?php include "../template/top.php"; ?>
<?php require '../mysqlkeys.php'; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>Penmen Pride Database Change User Password</h2>
        <?php

                  $con=mysqli_connect($host , $user , $password , $dbname );

                  if (mysqli_connect_errno()){
                    echo "Failed to connect:".mysqli_connect_errno();
                    }
                  ?>
        <form action="../actions/actionchangeuserpassword.php" method="post">

        <p><label>Select User To Change:   </label>
        <select name="userid">
        <?php
        $query = "SELECT * FROM loginsystem.members where adminlevel!=6 order by lastname, firstname;";
        $results=mysqli_query($con, $query);

        foreach ($results as $HostName){

        ?>
        <option value="<?php echo $HostName["id"]; ?>"> <?php echo $HostName["lastname"] . ", " . $HostName["firstname"] . " - " . $HostName["username"] . " - " . $HostName["email"] . " - Current Level: " . $HostName["adminlevel"]; ?> </option>
<?php } ?>
        </select></p>

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
