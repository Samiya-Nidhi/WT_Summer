<?php
include "../Control/CLoginCheck.php";
if(isset($_SESSION["email"]))
{
    header("location: CIndex.php");
}
?>
<!DOCTYPE html>
<head>
	<title>
Customer login
	</title>
</head>
<h1 align="Start">
    24/7 -Internet Service Provider
</h1>
    <hr>
    <form action="" method="post">
        <br/><br/><br/><br/><br/><br/>
        
        <h1 align="center"> Login as a Customer </h1>
                    <table align="center">
                        <tr>
                                <td> E-mail: </td>
                                <td> <input type="text" name="Cemail"> <td>
                        </tr>
                        <tr>
                                <td> password: </td>
                               <td> <input type="password" name="Cpass"> <td>
                                <?php echo $fail;?>
                        </tr>
                        <tr>
                                <td> <input type="submit" name="CLogin" value= "Login"></td>
                                <td> <a href="../View/Cforgetpass.php"> Forget Password </a> </td>
                        </tr>
                    </table>
	    </h1>
    </form>
    <h3 align="center">
	      Don't have an account?<a href="../View/CSignUp.php"> SignUp</a>
    </h3>
</hr>
</body>
</html>