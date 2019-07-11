<?php
 require "conn.php";
 if($_SERVER['REQUEST_METHOD']=='GET'){
 $id = $_GET['id'];
 $sql = "select dp from student where usn = '$id'";
 
 $r = mysqli_query($conn,$sql);
 
 $result = mysqli_fetch_array($r);
 
 header('content-type: image/jpeg');
 
 echo base64_decode($result['dp']);
 
 mysqli_close($conn );
 
 }else{
 echo "Error";
 }
 ?>
 
