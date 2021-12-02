<?php


include "../header.php";
//require_once "../../../vendor/autoload.php";
require ROOT."/vendor/autoload.php";
//include_once "../../App/Entite/User.php";
//include_once "../../App/Controller/UserProfileController.php";
use App\Controller\UserProfileController;

$_SESSION['MessageOptions'] = "";

if($_POST["StayLogged"])
{  
    $StayLogged = $_POST["StayLogged"];
    $fonction = new UserProfileController();
    $fonction->ChangeRéglages($StayLogged);     
    echo $StayLogged;
}
else echo "Opération erronnée.";

echo '<script type="text/javascript">
window.location = "../../pages/profil/profil.php?p=Options"
</script>';       
?>