 <?php
require "conn.php";
$user_name =$_POST["usn"];

$mysql_qry = " select * from marks_attendance;";
$result = mysqli_query($con,$mysql_qry);
if(mysqli_num_rows($result) > 0)
{
   //$row = mysqli_fetch_row($result);

  // echo $row[0].$row[1];
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("%s %s \r\n", $row[5], $row[6]);  
    print("\n");

}
    
    
    
}
else
{
	echo "login unsuccessful";
}

?>