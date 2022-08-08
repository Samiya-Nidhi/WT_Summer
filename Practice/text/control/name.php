<?php
$err=1; 
$passwordError = "";
if(isset($_REQUEST["submit"])){
$name=$_REQUEST["fname"];
if(empty($name)){
	$err=0; 
    echo "<br>Your first name should not be empty";
}
else if(strlen($name)<4)
{
    echo "<br>First name should be more than 4 characters";
}
else{
    echo"<br>Your first name is ".$name;
}
$name2=$_REQUEST["lname"];

if(empty($name2)){
	$err=0; 
    echo"<br>Your last name should not be empty";
}
else if(strlen($name2)<4)
{
    echo "<br>Last name should be more than 4 characters";
}
else{
    echo"<br>Your Last name is ".$name2;
}

if(isset($_REQUEST["des"]))
{
    $des=$_REQUEST["des"];
    echo "<br>Your designation is ".$des;
}
else{
    echo "<br>You must select designation";
}



if(empty($_REQUEST["male"])){
	$err = 0;
    echo "<br>Email should not be empty";
}
else{
    echo "<br>Your email is :".$_REQUEST["male"];
}


if(is_numeric($_REQUEST["password"])>2){
    echo "<br>Your password is valid";
}
else{
	echo"chose another one";

//echo "<br>".$_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../upload/".$_FILES["myfile"]["name"]))
{
    echo "File uploaded";
}
else{
    echo "File not uploaded";
}
$mydata=array
(
    'firstname'=>$name,
    'lastname'=>$name,
    'age'=>$_REQUEST["age"],
    'designation:'=>$_REQUEST["des"],
    'mail'=>$_REQUEST["male"],
    'password'=>$_REQUEST["password"],
    'FILE'=>$_FILES["myfile"]["name"]
);

			
            $jsontemp = file_get_contents("../data.json");
            $jsonmiddle = json_decode($jsontemp);
            $jsonmiddle[] =$mydata;
          //$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
            $finaldata = json_encode($jsonmiddle, JSON_PRETTY_PRINT);

            if (file_put_contents("../data.json", $finaldata)) {
                $var_data = "data saved";
            }
{
    echo"DATA save";
}
if($err==1)
{
	header("../view/login.php");
}

}
}
?>