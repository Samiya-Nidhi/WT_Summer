<?php
session_start(); 

if(!isset($_SESSION["email"])) // Destroying All Sessions
{
header("Location: ../View/CLogin.php"); // Redirecting To Home Page
}

?>

<html>
<head>
	<title>
    CAFA Profile
	</title>
</head>

<h1 align="center">  SHEBA FINANCIAL SYSTEM </h1>
<hr>
<br>
<br>
<h2> Welcome to your profile </h2>
<body align="center">
<h3 align="center">
                        Email : <?php echo $_SESSION["email"];  ?>
                </h3>
                <h4 align="center">
                         <a href="../View/CIndex.php"> Back</a>
                </h4>
<h4 align ="center"> 
        
        

       <a href="CUpdate.php">Update Profile</a>
        
       
</h4>
<h4 align="center">

 <a href="../Control/CLogout.php">LOG OUT</a>
                </h4>   
</hr> 
</body>
</html>