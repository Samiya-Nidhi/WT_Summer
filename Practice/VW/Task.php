<?php
include("../Control/Process.php")
?>
<html>

<body>

    <head>

     
        <h1 align="center"> Login as a CGA </h1>
        <br><br>
        <h1 align = "center">
        
        <form action="" method="post" enctype="multipart/form-data">

            <table>
                <tr>
                    <td> Name </td>
                    <td><input type="text" name="fname"></td>

                    <td>
                        <?php
                        if (isset($_REQUEST["submit"])) {
                            echo $firstName;
                        }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>User Name </td>
                    <td><input type="text" name="uname"></td>
                    <?php
                    if (isset($_REQUEST["submit"])) {
                        echo $firstName;
                    }
                    ?>
                </tr>

                <tr>
                    <td> Password </td>
                    <td><input type="password" name="pass"></td>

                    <td>
                        <?php

                        if (isset($_REQUEST["submit"])) {
                            echo $password;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td> Email</td>
                    <td>
                        <input type="text" name="mail">
                    </td>
                    <td>
                        <?php

                        if (isset($_REQUEST["submit"])) {
                            echo $emailerr;
                        }
                        ?>
                </tr>

                <tr>
                    <td>Age </td>
                    <td><input type="text" name="age"></td>
                    <td>
                        <?php
                        if (isset($_REQUEST["submit"])) {
                            echo $var_age;
                        }
                        ?>
                    </td>
                </tr>



                <tr>
                    <td> Gender </td>
                    <td> <input type="radio" name="gender" value="Male">Male
                     <input type="radio" name="gender" value="Female">Female
                     <input type="radio" name="gender" value="other">Other</td>
                    <td>
                        <?php
                        if (isset($_REQUEST["submit"])) {
                            echo $var_gender;
                        }
                        ?>
                    </td>
                </tr>

        
                <tr>
                    <td>Please give your NID</td>
                        <td><input type="file" name="myfile"></td>
                        <td>
                        <?php
                        echo $var_file;
                        ?>
                    </td>
                </tr>



                <tr>
                    <td><input type="Submit" name="submit"></td>
                </tr>

                <tr>
                    <td> <input type="Submit" name="next" value="Next"> </td>
                </tr>
                </td>
                </tr>
      

            </table>
                    </h1>
    </head>
</body>

</html>