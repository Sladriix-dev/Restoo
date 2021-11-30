<?php include "../header.php"; ?>  
<section id="register" class="animate form">
    <form action="inscription_validation.php" name="register" method="post">
        <h1>S'inscrire</h1>
        <p>
            <label for="nom" class="uname">Nom de famille</label>
            <input type="text" name="nom" id="nom" required="required" placeholder="Nom">
        </p>
        <p>
            <label for="prenom" class="yourmail">Prénom</label>
            <input type="text" name="prenom" required="required" placeholder="Yourmail@email.com"/>
        </p>
        <p>
            <label for="email" class="email">Adresse email</label>
            <input type="email" id="email" name="email" required="required">
        </p>
        <p>
            <label for="password" class="yourpasswd">Mot de passe</label>
            <input type="password" id="password" name="password" required="required">
        </p>
        <p>
            <label for="confirmPassword" class="yourpasswd">Confirmer le mot de passe</label>
            <input type="confirmPassword" id="confirmPassword" name="confirmPassword" required="required">
        </p>
        <p>
            <label for="adresse" class="">Adresse</label>
            <input type="adresse" id="adresse" name="adresse" required="required">
        </p>
        <p>
            <label for="cp" class="">Code postal</label>
            <input type="cp" id="cp" name="cp" required="required">
        </p>
        <p>
            <label for="telephone" class="">Téléphone</label>
            <input type="telephone" id="telephone" name="telephone" required="required">
        </p>
        <p>
            <label for="genre" class="yourpasswd">Genre</label>
            <input type="genre" id="genre" name="genre" required="required">
        </p>
        <p class="">
            <input type="submit" name="register" value="S'inscrire" />
        </p>
        <p class="change_link">
            Vous êtes déjà membre ?
            <a href="../connexion/connexion.php" class="to_register">Se connecter</a>
        </p>
    </form>
</section>
<?php include "../footer.php" ?>
