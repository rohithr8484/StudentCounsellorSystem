 <?php
require "conn.php";
$user_name =$_POST["usn"];

$mysql_qry = "select sem from student_details where usn='$user_name'";
$result = mysqli_query($con,$mysql_qry) or die(mysqli_error());
$row = mysqli_fetch_array($result);
$sem=$row['sem'];

$mysql_qry = " select subject , quiz2 from marks_attendance where usn='$user_name' and sem = '$sem'";
$result = mysqli_query($con,$mysql_qry) or die(mysqli_error());

if(mysqli_num_rows($result) > 0)
{

while ($row = mysqli_fetch_array($result)) {
    printf("%s : %s #", $row['subject'], $row['quiz2']);  
    print("\n");

}
    
    
    
}
else
{
	echo "not available";
}

?>