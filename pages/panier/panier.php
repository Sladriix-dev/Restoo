<?php 

include "../header.php";
use App\Controller\CommandeController;

$commande = new CommandeController();
// Récupération des recettes via la classe
$commandes = $commande->listAllCartCommand($_SESSION['util_id']);

?>

<section>

        <?php foreach($commandes as $commande): ?>
            <p> <?= $commande->rec_nom ?> </p>
            <p> <?= $commande->rec_nom ?> </p>
        <?php endforeach; ?>

        <input type="submit">Payer</input>
        <input type="submit">Vider le panier</input>


</section>
<?php include_once "../footer.php" ?>
