$(function(){
	$("#envoyer").click(function(){
		var valid = true;
		if($("#login").val()==""){
			$("#login").css("border-color","#FF0000");
			$("#login").next(".error-message").text("Le champ login est vide");
			valid = false;
		}
		else{
			$("#login").css("border-color","#00FF00");
			$("#login").next(".error-message").text("");
		}

		if($("#password1").val()==""){
			$("#password1").css("border-color","#FF0000");
			$("#password1").next(".error-message").text("Le champ mot de passe est vide!");
			valid = false;
		}
		else{
			$("#password1").css("border-color","#00FF00");
			$("#password1").next(".error-message").text("");
		}

		if($("#confirmPassword").val()==""){
			$("#confirmPassword").css("border-color","#FF0000");
			$("#confirmPassword").next(".error-message").text("Le champ confirmation du mot de passe est vide!");
			valid = false;
		}
		else{
			$("#confirmPassword").css("border-color","#00FF00");
			$("#confirmPassword").next(".error-message").text("");
		}

		if($("#email").val()==""){
			$("#email").css("border-color","#FF0000");
			$("#email").next(".error-message").text("Le champ mail est vide!");
			valid = false;
		}
		else{
			if(!$("#email").val().match(/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i)){
				$("#email").css("border-color","#FF0000");
				$("#email").next(".error-message").text("Le mail n'est pas valide!");
				valid = false;
			}
			else{
				$("#email").css("border-color","#00FF00");
				$("#email").next(".error-message").text("");
			}
		}

		if($("#phone").val()==""){
			$("#phone").css("border-color","#FF0000");
			$("#phone").next(".error-message").text("Le champ t&eacutel&eacutephone est vide!");
			valid = false;
		}
		else{
			$("#phone").css("border-color","#00FF00");
			$("#phone").next(".error-message").text("");
		}

		if($("#adresse").val()==""){
			$("#adresse").css("border-color","#FF0000");
			$("#adresse").next(".error-message").text("Le champ adresse est vide!");
			valid = false;
		}
		else{
			$("#adresse").css("border-color","#00FF00");
			$("#adresse").next(".error-message").text("");
		}

		if($("#codePostal").val()==""){
			$("#codePostal").css("border-color","#FF0000");
			$("#codePostal").next(".error-message").text("Le champ code postal est vide!");
			valid = false;
		}
		else{
			$("#codePostal").css("border-color","#00FF00");
			$("#codePostal").next(".error-message").text("");
		}

		if($("#localite").val()==""){
			$("#localite").css("border-color","#FF0000");
			$("#localite").next(".error-message").text("Le champ Localit&eacute est vide!");
			valid = false;
		}
		else{
			$("#localite").css("border-color","#00FF00");
			$("#localite").next(".error-message").text("");
		}
		
		return valid;
	});
});