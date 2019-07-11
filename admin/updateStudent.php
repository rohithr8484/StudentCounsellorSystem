<?php
include('./conn.php');
session_start();



if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());
    
    
    $qusn=$_SESSION['usn'];    
    $Studentname   = $_POST["sname"];
    $Counsellorname   = $_POST['cname'];
    $Parentname   = $_POST['pname'];
    $Email   = $_POST['email'];
    $Password   = $_POST['password'];
    $Mobile   = $_POST['mobile'];
    
     $sql="UPDATE student_details SET first_name='$Studentname',counsellor='$Counsellorname',parent_name='$Parentname',email_id='$Email',contact_number='$Mobile' WHERE usn='$qusn' ";
       mysqli_query($conn,$sql)or die( mysqli_error($conn)) ;
       
       echo $sql;
       
       
     $sql="UPDATE login SET password = '$Password'WHERE usn='$qusn'";
     mysqli_query($conn,$sql)or die( mysqli_error($conn));
       
       
       
?>