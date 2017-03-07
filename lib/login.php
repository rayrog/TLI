<?php
  
  require_once('params/login.php');

  function login(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){ // To prevent hack
    $login = $_POST['id_user'];
    $pass = $_POST['pass_user'];
    if(!isset($login) || $login ==0 || !isset($pass) || $pass == 0 ){ 
      $error_message = 'Le formulaire contient une erreur';
    } else {
      if($login == $adminlogin && $pass == $adminpass){
        $_SESSION["id_user"] = $login;
        $_SESSION["isConnect"] = true; //flag is set here
      }
    }
  }

  header('location:index.php');
  }
?>