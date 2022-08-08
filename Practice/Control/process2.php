<?php
session_start();

//$gnd = "";
//if (isset($_REQUEST["submit2"])) {

//$gnd = $_REQUEST["gender"];
//$_SESSION["gender"] = $gnd;

//if (isset($_REQUEST["gender"])) {

//  $var_gender = $gnd;
//} else {
//   $var_gender = "You have to select gender";
// }

//if (isset($_REQUEST["gender"])) {
//  $mydata =  array(
//       'firstname' => $_SESSION["fname"],
//     'Password' => $_SESSION["pass"],
//    'E-mail' => $_SESSION["mail"],
//     'Age' => $age,
//    'gender' => $gnd

//);

// $jsontemp = json_decode(file_get_contents("../data/data.json"));

// $jsontemp[] = $mydata;
//$finaldata = json_encode($jsontemp, JSON_PRETTY_PRINT);
//
// if (file_put_contents("../data/data.json", $finaldata)) {
//    $var_data = "data saved";
// /    // }
// }
//}
$err = 0;
$lname =  $lpass = "";
$nameErr = $pasErr = $unameErr = "";

if (isset($_REQUEST["Login"])) {
    
    $lname = $_REQUEST["loginName"];
    $_SESSION["loginName"] = $lname;

    //$luname = $_REQUEST["uname"];
 
    $lpass = $_REQUEST["loginpass"];
    $_SESSION["loginpass"] = $lpass;
    // $_SESSION["loginName"] = $lname;
    if (empty($lname) || empty($lpass)) 
    {
        echo "You have to give all the information";
    } 
    else {
        $jsondata = file_get_contents("../data/data.json");
        $phpdata = json_decode($jsondata);

        foreach ($phpdata as $finaldata) {
            if (($_REQUEST["loginName"] == $finaldata->firstname) && ($_REQUEST["loginpass"] == $finaldata->Password)) {
                header("Location: ../VW/loginMessageSu.php");
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
    //echo $_REQUEST["loginName"];



    // $luname = $_REQUEST["uname"];
    // $_SESSION["uname"] = $luname;
    // if (empty($luname)) {
    //     $err = 1;
    //    $unameErr = "You have to input your User name";
    // } else {
    //   $unameErr = "Your user name is ".$luname;

    //}






    // $lpass =  $_REQUEST["loginpass"];
    // $_SESSION["loginpass"] = $lpass;

    // if (empty($lpass)) {
    //     $err = 1;
    //     $pasErr = "*password is Mandatory*";
    //  } else {

    //    if (strlen($lpass) < 8) {

    //        $pasErr = "Give a password more than 8 character";
    //        if (!is_numeric($lpass)) {
    //            $pasErr = "Give a password which contain at least one numeric";
    //       }
    //   } else {
    //       $err;
    //        $pasErr = "Valid Password";
    //    }
    //  }

    //condition check
    // if($err == 1)
    // {
    //     header("Location: ../VW/loginMessageU.php");
    // }
    // else{
    //     header("Location: ../VW/loginMessageSu.php");
    // }

}
