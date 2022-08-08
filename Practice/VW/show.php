<?php

session_start();

echo "Name is : ".$_SESSION["loginName"];
echo "<br>password is: ". $_SESSION["loginpass"];

//echo "<br> Your age is: ".$_SESSION["age"];
//echo "<br> Your selected designation is: ". $_SESSION["gender"];
echo "<br>"
?>

<a href = "../Control/logout.php">Log out</a>