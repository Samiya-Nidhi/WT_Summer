<?php
include("../control/process.php");
?>


<html>
    <head>
        <title>my home</title>
    </head>
    <body>
        <h1>Registration From</h1>
        <form action ="" method="post" enctype="multipart/form-data">
        <!-- <img src="../image/img_girl.jpg"> -->
        <form>
            <table>
           <tr><td> First Name</td><td> <input type="text" name="fname"> </td></tr>
           <td>
          <?php
          echo $name2;
          ?>
           </td>

           <tr><td> Last Name </td><td> <input type="text" name="lname"> </td></tr>
           <tr><td> Age </td><td> <input type="text" name="age" > </td></tr>
     
           <tr><td>
           Designation:
           </td><td>
           <input type="radio" name="radio" value="jprog">Junior Programmer
           <input type="radio" name="radio" value="sprog">Senior Programmer
           <input type="radio" name="radio" value="plead">Project Lead
           </td></tr>
           <tr><td>
           Preferred language:
           </td><td>
           <input type="checkbox" name="java" value="java">JAVA
           <input type="checkbox" name="php" value="php">PHP
           <input type="checkbox" name="cpp" value="cpp">C++
           </td></tr>
           
            <tr><td> E-mail </td><td> <input type="email" name="email"> </td></tr>
            <tr><td> password</td><td> <input type="password" name="password"></td></tr>
            <tr><td>Please Choose a files :  </td>  
         <td><input type="file" id="myfile" name="myfile"> </td></tr>
            <tr><td> <input type="Submit"name="Submit" value="Submit"  >
            <input type="Reset"  ></td></tr>
            </table>
        </form>
    </body>
</html>