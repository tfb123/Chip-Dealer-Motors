<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Dealership, Cars, BMW, Audi, Mercedes-Benz">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta http-equiv="creation-date" content="Mon, 10, Oct 2022 12:00:00 GMT">
    <meta http-equiv="expires" content="Sat, 31 Dec 2022 23:59:59 GMT">
    <title>Welcome to Chip-Dealer Motors</title>
    <link rel="stylesheet" href="homePage.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div id="container">
        <?php include('nav.php'); ?>
        <div class="textMain">
            <p id="loggedIn">
                <?php
                    if (isset($_SESSION['success'])) {
                        if ($_SESSION['success'] == "You have logged in!") {
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        }
                    }
                ?>
            </p>
            <h1>Welcome To Chip-Dealer Motors!</h1>
            <p>Think smart, feel positive, and drive extraordinary</p>
            <br><br><br><br><br><br>
            <?php 
                require_once 'sql.php';
                $SQL = new SQL(); 
                ?> <div id="count"> <?php
                echo "<p> We are glad to say that we have: <b>".$SQL->getAllUserCount()."</b> users aboard!</p>";
                ?> </div> <?php
            ?>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>