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
      <h2>Welcome <?php echo $_SESSION['first']; ?>,</h2>
      <h3>Your last login was: <?php
      require 'mysqlkeys.php';
      // Create connection
      $conn = new mysqli($host, $user, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }


      $sql = "SELECT * FROM loginsystem.LastLogin where username='" . $_SESSION['username'] . "';";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo $row["td"];
          }
      } else {

      }
      $conn->close();

       ?></h3>
      <h4>The Penmen Pride program is an initiative that has SNHU students enthusiastic about participating in events and programs around campus. This program enhances school spirit within our student body by implementing incentives for students to attend events. By having your event be a Penmen Pride event, you can look forward to students showing up excited to attend. Penmen Pride is just one of the ways that the Student Government Association builds student community spirit by creating a common goal among all SNHU students - to earn points, and win prizes!  </h4><br>


    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>
<?php include "template/bottom.php" ?>
