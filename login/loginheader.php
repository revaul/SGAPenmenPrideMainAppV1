<?php
session_start();
if($_SESSION['maintenance']==""){
  include "checkmaintenance.php";
}
if($_SESSION['maintenance']==1 && $_SESSION['userlevel']<6){
  header("Location: http://penmenpride.snhusga.org/maintenance.php");
  exit();
}

$_SESSION['originaladdress']=$_SERVER['REQUEST_URI'];
if (!isset($_SESSION['username'])) {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

  $url = $protocol . $_SERVER['HTTP_HOST'] . "/login/main_login.php";
    return header("location:".$url);
}
