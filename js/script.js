(function ($) {
  $(function () {
    $("#search").click(function () {
      $(".search").toggleClass("hidden-xs");
      $(".search").toggleClass("visible-xs");
    });
    $("#login").click(function () {
      $(".login").toggleClass("hidden-xs");
      $(".login").toggleClass("visible-xs");
    });

  });
})(jQuery)


//function checkAddr(input) {
//	if (input.value != document.getElementById('email_addr').value) {
//	      input.setCustomValidity('Les deux adresses e-mail ne correspondent pas.');
//	} else {
//      // le champ est valide : on réinitialise le message d'erreur
//	   input.setCustomValidity('');
//	}
//}
//function checkMdp(input) {
//	if (input.value != document.getElementById('mdp').value) {
//	      input.setCustomValidity('Les deux mots de passe ne correspondent pas.');
//	} else {
//	      // le champ est valide : on réinitialise le message d'erreur
//	      input.setCustomValidity('');
//	}
//}