<!DOCTYPE HTML>
<?php
include("haut.php");
?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link type='text/css' rel="stylesheet" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cedarville+Cursive' rel='stylesheet' type='text/css'>	
	</head>
		<title>New World</title>
	<center>
	<p></p>
	<form method="POST" action="gestionUtil.php">
		<div id="inscription">
				<fieldset>
					<center>
					<legend> Connexion </legend>
				
					<p>
						<label for "utilPseudo"> Pseudo : </label>
						<input type="text" name="utilPseudo" id="utilPseudo" placeholder="Votre pseudo">
						<br>
					</p>
					<p>
						<label for "utilMdp"> Mot de passe : </label>
						<input type="password" name="utilMdp" id="utilMdp" placeholder="Votre Mot de passe">
						<br>
					</p>
					<p>
					<a href="inscription.php"><font color=white>Vous ne possédez pas de compte? inscrivez-vous ici !</font></a>
					</p>
						<input type="submit" name="btConnexion" id="btConnexion" value="Connexion">
					</center>
				</fieldset>
				<img id="jardinier" src="image/jardinier.jpg">
				<img id="boucher" src="image/boucher.jpg">
			<p>
			</p>
		</div>
	</form>
	</center>
<?php
include("bas.php");
?>

