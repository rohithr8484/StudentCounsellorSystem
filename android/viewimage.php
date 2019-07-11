<?php
 
require "conn.php";
 $sql = "select path from certificates";
 $res = mysqli_query($conn,$sql);
 
 
 $result = array();
 
 $url = "https://studentcounselor.000webhostapp.com/android/";
 while($row = mysqli_fetch_array($res))
 {
 echo $url.$row['path']."\n";
 }
 
 
 
 mysqli_close($conn);
 ?>
 
