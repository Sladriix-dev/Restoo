<section>
    <div id="login">
        <form name="login" method="post" action="">
            <h1>Connexion</h1>
            <p>
                <label for="emailsignup" class="yourmail">Your email</label>
                <input id="emailsignup" type="email" required="required" placeholder="Yourmail@mail.com" />
            </p>
            <p>
                <label for="password" class="yourpassword" type="password">Your password</label>
                <input type="password" id="password" name="password" required="required">
            </p>
            <p class="keeplogin">
                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping">
                <label for="loginkeeping">Keep me logged in</label>
            </p>
            <p class="login button">
                <input type="submit" name="login" value="Login"/>
            </p>
            <p class="change_link">
                Vous n'êtes pas membre ?
            </p>
                <a href="inscription.php" class="to_register">Rejoignez-nous !</a>
            </p>         
        </form>
    </div>
</section>