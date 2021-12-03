
<div class="NotesListe">
    <h2>Historique des commandes :</h2>

<?php
    // ------ Commandes -------
    $ListeNotes = $UserProfile->getLoggedUserCommandes();

    foreach ($ListeNotes as $ligne)
    {
        echo "<b>Commande #".$ligne->paie_id."</b> : CB ".$ligne->paie_cb." <i>(".$ligne->paie_statut.")</i>, payé le ".$ligne->paie_cb_fin; 
        echo "</br>";
    }
?>
</br></br>
</div>

<br/>
<!-- 
<div class="NotesListe">
    <h2>Historique des paiements :</h2>
    <?php
// $_SESSION['mdpStatus'] = "TestCommandes";
//     // ------- Factures ------
//     $ListeNotes = $UserProfile->getLoggedUserFactures();

//     foreach ($ListeNotes as $ligne)
//     {
//         echo "<b>Commande #".$ligne->paie_id."</b> :  <i>(".$ligne->com_status.")</i> "; 
//         echo "</br>";
//     }
//     ?>
</br></br> -->
</div>