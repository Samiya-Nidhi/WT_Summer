<?php

$fname =  $userserial =$id = $User_Name=  $Deliver_Date = $payment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = validate($_POST["fname"]?? "");
  $userserial = validate($_POST["User_SerialNo"]?? "");
  $User_Name = validate($_POST["User_Name"]?? "");
  $Deliver_Date = validate($_POST["Deliver_Date"]?? "");
  $paymen = validate($_POST["payment"]?? "");

}

function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$isValidate = true;
if ($fname == "") 
{
  echo "First Name Required <br>";
  $isValidate = false;
}

if($userserial== "")
{
  echo "user serial Required <br>";
  $isValidate = false;
}
if($id == "")
{
  echo "id Required <br>";
  $isValidate = false;
}
if(strlen($User_Name)<5)
{
  echo "Username Max 5 Characters <br>";
  $isValidate = false;
}
if( $Deliver_Date == "")
{
  echo "Deliver date Required <br>";
  $isValidate = false;
}
if(  $payment == "")
{
  echo "payment Required <br>";
  $isValidate = false;
}
 

  if ($isValidate) {
    $servername = "localhost";
    $u = "root";
    $p = "";
    $dbname = "pmc";
   
    $conn = mysqli_connect($servername, $u, $p, $dbname);
    
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    $insertquery = "INSERT INTO manufac VALUES ('$fname', '$userserial', '$id', '$User_Name', '$Deliver_Date', '$payment');";
    echo $insertquery;
    $result = $conn->query($insertquery);

      {
      header("Location: ../view/manu.php");
      }
  }
  if($query)
{ 
    echo'Inserted successfully <br>';
}
else
{

       
    
        echo 'Inserted not successfully';
    
    
}
?>