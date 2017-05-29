<?php

if(isset($_COOKIE["lang"]))
{
	$lang=$_COOKIE["lang"];
}
else
{
	//si aucune langue n'est déclarée on tente de reconnaître la langue par défaut du navigateur
	$lang=substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
}
?>

		

<?
if($lang=="fr")
{
	include("France.php");
}
elseif($lang=="en")
{
	include("Anglais.php");
}
?>
