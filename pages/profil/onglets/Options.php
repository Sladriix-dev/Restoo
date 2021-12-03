<?php

    ?>
    

    
<section>

<div class="NotesListe">

    <div id="login">
        <form name="mdpchange" method="post" action="ChangeMdp-validation.php">
            <h1>Changement de mot de passe</h1>
            <p>
            <label for="password" class="password" type="password">Mot de passe actuel</label>
                <input type="password" id="password" name='password' required="required">
            </p>
            <p>
                <label for="newPassword" class="password" type="password">Nouveau mot de passe</label>
                <input type="password" id="newPassword" name='newPassword' required="required">
            </p>
            <!-- <p class="keeplogin">
                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping">
                <label for="loginkeeping">Keep me logged in</label>
            </p> -->
            <p class="login button">
                <input type="submit" name="login" value="Valider"/>
            </p>

        </form>
    </div>
</section>




 

</div>

