<?php
    session_start();
    require_once 'sql.php';
    $passwordForm = $_POST['password'];
    $newPasswordForm = $_POST['new_password'];
    $reNewPasswordForm = $_POST['re_new_password'];
    $encyptedPass = hash('sha512', $passwordForm);
    $SQL = new SQL();
    $username = $_SESSION['usernameForm'];
    
    $newEncyptedPass = hash('sha512', $newPasswordForm);
    $reNewEncyptedPass = hash('sha512', $reNewPasswordForm);

    $oldPass = $SQL->getPassword($username);
    if($oldPass == $encyptedPass)
    {
        if(strlen($newPasswordForm) != 0)
        {
            if($newEncyptedPass == $reNewEncyptedPass)
            {
                $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
                if($SQL->changePass($username, $newEncyptedPass))
                {
                    echo "Password changed...";
                }
                else
                {
                    echo "Something went wrong...";
                }
            }
            else
            {
                echo "New password do not match...";
            }
        }
        else
        {
            echo "New password too short...";
        }
    }
    else
    {
        echo "Invalid password...";
    }
?>