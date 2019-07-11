<?php
include('./conn.php');

if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());
    
    $TEXT   = $_POST["text"];
    
    
     $sql="INSERT INTO notifications (notifs) VALUES ('".$TEXT."')";
       mysqli_query($conn,$sql)or die( mysqli_error($conn));

echo "uploaded";

?>