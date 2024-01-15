<?php
    session_start();
    if (!isset($_SESSION['usernameForm']) || empty($_SESSION['usernameForm'])) {
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
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="isCbClicked.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
                $("#btn").click(function(e){  
                    e.preventDefault();
                    var dataFromForm = $('#feedback').serialize();
                    $.ajax({
                        url: "feedbackForm.php",
                        type: "POST",
                        data: dataFromForm,
                        success: function(response) {
                            $("#message").html(response);
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
        <h1 class="head">Feedback</h1>
        <h2 id="message"></h2>
        <form id="feedback" name = "Feedbakas" action="feedbackForm.php" method="post">
            <p class="paraForm">How do you rate your overall experience?</p>
            <div class="cbox">
                <input type="checkbox" name="feedback[]" value="bad" id="checkbox1" onclick="cbChange('checkbox1')">
                <label for="checkbox1">Bad</a></label>
                <input type="checkbox" name="feedback[]" value="average" id="checkbox2" onclick="cbChange('checkbox2')">
                <label for="checkbox2">Average</a></label>
                <input type="checkbox" name="feedback[]" value="good" id="checkbox3" onclick="cbChange('checkbox3')">
                <label for="checkbox3">Good</a></label><br><br>
            </div>
            <fieldset>
                <legend>Information:</legend><br>
                <div class="padding">
                    <label for="fname">Full name:</label>
                    <input type="text" id="fname" name="fname">
                </div>
                <div class="padding">
                    <label for="email">E-Mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="padding">
                    <label for="gender">Gender:</label>
                    <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                    </select>
                </div>
                <div class="padding">
                    <label for="age">Age:</label>
                    <select name="age" id="age">
                    <optgroup label="Child">
                        <option value="child">Up to 16</option>
                    </optgroup>
                    <optgroup label="Young Adult">
                        <option value="young adults">17-30</option>
                    </optgroup>
                    <optgroup label="Middle-aged Adult">
                        <option value="middle-aged adult">31-45</option>
                    </optgroup>
                    <optgroup label="Old-aged Adult">
                        <option value="old-aged adult">Above 45</option>
                    </optgroup>
                    </select>
                </div>
            </fieldset><br>
            <button id="btn" type="button">Send</button>
        </form>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>