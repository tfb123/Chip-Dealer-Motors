<link rel="stylesheet" href="Global styles/footer.css">
<footer>
    <div class="footerBackground">
        <?php if(isset($_SESSION['usernameForm']) && !empty($_SESSION['usernameForm'])) { ?>
            <div class="siteMapCollumn">
                <a href="index.php">Home</a><br>
                <a href="cars.php">Cars</a><br>
                <a href="about.php">About</a>
            </div>
            <div class="siteMapCollumn">
                <a href="contacts.php">Contacts</a><br>
                <a href="feedback.php">Feedback</a>
            </div>
        <?php } else { ?>
            <div class="siteMapCollumn">
                <a href="index.php">Home</a><br>
                <a href="cars.php">Cars</a>
            </div>
            <div class="siteMapCollumn">
                <a href="about.php">About</a><br>
                <a href="contacts.php">Contacts</a>
            </div>
        <?php } ?>
        <div class="footerCopyrightEmail">
            <hr class="top">
            Write us:<br> 
            <a id="mail" href="mailto:lukas.misiukevicius@knf.stud.vu.lt">lukas.misiukevicius@knf.stud.vu.lt</a>, 
            <a id="mail" href="mailto:karolis.petniunas@knf.stud.vu.lt">karolis.petniunas@knf.stud.vu.lt</a>, <br>
            <a id="mail" href="mailto:matas.zabukas@knf.stud.vu.lt">matas.zabukas@knf.stud.vu.lt</a>, 
            <a id="mail" href="mailto:milanas.orsevskis@knf.stud.vu.lt">milanas.orsevskis@knf.stud.vu.lt</a>, <br>
            <a id="mail" href="mailto:dovydas.dosinas@knf.stud.vu.lt">dovydas.dosinas@knf.stud.vu.lt</a><br><br>
            <b>Copyright ©2022 Chip-Dealer Motors. All rights reserved.</b><br><br>
            We hate to see you go, but if you must <a class="unsubscribe" href="#">unsubscribe</a>
            <hr class="bottom">
        </div>
    </div>
</footer>