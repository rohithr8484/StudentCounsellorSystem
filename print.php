<?Php
include('./login/session.php');
require('./fpdf181/mem_image.php');

$sl_no = $_GET['print'];
if($sl_no==0)
{
    $pdf = new FPDF(); 
    $pdf->AddPage('L');
    $image = "./image_not_found.jpg";
    $pdf->Image($image,20,20,260,150,'JPG');
}
else
{
    $query = "SELECT image FROM certificates WHERE sl_no = '$sl_no'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    
    $image = $row['image'];
    
    $pdf = new PDF_MemImage();
    $pdf->AddPage('L');
    $pdf->MemImage(base64_decode($image), 20, 0,260,200);
    // require('./fpdf181/fpdf.php');
    // $pdf = new FPDF(); 
    // $pdf->Image($image,20,20,260,150,'JPG');
}

 $pdf->Output();
?>