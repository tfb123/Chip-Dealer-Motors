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
    <title>About Us</title>
    <link rel="stylesheet" href="about.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <div id="container">
        <?php include('nav.php'); ?>
        <div class="header">
            <img src="Logo_and_background_pictures/about_header_photo.jpg" alt="Image"/>
            <div id="headerText">About Us</div>
        </div>
        <div class="para">
            <p id="marginTop">Founded in 2022, Chip-Dealer Motors was the vision of a team of gearheads with a desire to share their passion for cars with the world. What resulted was the world's premier car-related news app available on both Android and iOS devices. As the app was joined by a website and its support base grew, with readers spanning all parts of the globe, including North America, the United Kingdom and Europe, Asia, and Australia, so too did the team of enthusiasts and writers dedicated to sourcing the best car content on the web.<br></p>
            <p>We constantly keep track of the industry's latest happenings in the world of automakers, sports cars, muscle cars, supercars, trucks and SUVs, off-roading, and everything in between.<br></p>
            <p>Features are posted daily focusing on automotive history and culture, comparing newly revealed vehicles, aftermarket tuners, and car buying tips. Our team of writers also prepare researched opinion pieces based on their extensive insider knowledge gained through years of experience.<br></p>
            <p>We spend hours behind the steering wheels of every car, truck, and SUV available to provide you with detailed information and analysis, while our comprehensive reviews cover all aspects of how a new car drives and behaves, how reliable it is, and how safe it is for your family.<br></p>
            <p>Search and compare cars against their direct rivals or any other model you might be interested in, to find out which is cheapest to run, the most powerful, the most practical, and the safest.<br></p>
            <p id="marginBott">Whether you're a first-time buyer or a passionate gearhead, Chip-Dealer Motors has you covered with relevant buying advice, comprehensive reviews, the hottest scoops, and the best car content on the web.<br></p>
            <h3 class="textAboutPav">There is a database scheme for our website:</h3>
            <img id="image" src="./images/databaseStructure.png"></img>
        </div>
        <div class="infoAbout">
            <div class="textAboutSection">
                <h3 class="textAboutSecPav">logindata</h3>
                <p>This table is intended to record each time a user logs in.</p>
                <p>id - autoincremented primary key</p>
                <p>username - username of logged in user</p>
                <p>date - date and time of log in</p><br>
            </div>
            <div class="textAboutSection">
                <h3 class="textAboutSecPav">users</h3>
                <p>This table contains all users.</p>
                <p>id - autoincremented primary key</p>
                <p>username - unique user's username</p>
                <p>password - sha-512 hashed user's password</p><br>
            </div>
            <div class="textAboutSection">
                <h3 class="textAboutSecPav">session</h3>
                <p>This table is intended to store php sessions data.</p>
                <p>session_id - autoincremented primary key</p>
                <p>session_token - randomly generated token for user authentication</p>
                <p>session_serial - randomly generated serial number for user authentication</p>
                <p>session_date - date and time when session was created</p>
                <p>session_userid - unique users id who is assigned with this session</p><br>
            </div>
            <div class="textAboutSection">
                <h3 class="textAboutSecPav">feedback</h3>
                <p>This table is intended to store all feedback sumbited by users.</p>
                <p>id - autoincremented primary key</p>
                <p>name - name of the user who submited feedback</p>
                <p>email - email of the user who submited feedback</p>
                <p>gender  - gender of the user who submited feedback</p>
                <p>age - age group of the user who submited feedback</p>
                <p>rating - rating of the website selected by user</p>
            </div>
            <div class="textAboutSection">
                <h3 class="textAboutSecPav">contact</h3>
                <p>This table is intended to store all contact data submited by users.</p>
                <p>id - autoincremented primary key</p>
                <p>name - name of the user who submited contact form</p>
                <p>email - email of the user who submited contact form</p>
                <p>message  - message left by user submiting this contact form</p>
            </div>
            <div class="textAboutSection">
                <h3 class="textAboutSecPav">cars</h3>
                <p>This table is intended to store data about vehicles presented on the website.</p>
                <p>id - autoincremented primary key</p>
                <p>make - make of the vehicle</p>
                <p>model - model of the vehicle</p>
                <p>sub-model  - type of the vehicle</p>
                <p>year - year of manufacture of the vehicle</p>
                <p>price - price (range) of the vehicle</p>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>