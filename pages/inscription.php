<div id="register" class="animate form">
    <form action="" name="login" method="post">
        <h1>Sign up</h1>
        <p>
            <label for="usernamesignup" class="uname">Your username</label>
            <input type="text" name="username" id="usernamesignup" required="required" placeholder="Username">
        </p>
        <p>
            <label for="emailsignup" class="yourmail">Your email</label>
            <input type="email" name="emailid" required="required" placeholder="Yourmail@email.com"/>
        </p>
        <p>
            <label for="passwordsignup" class="yourpasswd">Your password</label>
            <input type="password" id="passwordsignup" name="password" required="required">
        </p>
        <p>
            <label for="passwordsignup_confirm" class="yourpasswd">Please confirm your password</label>
            <input type="password" id="passwordsignup_confirm" name="confirm_password" required="required">
        </p>
        <p class="signin button">
            <input type="submit" name="register" value="Sign up" />
        </p>
        <p class="change_link">
            Vous êtes déjà membre ?
            <a href="connexion.php" class="to_register">Se connecter</a>
        </p>
    </form>
</div>