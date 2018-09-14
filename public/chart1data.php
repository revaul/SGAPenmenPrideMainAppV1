<?php
//setting header to json
header('Content-Type: application/json');
require 'publicmysqlkeys.php';
//database
define('DB_HOST', $host);
define('DB_USERNAME', $user);
define('DB_PASSWORD', $password);
define('DB_NAME', $dbname);

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}
$idnumnotsafe = $_GET["id"];
$idnumlenchecked;
if (strlen($idnumnotsafe)!=32){
$idnumlenchecked="9bce422057d28895fa132da3d68f065b";
}
else{
$idnumlenchecked = $idnumnotsafe;
}
$idnumlower = strtolower($idnumlenchecked);
$vowels = array("select", "insert", "update", "delete", "execute", "show", "view", "create", "alter", "references", "index", "create", "view", " ", "routine", "event", "drop", "trigger", "grant", "option", "temporary", "table", "lock", ";" ,"and", "or", ",", "echo", "$");
$idnocommands = str_replace($vowels,"",$idnumlower);
$idclean;
if (strlen($idnocommands)!=32){
$idclean="9bce422057d28895fa132da3d68f065b";
}
else{
$idclean = $idnocommands;
}
//query to get data from the table
$query = sprintf("SELECT PubSemester, totpoints, totevents FROM ppv0008004.pointspersemesterordered where Pubrandomkeycol=".$idclean.";");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
?>
