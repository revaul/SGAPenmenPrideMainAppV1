<?php
if ($mailfrom == null) {
require '/mysqlkeys.php';
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT op1.optionvalue epw, op2.optionvalue ea, op3.optionvalue efn,  op4.optionvalue eh,  op5.optionvalue es,  op6.optionvalue ep,  op7.optionvalue ef  FROM ppv0008003.options op1 left join ppv0008003.options op2 on 1=1 and op2.optiondesc='Email Address' and op2.optionsgroup=1 left join ppv0008003.options op3 on 1=1 and op3.optiondesc='Email From Name' and op3.optionsgroup=1 left join ppv0008003.options op4 on 1=1 and op4.optiondesc='Email Host' and op4.optionsgroup=1 left join ppv0008003.options op5 on 1=1 and op5.optiondesc='Email Security' and op5.optionsgroup=1 left join ppv0008003.options op6 on 1=1 and op6.optiondesc='Email Port' and op6.optionsgroup=1 left join ppv0008003.options op7 on 1=1 and op7.optiondesc='Email From' and op7.optionsgroup=1 where op1.optiondesc='Email Password' and op1.optionsgroup=1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
       echo $row["epw"];
       echo $row["ea"];
       echo $row["efn"];
       echo $row["eh"];
       echo $row["es"];
       echo $row["ep"];
       echo $row["ef"];
    }
} else {
}
$conn->close();
else {}
}
?>
