<?php 

require_once('vendor/autoload.php');
session_start();

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
    $twig->display("pathology.html");
    break;
  default:
    $twig->display("index.html");
    break;
} 
}else { //Si on a pas d'arguments dans le GET
  $twig->display("index.html");
  //debug luka : 
  $twig->display("pathology.html");
}

$twig->display("foot_page.html");
?>