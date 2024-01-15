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
    <title>Contact Us</title>
    <link rel="stylesheet" href="contacts.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
                $("#btn").click(function(e){  
                    e.preventDefault();
                    var dataFromForm = $('#contacts').serialize();
                    $.ajax({
                        url: "contactForm.php",
                        type: "POST",
                        data: dataFromForm,
                        success: function(response) {
                            $("#message").html(response);
                            if (response == "Contact form submited successfully!") {
                                document.getElementById("contacts").reset();
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
        <div class="header">Contact Us!</div>
        <div class="err_msg"><h2 id="message"></h2></div>
        <div class="form">
            <form id="contacts" action="contactForm.php" method="post">
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="E-Mail" name="email">
                <textarea id="message" rows="4" cols="70" name="comment" placeholder="Message"></textarea>
                <button id="btn" type="button" class="send">Send</button>
            </form>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>