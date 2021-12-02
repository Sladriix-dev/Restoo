<?php
include "../header.php";

use App\Controller\RecettesController;
use App\Controller\AdminController;

$rec = new RecettesController();
$admin = new AdminController();

//On récupére l'ensemble des recettes
$recs = $rec->getAllRecettes();

//On vérifie que la session existe pour éviter de recevoir une erreur PHP
if (!isset($_SESSION['util_isAdmin'])) {
    //Si l'utilisateur n'est pas un admnistrateur et essaye d'accéder au lien, celui-ci est redirigé vers la page d'accueil
        header('Location: ../accueil/index.php');
        exit();

}

//On vérifie que la fonction delete a été appellé
if (isset($_POST['delete'])) {
    $rec->deleteRecettes($_POST['rec_id']); 
    echo '<script type="text/javascript">
        window.location = "admin.php"
        </script>';  
}

?>
<section class="admin">
    <?php 

     //Si l'on a envoyé le formulaire de modification
     if (isset($_POST['modify_confirm'])) {
        $rec->modifyRecettes($_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['disponibilité'], $_POST['rec_id']);
        echo '<script type="text/javascript">
        window.location = "admin.php"
        </script>';  
    }
    
    //Si l'admin vient de la valeur modifier, alors
    if (isset($_POST['modify'])) {  
        $recs = $rec->findByIdRecette($_POST['rec_id']);

    ?>
        <form enctype="multipart/form-data" method="POST" action="">
        <?php foreach($recs as $recette): ?>
            <input name="nom" value="<?= $recette->rec_nom ?>" required>
            <label for="nom">Nom du plat</label>
            <input name="description" value="<?= $recette->rec_desc ?>" required>
            <label for="description">Description</label>
            <input type="number" name="prix" value="<?= $recette->rec_prix ?>" required>
            <label for="prix" required>Prix</label>
            <input type="hidden" name="modify_confirm" value="modify_confirm">
            <input type="hidden" name="rec_id" value="<?= $_POST['rec_id'] ?>">

            <select name="disponibilité">
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>
            <label>Disponible ?</label>
            <button type="send">Modifier la recette</button>
            <?php endforeach; ?>
        </form>
    <?php } ?>

    <!-- Si l'admin souhaite ajouter un utilisateur, alors -->
    <?php 
    
    //Si l'admin vient de la valeur modifier, alors
    if (!isset($_POST['modify']) && !isset($_POST['delete']) && !isset($_POST['add_confirm'])) {
    ?>
        <form enctype="multipart/form-data" method="POST" action="admin_function.php">
            <input name="nom" value="" required>
            <label for="nom">Nom du plat</label>
            <input name="description" value="" required>
            <label for="description">Description</label>
            <input type="file" name="file" value="" required>
            <label for="file">Image</label>
            <input type="number" name="prix" value="" required>
            <label for="prix" required>Prix</label>
            <input type="hidden" name="add_confirm" value="add_confirm">
            <select name="disponibilité">
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>
            <label>Disponible ?</label>
            <button type="send">Ajouter la recette</button>
        </form>
    <?php } 
    
    if (isset($_POST['add_confirm'])) {

        $target_dir = ROOT."/uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ( move_uploaded_file( $_FILES['file']['tmp_name'], $target_dir . basename($_FILES['file']['name'] ) ) )
        {
            // the file has been moved correctly
        }
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $image = basename($_FILES['file']['name']);
        $prix = $_POST['prix'];
        $dispo = $_POST['disponibilité'];

        $rec->addRecettes($nom, $description, $image, $prix, $dispo);
        echo '<script type="text/javascript">
        window.location = "admin.php"
        </script>';   
    } 
    ?>

    
</section>

<script>
    $(document).ready( function () {
        $('#recettes_list').DataTable();
    } );
</script>
<?php
include "../footer.php"; 
?>

