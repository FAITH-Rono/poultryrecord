<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$con = mysqli_connect('localhost', 'root', '', 'poultryfarm');
if (!$con){
    die("Connection Error");
    
}
?>