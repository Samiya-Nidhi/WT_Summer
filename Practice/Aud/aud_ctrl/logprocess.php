<?php
session_start();


if(isset($_REQUEST["Login"]))
{

    $_SESSION["loginName"]=$_REQUEST["loginName"];
    $_SESSION["loginPass"]=$_REQUEST["loginPass"];

if(empty($_REQUEST["loginName"]) && empty($_REQUEST["loginpass"])){
    echo "loginName and loginpass can not empty";
}
else{
    $jsondata=file_get_contents("../data/data.json");

        $phpdata=json_decode($jsondata);

        foreach($phpdata as $finaldata)

if(($_REQUEST["loginName"]==$finaldata->fname ) && ($_REQUEST["loginpass"]==$finaldata->password))

{
    header("location: ../aud_vw/logpage.php ");

}
}

}
?>