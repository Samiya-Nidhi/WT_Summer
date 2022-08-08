<html>
<?php
include("../aud_vw/login.php")
?>


<body>



    <head>

        <h1> Auditor regstration</h1>

        <form action="" method="post" enctype="multipart/form-data">



            <table>

                <tr>

                    <td> Email </td>

                    <td><input type="text" name="mail"></td>

                </tr>

                <tr>
                    <td> Password </td>
                    <td><input type="password" name="pass"></td>
                </tr>


                <tr>
                    <td> Re type Password </td>
                    <td><input type="password" name="rpass"></td>
                </tr>
                
                   
                <tr>
                <tr>
                <td> First name</td>

                <td>

                    <input type="text" name="fname">

                </td>

                </tr>


                <tr>

                    <td> Last name</td>

                    <td>

                        <input type="text" name="lname">

                    </td>

                </tr>


                <tr>
                    <td> Gender </td>
                    <td> <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        
                    </td>
                   
                </tr>

                





                <tr>

                    <td><input type="Submit" name="submit"></td>

                </tr>



                <tr>

                    <td> <input type="Submit" name="next" value="Next"> </td>

                </tr>



            </table>

    </head>

</body>



</html>