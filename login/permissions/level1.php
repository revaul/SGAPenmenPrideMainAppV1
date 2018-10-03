<?php 
$userlevel = -1;
$userlevel = $_SESSION['userlevel'];
if($userlevel<1){
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$url = $protocol . $_SERVER['HTTP_HOST'] . "/403forbidden.php";
  return header("location:".$url);
  }
