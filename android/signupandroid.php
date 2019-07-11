<?php
require "conn.php";
$first =$_POST["first_name"];
$last =$_POST["last_name"];
$email =$_POST["email"];
$password =$_POST["password"];
$gender =$_POST["gender"];
$grade =$_POST["grade"];
$mobile =$_POST["mobile"];
$mysql_qry = "insert into login (username,password,firstname,lastname,gender,mobile,grade) values ('$email','$password','$first','$last','$gender','$mobile','$grade')";
if($conn->query($mysql_qry) === TRUE)
{
	echo "Signed Up!";
}
else
{
	echo "Error: " . $mysql_qry . "br" . $conn->error;
}
$conn.close();

?>