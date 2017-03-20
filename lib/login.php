<?php
  
$erreur = "";

//Si le formulaire connexion a été submit
if (isset($_POST['Login'])) {
	//on test les 2 champs
	if ((isset($_POST['login-email']) && !empty($_POST['login-email'])) && (isset($_POST['login-password']) && !empty($_POST['login-password']))) {
		//on vérifie que le mail existe
		$req = $bdd->prepare('SELECT count(*) FROM user WHERE email="'.mysql_escape_string($_POST['login-email']).'"');
		$req->execute();
		$data = $req->fetch();
		if ($data[0] != 0) {
			//on vérifie la combinaison mail/password
			$req = $bdd->prepare('SELECT pass FROM user WHERE email="'.mysql_escape_string($_POST['login-email']).'"');
			$req->execute();
			$data = $req->fetch();
			$pass=password_hash($_POST['login-password'], PASSWORD_BCRYPT);
			if ($data[0] == $pass) {
				//on récupère le pseudo : 
				$req = $bdd->prepare('SELECT pseudo FROM user WHERE email="'.mysql_escape_string($_POST['login-email']).'"');
				$req->execute();
				$pseudo = $req->fetch();
				//on lance une session
				session_start();
				$_SESSION["login"] = $pseudo[0];
			}else{
				$erreur = 'Password erroné';
			}
		}else{
			$erreur = 'Adresse mail non connue';
		}
	}else{
		$erreur = 'Les champs email et password doivent être remplis';
	}
	echo $erreur;
	
	
}
?>