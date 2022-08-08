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


/*if (isset($_POST["DelivererLogin"])) {
    $email = $_POST["Delivereremail"];
    $password = $_POST["Delivererpass"];
    $user_found = false;
    $existingdata = file_get_contents('../Files/DelivererSignUpData.json');
    $jsondata = json_decode($existingdata);
    foreach ($jsondata as $myobject[]) 
    {
        if ($myobject->email == $email && $myobject->password == $password) 
        {
            $user_found = true;
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $_POST['password'];
        }
        else 
        {
            $fail="invalid email or password!";
        }

    }
    if ($user_found) 
    {
        header("location: ../View/DelivererIndex.php");
    }}
if (isset($_POST["DelivererLogin"])) {

    $email = $_POST["Delivereremail"];
    $password = $_POST["Delivererpass"];

    if ($_POST["Delivereremail"]==$email && $_POST["Delivererpass"]==$password) 
    {
        $_SESSION["email"] = $_POST["Delivereremail"];
        $_SESSION["password"] = $_POST["Delivererpass"];
        header("location: ../View/DelivererIndex.php");
        $fail="invalid email or password!";	
    }
    else 
    {
        $fail="invalid email or password!";
    }

}
session_start();
//$uname = json_decode($uname);
//$password = json_decode($password);
//$uname = "";
//$password = "";
//$uname = $_POST['uname'];
//$password = $_POST['password'];
//echo $_SESSION['uname'];
//echo $_SESSION['pass'];
//$name = $_GET['uname'];
//$pass= $_GET['password'];
$err="";

if(isset($_POST["BuyerSubmit"])){
    if($_POST["Buyeremail"] ==  "abc"  && $_POST["Buyerpass"]==  123){
        
       $_SESSION["Buyeremail"]=$_POST["Buyeremail"];
       $_SESSION["Buyerpass"]=$_POST["Buyerpass"];
       header("location:../View/BuyerIndex.php");

    }
    else{ 
        $err= "Invalid Email or Password !"; 
    }
}*/


?>