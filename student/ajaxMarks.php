<?php
include('../login/session.php');
$usn = $_POST['usn'];
$sem = $_POST['sem'];
$sql = "select * from marks_attendance where usn = '$usn' and sem ='$sem' order by subject";
$result = mysqli_query($conn,$sql)  or die( mysqli_error($conn));
$i=0;
$entry = array();
while ($row = mysqli_fetch_array($result))
{
    $entry[$i][0]=$row['subject'];
    $entry[$i][1]=$row['quiz1'];
    $entry[$i][2]=$row['test1'];
    $entry[$i][3]=$row['attendance1'];
    $entry[$i][4]=$row['classes_held1'];
    $entry[$i][5]=$row['quiz2'];
    $entry[$i][6]=$row['test2'];
    $entry[$i][7]=$row['attendance2'];
    $entry[$i][8]=$row['classes_held2'];
    $entry[$i][9]=$row['quiz3'];
    $entry[$i][10]=$row['test3'];
    $entry[$i][11]=$row['attendance3'];
    $entry[$i][12]=$row['classes_held3'];
    $i++;
}

echo json_encode($entry);

?>