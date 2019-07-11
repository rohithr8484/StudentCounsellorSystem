<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image = $_POST['image'];
 $usn = $_POST['usn'];
 $description = $_POST['description'];
 $category = $_POST['category'];
 $classification= $_POST['classification'];
 $student_appraisal = $_POST['student_appraisal'];
 $date = $_POST['date'];
 
 require_once('conn.php');
 
 $sql = "INSERT INTO certificates (usn,description,date,category,classification,student_appraisal,image) 
 VALUES ('$usn','$description','$date','$category','$classification','$student_appraisal',?)";
 
 $stmt = mysqli_prepare($con,$sql);
 
 mysqli_stmt_bind_param($stmt,"s",$image);
 mysqli_stmt_execute($stmt);
 
 $check = mysqli_stmt_affected_rows($stmt);
 
 if($check == 1){
 echo "Image Uploaded Successfully";
 }else{
 echo "Error Uploading Image";
 }
 mysqli_close($con);
 }else{
 echo "Error";
 }