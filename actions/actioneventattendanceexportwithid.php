<?php require "../login/loginheader.php"; ?>
			  <?php
				// GOAL: I want to change the file name to include csv and be shorter
// TODO: Post Field Verification
				 $eventid= $_POST["eventid"];
			   ini_set('max_execution_time', 300);
                    require '../mysqlkeys.php';
					// output headers so that the file is downloaded rather than displayed
header('Content-type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="EventAttendanceListWithStudentIDs.csv"');

// do not cache the file
header('Pragma: no-cache');
header('Expires: 0');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// send the column headers
fputcsv($output, array('Email', 'First Name', 'Last Name', 'Student ID'));

// Open the connection
$link = mysqli_connect($host, $user, $password, $dbname);

//query the database
$query = "select studentlisting.EmailAddress, studentlisting.StudentFirstName, studentlisting.StudentLastName, scannerlinkouter.ScannerLinkAddressOuter from scanner join eventnames on eventnames.EventID=scanner.EventID join datestosemesters on datestosemesters.Date=eventnames.EventDate join semester on datestosemesters.Semester=semester.Semester inner join scannerlinkouter on scanner.Scanner=scannerlinkouter.Scanner inner join scannerlinkinner on scannerlinkouter.ScannerLinkAddressOuter=scannerlinkinner.ScannerLinkAddress inner join studentlisting on scannerlinkinner.Email=studentlisting.EmailAddress where eventnames.EventID = ".$eventid." AND studentlisting.EmailAddress!='sga@snhu.edu' order by studentlisting.EmailAddress;";

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
