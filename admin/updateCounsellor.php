<?php
include('./conn.php');
session_start();



if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());
    
    
    $SId=$_SESSION['sId'];  
    $Counsellorname   = $_POST['cname'];
    $Email   = $_POST['email'];
    $Password   = $_POST['password'];
    $Mobile   = $_POST['mobile'];
    
     $sql="UPDATE staff SET name='$Counsellorname' , email='$Email', password='$Password', contact ='$Mobile' WHERE staffid = '$SId' ";
       mysqli_query($conn,$sql)or die( mysqli_error($conn));
       ?>