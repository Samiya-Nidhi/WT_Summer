<?php
include "../Control/CLoginCheck.php";
if(isset($_SESSION["email"]))
{
    header("location: CIndex.php");
}
?>
<html>
<head>
	<title>
CAFA login
	</title>
</head>
<h1 align="center">
SHEBA FINANCIAL SYSTEM
</h1>
    <hr>
    <form action="" method="post">
        <br/>
        <br/>
        <br/>
        <br/>
        
        <h2 align="center"> Reset Now </h2>
                    <table align="center">
                        <tr>
                                <td> Username : </td>
                                <td> <input type="text" name="U_name"> <td>
                        </tr>
                        <tr>
                                <td> New password: </td>
                               <td> <input type="password" name="Newpass"> <td>
                        </tr>
                        <tr>
                                <td> Confirm password: </td>
                               <td> <input type="password" name="Confpass"> <td>
                        </tr>
                        <tr>
                                <td> <br> <input type="submit" name="forgetpass" value= "Save a new password"></td>
                                
                        </tr>

                                <?php
                                echo $fail;
                                ?>
                    </table>
                    <h3 align="center">
                   <a href="../View/CLogin.php"> Back </a>
    </h3>
	    </h1>
    </form>
    </h3>
    </hr>
</body>
</html>