<?php 

include "../header.php"; 

if (isset($_SESSION['alert'])) {
    echo $_SESSION['alert'];

    unset($_SESSION['alert']);
}

?>

<section>
    <div id="login">
        <form name="login" method="post" action="connexion_validation.php">
            <h1>Connexion</h1>
            <p>
                <label for="email" class="yourmail">Email</label>
                <input id="email" type="email" name="email" required="required" placeholder="Yourmail@mail.com" />
            </p>
            <p>
                <label for="password" class="password" type="password">Mot de passe</label>
                <input type="password" id="password" name="password" required="required">
            </p>
            <!-- <p class="keeplogin">
                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping">
                <label for="loginkeeping">Keep me logged in</label>
            </p> -->
            <p class="login button">
                <input type="submit" name="login" value="Login"/>
            </p>
            <p class="change_link">
                Vous n'êtes pas membre ?
            </p>
                <a href="../inscription/inscription.php" class="to_register">Rejoignez-nous !</a>
            </p>         
        </form>
    </div>
</section>
<?php include_once "../footer.php" ?>
