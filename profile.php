<?php
    session_start();
    if (!isset($_SESSION['usernameForm']) || empty($_SESSION['usernameForm'])) {
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Dealership, Cars, BMW, Audi, Mercedes-Benz">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta http-equiv="creation-date" content="Mon, 10, Oct 2022 12:00:00 GMT">
    <meta http-equiv="expires" content="Sat, 31 Dec 2022 23:59:59 GMT">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#btn").click(function(e){  
                e.preventDefault();
                var dataFromForm = $('#changePass').serialize();
                $.ajax({
                    url: "changePass.php",
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
    <div id="containerProfile"> 
        <?php include('nav.php'); ?>
    </div>
    <div class="block">
        <div class="container">
            <div class="card-header bg-transparent text-center">
                <h1>Profile</h1>
                <img style="width:150px;height:150px;border-radius: 15px;" class="profile_img" src="images/acc.png" alt="User image">
                <?php
                    require_once 'sql.php';
                    $SQL = new SQL();
                    $username = $_SESSION['usernameForm'];
                    $row = $SQL->getUserProfile($username);
                ?>
                <h3><?php echo $row["name"];?></h3>
            </div>
            <div class="card-body">
                <p><strong>Profile ID:</strong> <?php echo $row["id"];?></p>
            </div>
        </div>
    </div>

    <div class="block">
        <div class="card-header bg-transparent border-0">
            <h3><i class="far fa-clone pr-1"></i>General Information</h3>
        </div>
        <table class="table table-bordered" style="width: 60%;margin-right: auto; margin-left: auto;text-align: center;">
            <tr>
                <th width="30%">Name</th>
                <td width="2%">:</td>
                <td><?php echo $row["name"];?></td>
            </tr>
            <tr>
                <th width="30%">Username</th>
                <td width="2%">:</td>
                <td><?php echo $row["username"];?></td>
            </tr>
            <tr>
                <th width="30%">Last login</th>
                <td width="2%">:</td>
                <td><?php echo $SQL->getLastVisit($username);?></td>
            </tr>
        </table>
            <div style="height: 26px"></div>
            <div class="card-header bg-transparent border-0"></div>
    </div>

    <div class="block">
    <form id="changePass" action="changePass.php" method="post">
        <h3><i class="far fa-clone pr-1"></i>Change password</h3>
        <div class="card-body pt-0">
            <p>To change password fill up all boxes</p>
            <h2 id="message"></h2>
            <input type="password" placeholder="Current Password" name="password">
            <input type="password" placeholder="Enter New Password" name="new_password">
            <input type="password" placeholder="Re-Enter New Password" name="re_new_password"><br>
            <button id="btn" style="width:50%;border-radius:15px;">Change password!</button>
        </div>
    </form>
    </div>

    <div class="block">
    <h3><i class="far fa-clone pr-1"></i>Other Information</h3>
        <div class="card-body pt-0">
            <p>Thank you for being a valuable customer of our car dealership. By creating this account you agreed to privacy policy of our company. Your personal data is moderated and handled by using advanced technologies, encrypted with highest security algorithms and are safely stored in database.</p>
        </div>
    </div>

    <div class="block">
    <h3><i class="far fa-clone pr-1"></i>Delete account</h3>
        <div class="card-body pt-0">
            <button id="delbtn" style="border-radius:15px;" onclick="document.getElementById('id01').style.display='block'">Delete Account</button>
            <div id="id01" class="modal">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <form class="modal-content" action="deleteUser.php" method="post">
                    <div class="container">
                        <h1>Delete Account</h1>
                        <p>Are you sure you want to delete your account?</p>
                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
<script>
    var modal = document.getElementById('id01');

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</html>