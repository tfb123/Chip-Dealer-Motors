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
    <title>Sign Up</title>
    <link rel="stylesheet" href="regLogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
                $("#btn").click(function(e){  
                    e.preventDefault();
                    var dataFromForm = $('#login').serialize();
                    $.ajax({
                        url: "logForm.php",
                        type: "POST",
                        data: dataFromForm,
                        success: function(response) {
                            if (response == "Success") {
                                window.location.href = "index.php";
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
            <h1>Log In</h1>
            <h2 id="error_msg"></h2>
            <form id="login" action="logForm.php" method="post">
                <input id="username" type="text" placeholder="Username" name="username" class="input">
                <input id="password" type="password" placeholder="Password" name="password" class="input">
                <div class="recover">
                    <a href="#">Forgot Password?</a>
                </div>
                <button id="btn" type="button">Login</button>
                <div class="member">
                    Not a member? <a href="register.php">Register Now</a>
                </div>
            </form>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
<?php unset($_SESSION['error']); ?>