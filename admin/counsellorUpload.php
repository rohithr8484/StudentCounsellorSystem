<!-- flow , upload to server -> excel to db -> delete excel file --!>

<?php
$target_dir = "./uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/

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

<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $uploadOk; ?>,1);</script> 

//////////////////////////////////////////////////////////////////////////////////////////

//excel to db

<?php
 include ("./PHPExcel/IOFactory.php");
 include_once('./PHPExcel/PHPExcel.php');
 include('conn.php');
//$html="<table border='1'>";
$objPHPExcel=PHPExcel_IOFactory::load('./uploads/counsellordetails.xlsx'); //now upload doesnt work so makes no sense to give path.

foreach($objPHPExcel->getWorksheetIterator() as $worksheet )
{
    $highestRow=$worksheet->getHighestRow();
    for($row=2;$row<=$highestRow;$row++)
    {
        //$html.="<tr>";
        
        //create a excel sheet with name and email, below code is for that. table to put into is sample_tb already created.   (referred this video for testing--> https://www.youtube.com/watch?v=ZwRPKvElM9U ).
        
        $name=mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(0,$row)->getValue());  // Should make  make it dynamic once it start working
        
        $email=mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(1,$row)->getValue()); //  Should make  make it dynamic once it starts working.
        
        $sql="INSERT INTO sample_tb(ex_name,ex_email) VALUES ('".$name."','".$email."')";
        mysqli_query($conn,$sql);
        
        
       // $html.='<td>'.$name.'</td>';
       // $html.='<td>'.$email.'</td>';
       // $html="<tr>";
    }
}

unlink('./uploads/counsellordetails.xlsx') //deleting from server
?>
