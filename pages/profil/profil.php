<?php

include "../header.php";
require_once "../../vendor/autoload.php";
//include_once "../../App/Entite/User.php";
//include_once "../../App/Controller/UserProfile.php";
use App\Controller\UserProfile;


//Titre : Affichage du nom de l'utilisateur
//$nomUserActuel = UserProfile::getLoggedUserNom();

?>
 <link href="../../css/profil.css" rel="stylesheet">
<?php
if (isset($_SESSION['util_nom']))
{
        $UserProfile = new UserProfile();
        $PrénomUserActuel = $UserProfile->getLoggedUserPrénom();
        $Affichage = "<h2>Profil de <b>".$PrénomUserActuel." ".$_SESSION['util_nom']."</h2>";

echo "<center>".$Affichage."</center>";



?>
<center>
</br></br>

<table align=center class=OngletsButtons>
    <tbody>
	<tr>
	<td>
		
<div Class="OngletsProfil">
        <form id="Onglet1" action="profil.php?p=Notes" method="post">
            <input type="submit" name = "" value="Notes" >
        </form>
	</td>
	<td>
        <form id="Onglet2" action="profil.php?p=Commandes" method="post">
            <input type="submit" name = "" value="Commandes" >
        </form>
	</td>
	<td>
        <form id="Onglet3" action="profil.php?p=Options" method="post">
            <input type="submit" name = "" value="Options" >
        </form>
	</td>
</tr>
</tbody>
</table>

</div>
</center>

</br></br>
<?php
//----------------------------------

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

//--------------------------------
}
else
{
	echo "<h3>Connectez-vous pour accéder à votre profil<h3>";
}

?>
<br /><br /><br />

<?php include_once "../footer.php" ?>
