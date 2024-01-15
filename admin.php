<?php
    session_start();
    if (!isset($_SESSION['usernameForm']) || empty($_SESSION['usernameForm'])) {
        header('location: index.php');
    }

    require_once 'sql.php';
    $SQL = new SQL();
    $username = $_SESSION['usernameForm'];
    $row = $SQL->getUserProfile($username);

    if(!isset($_SESSION['usernameForm']) || $row['username'] != 'lukas' && $row['username'] != 'admin') {
        echo "<script> alert('You are not authorized'); window.location='index.php' </script>";
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
    <title>Admin</title>
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div id="container">
        <?php include('nav.php'); ?>
        <div class="filter">
            <form action="admin.php" method="post">
                <div class="cb">
                    <label for="tables">Choose a table to show:</label>
                    <select name="tables" id="tables">
                    <option value="ALL">ALL Tables</option>
                    <option value="users">Users Table</option>
                    <option value="feedback">Feedback Table</option>
                    <option value="logins">Logins Date Table</option>
                    <option value="contacts">Contacts Table</option>
                    <option value="cars">Cars Table</option>
                    </select>
                    <br><br>
                    <input class="btn" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
        <div id="table">
            <?php
                require_once 'sql.php';
                if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit'])) {
                    $select = $_POST['tables'];
                    switch($select) {
                        case "ALL":
                            printUsersTable();
                            printFeedbackTable();
                            printLoginTable();
                            printContactsTable();
                            printCarsTable();
                            break;
                        case "users":
                            printUsersTable();
                            break;
                        case "feedback":
                            printFeedbackTable();
                            break;
                        case "logins":
                            printLoginTable();
                            break;
                        case "contacts":
                            printContactsTable();
                            break;
                        case "cars":
                            printCarsTable();
                            break;
                    }
                }
            ?>
        </div>
        <div class="filter">
            <form action="admin.php" method="post">
                <div class="cb">
                    <label for="tables">Choose user to get statistics:</label>
                    <select name="tables" id="tables">
                        <?php getAllUsers(); ?>
                    </select>
                    <br><br>
                    <input class="btn" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
        <div id="table">
            <?php
                require_once 'sql.php';
                if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
                {
                    $select = $_POST['tables'];
                    printUserStatisticsTable($select);
                }
            ?>
        </div>
        <img source=".images/databaseStructure.png"></img>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>


<?php
    function getAllUsers()
    {
        $SQL = new SQL();
        
        $result = $SQL->getAllUsers();

        while($row = mysqli_fetch_assoc($result))
        {
            echo '<option value="'.$row['username'].'">'.$row['username'].'</option>';  
        }
    }

    function printUserStatisticsTable($username)
    {
        $SQL = new SQL();

        $result = $SQL->getAllLoginsCustomUser($username);
        
        echo "<h3>User - <b>".$username."</b> logged in - ".$result->num_rows." times </h3>";

        echo "<table>";
        echo "<tr><th>Username</th><th>Login date</th></tr>";
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "</tr>";
        }
        echo "</table><br><br>";
        echo '<input onClick="window.print()" class="btn" type="submit" name="Print" value="Print">';
    }

    function printFeedbackTable()
    {
        $SQL = new SQL();
        
        $result = $SQL->getAllFeedback();
        echo "<table>";
        echo "<h1>This is a feedback table</h1>";
        echo "<tr><th>ID</th><th>Name</th><th>E-mail</th><th>Sex</th><th>Age</th><th>Rating</th></tr>";
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            foreach($row as $field => $value)
            {
                echo "<td> ".$value." </td>" ;
                
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function printUsersTable()
    {
        $SQL = new SQL();
        
        $result = $SQL->getAllUsers();
        echo "<table>";
        echo "<h1>This is a users table</h1>";
        echo "<tr><th>ID</th><th>Username</th><th>Name</th><th>Password Hash</th></tr>";

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            foreach($row as $field => $value)
            {
                echo "<td> ".$value." </td>" ;
                
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    
    function printContactsTable()
    {
        $SQL = new SQL();
        
        $result = $SQL->getAllContacts();
        echo "<table>";
        echo "<h1>This is a contacts table</h1>";
        echo "<tr><th>ID</th><th>Name</th><td>E-mail</th><td>Message</th></tr>";

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            foreach($row as $field => $value)
            {
                echo "<td> ".$value." </td>" ;
                
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function printLoginTable()
    {
        $SQL = new SQL();
        
        $result = $SQL->getAllLogins();
        echo "<table>";
        echo "<h1>This is a login table</h1>";
        echo "<tr><th>ID</th><th>Name</th><th>Login date</th></tr>";

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            foreach($row as $field => $value)
            {
                echo "<td> ".$value." </td>" ;

            }
            echo "</tr>";
        }
        echo "</table>";
    } 

    function printCarsTable()
    {
        $SQL = new SQL();
                
        $result = $SQL->getAllCars();
        echo "<table>";
        echo "<h1>This is cars table</h1>";
        echo '<tr id="first">';
        echo "<th>ID</th>";
        echo "<th>Make</th>";
        echo "<th>Model</th>";
        echo "<th>Sub-Model</th>";
        echo "<th>Year</th>";
        echo "<th>Price</th>";
        echo "</tr>";

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            foreach($row as $field => $value)
            {
                echo "<td> ".$value." </td>" ;
                
            }
            echo "</tr>";
        }
        echo "</table>";
    }
?>