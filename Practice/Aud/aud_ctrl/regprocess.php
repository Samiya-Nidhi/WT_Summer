<?php
session_start();

$var_data = $var_gender = $varUname=$var_data = $var_file = "";
$firstName = $password = $name = $emailerr = $age = $gnd = $uname= "";
$hasError = 0;
if(isset($_REQUEST["submit"]))
{


if (isset($_REQUEST["mail"])) {

  
    $email = $_REQUEST["mail"];

    if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $hasError = 1;
    }
     else {
       
        echo "Mail is: ".$email;
    }


     
        $password = $_REQUEST["pass"];
        if(empty($password))
        {
            $hasError = 1;
        }
        else 
        {
            if(!is_numeric($password) && (strlen($password)<4))
            {
                echo "please input a pass contains one number! and length more than 4";
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


    if (isset($_REQUEST["gender"])) {
    
        $mydata =  array(
            'firstname' => $fname,
    
            'Password' => $password,
            'E-mail' => $email,
           
            'gender' => $gnd,
            

        );

        $jsontemp = file_get_contents("../data/data.json");
        $jsonmiddle = json_decode($jsontemp);
        $jsonmiddle[] =$mydata;
      //$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
        $finaldata = json_encode($jsonmiddle, JSON_PRETTY_PRINT);

        if (file_put_contents("../data/data.json", $finaldata)) {
            $var_data = "data saved";
        }
    }
    else{
        $var_data = "data not saved";
    }

    if ($hasError == 1) {
        header("Location: ../VW/page.php");
    } else if ($hasError == 0) {
        header("Location: ../VW/Task2.php");
    }
}





    

    if($hasError == 0)
    {
        header("Location: ../aud_vw/logpage.php");
    }
}
  


