
<?php include_once "../header.php" ?>

<?php 

if (isset($_SESSION['alert'])) {
        echo '<div class="alert"><h1>'.$_SESSION['alert'].'</h1></div>';
        unset ($_SESSION['alert']);
    }
    
?>

<div class="image-bg">
    <div class="container">
        <div class="bordures">
            <div class="titre"> RESTOO </div>
            <div class="presentation">
                <div>Chez Restoo, nous ne vous proposons que de la qualité. Alors, venez déguster des plats de renoms pour un prix raisonnable.</div>
                <br><br>
                <h3>Nos qualités </h3>
            </div>
            <div class="barre"></div>
            <div class="certifications">
                <div class="cercle">
                    <img src="../../asset/check-double-solid.svg">
                    <div class="barre-cercle"></div>
                    <div class="texte-cercle"> Avis </div>
                </div>
                <div class="cercle">
                    <img src="../../asset/award-solid.svg">
                    <div class="barre-cercle"></div>
                    <div class="texte-cercle"> Récompenses </div>
                </div>
                <div class="cercle">
                    <img src="../../asset/accessible-icon-brands.svg">
                    <div class="barre-cercle"></div>
                    <div class="texte-cercle"> Accessibilité </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="container-plats">
    <div class="photo-plats">
        <img src="../../asset/PLAT1.jpg">
    </div>
    <div class="texte-plats">
        <div class="titre-plats"> PLAT DU JOUR </div>
        <div class="barre-plats"></div>
        <div class="description-plats"> NOM DU PLAT </div>
        <div class="etoiles">
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        </div>
        <div class="presentation-plats">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
        <button class="bouton-commander"> Commander </button>
    </div>
</div>

<?php include_once "../footer.php" ?>