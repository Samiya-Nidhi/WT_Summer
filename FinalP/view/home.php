<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">E-Passport Managment System</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="HomeP.php">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="Search.php">SERVICE</a></li>
                    <li><a href="Contact.html">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>E-Passport  <br><span>System</span> </h1>
            <p class="par">An E-passport or a digital passport is a traditional passport  <br>  that has an embedded electronic microprocessor chip which 
                <br> contains biometric information that can be used to authenticate the identity of the passport holder. </p>

                

                <form action="../control/login.php" method="POST"style="display: inline-block;">
                <div class="form">
                    <h2>Login Here</h2>
                    <input type="username" name="username" placeholder="Enter Username Here"><br>
                    <input type="password" name="password" placeholder="Enter Password Here"><br>
                    <button class="btnn"><a href="#">Login</a></button>

                    <p class="link">Don't have an account<br>
                    <a href="registration.html">Sign up</a> here</a></p>
                    <p class="link">Forgot password?<br>
                    <a href="forget_password.html">Click Here</a> here</a></p>
                    

                    

                </div>
                    </div>
                </div>
        </div>
    </div>
    
</body>
<?php
	include('footer.php');
?>  
</html>