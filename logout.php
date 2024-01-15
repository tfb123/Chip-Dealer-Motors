<?php
if (!isset($_SESSION['usernameForm']) || empty($_SESSION['usernameForm'])) {
    header('location: index.php');
}
include_once("functions.php");
include_once("sql.php");

$SQL = new SQL();
    session_start();
    session_regenerate_id(true);
    $user_id = $_COOKIE['user_id'];
    $SQL->deleteSession($user_id);
    func::deleteCookie();
    session_unset();
    session_destroy();
    header('location: index.php');
?>