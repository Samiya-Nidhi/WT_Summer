
<html>

<head>

   


<div class="registrationBox">
    <h1 align="left">Registration form </h1>
</div>

<body>

<form action="" method="post" enctype="multipart/form-data" onsubmit="return formcheck()">




        <div class="form">
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="fname" id = "fname" onkeyup="checkfName()"></td>
                    <p id="fnameError"></p>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname" id = "lname" onkeyup="checklName()"></td>
                    <p id="lnameError"></p>
                </tr>

                <tr>
                    <td> Age</td>
                    <td><input type="text" name="age"id ="age" onkeyup="checkAge()"></td>
                    <p id="ageError"></p>
                </tr> 



                <tr>
                    <td>Designation</td>
                    <td>
                        <input type="radio" name="designation" value="junior programmer" id = "jp"  onkeyup="checkDes()"> Junior Programmer
                        <input type="radio" name="designation" value="senior programmer" id = "sp"> Senior Programmer
                        <input type="radio" name="designation" value="project lead" id = "pl"> Project Lead
                        <p id="desError"></p>
                    </td>
                </tr>


                <tr>
                    <td> Field of interest</td>
                    <td>
                        <input type="checkbox" name="java" value="JAVA" id = "java">JAVA
                        <input type="checkbox" name="php" value="PHP" id="php">PHP
                        <input type="checkbox" name="cpp" value="C++" id = "cpp">C++
                        <p id="interestError"></p>

                    </td>
                </tr>



                <tr>
                    <td> Email</td>
                    <td><input type="text" name="email" id = "mail"  onkeyup="checkEmail()"></td>
                    <p id = "mailError"></p>
                </tr>


                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" id = "pass" onkeyup = "checkPass()"></td>
                    <p id = "passError"></p>
                </tr>



                <tr>
                    <td>Please Choose a file</td>
                    <td><input type="file" name="myfile" id = "file"></td>
                    <p id = "fileError"></p>
                    <td>

                    </td>
                </tr>

</b >


       <tr>
            <td><input class = "button" type="submit" name="submit" value="Submit">
        

       
            <input class = "button" type="submit" name="reset" value="Reset"></td>
       

       </tr>


        </div>
        </table>

        </div>
    </form>
</body>

</html>

<script src="../js/myscript.js"></script>








