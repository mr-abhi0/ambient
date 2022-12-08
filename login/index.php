<?php session_start();  ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <?php
    if (!isset($_SESSION['username'])) // If session is not set then redirect to Login Page
    {
        header("Location:login.php");
    }

    // echo $_SESSION['username'];

    ?>



    <header>
        <h1> Welcome, to Your Website Data Page!!</h1>
    </header>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        body {
            background-color: lightgreen;
        }

        header {
            background-color: black;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 15vh;
            box-shadow: 5px 5px 10px rgb(0, 0, 0, 0.3);
        }

        h1 {
            letter-spacing: 1.5vw;
            font-family: 'system-ui';
            text-transform: uppercase;
            text-align: center;
        }

        main {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 75vh;
            width: 100%;
            background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Mountains-1412683.svg/1280px-Mountains-1412683.svg.png) no-repeat center center;
            background-size: cover;
        }


        .submit_class {
            border-style: none;
            border-radius: 5px;
            background-color: #FFE6D4;
            padding: 8px 20px;
            font-family: 'system-ui';
            text-transform: uppercase;
            letter-spacing: .8px;
            display: block;
            margin: auto;
            margin-top: 10px;
            box-shadow: 2px 2px 5px rgb(0, 0, 0, 0.2);
            cursor: pointer;
        }

        a {
            text-decoration: none;
            background-color: #FFE6D4;
        }

        .form_class {
            width: 500px;
            padding: 40px;
            border-radius: 8px;
            background-color: white;
            font-family: 'system-ui';
            box-shadow: 5px 5px 10px rgb(0, 0, 0, 0.3);
        }
    </style>
    <main>
        <div class="form_class">


            <button class="submit_class"> <a href=" export.php"> Download </a></button>
            <br>
            <button class=" submit_class"><a href=" logout.php"> Sign Out </a></button>

        </div>
    </main>

</body>

</html>