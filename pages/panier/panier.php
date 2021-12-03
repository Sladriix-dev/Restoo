<?php 

include "../header.php";
use App\Controller\CommandeController;

$commande = new CommandeController();
$userId = $_SESSION['util_id'];
// Récupération des recettes via la classe
$commandes = $commande->listAllCartCommand($userId);

if (isset($_POST['emptyCart'])) {
    $commande->emptyCart($userId);
    
}

?>

<section style="text-align: center;">

        <?php foreach($commandes as $commande): ?>
            <p> <?= $commande->rec_nom ?>  <?= $commande->rec_prix ?> € </p>
        <?php endforeach; ?>

        <form action="panier_validation.php" method="POST">
            <input type="submit" value="Payer">
        </form>
        <form action="panier.php" method="POST">
            <input type="submit" value="Vider le panier">
            <input type="hidden" name="emptyCart" value="emptyCart">
        </form>
</section>
<?php include_once "../footer.php" ?>
