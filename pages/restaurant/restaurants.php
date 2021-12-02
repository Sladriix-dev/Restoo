<?php 

include_once "../header.php"; 
use App\Restaurant\Restaurant;

$rest = new Restaurant('', '', '');

?>  
<section id="restaurant" class="animate form">
    <ul>
    <?php foreach($restaurants as $restaurant): ?>

            <li><?= $restaurant->name ?></li>

    <?php endforeach; ?>
        <li>Test</li>
        <li>Test</li>
        <li>Test</li>
        <li>Test</li>
    </ul>
</section>
<?php include_once "../footer.php" ?>
