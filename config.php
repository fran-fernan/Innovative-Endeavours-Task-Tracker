<?php
    // write the code to connect with the database
$host = 'localhost';
$username = 'fefranci_admin';
$password = 'cplena!L0ve';
$db_name = 'fefranci_mydb';

$conn = mysqli_connect($host,$username,$password,$db_name);

if(empty($conn))
    die("Connection problem: " . mysqli_connect_error());
