<?php

include('../conn.php');

session_start();
if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());

$username   = mysqli_real_escape_string($conn,$_POST['username']);
$password   = mysqli_real_escape_string($conn,$_POST['password']);

      $sql = "SELECT * FROM login WHERE userid = '$username' and password = '$password'";
      $result = mysqli_query($conn,$sql) or die(mysql_error());
      $row = mysqli_fetch_array($result);   
      $name = $row['userid'];
        if ($row!=NULL){
            $_SESSION['login_user'] = $name;     //name
            if($row['role']=="admin")
              header("location: ../admin/adminpage.php");
            else  if($row['role']=="counsellor")
            header("location: ../homepage.php");
            
            else  if($row['role']=="student")
            header("location: ../student/student_homepage.php");
            
            }
        else {
            
                        header("location: ../index.html");
                }
?>

<!DOCTYPE>
<html>
    <footer>
        <a href="https://seal.beyondsecurity.com/vulnerability-scanner-verification/studentcounselor.000webhostapp.com"><img src="https://seal.beyondsecurity.com/verification-images/studentcounselor.000webhostapp.com/vulnerability-scanner-2.gif" alt="Website Security Test" border="0"></a>
    </footer>
</html>