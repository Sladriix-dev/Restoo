<?php 

include "../header.php";
use App\Controller\RecettesController;
use App\Controller\CommandeController;

$rec = new RecettesController();
$com = new CommandeController();

// Récupération des recettes via la classe
$recs = $rec->getAllRecettes();

//On vérifie que l'utilisateur a ajouté un produit à son panier
if (isset($_POST['rec_id'])){
    $rec_id = $_POST['rec_id'];
    $rec->

}

?>  
<section id="recettes" class="animate form">

    <!-- L'outil de recherche appelle la méthode pour chercher une ou des recettes spécifiques -->
    <form class="search" name="searchRecette" action="search.php" method="POST">
    <input type="text" name="searchRecette">
        <label for="searchRecette"></label>
        <button>Rechercher</button>
    </form>
    <!-- On boucle l'ensemble des recettes venant de la fonction getAllRecettes() -->
    <?php foreach($recs as $recette): ?>
        
    <!-- On place l'image en background de la recette -->
    <ul class="recettes" style='background-image: url("../../uploads/<?= $recette->rec_image ?>")'>
        <h3><?= $recette->rec_nom ?></h3>
        <form method="POST" action="recettes.php">
            <input type="submit">Ajouter ce plat</input>
            <input type="hidden" name="rec_id" value="rec_id"></input>
        </form>
    </ul>


    <?php endforeach; ?>
</section>
<script type="javascript">


    let test =  document.querySelectorAll('');
</script>
<?php include_once "../footer.php" ?>
