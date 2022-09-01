<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="index-login">
        <div class="wrapper">
            <div class="signup">
                <h4>Sign Up</h4>
                <p>Don't have an account? Sign up here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username"><br>
                    <input type="email" name="email" placeholder="email"><br>
                    <input type="password" name="pwd" placeholder="Password"><br>
                    <input type="password" name="pwdrepeat" placeholder="Confirm Password">
                    <br>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
            <div class="login">
                <h4>Login</h4>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username"><br>
                    <input type="password" name="pwd" placeholder="Password"><br>
                    <br>
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>