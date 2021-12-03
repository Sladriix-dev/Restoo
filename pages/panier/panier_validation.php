<?php 

include "../header.php";
use App\Controller\CommandeController;
$commande = new CommandeController();
$userId = $_SESSION['util_id'];
// Récupération des recettes via la classe
$commandes = $commande->listAllCartCommand($userId);

?>

<section style="text-align: center;">


        <form action="panier.php" method="POST">
        <?php foreach($commandes as $commande): ?>
            <input> <?= $commande->com_id ?> € </input>
        <?php endforeach; ?>

            <input type="text" value="xxxx xxxx xxxx xxxx">
            <label>Votre code de carte bancaire</label>
            <input type="date" value="xxx">
            <label>Date de fin</label>
            <input type="text" value="xxx">
            <label>Code CVC</label>

            <input type="hidden" name="validationPaiement">
        </form>
     
</section>
<?php include_once "../footer.php" ?>
