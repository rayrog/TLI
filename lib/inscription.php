<?php 

if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email_addr'], $_POST['mdp'], $_POST['mdp_repeat'])) {
  $cryptedPassword = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
  if ($_POST['mdp'] == $_POST['mdp_repeat']) { 
  }
  $bdd->prepare('INSERT INTO utilisateur(login, pass, mail) VALUES(:login, :pass, :email)');

  $req->execute(array(
      'login' => $_POST['first_name'] . ' ' . $_POST['last_name'],
      'pass' => $cryptedPassword,
      'email' => $_POST['email_addr']
  ));   
}