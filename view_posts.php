<?php
  // session_start();
   //include('./login/session.php');
   include('./conn.php');
//asdsad

 
            $student_sql = "SELECT * FROM notifications";
		  	$result = mysqli_query($conn,$student_sql);
	
$i=0;
$entry = array();

while ($row = mysqli_fetch_array($result))
{
    $entry[$i][0] = $row["notifs"];
    //echo " " ."<br>". " ";
    //echo "<p>".$entry[$i][0]."</p>";
    
    $i++;
    //echo " " ."<br>". " ";
}
  $x=$i;
  $i=0;
            
?>


<html>
    <head>
        <style>
            h1
            {
                
            }
            p{
                 border-left: 2px solid blue;
                 padding-left:5px;
                 margin: 5px;
            }
            body {
                   background-color: #000000;
                   /*//background-image: url("simple.jpg");*/
                   background-size:cover; 
                   font-family: sans-serif;
                    background-repeat:no-repeat;
                background-position: center center; 
                   color:white;
                  
                  font-size:15px;
                  
                }
                
                #123
                {
                    margin-bottom: -4px;
                }
        </style>
    </head>
    <body>
         <style> 
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
    display: none;}
         </style>
         
         <div>
            <CENTER> <h1><B>NOTIFICATIONS</B></h1></CENTER>
         </div>
         
        <div class="sample">
            <p class="sample2">
            <?php
                    $i=$x-1;
                            while ($i>=0)
                {
                    //$entry[$i][0] = $row["notifs"];
                    //echo " " ."<br>". " ";
                    echo "<p id='123'>".$entry[$i][0]."</p>";
                    
                    $i--;
                    echo " " ."<br>". " ";
                }
        ?>
        </p>
        </div>
    </body>
</html>

