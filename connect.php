<?php
function connexion ()
{
	//Déclaration des variables
	$serveur="localhost";
	$basededonnee="maBase";
	$user="root";
	$motdepasse="tnour/05/";

	//Connexion à la base de données
	return mysqli_connect($serveur, $user, $motdepasse, $basededonnee);
}
?>
