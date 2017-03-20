<?php


if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email_addr'], $_POST['mdp'], $_POST['mdp_repeat'])) {
  try {
      // On se connecte à MySQL

      $bdd = new PDO('mysql:host=localhost;dbname=user;charset=utf8', 'root', 'toor');
  } catch(Exception $e) {
    // En cas d'erreur, on affiche un message
    die("Erreur de saisie");
  }
  // Hachage du mot de passe

  $cryptedPassword = password_hash($_POST['mdp'], PASSWORD_BCRYPT);

  if ($_POST['mdp'] == $_POST['mdp_repeat']) {
  }
  
  
  // Insertion
  $req = $bdd->prepare('INSERT INTO utilisateur(login, pass, mail) VALUES(:login, :pass, :email)');

  $req->execute(array(
      'login' => $_POST['first_name'] . ' ' . $_POST['last_name'],
      'pass' => $cryptedPassword,
      'email' => $_POST['email_addr']
  ));   
}