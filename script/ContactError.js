$(function(){
	$("#envoyer").click(function(){
		var valid = true;
		if($("#nom").val()==""){
			$("#nom").css("border-color","#FF0000");
			$("#nom").next(".erreur-message").text("Le champ nom est vide");
			valid = false;
		}
		else{
			$("#nom").css("border-color","#00FF00");
			$("#nom").next(".erreur-message").text("");
		}

		if($("#email").val()==""){
			$("#email").css("border-color","#FF0000");
			$("#email").next(".erreur-message").text("Le champ email est vide!");
			valid = false;
		}
		else{
			if(!$("#email").val().match(/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i)){
				$("#email").css("border-color","#FF0000");
				$("#email").next(".erreur-message").text("L'adresse email n'est pas valide!");
				valid = false;
			}
			else{
				$("#email").css("border-color","#00FF00");
				$("#email").next(".erreur-message").text("");
			}
		}

		if($("#message").val()==""){
			$("#message").css("border-color","#FF0000");
			$("#message").next(".erreur-message").text("Vous n'avez pas &eacutcrit de message");
			valid = false;
		}
		else{
			$("#message").css("border-color","#00FF00");
			$("#message").next(".erreur-message").text("");
		}
		return valid;
	});
});
