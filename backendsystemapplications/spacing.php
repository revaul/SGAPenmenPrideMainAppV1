<?php require "../login/loginheader.php"; ?>
<?php

	ini_set('max_execution_time', 300);
	require '../mysqlkeys.php';
	$conn = new mysqli($host, $user, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$abortmission=0;
	while($abortmission==0){
		$sql = "select ScanID as oldyear from updatescannerbreaksscanid";
					echo $sql;
					$resultonenew;
                    $resultone = $conn->query($sql);
					if ($resultone->num_rows > 0) {
    // output data of each row
    while($row = $resultone->fetch_assoc()) {
        echo "year: " . $row["oldyear"]. "<br>";
		$resultonenew = $row["oldyear"];
    }
}
echo $resultone->num_rows;
if($resultone->num_rows==0){
	$abortmission=1;
	$resultonenew=0;
}
echo $resultonenew;
$minidnum = $resultonenew;

	if($abortmission==0){

		$sql = "SELECT Six as oldyear FROM ppv0008003.updatescannerbreaks where ScanID = ".$minidnum.";";
					echo $sql;
					$resultonenew;
                    $resultone = $conn->query($sql);
					if ($resultone->num_rows > 0) {
    // output data of each row
    while($row = $resultone->fetch_assoc()) {
        echo "year: " . $row["oldyear"]. "<br>";
		$resultonenew = $row["oldyear"];
    }
} else {
    echo "0 results";
}
echo $resultonenew;
$oldeventid = $resultonenew;
$insertdaystmt = "UPDATE ppv0008003.scanner SET Scanner = '". $oldeventid ."' where ScanNumID= ".$minidnum.";";
echo "<br>";
		echo "Get nsert thing: ";
		echo $insertdaystmt;
            if ($conn->query($insertdaystmt) === TRUE) {
            } else {
                echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
            }
			echo "<br>";
		echo "<br>";
		echo "Show Updatey: ";
		echo $insertdaystmt;
	}
	}
											?>
