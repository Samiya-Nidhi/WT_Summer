<?php

$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = validate($_POST["username"]);
  $password = validate($_POST["newpassword"]);
}
function validate($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$isValidate = true;
if ($username == "") {
  echo "Username Required <br>";
  $isValidate = false;
}
if ($password == "") {
  echo "Password Required <br>";
  $isValidate = false;
}

if ($isValidate) {
    $servername = "localhost";
    $u = "root";
    $p = "";
    $dbname = "pmc";
    // Create connection
    $conn = mysqli_connect($servername, $u, $p, $dbname);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    
    // $string = file_get_contents("../db/admin.json");
    // $json_a = json_decode($string, true);
    $isLogin = false;
    // foreach ($json_a as  $value) {
    //   if ($value["username"] == $username && $value["password"] == $password) 
    //   {
    //     setcookie("user", json_encode($value), time() + (86400 * 30) , "/",); 
    //     $isLogin = true;
    //     break;
    //   }
    // }
    $sql = "UPDATE admin SET password = '$password' WHERE username = '$username';";
 
    //echo $sql;
    $result = $conn->query($sql);
    
}
header("location: ../view/home.php");
?>