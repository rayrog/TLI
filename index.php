<?php 
require_once('login.php');

session_start(); // start or resume session
if(isset($_SESSION['isConnect'])){
  echo file_get_contents ('fragments/index');
} else {
  login();
}

?>

