<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level1.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-10">
            <h2>Give Away Status</h2>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2">
            <?php
            // TODO: Post Field Verification
$cardscan= $_POST["cardscan"];
$id = substr($cardscan, 3, 7);
ini_set('max_execution_time', 300);
                    require '../mysqlkeys.php';
                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?><img src="https://snhuweb.snhu.edu/snhuimages/<?php echo $id; ?>.jpg" style="width:100%">


        </div>
        <div class="col-sm-6" style="background-color:<?php  $sql = " select count(*) as oldyear from scanner where Scanner='".$id."' and EventID=618 or EventID=619 and Scanner='".$id."' ; ";

					$resultonenew;
                    $resultone = $conn->query($sql);
					if ($resultone->num_rows > 0) {
    // output data of each row
    while($row = $resultone->fetch_assoc()) {
		$resultonenew = $row["oldyear "];
    }
} else {
    echo "0 results ";
}
$beforecount = $resultonenew; if($beforecount>0){
echo "red ";
}
             if($beforecount=0){
             echo "white ";
             }?>">
            <h3>This person has picked up their prize:
                <?php
        $sql = "select count(*) as oldyear from scanner where Scanner= '".$id."' and EventID=618 or EventID=619 and Scanner = '".$id."';";

					$resultonenew;
                    $resultone = $conn->query($sql);
					if ($resultone->num_rows > 0) {
    // output data of each row
    while($row = $resultone->fetch_assoc()) {
		$resultonenew = $row["oldyear"];
    }
} else {
    echo "0 results";
}
$beforecount = $resultonenew;
        echo $beforecount;
			$insertdaystmt = "INSERT INTO `ppv0008003`.`scanner` (`EventID`, `Scanner`) VALUES (618, '".$id."');";
            if ($conn->query($insertdaystmt) === TRUE) {
            } else {
                echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
            }
                $insertdaystmt = "call pulltierinfo();";
            if ($conn->query($insertdaystmt) === TRUE) {
            } else {
                echo "Error: " . $insertdaystmt . "<br>" . $conn->error;
            }

            ?> times! </h3>
            <h3>This person has
                <?php $sql = "select tier as oldyear from pointpickupmerged where StudentID='".$id."';";

					$resultonenew;
                    $resultone = $conn->query($sql);
					if ($resultone->num_rows > 0) {
    // output data of each row
    while($row = $resultone->fetch_assoc()) {
		$resultonenew = $row["oldyear"];
    }
} else {
    echo "0 results";
}
$points = $resultonenew;
echo $points;
                ?>.
            </h3>
            <h3>This person has
                <?php $sql = "select points as oldyear from pointpickupmerged where StudentID='".$id."';";

					$resultonenew;
                    $resultone = $conn->query($sql);
					if ($resultone->num_rows > 0) {
    // output data of each row
    while($row = $resultone->fetch_assoc()) {
		$resultonenew = $row["oldyear"];
    }
} else {
    echo "0 results";
}
$tier= $resultonenew;
        echo $tier;
                ?> points.
            </h3>
            <form method="get" action="/misc/prizegiveaway.php"><button type="submit">Continue</button></form>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
</div>
<?php include "../template/bottom.php" ?>
