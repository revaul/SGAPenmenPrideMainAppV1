<?php require "login/loginheader.php"; ?>
               <?php
			   ini_set('max_execution_time', 300);
                    require 'mysqlkeys.php';
					// output headers so that the file is downloaded rather than displayed
header('Content-type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="OSIDataConversionExport.csv"');
 
// do not cache the file
header('Pragma: no-cache');
header('Expires: 0');
 
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');
 
// send the column headers
fputcsv($output, array('StudentID'));
 
// Open the connection
$link = mysqli_connect($host, $user, $password, $dbname);
 
//query the database
$query = "SELECT * from osiexport;";
 
if ($rows = mysqli_query($link, $query))
{
    // loop over the rows, outputting them
    while ($row = mysqli_fetch_assoc($rows))
    {
        fputcsv($output, $row);
    }
}
// close the connection
mysqli_close($link);

?>