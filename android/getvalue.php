 <?php
require "conn.php";
$user_name =$_POST["id"];

$mysql_qry = " select * from certificates where sl_no='$user_name';";
$result = mysqli_query($con,$mysql_qry);
if(mysqli_num_rows($result) > 0)
{
   //$row = mysqli_fetch_row($result);

  // echo $row[0].$row[1];
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) 
{
    printf("Description:%s  Category:%s  Classification:%s   Appraisal:%s   remarks:%s", $row[2],$row[4],$row[5],$row[7],$row[8]);  
    print("\n");

}
    
    
    
}
else
{
	echo "not available";
}

?>