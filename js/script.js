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

function date_heure(date_heure)
{
    date = new Date;
    annee = date.getFullYear();
    moi = date.getMonth()+1;

    j = date.getDate();
    h = date.getHours();
    if(h<10)
    {
	    h = "0"+h;
    }
    m = date.getMinutes();
    if(m<10)
    {
	    m = "0"+m;
    }
    s = date.getSeconds();
    if(s<10)
    {
	    s = "0"+s;
    }
    resultat = 'Date: '+j+'/'+moi+'/'+annee+' heure: '+h+':'+m+':'+s;
    document.getElementById(date_heure).innerHTML = resultat;
    setTimeout('date_heure("'+date_heure+'");','1000');
    return true;
}