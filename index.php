<?php 

require_once('vendor/autoload.php');


$loader = new Twig_Loader_Filesystem("fragments");
$twig = new Twig_Environment($loader, array());

$twig->display("head_page.html");

$twig->display("menu.html");

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
}

$twig->display("foot_page.html");
?>