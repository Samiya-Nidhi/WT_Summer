<?php
$passwordError="";
$name=$_REQUEST="";
if(empty($name))
{
    echo"your name  should not be empty";

}
else {
echo"your name is". $name;
}
if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
}
else {
    echo"<br>you must select a any button"; //radio button
    }

    if(isset($_REQUEST["checkbox1"])|| isset($_REQUEST["checkbox1"] ))
    {
        if(isset($_REQUEST["checkbox1"]) && isset($_REQUEST["checkbox1"] ))
         {
            echo"you have selected both" .$_REQUEST["checkbox1"]  .$_REQUEST["checkbox2"];
         }
         else if (isset($_REQUEST["checkbox1"]))
         {
            echo"you have selected " .$_REQUEST["checkbox1"];
         }
         else if (isset($_REQUEST["checkbox2"]))
         {
            echo"you have selected " .$_REQUEST["checkbox2"];  
         }


    }
    else {
        echo"<br>you must select a option";
        }
        ?>