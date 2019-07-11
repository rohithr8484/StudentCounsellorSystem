<?php
include 'conn.php';
session_start();
$_SESSION['sId']=$_POST['sId']; 

$queryid=$_SESSION['sId'];


$queryString="SELECT * FROM teacher_details WHERE teacher_id='$queryid'";

$sqlrow=mysqli_query($conn,$queryString) or die( mysqli_error($conn));


$row = mysqli_fetch_assoc($sqlrow);


        $_SESSION['name']=$row['first_name'];
        $_SESSION['mobilenumber']=$row['contact_number'];
        $_SESSION['emailaddress']=$row['email_id'];
        
$queryString="SELECT password FROM login WHERE userid='$queryid'";
$sqlrow=mysqli_query($conn,$queryString) or die( mysqli_error($conn));
$row = mysqli_fetch_assoc($sqlrow);
$_SESSION['password']=$row['password'];

?>