<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        
</head>
<body>
<div class="header">
        <h1>ABC Management System</h1>
        <br>
        <h3 class="wecreat">We Creat Future </h3>
    </div>
    <div class="link">
        <a href="#">Home</a>
        <a href="#">About US</a>
        <a href="#">Shop</a>
    </div>
    <h1 class="reg">Registration Form</h1>
    <hr>
    
   
    <form action="" method="POST" enctype="multipart/form-data">
         <table>
             
         <tr class="form"><td >First Name:</td> 
       <td> <input type="text"  name="fname"></td></tr>
       <tr class="form"><td>Last Name:</td> 
       <td> <input type="text"  name="lname"></td></tr>
       <tr class="form"><td>Age:</td> 
       <td> <input type="text"  name="age"></td></tr>
       
       <tr class="form"><td>Designation:</td>
       <td><input type="radio" name="des" value="Junior Programmer">Junior Programmer 
       <input type="radio" name="des" value="Senior Programmer">Senior Programmer 
       <input type="radio" name="des" value="Project Lead">Project Lead</td></tr>
        
        <tr class="form"><td>Preferred Language:</td>
       <td><input type="checkbox" name="pref1" value="Java">Java 
       <input type="checkbox" name="pref2" value="PHP">PHP 
       <input type="checkbox" name="pref3" value="C++">C++</td></tr>
       <tr class="form"><td>Email:</td> 
       <td> <input type="text"  name="email"></td></tr>
       <tr class="form"><td>Password:</td> 
       <td> <input type="password"  name="password"></td>
       <td> </td>  
    </tr>
       
       <tr class="form"><td>Please choose file </td>
        <td><input type="file"  name="picture"></td></tr>
       
       <tr><td ><input class="myButton" type="submit" name="submit" value="Submit">
        <input class="myButton" type="submit"  name="submit" value="Reset"></td></tr> 
</table>
        
</form>
</body>
</html>