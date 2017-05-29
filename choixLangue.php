<?php	
	require"./connect.php";
	$maBase=connexion();
	include("haut.php");
?>

<table id="tbType" align="center">
	<!-- France -->
	<tr>
		<td>France</td>
	</tr>
	<tr>
		<td><a href="accueil.php"><img src="image/drapeauFrance.png"</a></td>
	</tr>

	<!-- Allemagne -->
	<tr>
		<td>Allemagne</td>
	</tr>
	<tr>
		<td><a href="German/willkommen.php"><img src="image/drapeauAllemagne.png"</a></td>
	</tr>

	<!-- Anglais -->
	<tr>
		<td>Anglais</td>
	</tr>
	<tr>
		<td><a href="English/home.php"><img src="image/drapeauAnglais.png"</a></td>
	</tr>

	<!-- Espagne -->
	<tr>
		<td>Espagne</td>
	</tr>
	<tr>
		<td><a href="Italy/bienvenida.php"><img src="image/drapeauEspagne.png"</a></td>
	</tr>

	<!-- Italie -->
	<tr>
		<td>Italie</td>
	</tr>
	<tr>
		<td><a href="Spain/benvenuto.php"><img src="image/drapeauItalie.png"</a></td>
	</tr>
</table>

<?php
include("bas.php");
?>
