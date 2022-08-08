<?php
include ("../view/name.php");

?>

<html>
    <head>
	 <h1>this is the from of division controller</h1>
        <title>reg form</title>
</head>
<body>
   
    


    <form action="" method="POST" enctype="multipart/form-data">
         <table>
             
         <tr><td>First Name:</td> 
       <td> <input type="text"  name="fname"></td></tr>
       <tr><td>Last Name:</td> 
       <td> <input type="text"  name="lname"></td></tr>
       <tr><td>Age:</td> 
       <td> <input type="text"  name="age"></td></tr>
       

       <tr><td>Designation:</td>
       <td><input type="radio" name="des" value="J_pro">CGA
       <input type="radio" name="des" value="S_pro">Division controller
       <input type="radio" name="des" value="P_lead">Auditor</td></tr>
        
		
        

       <tr><td>Email:</td> 
       <td> <input type="text"  name="male"></td></tr>
       <tr><td>Password:</td> 
       <td> <input type="password"  name="password"></td>
       <td><?php
       echo $passwordError;
       ?>  
	   </td>  
    </tr>
       

       <tr><td>Enter your date of birth </td>
        <td><input type="file"  name="myfile"></td></tr>
       
       <tr><td><input type="submit" name="submit" value="Submit">
        <input type="submit"  name="submit" value="Reset"></td></tr>

</table>

</form>

</body>
</html>