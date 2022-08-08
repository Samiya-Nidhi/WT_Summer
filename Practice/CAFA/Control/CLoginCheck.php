<?php 
session_start();

$fail="";
$existingdata = file_get_contents('../Files/CSignUpData.json');
$jsondata = json_decode($existingdata);

if (isset($_POST["CLogin"]))
{
    if(empty($_POST["Cemail"])||empty($_POST["Cpass"]))
    {
        $fail="please insert email or password!";
    }
    else
    {
        foreach ($jsondata as $key => $newdata) 
        {
            if ($newdata->Email == $_POST["Cemail"] && $newdata->Password == $_POST["Cpass"]) 
            {
                $_SESSION["email"] = $_POST["Cemail"];
                $_SESSION["password"] = $_POST["Cpass"];
                header("location: ../View/CIndex.php");
            }
            else 
            {
                $fail="invalid email or password!";
            }
        }
       
    }
    
}


