<?php

$name=$_REQUEST["fname"]
if(empty($name))
{
    echo"your name  should not be empty"

}
else {
echo"your name is". $name;
}
if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
}
else {
    echo"<br>you must select a radio button";
    }

    if(isset($_REQUEST["checkbox1"] || isset($_REQUEST["checkbox1"] ))
    {
        $gender=$_REQUEST["gender"];
    }
    else {
        echo"<br>you must select a radio button";
        }