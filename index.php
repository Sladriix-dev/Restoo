<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <header>
            <h1>Login and Registration Form</h1>
        </header>
        <section>
            <div id="login">
                <form name="login" method="post" action="">
                    <h1>Login</h1>
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
                        Not a member yet ?
                        <a href="#toregister" class="to_register">Join us</a>
                    </p>         
                </form>
            </div>

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
                        Already a member ?
                        <a href="#tologin" class="to_register">Go and log in</a>
                    </p>
                </form>
            </div>
        </section>
    </div>    
</body>
</html>