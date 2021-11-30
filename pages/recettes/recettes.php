<?php 

include "../header.php";

use App\Recettes\Recettes;

$rec = new Recettes();
$test = $rec->getAllRecettes();
var_dump($test);
?>  
<section id="recettes" class="animate form">
    <ul>
    <?php foreach($test as $recette): ?>

            <li><?= $recette->rec_id ?></li>

    <?php endforeach; ?>
        <li>Test</li>
        <li>Test</li>
        <li>Test</li>
        <li>Test</li>
    </ul>
</section>
<?php include_once "../footer.php" ?>
