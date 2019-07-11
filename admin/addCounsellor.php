<?php
include('./conn.php');

if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());

    $Counsellorname   = $_POST['cname'];
    $sId   = $_POST['sId'];
    $Email   = $_POST['email'];
    $Password   = $_POST['password'];
    $Mobile   = $_POST['mobile'];
    
     $sql="INSERT INTO staff (staffid,password,name,email,contact) VALUES ('".$sId."','".$Password."','".$Counsellorname."','".$Email."','".$Mobile."')";
       mysqli_query($conn,$sql)or die( mysqli_error($conn))
?>