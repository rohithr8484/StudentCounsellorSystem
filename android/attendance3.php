 <?php
require "conn.php";
$user_name =$_POST["usn"];

$mysql_qry = " select * from marks_attendance where usn = '$user_name' and sem=5";
$result = mysqli_query($con,$mysql_qry);
if(mysqli_num_rows($result) > 0)
{
   //$row = mysqli_fetch_row($result);

  // echo $row[0].$row[1];
while ($row = mysqli_fetch_array($result)) {
    $attended = $row['attendance3'];
    $held = $row['classes_held3'];
    $percent =(int)(($attended/$held)*100);
    printf("%s : %s", $row['subject'], $percent);
    print("%");
    printf("#");

}
    
    
    
}
else
{
	echo "not available";
}

?>