<?php
    require_once 'sql.php';
    $fullNameForm = $_POST['fname'];
    $emailForm = $_POST['email'];
    $genderForm = $_POST['gender'];
    $ageForm = $_POST['age'];
    $ratingForm= '';
    $SQL = new SQL();
    function setCheckBox()
    {
        if(isset($_POST['feedback']))
        {
            return $_POST['feedback'];
        }
        else
        {
            return -1;
        }
    }
        
    $ratingForm = setCheckBox();

    function checkForRating($ratingForm) 
    {
        if($ratingForm != -1)
        {
            return true;
        }
        else
        {
            echo "You need to select rating...";
            return false; 
        }
    }

    function checkForName($fullNameForm)
    {
        if(strlen($fullNameForm) != 0 && strlen($fullNameForm) < 100)
        {
            return true;
        } 
        else
        {
            if(strlen($fullNameForm) == 0)
            {
                echo "Name cannot be empty...";
            }
            else {
                echo "Name too long...";
            }
            return false;
        }
    }

    function checkForEmail($emailForm)
    {
        if(strlen($emailForm) != 0 && strlen($emailForm) < 100)
        {
            return true;
        } 
        else
        {
            if(strlen($emailForm) == 0)
            {
                echo "Email cannot be empty...";
            }
            else {
                echo "Email too long...";
            }
            return false;
        }
    }

    
    function insertRating($ratingForm, $fullNameForm, $emailForm, $genderForm, $ageForm, $SQL)
    {
        if(checkForRating($ratingForm))
        {
            if(checkForName($fullNameForm))
            {
                if(checkForEmail($emailForm))
                {
                    $rating = $ratingForm[0];
                    if($SQL->lookForEmailInFeedback($emailForm))
                    {
                        return false;
                    }
                    else
                    {
                        $fullNameForm = htmlspecialchars($fullNameForm, ENT_QUOTES, 'UTF-8');
                        $emailForm = htmlspecialchars($emailForm, ENT_QUOTES, 'UTF-8');
                        $genderForm = htmlspecialchars($genderForm, ENT_QUOTES, 'UTF-8');
                        $ageForm = htmlspecialchars($ageForm, ENT_QUOTES, 'UTF-8');
                        $rating = htmlspecialchars($rating, ENT_QUOTES, 'UTF-8');
                        if($SQL->insertFeedback($fullNameForm, $emailForm, $genderForm, $ageForm, $rating)){
                            return true;
                        }
                        else
                        {
                            return false;
                        }  
                    }        
                }
            }
        }
    }

    if(insertRating($ratingForm, $fullNameForm, $emailForm, $genderForm, $ageForm, $SQL))
    {
        echo "Feedback submited successfully!";
    }







    
    
    

    
?>