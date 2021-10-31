<?php
    // write your code here
ob_start();
session_start();
require_once 'config.php';

//read the values
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$query = "select * from tblUsers where username='$username';";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['password'];
    
    if(password_verify($password,$hashed_password)){
        $_SESSION['username'] = $username;
        header("location:admin.php");
        ob_end_flush();
        die();
    }
}
header("location:index.php?result=fail");
?>
