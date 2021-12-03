<?php 

include "../header.php";
use App\Controller\RecettesController;
use App\Controller\CommandeController;

$rec = new RecettesController();
$com = new CommandeController();
$index = 0;

// Récupération des recettes via la classe
$recs = $rec->getAllRecettes();

//On vérifie que l'utilisateur a ajouté un produit à son panier
if (isset($_POST['rec_id'])){
        $rec_id = $_POST['rec_id'];
        $com->addCart($_SESSION['util_id'],$rec_id);
    }

?>  
<section id="recettes" class="animate form">

    <!-- L'outil de recherche appelle la méthode pour chercher une ou des recettes spécifiques -->
    <form class="search" name="searchRecette" action="search.php" method="POST">
    <input type="text" name="searchRecette">
        <label for="searchRecette"></label>
        <button>Rechercher</button>
    </form>

    <div class="css-slider-wrapper">

        <?php $index = 0; foreach($recs as $recette): ?>
        <?php $index++; if ($index ==1) { echo '<input type="radio" name="slider" class="slide-radio1" checked id="slider_1">';} ?>    
            <input type="radio" name="slider" class="slide-radio<?php echo $index; ?>" id="slider_<?php echo $index; ?>">
        <?php endforeach; ?>

        <div class="slider-pagination">    
            <?php $index = 0; foreach($recs as $recette): ?>
            <?php $index++; ?>    
            <label for="slider_<?php echo $index; ?>" class="page<?php echo $index; ?>"></label> 
            <?php endforeach; ?>
        </div>
    
        <div class="next control">
            <?php $index = 0; foreach($recs as $recette): ?>
            <?php $index++; ?>
            <label for="slider_<?php echo $index; ?>" class="numb<?php echo $index; ?>"><i class="fa fa-arrow-circle-right"></i></label>
        <?php endforeach; ?>
        </div>
        <div class="previous control">
            <?php $index = 0; foreach($recs as $recette): ?>
            <?php $index++; ?>
            <label for="slider_<?php echo $index; ?>" class="numb<?php echo $index; ?>"><i class="fa fa-arrow-circle-left"></i></label>
        <?php endforeach; ?>

        </div>
    <!-- On boucle l'ensemble des recettes venant de la fonction getAllRecettes() -->
    <?php $index = 0; foreach($recs as $recette): ?>

    <!-- On incrémente l'index pour  -->
    <?php $index++; ?>
    <div class="slider slide<?= $index ?>">
        <div class="container-plats-recettes">
            <div class="photo-plats-recettes ">
                <img src="../../uploads/<?= $recette->rec_image ?>">
            </div>
            <div class="texte-plats-recettes">
                <div class="titre-plats"><?= $recette->rec_nom ?></div>
                <div class="barre-plats"></div>
                <div class="etoiles">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="presentation-plats"><?= $recette->rec_desc ?></div>
                <form method="post" action="recettes.php">
                    <input type="hidden" name="rec_id" value="<?= $recette->rec_id ?>">
                    <button type="submit" class="bouton-commander"> Commander </ type="submit" class=">
                </form>
            </div>
        </div>
    </div>

    <?php endforeach; ?>
    </div>
</section>

<?php include_once "../footer.php" ?>