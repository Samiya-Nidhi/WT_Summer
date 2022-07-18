<?php
include("../control/process.php");

?>
<html>
<head>
<title>Form </title>
</head>
<body>
<h1>Registration Form </h1>
<form action=""method="POST"enctype="multipart">
<form>
<table>
<tr><td>First Name</td><td><input type="text" placeholder="First Name"></td></tr>
<tr><td>Last Name</td><td><input type="text" placeholder="Last Name"></td></tr>
<tr><td>Age</td><td><input type="text" placeholder="Age"></td></tr>

<tr>
<td>Designation</td>
<td><input type="radio" name="designation" value="Junior Programmar">junior programmar
<input type="radio" name="designation" value="Senior Programmar">senior programmar
<input type="radio" name="designation" value="Project Lead">project lead</td>
</tr>

<tr>
<td>Preferred Language</td>
<td><input type="checkbox" name="preferred language" value="Java">java
<input type="checkbox" name="preferred language" value="C++">c++
<input type="checkbox" name="preferred language" value="PHP">php</td>
</tr>

<tr><td>Email</td><td><input type="text" placeholder="Email"></td></tr>
<tr><td>Password</td><td><input type="password" placeholder="Password"></td></tr>

<tr><td>Please choose a file</td><td><input type="file" id="myfile" name="myfile"></td></tr>
<tr><td> <input type="submit" name="submit" value="Submit">
 <input type="reset" name="reset" value="Reset"> </td>
</tr>





</form>
</body>
</html>

