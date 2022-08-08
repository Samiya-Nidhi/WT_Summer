<?php
include("../Control/Process2.php");
setcookie( "cookie", "welcome", time() + 360000);
if(($_COOKIE["cookie"]=="welcome"))

{

    echo" we know you sir";

}

else

{

    echo" greetings!";

}

if(($_COOKIE["cookie"]=="hello"))

{

    echo" you have visited us before";

}

else

{

    echo" you have never visited us";

}

if(($_COOKIE["cookie"]=="hello"))

{

    echo" you have visited us before";

}

else

{

    echo" you have never visited us";

}
if(($_COOKIE["cookie"]=="welcome"))

{

    echo" you have visited us before";

}

else

{

    echo" you have never visited us";

}
?>

<html>

<head>
    <title>Registration Form Contd..</title>

    <form action="" method="post" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="loginName"></td>

            </tr>


            <tr>
                <td>Password</td>
                <td><input type="password" name="loginpass"></td>


            </tr>
            <tr>
               
                <td> <input type="Submit" name="Login" value = "Log In"></td>
            </tr>
</head>
</form>
</table>

<body>