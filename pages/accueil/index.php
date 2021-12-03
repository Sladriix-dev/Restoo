
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
            <div class="etoiles-restoo">
                <div class="etoiles">
                    <i class="far fa-star" style="color: rgba(255,77,18,1)"></i>
                    <i class="far fa-star" style="color: rgba(255,77,18,1)"></i>
                    <i class="far fa-star" style="color: rgba(255,77,18,1)"></i>
                    <i class="far fa-star" style="color: rgba(255,77,18,1)"></i>
                </div>
            <div class="titre-restoo"> RESTOO </div>
                <div class="etoiles">
                    <i class="far fa-star" style="color: rgba(255,77,18,1)"></i>
                    <i class="far fa-star" style="color: rgba(255,77,18,1)"></i>
                    <i class="far fa-star" style="color: rgba(255,77,18,1)"></i>
                    <i class="far fa-star" style="color: rgba(255,77,18,1)"></i>
                </div>
            </div>
            <div class="presentation">
                <div>Adresse mythique de l'IPSSI, le Restoo est une véritable brasserie Parisienne, chaleureuse et vivante.<br /><br />
                     Ouvert toute la semaine, commandez en quelques clics votre repas du midi ou du soir, livraison à domicile.<br /><br />
                     Des plats à base d'ingrédients de saison !<br /></div>
                <br>
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
        <div class="description-plats"> TERRE ET MER DES GOURMETS </div>
        <div class="etoiles">
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        </div>
        <div class="presentation-plats">Quel délicieux mariage que celui de la terre et de la mer. Délicat et parfois étonnant, l'art réside dans le choix des associations. Raffinée pour les jours de fêtes ou préparée pour un usage quotidien, la cuisine terre et mer sait amadouer les palais les plus exigeants.</div>
        <button class="bouton-commander"> Commander </button>
    </div>
</div>

<?php include_once "../footer.php" ?>