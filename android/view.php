<?php
 
 if($_SERVER['REQUEST_METHOD']=='GET'){
  $id = $_GET['id'];
  $usn = $_GET['usn'];
 $sql = "select * from certificates where sl_no='$id' and usn='$usn'";
 require_once('conn.php');
 
 $r = mysqli_query($con,$sql);
 
 $result = mysqli_fetch_array($r);
 
 
       
         header('content-type: image/jpeg');
         echo base64_decode($result['image']);
         


 mysqli_close($con);
 

 
 }else
 {
 echo "Error";
 }
  ?>