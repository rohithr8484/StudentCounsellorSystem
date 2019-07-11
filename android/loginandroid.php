<?php
include('./conn.php');
session_start();

if (!$con) 
    die("Connection failed: " . mysqli_connect_error());

$username   = mysqli_real_escape_string($con,$_POST['user_name']);
$password   = mysqli_real_escape_string($con,$_POST['password']);

$sql = "SELECT * FROM login WHERE userid = '$username' and password = '$password'";
$result = mysqli_query($con,$sql) or die(mysql_error());
$row = mysqli_fetch_array($result);   
$name = $row['userid'];

if ($row!=NULL){
    $_SESSION['login_user'] = $name;     //name
    if($row['role']=="student")
    // echo $_SESSION['login_user'];
      print "loginsuccess";
    else
      print "login unsuccessful";
}

else
      print "login unsuccessful"; 
?>