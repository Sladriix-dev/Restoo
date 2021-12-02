<?php 

include "../header.php";
use App\Controller\CommandeController;

$commande = new CommandeController();
// Récupération des recettes via la classe
$commandes = $commande->listAllCartCommand($_SESSION['util_id']);

?>

<section>

        <?php foreach($commandes as $commande): ?>
            <input name="description" value="<?= $commande->commande_id ?>" required>
        <?php endforeach; ?>

</section>
<?php include_once "../footer.php" ?>
