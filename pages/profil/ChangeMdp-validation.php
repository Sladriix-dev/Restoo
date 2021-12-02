<?php


include "../header.php";
//require_once "../../../vendor/autoload.php";
require ROOT."/vendor/autoload.php";
//include_once "../../App/Entite/User.php";
//include_once "../../App/Controller/UserProfileController.php";
use App\Controller\UserProfileController;

$_SESSION['MessageOptions'] = "";

if($_POST["password"])
{  
    $oldPassword = $_POST["password"]; 
    $newPassword = $_POST["newPassword"];  

    $requete = new UserProfileController();
    $process = $requete->ChangePassword($oldPassword, $newPassword);     
}
else echo "Opération erronnée.";

echo '<script type="text/javascript">
window.location = "../../pages/profil/profil.php?p=Options"
</script>';       
?>