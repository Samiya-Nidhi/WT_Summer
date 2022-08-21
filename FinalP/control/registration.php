<?php

$fname = $lname =$gender = $dob= $religion = $praddress = $pmaddress = $phone = $email = $website = $username = $password = $confirmpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = validate($_POST["fname"]?? "");
  $lname = validate($_POST["lname"]?? "");
  $gender = validate($_POST["gender"]?? "" );
  $dob = validate($_POST["DOB"]?? "");
  $religion = validate($_POST["religion"]?? "");
  $praddress = validate($_POST["praddress"]?? "");
  $pmaddress = validate($_POST["pmaddress"]?? "");
  $phone = validate($_POST["phone"]?? "");
  $email = validate($_POST["email"]?? "");
  $website = validate($_POST["website"]?? "");
  $username = validate($_POST["username"]?? "");
  $password = validate($_POST["password"]?? "");
  $confirmpassword = validate($_POST["confirmpassword"]?? "");

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
if ($lname == "") 
{
  echo "Last Name Required <br>";
  $isValidate = false;
}
if($gender == "")
{
  echo "Gender Required <br>";
  $isValidate = false;
}
if($dob == "")
{
echo "Date Of Birth Required <br>";
$isValidate = false;
}
if($religion == "")
{
  echo "Religion Required <br>";
  $isValidate = false;
}
if($praddress == "")
{
  echo "Present Address Required <br>";
  $isValidate = false;
}
if($email == "")
{
  echo "Email Required <br>";
  $isValidate = false;
}
if($username == "")
{
  echo "Username Required <br>";
  $isValidate = false;
}
if(strlen($username)<5)
{
  echo "Username Max 5 Characters <br>";
  $isValidate = false;
}
if($password == "")
{
  echo "Password Required <br>";
  $isValidate = false;
}
if($confirmpassword == "")
{
  echo "Confirm Password Required <br>";
  $isValidate = false;
}
 if ($password == $confirmpassword) {
      echo "";
  }
  else 
  {
      echo "Failed";
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
    //echo "Connected successfully";
    $sql = "INSERT INTO admin VALUES ('$fname', '$lname', '$gender', '$dob', '$religion', '$praddress', '$pmaddress', '$phone', '$email', '$website', '$username', '$password', '$confirmpassword');";
    echo $sql;
    $result = $conn->query($sql);

      {
      header("Location: ../view/home.php");
      }
  }
?>