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
    
        <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
        <input type="radio" name="slider" class="slide-radio2" id="slider_2">
        <input type="radio" name="slider" class="slide-radio3" id="slider_3">
        <input type="radio" name="slider" class="slide-radio4" id="slider_4">
        <input type="radio" name="slider" class="slide-radio4" id="slider_5">

        <div class="slider-pagination">        
            <label for="slider_1" class="page1"></label> 
            <label for="slider_2" class="page2"></label>
            <label for="slider_3" class="page3"></label>
            <label for="slider_4" class="page4"></label>
            <label for="slider_5" class="page5"></label>

        </div>
    
        <div class="next control">
            <label for="slider_1" class="numb1"><i class="fa fa-arrow-circle-right"></i></label>
            <label for="slider_2" class="numb2"><i class="fa fa-arrow-circle-right"></i></label>
            <label for="slider_3" class="numb3"><i class="fa fa-arrow-circle-right"></i></label>
            <label for="slider_4" class="numb4"><i class="fa fa-arrow-circle-right"></i></label>
            <label for="slider_5" class="numb5"><i class="fa fa-arrow-circle-right"></i></label>

        </div>
        <div class="previous control">
            <label for="slider_1" class="numb1"><i class="fa fa-arrow-circle-left"></i></label>
            <label for="slider_2" class="numb2"><i class="fa fa-arrow-circle-left"></i></label>
            <label for="slider_3" class="numb3"><i class="fa fa-arrow-circle-left"></i></label>
            <label for="slider_4" class="numb4"><i class="fa fa-arrow-circle-left"></i></label>
            <label for="slider_5" class="numb5"><i class="fa fa-arrow-circle-left"></i></label>

        </div>
    <!-- On boucle l'ensemble des recettes venant de la fonction getAllRecettes() -->
    <?php foreach($recs as $recette): ?>
    
    <!-- On place l'image en background de la recette -->
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
                <div class="presentation-plats">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                <button class="bouton-commander"> Commander </button>
            </div>
        </div>
    </div>

    <?php endforeach; ?>
    </div>
</section>
<script type="javascript">


</script>
<?php include_once "../footer.php" ?>