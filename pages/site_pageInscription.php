<!DOCTYPE html> 
<html lang="en"> 
  <head>
    <link rel="stylesheet" type="text/css" href="css_screen.css" media="screen">
    <link rel="stylesheet" href="css_mobile.css" type="text/css" media="screen and (max-width: 640px)"/>
    <!-- s'applique dans le cas d'un ecran ayant une taille inferieure a 640px-->
    <link rel="stylesheet" href="css_print.css" media="print">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medecine chinoise</title>
   <script type='text/javascript' src='/fs03/share/users/corentin.dominguez/home/Documents/Semestre8/TLI/TpFilRouge/NotreSite/js/script.js'></script>
  </head>
   <body>
    <header>
	<?php include('menu.php'); ?>
    </header>
  <section>
    <article>
     
      <h2> Introduction </h2>
      <p> intro...</p>
	</article>
	<article>
	<p> Ici article 2</p>
	</article>
      </section>
      <h2>S'inscrire</h2>
	<form oninput="" method="post" action="lib/main.php?variable=truc">
		<ul id="formulaire">
			<li>
				<label for="first_name">Prénom&nbsp;:</label>
				<input type="text" id="first_name" name="first_name" placeholder="John" required>
			</li>
			<li>
				<label for="last_name">Nom&nbsp;:</label>
				<input type="text" id="last_name" name="last_name" placeholder="SMITH" required>
			</li>
			<li>
				<label for="email_addr">Adresse e-mail&nbsp;:</label>
				<input type="email" id="email_addr" name="email_addr" required>
			</li>
			<li>
				<label for="email_addr_repeat">Confirmez l'adresse e-mail&nbsp;:</label>
				<input type="email" id="email_addr_repeat" name="email_addr_repeat" required 
					oninput="checkAddr(this)">
			</li>
			<li>
				<label for="mdp">Mot de passe&nbsp;:</label>
				<input type="password" id="mdp" name="mdp" required>
			</li>
			<li>
				<label for="mdp_repeat">Confirmez le mot de passe&nbsp;:</label>
				<input type="password" id="mdp_repeat" name="mdp_repeat" required 
					oninput="checkMdp(this)">
			</li>
			<li>
				<input type="submit" value="Valider"/> 
			</li>
		</ul>
	</form>
     <footer>
      <p> Ici notre fin de page</p>
     </footer>
  </body>
  
 </html>
