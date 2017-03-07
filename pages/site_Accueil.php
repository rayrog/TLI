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
  <body onload="date_heure('date_heure')">
    <header>
	<?php include('menu.php'); ?>
    </header>
    <section>
      <article role ="presentation">
	  <h2> Introduction </h2>
	  <p>Dans le courant du XIX° siècle, grâce aux jésuites revenant de Chine,
	  la Médecine Traditionnelle Chinoise est apparue timidement en occident, et en
	  particulier en France. Même si elle s'est rapidement répandue dans le monde, 
	  ce n'est pourtant que dans les années 1975 que cette science a pris chez nous
	  son véritable essor, tant au niveau de sa <a href="http://www.medecinechinoise.info/"> <em>pratique</em> </a> que dans l'organisation de 
	  son enseignement. De nos jours, elle est donc encore relativement peu connue. 
	  Elle est nommée par les uns "médecine parallèle", par d'autres "douce", "alternative" 
	  ou encore "complémentaire", sans savoir d'ailleurs très bien ce que recouvrent ces expressions.</p>
      <!--   <p>Ce site a pour but de faire découvrir (ou redécouvrir) à nos contemporains
	  ce type de médecine non seulement très riche culturellement et scientifiquement
	  , mais aussi très efficace et éthiquement juste. Indéniablement, la Médecine Traditionnelle
	  Chinoise apporte aujourd'hui à notre société une réponse crédible quant aux grands problèmes de santé.</p>-->
      </article>
      <article>
      </article>
   </section>
   <aside>
      <h2>Se connecter</h2>
	<form oninput="" method="post" action="lib/main.php?variable=truc">
			<div>
				<label for="email_addr">Adresse e-mail&nbsp;:</label>
				<input type="email" id="email_addr" name="email_addr" required>
			</div>
			<div>
				<label for="mdp">Mot de passe&nbsp;:</label>
				<input type="password" id="mdp" name="mdp" required>
			</div>
			<div>
				<input type="submit" value="Valider" /> 
			</div>
			<p> Vous n'avez pas de compte?</p>
			<p>Inscrivez-vous :</p>
			<div class="bouton">
<!-- 				<input type="submit" value="S'inscrire" />  -->
				<input type="button" name="inscription" value="S'inscrire"
				onclick="self.location.href='site_pageInscription.php'"> 
			</div>
	</form>
   </aside>
   <footer>
     <span id="date_heure"></span>
   </footer>
  </body>
 </html>
