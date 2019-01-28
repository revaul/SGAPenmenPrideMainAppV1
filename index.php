<?php require "login/loginheader.php"; ?>
<?php require "login/permissions/level1.php"; ?>
<?php
if(isset($_SESSION['originaladdress'])){
 $newoldurlforredirect = $_SESSION['originaladdress'];
 unset($_SESSION['originaladdress']);
 if($newoldurlforredirect!='/'){
//return header("location:".$newoldurlforredirect);
}
}
?>
<?php include "template/top.php"; ?>
<?php include "template/jumbotron.php"; ?>
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <!-- IDEA: Change the text on the index to a status dashboard. -->
      <h2>Penmen Pride Dashboard</h2><br>
      <h2>Welcome <?php echo $_SESSION['first']; ?>,</h2>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>test Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>
<?php include "template/bottom.php" ?>
