<div class="container">
	<!-- Section logo-->
	<div class="col-md-2">
		<div id='logo'>
			<a href="index.php"><img src="img/logo.png"></a>
		</div>
	</div>
	<!--Le menu-->
	<div class="col-md-6">
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="inscription.php">Inscription</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="#">Lien3</a></li>
			</ul>
		</nav>
	</div>
	<!--espace Connexion User-->
	<div class="col-md-4">
	<button type="button" class="btn btn-danger" id="clickme">Espace Membre</button>
		<div id='userConnex'>
			<form action='controller/ControlLogin.php' method='post'>
				<div class="form-group">
					<label for="login">Login:</label>
					<input type="text"  name="user">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password"  name="password">
				</div>
				<button type="submit" class="btn btn-default">Envoyer</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function() {
	$( "#userConnex" ).hide();

	$( "#clickme").click(function(){
		$( "#userConnex" ).toggle();
	});


});
</script>