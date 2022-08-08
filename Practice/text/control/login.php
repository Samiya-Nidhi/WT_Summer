<?php
include("../control/loginprocess.php")
?>

<html>

<head>
    

    <form action="" method="post" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="logname"></td>

            </tr>


            <tr>
                <td>Password</td>
                <td><input type="password" name="logpass"></td>


            </tr>
            <tr>
               
                <td> <input type="Submit" name="Login" value = "Log In"></td>
            </tr>
</head>
</form>
</table>

<body>