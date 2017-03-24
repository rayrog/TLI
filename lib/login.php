<?php
  
        session_start();
$erreur = "";

$bdd = new PDO('mysql:host=localhost;dbname=filrouge;charset=utf8', 'root', 'tp');


    if(isset($_POST['deco']) && $_POST['deco'] == 'deco'){
      session_destroy();
    } else {
      //on test les 2 champs
      if ((isset($_POST['login-email']) && !empty($_POST['login-email'])) && (isset($_POST['login-password']) && !empty($_POST['login-password']))) {
  //	$pass=password_hash($_POST['login-password'], PASSWORD_BCRYPT);
      $pass=$_POST['login-password'];
      $email=$_POST['login-email'];

      //on vérifie la combinaison mail/password
      $req = $bdd->prepare('SELECT login FROM user WHERE email=:email AND pass=:pass');
      $req->execute(array(':email' => $email, ':pass' => $pass));
      $data = $req->fetch();
      if($data[0] !== null){
        $_SESSION["login"] = $data[0];
      } else {
        $erreur = 'Un ou plusieurs champs sont incorrects';
      }		
      }else{
          $erreur = 'Les champs email et password doivent être remplis';
      }
    }
	
    echo $erreur;

  
	header('Location: ../index.php');

?>