<?php
session_start();

$lname =  $lpass = "";


if (isset($_REQUEST["Login"])) {
    
    $lname = $_REQUEST["logname"];
    $_SESSION["logname"] = $lname;

 
    $lpass = $_REQUEST["logpass"];
    $_SESSION["logpass"] = $lpass;
    // $_SESSION["loginName"] = $lname;
    if (empty($lname) || empty($lpass)) 
    {
        echo "You have to give all the information";
    } 
    else {
        $jsondata = file_get_contents("../data/data.json");
        $phpdata = json_decode($jsondata);

        foreach ($phpdata as $finaldata) {
            if (($_REQUEST["loginName"] == $finaldata->firstname) && ($_REQUEST["logpass"] == $finaldata->password)) {
                echo "Log in successfull";
                break;
            } 
            else {
                $err = 1;
            }
        }
        if ($err == 1) {
            echo "not found";
        }
    }
  

}