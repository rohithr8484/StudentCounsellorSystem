<?php
require('../fpdf181/fpdf.php');
include('conn.php');


class PDF extends FPDF {
	function Header(){
	    
		//logo
		$this->Image('RV logo1.png',20,20,20);
		
		$this->SetFont('Arial','',10);
		$this->Cell(0,0,'RASHTREEYA SIKSHANA SAMITHI TRUST',0,1,'C');
		$this->Ln(7);
		
		$this->SetFont('Arial','B',18);
		$this->Cell(0,0,'R.V. COLLEGE OF ENGINEERING',0,1,'C');
		
		$this->Ln(7);
		$this->SetFont('Arial','',10);
		$this->Cell(0,0,'(An Autonomous Institution Affilated to VTU, Belgaum)',0,1,'C');
		
		$this->Ln(7);
		$this->Cell(0,0,'Approved by All India Council for Technical Education, New Delhi.',0,1,'C');
		
		$this->Ln(7);
		
	}
	
	function Footer(){
	    $this->SetY(-70); //start from 7cm bottom
	    $this->SetFont('Arial','BU',11);
        $this->Cell(0,5,'Plase Note',0,1,'L'); 
        
        $this->SetFont('Arial','',10);
        $this->Cell(0,5,'1. As per university norms, students are expected to maintain at least 85% attendance in each subject',0,1,'L'); 
        $this->Cell(0,5,'2. AB - indicates absent for the tests.',0,1,'L'); 
        $this->Cell(0,5,'3. You are requested to instruct your ward to improve his/her performance.',0,1,'L'); 
        $this->Cell(0,5,'4. You are requested to meet the Counselor immediately.',0,1,'L'); 
        
        $this->Ln(20);
        $this->Cell(0,0,'Signature of Counselor',0,1,'L'); 
        $this->Cell(0,0,'Signature of Parent',0,1,'C'); 
        $this->Cell(0,0,'Signature of H.O.D',0,1,'R'); 
	}
	    
}


$pdf = new PDF('P','mm','A4'); //use new class
$pdf->SetMargins(20, 20, 20);



$sem=$_POST['sem'];
$test='test'.$_POST['internal'];
$quiz='quiz'.$_POST['internal'];

$sql="SELECT usn FROM student_details WHERE sem='$sem' ORDER BY usn" ;  //only usn of those enrolled in the currrent sem

$result=mysqli_query($conn,$sql) or die (mysqli_error($conn));
// echo $sql;

// print_r ($row);

while($row= mysqli_fetch_array($result))
{
    $usn= $row['usn'];
    $sql="SELECT first_name , last_name , section FROM student_details WHERE usn = '$usn' ORDER BY usn" ;
    $result1=mysqli_query($conn,$sql) or die (mysqli_error($conn));
    $row1= mysqli_fetch_array($result1);
    
    $name = $row1['first_name'].' '.$row1['last_name'];
    $section=$row1['section'];
    
    $sql="SELECT * FROM marks_attendance WHERE sem='$sem' and usn = '$usn' ORDER BY sub_code" ;
    $result2=mysqli_query($conn,$sql) or die (mysqli_error($conn));
    $j=0;
    while($row2= mysqli_fetch_array($result2))
        $marks_attendance[$j++]=$row2;
    
    
    
    //Image( file name , x position , y position , width [optional] , height [optional] )
    //Cell(width , height , text , border , end line , [align] )
    
    $pdf->AddPage();
    $pdf->Cell(0,0,'','B',1,'C');
    $pdf->Ln(1);
    $pdf->Cell(0,0,'','T',1,'C');
    $pdf->Ln(7);
    
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,0,'Ref: No: RVCE/   /',0,0,'L');
    $date = 'Date: '.date("d.m.Y");
    $pdf->Cell(0,0,$date,0,1,'R');
    
    $pdf->Ln(7);
    $pdf->SetFont('Arial','BU',12);
    $pdf->Cell(0,0,'PROGRESS REPORT','0',1,'C');
    $pdf->Ln(10);
    
    $pdf->SetFont('Arial','U',16);
    $pdf->Cell(0,0,'Department of Computer Science & Engineering','0',1,'C');
    $pdf->Ln(10);
    
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,7,'To,','0',1,'L');
    $pdf->Cell(0,7,'Dear Parent,','0',1,'L');
    
    $pdf->Ln(4);
    
    
    $line = 'The Progress Report of your ward Sri/Kum. '.$name.', USN: '.$usn.', studying in '.$sem.' ('.$section.' Sec) Semester is as shown below.';
    $pdf->MultiCell(0,7, $line ,0,1);
    
    
    
    
    $pdf->Ln(4);
    $pdf->SetFont('Arial','B',11);
    
    $pdf->Cell(50,16,'Subjects',1,0,'C'); 
    $pdf->Cell(23,16,'Sub_Code',1,0,'C'); 
    $pdf->Cell(18,8,'Test-'.$_POST['internal'],1,0,'C'); 
    $pdf->Cell(18,8,'Quiz-'.$_POST['internal'],1,0,'C'); 
    $pdf->Cell(60,8,'Attendance',1,0,'C'); 
    $pdf->Cell(0,8,'',0,1); //dummy line ending, height=8(normal row height) 
    
    //second line(row)
    $pdf->Cell(73,8,'',0,0);   //dummy cell to align next cell, should be invisible
    $pdf->Cell(18,8,'MAX 50',1,0,'C'); 
    $pdf->Cell(18,8,'MAX 10',1,0,'C'); 
    $pdf->Cell(18,8,'Total',1,0,'C'); 
    $pdf->Cell(18,8,'Attended',1,0,'C'); 
    $pdf->Cell(24,8,'Percentage',1,1,'C'); 
    
    $pdf->SetFont('Arial','',11);
    
    //data rows
    
    for($i=0;$i<$j;$i++){
        $held = $marks_attendance[$i]['classes_held1'];
        $attended = $marks_attendance[$i]['attendance1'];
        $percent = ceil(($attended/$held)*100);
    	$pdf->Cell(50,12,$marks_attendance[$i]['subject'],'1',0,'L');
    	$pdf->Cell(23,12,$marks_attendance[$i]['sub_code'],'1',0,'C');
    	$pdf->Cell(18,12,$marks_attendance[$i][$test],'1',0,'C');
    	$pdf->Cell(18,12,$marks_attendance[$i][$quiz],'1',0,'C');
    	$pdf->Cell(18,12,$held,'1',0,'C');
    	$pdf->Cell(18,12,$attended,'1',0,'C');
    	$pdf->Cell(24,12,$percent,'1',1,'C');
    }

$pdf->Ln(4);

}

$pdf->output();
?>