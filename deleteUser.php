<?php
    session_start();
    require_once 'sql.php';
    $SQL = new SQL();
    $username = $_SESSION['usernameForm'];
    $userid = $_SESSION['user_id'];
    if($SQL->deleteUser($username, $userid))
    {
        try{
            header('location: logout.php');
        }
        catch (Exception $e)
        {
            echo "<script> alert('Something went wrong'); window.location='profile.php' </script>";
        }
    }
?>