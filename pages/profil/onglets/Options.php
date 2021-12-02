<?php

    ?>
    

    
<section>

<div class="NotesListe">
<center>
<h1>Options utilisateur :</h1><br/>
<?php
//Reset le message de validation des modifs d'options
if (isset ($_SESSION['MessageOptions']))
{
    echo $_SESSION['MessageOptions'];
    //echo "<b>Vos modifications ont été enregistrées.</b><br/>";
}
    ?>


    <div id="formChange">

        <form name="mdpchange" method="post" action="ChangeMdp-validation.php">
            <h3>Changement de mot de passe</h3>
            <p>
            <label for="password" class="password" type="password">Mot de passe actuel</label>
                <input type="password" id="password" name='password' required="required">
            </p>
            <p>
                <label for="newPassword" class="password" type="password">Nouveau mot de passe</label>
                <input type="password" id="newPassword" name='newPassword' required="required">
            </p>

            <br/>
            <p class="login button">
                <input type="submit" class="OngletsIndividualButton" name="login" value="Confirmer"/>
            </p>

        </form>
        <br/>

        <form name="StayLogged" method="post" action="ChangeRéglages-validation.php">
            <input type="checkbox" id="StayLogged" name='StayLogged' >
            <label for="StayLogged" type="checkbox">Rester connecté à mon compte</label>
                <br/><br/>
        
            <input type="submit" class="OngletsIndividualButton" name="login" value="Valider réglages"/>
        </form>
        
<br/><br/>
</center>
    </div>
</section>




 

</div>

