<?php
    session_start();
    if (isset($_SESSION['usernameForm']) && !empty($_SESSION['usernameForm'])) {
        header('location: index.php');
    }
?>
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="regLogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
                $("#btn").click(function(e){  
                    e.preventDefault();
                    var dataFromForm = $('#register').serialize();
                    $.ajax({
                        url: "regForm.php",
                        type: "POST",
                        data: dataFromForm,
                        success: function(response) {
                            if (response == "Success") {
                                window.location.href = "login.php";
                            }
                            else {
                                $("#error_msg").html(response);
                            }
                        },
                    });
                    return false;
                });
            });
    </script>
</head>
<body>
    <div id="container">
        <?php include('nav.php'); ?>
        <div class="regForm">
            <h1>Sign Up</h1>
            <h2 id="error_msg"></h2>
            <form id="register" action="regForm.php" method="post">
                <input type="text" placeholder="Username" name="username">
                <input type="text" placeholder="Name" name="name">
                <input type="password" placeholder="Password" name="password">
                <input type="password" placeholder="Re-Enter Password" name="re_password">
                <div class="terms">
                    <input type="checkbox" id="checkbox">
                    <label for="checkbox">I agree to these <a href="#">Terms & Conditions</a></label>
                </div>
                <button id="btn" type="button">Sign Up</button>
                <div class="member">
                    Already a member? <a href="login.php">Login Here</a>
                </div>
            </form>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>