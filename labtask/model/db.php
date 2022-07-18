<?php
$hostname ='localhost';
$username ='root';
$password = '';
$dbname ='labtask';
$conn = new mysqli($hostname,$username,$password);

if($conn->connect_error) {
    die("Connection failed." .$conn->connect_error);
}
echo 'Connection Successful'
?>