<?php require "login/loginheader.php"; ?>
<html>
<body>
<?php
$member= $_POST["member"];
ini_set('max_execution_time', 300);
                    require '../mysqlkeys.php';
                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$insertdaystmt = "DELETE FROM `ppv0008003`.`members` WHERE id='".$member."';";
            if ($conn->query($insertdaystmt) === TRUE) {
            } else {
                echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
            }
?>
<h1>Success Member Deleted!</h1>
</body>
</html>