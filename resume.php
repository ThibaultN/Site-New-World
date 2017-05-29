<?php
session_start();
if (!isset($_SESSION['actif']))
{
	$_SESSION['actif']=0;
}

?>
<!doctype html>
<?php
if (isset($_POST['btDeco']))
{
	$_SESSION['actif']=0;
	header("location:accueil.php");

}
?>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link type='text/css' rel="stylesheet" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cedarville+Cursive' rel='stylesheet' type='text/css'>	
		<title>New World</title>
	</head>
	<body>
		<div id='statut'> 
			<span>
				
				<a href="" style="text-decoration:none;font-size:small" class="lien">&nbsp;&nbsp;| France</a>
<?php
if ($_SESSION['actif']==0)
{


?>
				<a href="inscription.php" style="text-decoration:none;font-size:small" class="lien">&nbsp;&nbsp;| Inscription</a>
				
				<a href="connexion.php" style="text-decoration:none;font-size:small" class="lien">&nbsp;&nbsp;| Connexion</a>
<?php
}
else 
{
echo $_SESSION['nom']," ", $_SESSION['prenom'];
?>
				<form method="POST" action="">
				<input type="submit" value="Déconnexion" name="btDeco"> 
				</form>
<?php
}

?>
			</span>
		</div>
		<div id='barreMenu'>
			<p>
				<a href="accueil.php" style="text-decoration:none" class="lien">NW</a>
				<a href="acheter.php" style="text-decoration:none" class="lien">Acheter</a>
				<a href="produire.php" style="text-decoration:none" class="lien">Produire</a>
				<a href="accueil.php" style="text-decoration:none" class="lien">Distribuer</a>
				<input id="barreRecherche" type="text" placeHolder="  Rechercher"/>
				<a href="panier.php" style="text-decoration:none;font-size:20px;color:yellow;"><img src="image/panier.png" style="width:50px"></a>

			</p>
		</div>
<?php
include("haut.php");
?>

<div id='message'>
	<p>      Les meilleurs produits de saison      </p>
	<p>Du producteur à l'artisan et au consommateur</p>
	<p>   Ni usine, ni camion, ni grande sufrace   </p>
	<p>  La terre et l'homme à nouveau respectées  </p>
	<p>                  New World                 </p>
</div>

<img id="jardinier" src="./image/jardinier.jpg">
<img id="boucher" src="./image/boucher.jpg">

<?php
include("bas.php");
?>

		</body>
		<footer>
		<div id="basPage">
			<div id="gauche">
				<p id="menuBasPrincipal">Participer</p>
				<p id="menuBasPhrase">Proposer des produits</p>
				<p id="menuBasPhrase">Transformer</p>
				<p id="menuBasPhrase">Devenir client</p>
				<p id="menuBasPhrase">Distribuer</p>
			</div>
			<div id="centre">
				<p id="menuBasPrincipal">Comprendre</p>
				<p id="menuBasPhrase">Savoir faire local</p>
				<p id="menuBasPhrase">Réduire les transports</p>
				<p id="menuBasPhrase">Produits frais</p>
				<p id="menuBasPhrase">Qualité</p>
			</div>
			<div id="droite">
				<p id="menuBasPrincipal">Communiquer</p>
				<p id="menuBasPhrase">Les secrets des producteurs</p>
				<p id="menuBasPhrase">Le savoir faire des artisans</p>
				<p id="menuBasPhrase">Les secrets de grand-mère</p>
				<p id="menuBasPhrase">La conservation des aliments</p>
			</div>
			<div id="copy">
				<p>@Copyright NW-2014	|    <a href="" class="lien">Nous contacter</a>	| <a href="" class="lien">mentions légales</a>
			</div>
		</footer>
</html>

