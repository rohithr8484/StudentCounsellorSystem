<?php
include('./login/session.php');
$description =  $_POST['description'];
$category = $_POST['category'];
$grade = $_POST['grade'];
$sl_no = $_POST['sl_no'];
$sql = "Update certificates SET counsellor_appraisal = '$grade' , category='$category' , description = '$description' where sl_no = $sl_no  ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
?>