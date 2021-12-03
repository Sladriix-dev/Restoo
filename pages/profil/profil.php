<?php

include "../header.php";
require_once "../../vendor/autoload.php";
use App\Controller\UserProfileController;

?>
<link href="../../css/profil_style.css" rel="stylesheet">
<div class="pageProfil"></br></br>
	
	<div class="TitreProfil">

<?php
if (isset($_SESSION['util_nom']))
{
	//Affichage du contenu du titre ("Profil de Prénom Nom")
    $UserProfile = new UserProfileController();
    $PrénomUserActuel = $UserProfile->getLoggedUserPrénom();
    $Affichage = "<h2>Profil de <b>".$PrénomUserActuel." ".$_SESSION['util_nom']."</h2>";
	echo "<center>".$Affichage."</center>";
?>

	</div>

	<center></br></br>
	<table align=center class=OngletsButtons>
    	<tbody>
			<tr>
			<td>
		

        	<form id="Onglet1" action="profil.php?p=Notes" method="post">
           		<input class="OngletsIndividualButton" type="submit" name = "" value="Notes" >
        	</form>
			</td>
			<td>
        	<form id="Onglet2" action="profil.php?p=Commandes" method="post">
           		<input class="OngletsIndividualButton" type="submit" name = "" value="Commandes" >
        	</form>
			</td>
			<td>
       		<form id="Onglet3" action="profil.php?p=Options" method="post">
            	<input class="OngletsIndividualButton" type="submit" name = "" value="Options" >
        	</form>
			</td>
			</tr>
		</tbody>
	</table>
	</center></br></br>


<?php
//---------------- Inclusion des onglets ------------------

if ((isset($_GET["p"])) && ($_GET["p"] !=""))
 {
	//si ce mot clé existe (contenu dans le p), on le récupère et on 
	//le stocke dans une variable
	$motcle=$_GET["p"];
 }
else //si c'est la page d'accueil (notes) ou que le p= a été tronqué
 {
	$motcle="Notes";
 }

//on va inclure dans notre section la page qui correspond au mot clé
switch ($motcle)
{
	case "Notes" : include_once("onglets/NotesDonnées.php");
					break;
	case "Commandes" : include_once("onglets/HistoriqueCommandes.php");
					break;
	case "Options" : include_once("onglets/Options.php");
					break;
					
	//Redirection vers la page de notes par défaut		
	default : include_once("onglets/NotesDonnées.php");
					break;
}

//-------- Si non connecté, message d'erreur et profil fermé -----------
}
else
{
	echo "<center><h3>Connectez-vous pour accéder à votre profil<h3></center>";

}

?>

	<br/><br/><br/>
</div>
<br/><br/><br/>
<?php include_once "../footer.php" ?>
