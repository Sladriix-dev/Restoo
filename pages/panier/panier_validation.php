<?php 

include "../header.php";
use App\Controller\CommandeController;
$commande = new CommandeController();
$userId = $_SESSION['util_id'];
// Récupération des recettes via la classe
$commandes = $commande->listAllCartCommand($userId);

if (isset($_POST['validationPaiement'])) {
    $comId = $_POST['com_id'];
    $cb = $_POST['cb'];
    $fin = $_POST['fin'];
    $cvc = $_POST['cvc'];
    $commande->validationPaiement($userId, $comId, $cb, $fin, $cvc);
}

?>

<link rel="stylesheet" href="../../css/form_style.css"></link>


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
                <img src="../../asset/Logo_Restoo.png" alt="logo du restaurant" class="logo_restoo"/>
            </div>
			<div class="card-body">
				<form action="" name="register" method="POST">
                <?php foreach($commandes as $commande): ?>
                    <input type="hidden" name="com_id" value="<?= $commande->com_id ?>"> </input>
                <?php endforeach; ?>
					<div class="identifiants-login">
					<div class="input-group form-group col-12-md-6" style="margin-right: 5px;">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-credit-card"></i></span>
						</div>
                        <input type="text" class="form-control" name="cb" minlength="12" required placeholder="xxxx xxxx xxxx xxxx">
					</div>
                    <div class="input-group form-group col-12-md-6" style="margin-left: 5px;">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="date" format="dd-mm-yyyy" name="fin" required class="form-control">
					</div>
					</div>

                    <div class="input-group form-group col-4-md-4" style="margin-left: 5px;">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="cvc" class="form-control"  minlength="3" required placeholder="xxx">
					</div>
                    
					<div class="form-group">
						<input type="submit" value="register" class="btn float-right login_btn">
					</div>
                    <input type="hidden" name="validationPaiement">

				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once "../footer.php" ?>
