<?php
include "../Control/CSignUpValidation.php";
?>
<!DOCTYPE html>
    <head>
        <title>
            Customer Registration
	    </title>
    </head>
    <body>
        <h1 align="Start">
            24/7-Internet Service Provider
        </h1>
        <hr>
            <form action="" method="post">
                <h1 align="center"> Create an account as a Customer </h1>
                                    <table align="center">
                                        <tr>
                                            <td>Fullname:</td>
                                            <td><input type="text" name="Cname"placeholder="Enter your name">
                                            <td>
                                            <?php
                                            echo $nameerr;
                                            ?>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
			                                <td>E-mail:</td>
		                                    <td><input type="email" name="Cemail"placeholder="Enter your email"></td>
                                            <td>
                                            <?php
                                            echo $emailerr;
                                            ?>
                                            </td>
		                                </tr>
				                        <tr>
			                                <td>Date of birth:</td>
		                                    <td><input type="date" name="Cdob"></td>
                                            <td>
                                            <?php
                                            echo $doberr;
                                            ?> 
                                            </td>
		                                </tr> 
                                        <tr>
			                                <td>Gender:</td>
		                                    <td>
                                                <input type="radio" name="Cgender" value="Male">Male
                                                <input type="radio" name="Cgender"value="Female">Female
                                            </td>
                                            <td>
                                            <?php
                                            echo $gendererr;
                                            ?>
                                            </td>
		                                </tr>  
			                            <tr>
			                                <td>Phone no:</td>
		                                    <td><input type="number" name="Cphn" placeholder="Enter your phone no."> </td>
                                            <td>
                                            <?php
                                            echo $phnerr;
                                            ?>
                                            </td>
		                                </tr> 
		                                <tr>
			                                <td>City:</td>
		                                    <td><input type="text" name="Ccity" placeholder="Enter your city"> </td>
                                            <td>
                                            <?php
                                            echo $cityerr;
                                            ?>
                                            </td>
		                                </tr>
		                                <tr>
		    	                            <td>Address:</td>
		    	                            <td><textarea name="Caddress" cols="21" rows="4"placeholder="Enter your full address"></textarea></td>
                                            <td>
                                            <?php
                                            echo $addresserr;
                                            ?>
                                            </td>
		                                </tr> 
                                        <tr>
		    	                            <td>Password:</td>
		    	                            <td><input type="password" name="Cpass"></td>
                                            <td>
                                            <?php
                                            echo $passerr;
                                            ?>
                                            </td> 
		                                </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <br/>
                                                <input type = "submit" name = "CSubmit" value = "SignUp">
                                                <input type = "reset" value = "Reset">
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td></td>
                                            <td>
                                                <br>
                                                <?php
                                                echo $signup;
                                                ?>
                                            </td>   
                    </tr>
                </table>
                <h4 align="center">
                       Already have an Account? <a href="CLogin.php">Login here</a>
                </h4>
            </form>
        </hr>
    </body>
</html>