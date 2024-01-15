<?php
    require_once 'sql.php';
    $SQL = new SQL();

    $usernameForm = $_POST['username'];
    $nameForm = $_POST['name'];
    $passwordForm = $_POST['password'];
    $re_passwordForm = $_POST['re_password'];
    $encyptedPass = hash('sha512', $passwordForm);
    $encyptedRe_Pass = hash('sha512', $re_passwordForm);

    function checkPassLenght($passwordForm){
        if(strlen($passwordForm) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function checkIfPassMatch($encyptedPass, $encyptedRe_Pass){
        if($encyptedPass == $encyptedRe_Pass){
            return true;
        }
        else
        {
            return false;
        }
    }

    function checkForEverything($usernameForm, $nameForm)
    {
        if(strlen($usernameForm) != 0 && strlen($usernameForm) < 100)
        {
            if(strlen($nameForm) != 0 && strlen($nameForm) < 100)
            {
                return true;
            }
            else
            {
                if(strlen($nameForm) == 0)
                {
                    echo "Name cannot be empty";
                }
                else
                {
                    echo "Name too long";
                }
                return false;
            }
        }
        else
        {
            if(strlen($usernameForm) == 0)
            {
                echo "Username cannot be empty";
            }
            else
            {
                echo "Username too long";
            }
            return false;
        }
    }

    if(checkForEverything($usernameForm, $nameForm))
    {
        if(checkIfPassMatch($encyptedPass,$encyptedRe_Pass))
        {
            if(!$SQL->checkIfUsernameExists($usernameForm))
            {
                if(checkPassLenght($passwordForm))
                {
                    $usernameForm = htmlspecialchars($usernameForm, ENT_QUOTES, 'UTF-8');
                    $nameForm = htmlspecialchars($nameForm, ENT_QUOTES, 'UTF-8');
                    if($SQL->createNewUser($usernameForm,$nameForm,$encyptedPass))
                    {
                        echo "Success";
                    }
                    else
                    {
                        echo "Registration failed...";
                    }
                }
                else
                {
                    echo "Password too short...";
                }
            }
            else
            {
                echo "Username exists...";
            }
        }
        else
        {
            echo "Password do not match...";
        }
    }
?>