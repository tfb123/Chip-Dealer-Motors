<?php
    require_once 'sql.php';    
    require_once 'functions.php';

    $usernameForm = $_POST['username'];
    $encyptedPass = hash('sha512', $_POST['password']);
    $_SESSION['success'] = "";

    $SQL = new SQL();
    
    function login($usernameForm, $encyptedPass)
    {
        $SQL = new SQL();
        if(strlen($usernameForm) == 0)
        {
            echo "Please insert username...";
        }
        else
        {
            if($SQL->checkIfUsernameExists($usernameForm)){
                if($SQL->getPassword($usernameForm) == $encyptedPass){
                    return true;
                }
                else
                {
                    $errorMessage = "Username or password is incorrect...";
                    echo $errorMessage;
                    $date = date('m/d/Y H:i:s', time());

                    $file = fopen("./logs/unauthorised.log", "a");
                    date_default_timezone_set('Europe/Vilnius');
                    fwrite($file, $date." ".$errorMessage. " IP: ".getHostByName(php_uname("n"))."\r");
                    fclose($file);

                    return false;
                }
            }
            else
            {
                $errorMessage = "Username or password is incorrect...";
                echo $errorMessage;

                $date = date('m/d/Y H:i:s', time());

                $file = fopen("./logs/unauthorised.log", "a");
                date_default_timezone_set('Europe/Vilnius');
                fwrite($file, $date." ".$errorMessage. " IP: ".getHostByName(php_uname("n"))."\r");
                fclose($file);

                return false;
            }
        }
    }
    
    if(login($usernameForm, $encyptedPass))
    {
        if(!func::checkLoginState($SQL))
        {
            $row = $SQL->getUserProfile($usernameForm);
            
            if ($row['id'] > 0)
            {
                func::createRecord($row['id']);
            }
        }
        $_SESSION['usernameForm'] = $usernameForm;
        $_SESSION['success'] = "You have logged in!";

        date_default_timezone_set('Europe/Vilnius');
        $date = date('m/d/Y H:i:s', time());
        $SQL->insertLoginData($usernameForm, $date);

        echo "Success";
    }
?>