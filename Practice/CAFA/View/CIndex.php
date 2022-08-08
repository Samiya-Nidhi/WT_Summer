
<?php
session_start(); 
if(!isset($_SESSION["email"])) 
{
header("Location: ../View/CLogin.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<head>
	<title>
   CAFA HomePage
	</title>
</head>
<h1 align="center">  SHEBA FINANCIAL SYSTEM </h1>
<body align="center">
<br>
<br>
                <h1>Welcome to home page</h1>
                <h3>
                        Email : <?php echo $_SESSION["email"];  ?>
                </h3>
                <h3>
                        <a href="CProfile.php"> MY Profile</a>
                </h3>
                <h2>
                        <a href="../Control/CLogout.php">logout</a>
                </h2>
</body>
</html>
 
