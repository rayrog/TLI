	function checkAddr(input) {
	  if (input.value != document.getElementById('email_addr').value) {
		input.setCustomValidity('Les deux adresses e-mail ne correspondent pas.');
	  } else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
	}
	function checkMdp(input) {
	  if (input.value != document.getElementById('mdp').value) {
		input.setCustomValidity('Les deux mots de passe ne correspondent pas.');
	  } else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
	}

	
	function getPrix(fm){
	var xhr = new XMLHttpRequest();
	prepareXHR(xhr,fm);
	xhr.open("GET", "http://www.currentplanetarypositions.com/cgi-bin/mpsyndicate.cgi", true);
	xhr.send();
	
}
function traitement(reponse,fm){
	//pensez bien à ce que la ligne suivante implique dans le document HTML!!!
	fm.prix_nights.value=reponse;
}


function prepareXHR(xhr,fm){
	//création d'une fonction qui se déclenchera chaque fois que l'état de xhr change: 
	// readyState = 4 signifie que le serveur a répondu et que la réponse a été donnée
	//  status = 200 signifie que la requête a bien été envoyée (404 signifierait pas de ressource à cette adresse
	// status = 0 signifie qu'il n'y a pas encore de requête envoyée
	xhr.onreadystatechange = function() {
		
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
			
			/*xhr.responseText contient la réponse du serveur distant
			 *		 on utilise une fonction traitement (callback) pour traiter cette réponse, histoire de ne pas encombrer le code ici!
			 */
			traitement(xhr.responseText,fm);
			
		}
		
	};	
}
	
// 	function getTotal(form){
// 		form.total.value = (form.nights.valueAsNumber * 15) + 
// 		((form.guests.valueAsNumber - 1) * 10) + form.guests.valueAsNumber*((form.midi.valueAsNumber * 5) + (form.soir.valueAsNumber * 15))
// 	}
// 	function checkDate(input){
// 	if (input.value <= document.getElementById('arrival_dt').value) {
// 	input.setCustomValidity('Les dates ne sont pas valides.');  
// 	}
// 	else{
// 	  input.setCustomValidity('');
// 	}
// 	  
// 	}
	