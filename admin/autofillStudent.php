<?php
include 'conn.php';
session_start();
$_SESSION['usn']=$_POST['qusn'];  //"1RV16CS125";

$queryusn=$_SESSION['usn'];


$queryString="SELECT * FROM student_details WHERE usn='$queryusn'";

$sqlrow=mysqli_query($conn,$queryString) or die( mysqli_error($conn));


$row = mysqli_fetch_assoc($sqlrow);


        $_SESSION['name']=$row['first_name'];
        $_SESSION['counsellor']=$row['counsellor'];
      //  $_SESSION['dp']=$row["dp"]; 
        $_SESSION['parentname']=$row['parent_name'];
        $_SESSION['mobilenumber']=$row['contact_number'];
        $_SESSION['emailaddress']=$row['email_id'];
        
$queryString="SELECT password FROM login WHERE userid='$queryusn'";
$sqlrow=mysqli_query($conn,$queryString) or die( mysqli_error($conn));
$row = mysqli_fetch_assoc($sqlrow);
$_SESSION['password']=$row['password'];

?>