<?php
include "../header.php";

use App\Recettes\Recettes;
use App\User\Admin;

$rec = new Recettes();
$admin = new Admin();

//On récupére l'ensemble des recettes
$recs = $rec->getAllRecettes();

//On vérifie que la session existe pour éviter de recevoir une erreur PHP
if (isset($_SESSION['util_isAdmin'])) {
    
    //Si l'utilisateur n'est pas un admnistrateur et essaye d'accéder au lien, celui-ci est redirigé vers la page d'accueil
    if ($_SESSION['util_isAdmin'] = false) {
        header('Location: ../accueil/index.php');
        exit();
    }
}

?>

<section class="admin">

    <h1>Bienvenue sur l'espace admnistration. </h1>
        <nav>
            <ul>

                <a href="../recettes/recettes.php">Liste des recettes</a>

                <?php foreach($recs as $recette): ?>
                
                <!-- On place l'image en background de la recette -->
                <ul class="recettes" style='background-image: url("../../uploads/<?= $recette->rec_image ?>")'>
                    <h3><?= $recette->rec_nom ?></h3>
                    <button>Ajouter ce plat</button>
                </ul>
            
                <?php endforeach; ?>

                <?php 

            

                echo '<a href="../connexion/connexion.php"><button>Ajouter une recette</button></a>';

                echo '<a href="../inscription/inscription.php">Supprimer la recette</a>';
                echo '<a href="../inscription/inscription.php">Rendre ce plat disponible</a>';

                
                ?>

            </ul>
        </nav>
</section>

<?php
include "../footer.php"; 
?>