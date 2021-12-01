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
                <table id="recettes_list" class="display">
                        <thead>
                            <tr>
                                <th>Plat</th>
                            </tr>
                        </thead>
                    <tbody>
                <?php foreach($recs as $recette): ?>
                    <tr><td><h3><?= $recette->rec_nom ?></h3></td></tr>
                <!-- On place l'image en background de la recette -->
                <?php endforeach; ?>
                    </tbody>
                </table>

                <?php 
                echo '<a href="../connexion/connexion.php"><button>Ajouter une recette</button></a>';
                echo '<a href="../inscription/inscription.php">Supprimer la recette</a>';
                echo '<a href="../inscription/inscription.php">Rendre ce plat disponible</a>';
                ?>
            </ul>
        </nav>
</section>

<script>
    $(document).ready( function () {
        $('#recettes_list').DataTable();
    } );
</script>
<?php
include "../footer.php"; 
?>