<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level5.php"; ?>
<?php include "../template/top.php"; ?>
<?php require '../mysqlkeys.php'; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
        <h2>Penmen Pride Database Change User Permissions</h2>
        <?php
        $admincount=0;
                  $con=mysqli_connect($host , $user , $password , $dbname );

                  if (mysqli_connect_errno()){
                    echo "Failed to connect:".mysqli_connect_errno();
                    }
                  $query = "SELECT * FROM loginsystem.AdminCount;";
                  $results=mysqli_query($con, $query);

                  foreach ($results as $HostName){
                    $admincount = $HostName["admins"];
                  }
if($admincount<=1){ ?> <div style="display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 20px;
  width: 65%;
  text-align:center;
  border: 2px solid red;
  background-color: rgba(201, 76, 76, 0.2);
border-radius: 8px;
margin-top: 10px;">
<h3 style="margin-top: 10px;">Notice:</h3>
<p>There is currently only one user with level 6 permissions in the system. You will not be able to edit the permissions of the level 6 user until another user has been promoted to level 6 permissions. This is to prevent a situation where no one would have level 6 permissions.</p>
</div> <?php }
        ?>
        <form action="../actions/actionchangeuserpermissions.php" method="post">

<!-- THIS IS FOR THE ANY USER IS FINE I.E. MORE THAN ONE ADMIN -->
        <p><label>Select User To Change:   </label>
        <select name="userid">
        <?php
        if($admincount<=1){
          $query = "SELECT * FROM loginsystem.NonAdminUsers where adminlevel!=6 ;";
        }
        else{
        $query = "SELECT * FROM loginsystem.members where adminlevel!=7;";
      }
        $results=mysqli_query($con, $query);

        foreach ($results as $HostName){

        ?>
        <option value="<?php echo $HostName["id"]; ?>"> <?php echo $HostName["username"] . " - " . $HostName["email"] . " - Current Level: " . $HostName["adminlevel"]; ?> </option>
<?php } ?>
        </select></p>

        <p> <label>New User Level:   </label>
        <select name="newuserlevel">
        <option value="0">0 - Disabled</option>
        <option value="1">1 - Can Access Prize Give Away</option>
        <option value="2">2 - Level 1 and Can View Stats</option>
        <option value="3">3 - Levels 1 & 2 and Can Process Data</option>
        <option value="4">4 - Levels 1, 2, & 3 and Can Send Mail Merge Emails</option>
        <option value="5">5 - Levels 1, 2, 3 & 4 and Can Administer Users</option>
        <option value="6">6 - Levels 1, 2, 3 & 4 and Can Administer Users</option>
        </select></p>
        <p> <input type="submit" /> </p>
        </form>
        </div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
