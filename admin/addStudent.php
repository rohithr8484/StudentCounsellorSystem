<?php
include('./conn.php');

if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());
    
    $Studentname   = $_POST["sname"];
    $Usn   = $_POST['usn'];
    $Counselorname   = $_POST['cname'];
    $Parentname   = $_POST['pname'];
    $Email   = $_POST['email'];
    $Password   = $_POST['password'];
    $Mobile   = $_POST['mobile'];
    
     $sql="INSERT INTO student (usn,password,name,counsellor,dp,parentname,emailaddress,mobilenumber) VALUES ('".$Usn."','".$Password."','".$Studentname."','".$Counselorname."','NULL','".$Parentname."','".$Email."','".$Mobile."')";
       mysqli_query($conn,$sql)or die( mysqli_error($conn))
?>