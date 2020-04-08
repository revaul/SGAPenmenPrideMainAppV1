<?php
session_start();

//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
if($_SESSION['username']=='rce423'){
}
else{
  header("Location: http://penmenpride.snhusga.org/maintenance.php");
  exit();
}
$_SESSION['originaladdress']=$_SERVER['REQUEST_URI'];
if (!isset($_SESSION['username'])) {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

  $url = $protocol . $_SERVER['HTTP_HOST'] . "/login/main_login.php";
    return header("location:".$url);
}
