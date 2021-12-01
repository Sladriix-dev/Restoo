<?php 

include "../header.php";

use App\Recettes\Recettes;

$rec = new Recettes();
// Récupération des recettes via la classe
$recs = $rec->getAllRecettes();
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
        <button>Ajouter ce plat</button>
    </ul>
    <ul class="recettes" style='background-image: url("../../uploads/<?= $recette->rec_image ?>")'>
        <h3><?= $recette->rec_nom ?></h3>
        <button>Ajouter ce plat</button>
    </ul>

    <ul class="recettes" style='background-image: url("../../uploads/<?= $recette->rec_image ?>")'>
        <h3><?= $recette->rec_nom ?></h3>
        <button>Ajouter ce plat</button>
    </ul>

    <?php endforeach; ?>
</section>
<script type="javascript">


    let test =  document.querySelectorAll('');
</script>
<?php include_once "../footer.php" ?>
