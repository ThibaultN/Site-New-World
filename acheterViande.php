<?php
require"./connect.php";
$maBase=connexion();
include ("haut.php");
$_SESSION['produit']="CHARCUTERIE";
?>

<script language="javascript">
function calcul(pNum){
	document.all['montant'+pNum].value=document.all['prixProduit'+pNum].value*document.all['qteProduit'+pNum].value 
}
</script>
<?php
$reqType="select typeproduitLibelle,typeproduitId from typeproduit natural join surtypeproduit where surtypeproduitId=3";
$curseurType=mysqli_query($maBase,$reqType);
$cptType=0;
$leProduitId="";
while($leType=mysqli_fetch_row($curseurType))
{
	$type=$leType[0];
	$idType=$leType[1];
?>
	<div id="typeProduit"><p><?php echo $type ?></p></div>
<?php
	$reqProduit="select prodId,prodLibelle,prodPhoto from produit natural join typeproduit where produit.typeproduitId=$idType";
	$curseurProduit=mysqli_query($maBase,$reqProduit);

	$cptProduit=0;
	while($leProduit=mysqli_fetch_row($curseurProduit))
	{	
		$produitId=$leProduit[0];
		if (!($produitId==$leProduitId))
		{
		$leProduitId=$produitId;
		$produit=$leProduit[1];
		$produitPhoto=$leProduit[2];
		$cptProduit++;
		$reqLot="select lotPrix,lotQuantite,lotMasseMin, lotId, uniteLibelle from lot inner join produit on produit.prodId=lot.prodId natural join unite where lotQuantite > 0 AND lot.prodId=$produitId";
		$curseurLot=mysqli_query($maBase,$reqLot);
		while($leLot=mysqli_fetch_row($curseurLot))
		{
			$lotPrix=$leLot[0];
			$lotQte=$leLot[1];
			$lotMin=$leLot[2];
			$prixMin=$lotMin*$lotPrix;
			$lotId=$leLot[3];
			$unite=$leLot[4];
?>
	<div id="produit">
		<form method="POST" action="gestionPanier.php"> 
		<img id="photoProduit" src="image/<?php echo $produitPhoto ?>">
		<p id="produitNom" name="produitNom<?php echo $cptType ?>"><?php echo $produit ?></p>
		<input type="text" style="visibility:hidden; float:right"name="nomProduitCache<?php echo $cptType ?>" value="<?php echo $produit ?>"/>
		<input type="text" style="visibility:hidden" name="idLot<?php echo $cptType ?>" value="<?php echo $lotId ?>">
		<input type="hidden" name="prixProduit<?php echo $cptType ?>" value="<?php echo $lotPrix ?>">
		<p id="prixProduit"><label>Prix unitaire : </label><?php echo $lotPrix ?> €</p>
		<p id="qteProduit"><label>Quantité restante : </label><?php echo $lotQte." ".$unite; ?></p>
		<input id="compteurQte" type="number" name="qteProduit<?php echo $cptType ?>" onKeyup="calcul(<?php echo $cptType ?>)" max="<?php echo $lotQte ?>" min="<?php echo $lotMin ?>" value="<?php echo $lotMin ?>">


		<p id="totalCout"><label>Total : </label><input type="text" name="montant<?php echo $cptType ?>"value="<?php echo $prixMin ?>"> €</p>

		<input id="btAjout" type="submit" name="btAjout-<?php echo $cptType ?> " value="Ajouter au panier">
		</form> 

	</div>
<?php
			$cptType++;

		}
		}
			}
}

?>
<?php
include ("bas.php");
?>
