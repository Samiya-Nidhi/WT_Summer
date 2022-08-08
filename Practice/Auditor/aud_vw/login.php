<?php
session_start();

$var_data = $var_gender = $varUname=$var_data = $var_file = "";
$firstName = $password = $name = $emailerr = $age = $gnd = $uname= "";
$hasError = 0;

if (isset($_REQUEST["mail"])) {

  
    $email = $_REQUEST["mail"];

    if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $hasError = 1;
    }
     else {
       
        echo "Mail is: ".$email;
    }


    if(isset($_REQUEST["pass"]))
    {
        $password = $_REQUEST["pass"];
        if(empty($password))
        {
            $hasError = 1;
        }
        else 
        {
            if(!is_numeric($password) || (strlen($password)<4))
            {
                echo "please input a pass contains one number! and length more than 4";
            }
        }
    }

    if(isset($_REQUEST["rpass"]))
    {
        $rpassword = $_REQUEST["rpass"];
        if(empty($rpassword))
        {
            $hasError = 1;
        }
        else 
        {
            if($password == $rpassword)
            {
                echo "Matched Password!";
            }
            else{
                echo "password doesn't matched";
            }
        }
    }


    $fname = $_REQUEST["fname"];

    if (empty($fname)) {
        $hasError = 1;
        
    } else {
        $hasError;
        echo "First name".$fname;
     
    }

    $lname = $_REQUEST["lname"];

    if (empty($lname)) {
        $hasError = 1;
        
    } else {
        $hasError;
        echo "<br>Last name".$lname;
     
    }



    $gnd = $_REQUEST["gender"];
   
    if (isset($_REQUEST["gender"])) {

       echo "Your selected radio button ".$gnd;
    } 
    else {
        echo "You have to select gender";
    }


    if($hasError == 0)
    {
        header("Location: ../aud_ctrl/logpage.php");
    }

  

}
