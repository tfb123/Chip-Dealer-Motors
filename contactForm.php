<?php
    require_once 'sql.php';
    $SQL = new SQL();

    $nameForm = $_POST['name'];
    $emailForm = $_POST['email'];
    $messageForm = $_POST['comment'];

    if(strlen($nameForm) != 0)
    {
        if(strlen($emailForm) != 0)
        {
            if(strlen($messageForm) != 0)
            {
                $nameForm = htmlspecialchars($nameForm, ENT_QUOTES, 'UTF-8');
                $emailForm = htmlspecialchars($emailForm, ENT_QUOTES, 'UTF-8');
                $messageForm = htmlspecialchars($messageForm, ENT_QUOTES, 'UTF-8');
                if($SQL->insertContact($nameForm, $emailForm,$messageForm))
                {
                    echo "Contact form submited successfully!";
                }
                else
                {
                    echo "Something went wrong...";
                }
            }
            else
            {
                echo "Message cannot be empty...";
            }
        }
        else 
        {
            echo "Email cannot be empty...";
        }
    }
    else
    {
        echo "Name cannot be empty...";
    }

?>