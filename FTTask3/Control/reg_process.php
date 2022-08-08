<?php
$fname=$lname=$age=$gnd=$dsg=$email=$pass=$var_file="";


if(isset($_REQUEST["submit"]))
{
   
    $fname = $_REQUEST["fname"];
    if(empty($fname))
    {
        echo"Please enter first name";
    }
    else echo $fname;

    $lname = $_REQUEST["lname"];

    if(empty(($lname)))
    {
        echo "Enter last name";
    }
    else echo $lname;

    $age = $_REQUEST["age"];
    if(empty($age))
    {
        echo "Age is empty";
    }
    else echo $age;


    if (isset($_REQUEST["designation"])) {
        $dsg = $_REQUEST["designation"];
        if(empty($dsg)){
            echo "enter designation please";
        }
        else {
            echo $dsg;
        }
    }


    if (isset($_REQUEST["java"]) && isset($_REQUEST["php"]) && isset($_REQUEST["cpp"])) {

        $interest = " " . $$_REQUEST["java"] . ", " . $_REQUEST["php"] . ", " . $_REQUEST["cpp"];
        echo $interest;
    } else if (isset($_REQUEST["java"]) && isset($_REQUEST["php"])) {
        $interest = " " . $_REQUEST["java"] . ", " . $_REQUEST["php"]; echo $interest;
    } else if (isset($_REQUEST["php"])  && isset($_REQUEST["cpp"])) {
        $interest = " " . $_REQUEST["java"] . ",  " . $_REQUEST["cpp"]; echo $interest;
    } else if (isset($_REQUEST["php"]) && isset($_REQUEST["cpp"])) {
        $interest = " " . $_REQUEST["php"] . ", " . $_REQUEST["cpp"]; echo $interest;
    }
    else if (isset($_REQUEST["java"]) && isset($_REQUEST["cpp"])) {
        $interest = " " . $_REQUEST["java"] . ", " . $_REQUEST["cpp"]; echo $interest;}
     else if (isset($_REQUEST["java"])) {
        $interest = $_REQUEST["java"]; echo $interest;
    } else if (isset($_REQUEST["php"])) {
        $interest = $_REQUEST["php"]; echo $interest;
    } else if (isset($_REQUEST["cpp"])) {
        $interest = $_REQUEST["cpp"]; echo $interest;
    }


    $email = $_REQUEST["email"];

    if (empty($email) ) {
        echo "Email is empty";
    } 
    
    else {
        if( !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
        {
            echo "Enter valid e-mail";
        }
        else echo "Your email is: ".$email;
        
        
    }


    $pass = $_REQUEST["pass"];

    if (empty($pass)) {
        echo "Password is empty";
    } 
    else {

        if (strlen($pass) < 8) {

            echo "Give a password more than 8 character";
        }

            else if (!is_numeric($pass)) {
                echo "Give a password which contain at least one numeric";
            }
            else echo "your password valid";

        }




        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Upload/" . $_FILES["myfile"]["name"])) {
            echo "I am file";
            $var_file = $_FILES["myfile"]["name"];
            echo "File is uploaded";
        } else {
           echo "file is not uploaded";
        
    }
        
}

   




?>