<?php
include "../header.php";

use App\Controller\RecettesController;
use App\Controller\AdminController;

$rec = new RecettesController();
$admin = new AdminController();

//On récupére l'ensemble des recettes
$recs = $rec->getAllRecettes();

//On vérifie que la session existe pour éviter de recevoir une erreur PHP
if (!isset($_SESSION['util_isAdmin'])) {
    //Si l'utilisateur n'est pas un admnistrateur et essaye d'accéder au lien, celui-ci est redirigé vers la page d'accueil
        header('Location: ../accueil/index.php');
        exit();
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
                                <th>Nom du plat</th>
                                <th>Description</th>
                                <th>Prix</th>
                                <th>Disponibilité</th>
                                <th>Modifier ce plat</th>
                                <th>Supprimer ce plat</th>
                            </tr>
                        </thead>
                    <tbody>
                <?php foreach($recs as $recette): ?>
                        <tr>
                            <td><h3><?= $recette->rec_nom ?></h3></td>
                            <td><p><?= $recette->rec_desc ?></p></td>
                            <td><p><?= $recette->rec_prix ?> €</p></td>
                            <td><p><?= $recette->rec_dispo ?></p></td>

                            <td><form method="POST" action="admin_function.php"><input type="hidden" name="modify" value="modify"><input type="hidden" name="rec_id" value="<?= $recette->rec_id ?>"></input><button>Modifier</button></form></td>
                            <td><form method="POST" action="admin_function.php"><input type="hidden" name="delete" value="delete"><input type="hidden" name="rec_id" value="<?= $recette->rec_id ?>"></input><button>Supprimer</button></form></td>
                        </tr>

                <!-- On place l'image en background de la recette -->
                <?php endforeach; ?>
                    </tbody>
                </table>

                <?php 
                echo '<a href="admin_function.php"><button>Ajouter une recette</button></a>';
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