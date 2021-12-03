<?php


include "../header.php";
//require_once "../../../vendor/autoload.php";
require ROOT."/vendor/autoload.php";
//include_once "../../App/Entite/User.php";
//include_once "../../App/Controller/UserProfile.php";
use App\Controller\UserProfile;

if($_POST["password"])
{  
    $oldPassword = $_POST["password"]; 
    $newPassword = $_POST["newPassword"];  

    $requete = new UserProfile();
    $process = $requete->ChangePassword($oldPassword, $newPassword);     
}
else echo "Opération erronnée.";

echo '<script type="text/javascript">
window.location = "../../pages/profil/profil.php?=Options"
</script>';       
?>