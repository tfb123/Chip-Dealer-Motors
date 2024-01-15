<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="Global styles/navigation.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<header class="topnav">
    <a id="logo" href="index.php"><img src="Logo_and_background_pictures/logo.png" alt="Logo"></a>
    <nav>
        <a href="cars.php">Cars</a>
        <a href="about.php">About</a>
        <a href="contacts.php">Contacts</a>
        <?php if(isset($_SESSION['usernameForm']) && !empty($_SESSION['usernameForm'])) { ?>
            <a href="feedback.php">Feedback</a>
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()">
                    <i class="fa fa-user"></i>
                    User Menu
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" id="myDropdown">
                    <a id="content" href="profile.php">Profile</a>
                    <a id="content" href="logout.php">Log Out</a>
                </div>
            </div>
        <?php } else { ?>
            <a class="right" href="register.php">Sign Up</a>
            <a class="right" href="login.php">Log In</a>
        <?php } ?>
    </nav>
</header>

<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }
</script>