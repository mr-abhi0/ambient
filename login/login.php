<?php include "config.php" ?>
<?php include "login-action.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <div class="login">
        <h2 class="active"> sign in </h2>

        <h2 class="nonactive"> sign up </h2>
        <form action="" method="post" id="frmLogin">


            <input type="text" class="text" name="username">
            <span>username</span>

            <br>

            <br>

            <input type="password" class="text" name="password">
            <span>password</span>
            <br>

            <!-- <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
            <label for="checkbox-1-1">Keep me Signed in</label> -->

            <button name="signin" type="submit" value="Sign In" class="signin">
                Sign In
            </button>


            <hr>

            <a href="#">Forgot Password?</a>
        </form>

    </div>
</body>

</html>