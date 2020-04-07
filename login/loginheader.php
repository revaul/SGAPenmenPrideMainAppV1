<?php
header("Location: http://penmenpride.snhusga.org");
exit();
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
$_SESSION['originaladdress']=$_SERVER['REQUEST_URI'];
if (!isset($_SESSION['username'])) {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

  $url = $protocol . $_SERVER['HTTP_HOST'] . "/login/main_login.php";
    return header("location:".$url);
}
