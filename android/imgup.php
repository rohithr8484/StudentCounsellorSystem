<?php
require "conn.php";
$image =$_POST["image"];
$name =$_POST["name"];
$decodedImage = base64_decode($image);
 
    //upload the image
   
$sql= "insert into login (username) values ('$name')";
    
    
if($mysqli_query($conn,$sql))
{
	 file_put_contents("https://studentcounselor.000webhostapp.com/".$name.".jpg", $decodedImage);
        echo json_encode(array('response'=>'Image uploaded successfully'));
}
else
{
	echo json_encode(array('response'=>'Image upload failed'));
}

$conn.close();

?>
