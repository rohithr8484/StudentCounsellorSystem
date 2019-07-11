<!-- flow , upload to server -> excel to db -> delete excel file --!>

<?php
$target_dir = "./uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) 
    $uploadOk = 2;

// Allow certain file formats
if($FileType != "xlsx" ) 
    $uploadOk = 3;

//file is valid
if($uploadOk == 1){
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) //successful upload
     $uploadOk = 4;
else
    $uploadOk = 0; //failed
}

?>

<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $uploadOk; ?>,0);</script> 

//////////////////////////////////////////////////////////////////////////////////////////

//excel to db

<?php
 include ("./PHPExcel/IOFactory.php");
 include_once('./PHPExcel/PHPExcel.php');
 include('conn.php');
//$html="<table border='1'>";
$objPHPExcel=PHPExcel_IOFactory::load('./uploads/studentdetails.xlsx'); 

foreach($objPHPExcel->getWorksheetIterator() as $worksheet )
{
    $highestRow=$worksheet->getHighestRow();
    for($row=2;$row<=$highestRow;$row++)
    {
       
        //create a excel sheet with name and email, below code is for that. table to put into is sample_tb already created.   (referred this video for testing--> https://www.youtube.com/watch?v=ZwRPKvElM9U ).
        
        $fname=mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(0,$row)->getValue());  // Should make  make it dynamic once it start working
        $lname=mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(1,$row)->getValue()); 
        $usn=mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(2,$row)->getValue()); 
        $counsellor=mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(3,$row)->getValue()); 
        $parent_name=mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(4,$row)->getValue()); 
        $email=mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(5,$row)->getValue()); 
        $mobile_no=mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(6,$row)->getValue()); 
        
        $sql="INSERT INTO student_details(usn,first_name,last_name,email_id,contact_number,counsellor,parent_name)VALUES ('$usn','$fname','$lname','$email' ,'$mobile_no','$counsellor','$parent_name')";
        mysqli_query($conn,$sql) or die (mysqli_error($conn));
        
        $sql="INSERT INTO login (userid,role) VALUES ('$usn','student')";
        mysqli_query($conn,$sql)  or die (mysqli_error($conn));
        
        //$html.="<tr>";
       // $html.='<td>'.$name.'</td>';
       // $html.='<td>'.$email.'</td>';
       // $html="<tr>";
    }
}

unlink('./uploads/studentdetails.xlsx') //deleting from server
?>
