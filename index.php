<?php 

//Connection à la base de donnée ( objet dans dp.php)
require_once('lib/db.php');
$bdd=DB::getDB();
session_start();
require_once('vendor/autoload.php');


$loader = new Twig_Loader_Filesystem("fragments");
$twig = new Twig_Environment($loader, array());

$twig->display("head_page.html");
$arg=null;
if(!isset($_SESSION["login"])){
  $arg=false;
} else {
  $arg=true;
}
echo $twig->render('login.html', array('arg' => $arg));
$twig->display("menu.html");


//Affiche la page sélectionnée dans le menu
if(isset($_GET['p'])){
switch ($_GET['p']){
  case "help":
    $twig->display("help.html");
    break;
  case "mentions":
    $twig->display("mentions.html");
    break;
  case "symptome":
   
    require_once('lib/pathology.php'); // Don't know how to call it from pathology.php
    $twig->display("pathology.html");
        
    break;
  default:
    $twig->display("index.html");
    break;
} 
}else { //Si on a pas d'arguments dans le GET
  $twig->display("index.html");
  //debug luka : 
}

$twig->display("foot_page.html");
?>