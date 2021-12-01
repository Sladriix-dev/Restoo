<?php
include "../header.php";

use App\Controller\Recettes;
use App\Controller\Admin;

$rec = new Recettes();
$admin = new Admin();

//On récupére l'ensemble des recettes
$recs = $rec->getAllRecettes();

//On vérifie que la session existe pour éviter de recevoir une erreur PHP
if (isset($_SESSION['util_isAdmin'])) {
    
    //Si l'utilisateur n'est pas un admnistrateur et essaye d'accéder au lien, celui-ci est redirigé vers la page d'accueil
    if ($_SESSION['util_isAdmin'] === false) {
        header('Location: ../accueil/index.php');
        exit();
    }
}
?>
<section class="admin">

    <form enctype="multipart/form-data" method="POST"></form>;
    
</section>

<script>
    $(document).ready( function () {
        $('#recettes_list').DataTable();
    } );
</script>
<?php
include "../footer.php"; 
?>

