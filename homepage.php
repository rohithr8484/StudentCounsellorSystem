<?php
  // session_start();
   include('./login/session.php');
   include('./conn.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		body{
	//background: url(https://images.unsplash.com/32/Mc8kW4x9Q3aRR3RkP5Im_IMG_4417.jpg?auto=format&fit=crop&w=1050&q=80); 
	background-size:cover; 
	background-position: center;
	font-family: 'Open Sans', sans-serif;
       }
h1{
	margin-left: 1.66%;
	margin-top: 5%;
	font-family: 'Raleway', sans-serif;
	text-align: center;
}




.headerWarp .brandInner .brandName h1 a {
    color: #002F65;
    font-weight: bold;
    line-height: 1.25;
}

a {
    text-decoration: none;
    color: #002F65;
}
a {
    background: transparent;
}

.headerWarp .brandInner .brand img {
    width: 48px;
}
img {
    max-width: 100%;
}
 img {
    max-width: 100%;
    height: auto;
}
img {
    border: 0;
}



  .headerWarp .brandInner {
    width: 1000px;
    margin: 0 auto;
    overflow: auto
    background:#ffffff
    padding: 0px;
    padding-left: 30px;
    padding-bottom: 50px;
}
    .headerWarp
    {
      width: 100%;
    float: right;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0px
  
        
        }

   .headerWarp .brandInner .brandName {
    width: 57.62712%;
    float: left;
    margin-right: -100%;
    margin-left: 16.94915%;
    clear: none;
}

    .brandInner .logo {
    width: 15.25424%;
    float: left;
    margin-right: -100%;
    margin-left: 0;
    clear: none;
}

.headerWarp .brandInner .brandName {
    color: #333;
}

  .headerWarp .brandInner .brand {
    width: 23.72881%;
    float: right;
    margin-left: 0;
    margin-right: 0;
    clear: none;
}

.headerWarp .brandInner .brandName h3 {
    font-weight: normal;
    padding: 0px;
    font-size: 1.1em;
    margin: 0px 0px 15px;
}

.headerWarp .brandInner .brandName h1 {
    font-size: 2em;
    font-weight: normal;
    margin: 0px;
    line-height: 100%;
}

.headerWarp .brandInner .brandName h6 {
    font-size: 12px;
    font-weight: normal;
    padding: 0px;
    margin: 3px 0px 0px;
}

.headerWarp .brandInner .brandName h6 {
    font-size: 12px;
    font-weight: normal;
    padding: 0px;
    margin: 3px 0px 0px;
}

.rtecenter {
    text-align: center;
}

.headerWarp .brandInner .brand h1 {
    margin-right: 25px;
    color: #002F65;
    line-height: 83px;
    font-size: 25px;
    float: left;
    vertical-align: text-top;
    font-weight: normal;
}



 

#content
{
	 font-family: 'Open Sans', sans-serif;
  text-align:center;
  padding-top: 25%;
  font-weight: 700;
  color: #102021;
  text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
               0px 8px 13px rgba(0,0,0,0.1),
               0px 18px 23px rgba(0,0,0,0.1);
}
#content2{
  color: white;
  text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
               0px 8px 13px rgba(0,0,0,0.1),
               0px 18px 23px rgba(0,0,0,0.1);

}

#input3{
	
	float: left;
	margin: 1.66%;
	width: 16.5%;
}

.btn-default

{
    margin: 15px;
}

label {
    display: inline-block;
    max-width: 100%;
    margin-left: 15px;
    margin-bottom: 5px;
    font-weight: 300;
    color: #777;
}

hr{
	height: 12px;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
}
.btn-block
   {
    background-color: #FE2F2F;
    border-color: #29745A;
    padding: 6px 13px;
    margin: 5px;
   }
   

    .btn-block
    {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        background-color: #FE2F2F;
        border-color: #29745A;
    }
.btn-block {
    background-color: #FE2F2F;
    border-color: #29745A;
}

    .btn-block {
        transition: all 0.5s;
        cursor: pointer;
}

.btn-block {
    background-color: #0e375a;// 0A9363#
    border-color: #000000;
    padding: 5px 10px;
    width: 20%
}

.btn-block span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.btn-block span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.btn-block:hover span {
  padding-right: 25px;
}

.btn-block:hover span:after {
  opacity: 1;
  right: 0;
}

.navbar-default {
    background-color: #000000;
    border-color: #000000;
}

.navbar-default .navbar-nav>li>a {
    color: #FFFFFF;
}
.navbar-default .navbar-brand {
    color: #FFFFFF;
}
label {
    color: #FFFFFF;
}
	</style>

</head>

<body>
    <!-- remove watermark -->
 <style> 
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
    display: none;}
</style>



<header class="headerWarp" role="banner">
   <div class="brandInner">
        <div class="logo">
                  <a href="/" title="Home" rel="home" class="site-logo"><img src="RV logo1.png"  /></a>
         </div>
        <div class="brandName">  <div class="l-region l-region--branding">
        <div id="block-block-28" class="block block--block block--block-28">
            <div class="block__content">
              <h3 class="rtecenter"><span style="font-size:16px">Rashtreeya Sikshana Samithi Trust</span></h3>
          <h1 class="rtecenter"><span style="font-size:26px"><a href="/" title="Home">R V College of Engineering </a></span></h1>
          <h6 class="rtecenter"><span style="font-size:12px">Autonomous Institution affiliated to Visvesvaraya Technological University, Belagavi</span></h6>
          <h6 class="rtecenter"><span style="font-size:12px">Approved By AICTE, New Delhi, Accredited By NBA, New Delhi</span></h6>
            </div>
    </div>
      </div>
    </div>
        <div class="brand">  
          <div class="l-region l-region--header">
              <div id="block-block-1" class="block block--block block--block-1">
                  <div class="block__content">
              <h1>Since 1963</h1>
         
            </div>
          </div>
       </div>
    </div>
   </div>
  </header>


    
     <center><h1></h1></center>
     
    <nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
         <div class="navbar-header">
		       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		       </button>
          <a class="navbar-brand" href="#"><i class="fa fa-cog fa-spin fa-lg fa-fw"></i>
<span class="sr-only">Loading...</span> StudentCounselor </a>
         </div>
	         <div class="collapse navbar-collapse" id="bs-nav-demo">
	              <ul class="nav navbar-nav">
		        	<li><a href="./nsar/nsar.php">NSAR</a></li>
		         </ul>
		          <ul class="nav navbar-nav">
		        	<li><a href="./nssr/nssr.php">NSSR</a></li>
		         </ul>
		         <ul class="nav navbar-nav">
		         <li><a href="./chat/chat.php" target="_blank">Chat</a></li>
		         </ul>
		         <ul class="nav navbar-nav">
		         <li><a href="../post.php">Announcement</a></li>
		         </ul>
		         <ul class="nav navbar-nav">
		        	<li><a href="#">About</a></li>
		         </ul>
		         <ul class="nav navbar-nav navbar-right">
		        	
                    <li><label id = "pt">
                    <?php
                    echo "Username";
		        	echo nl2br("\r\n");  
		        	echo $login_session;
		        	?> </label></li>

                    <li><a href="./logout/logout.php">logout<i class="fa fa-user-plus" aria-hidden="true"></i></a></li>

		         </ul>
		     </div>   
         </div>
    </nav>
    
   <?php
            $student_sql = "SELECT usn,first_name FROM student_details WHERE counsellor = '$login_session'";
		  	$result = mysqli_query($conn,$student_sql);
		 // echo $result;
		 /* if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}*/
            $i=0;
            while($row = mysqli_fetch_array($result))
            {
              $student[$i][0]=$row[0]; //usn
              $student[$i][1]=$row[1]; //name
              $i++;
            }
            ?>
              <form action="./classification/classification.php" method = "POST">
                 
              <!-- 1 -->
                <button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[0][0]; ?> " > <?php echo $student[0][1];  echo nl2br("\r\n"); echo $student[0][0];?> <span></span> </button>
                
                <button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[1][0]; ?> " > <?php echo $student[1][1];  echo nl2br("\r\n"); echo $student[1][0];?> <span></span> </button>
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[2][0]; ?> " > <?php echo $student[2][1];  echo nl2br("\r\n"); echo $student[2][0];?> <span></span> </button>-->
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[3][0]; ?> " > <?php echo $student[3][1];  echo nl2br("\r\n"); echo $student[3][0];?> <span></span> </button>-->
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[4][0]; ?> " > <?php echo $student[4][1];  echo nl2br("\r\n"); echo $student[4][0];?> <span></span> </button>-->

                
               <!-- 2 -->
            <button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[0][0]; ?> " > <?php echo $student[0][1];  echo nl2br("\r\n"); echo $student[0][0];?> <span></span> </button>
                
                <button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[1][0]; ?> " > <?php echo $student[1][1];  echo nl2br("\r\n"); echo $student[1][0];?> <span></span> </button>
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[2][0]; ?> " > <?php echo $student[2][1];  echo nl2br("\r\n"); echo $student[2][0];?> <span></span> </button>-->
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[3][0]; ?> " > <?php echo $student[3][1];  echo nl2br("\r\n"); echo $student[3][0];?> <span></span> </button>-->
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[4][0]; ?> " > <?php echo $student[4][1];  echo nl2br("\r\n"); echo $student[4][0];?> <span></span> </button>-->
                
               <!-- 3 -->
            <button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[0][0]; ?> " > <?php echo $student[0][1];  echo nl2br("\r\n"); echo $student[0][0];?> <span></span> </button>
                
                <button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[1][0]; ?> " > <?php echo $student[1][1];  echo nl2br("\r\n"); echo $student[1][0];?> <span></span> </button>
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[2][0]; ?> " > <?php echo $student[2][1];  echo nl2br("\r\n"); echo $student[2][0];?> <span></span> </button>-->
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[3][0]; ?> " > <?php echo $student[3][1];  echo nl2br("\r\n"); echo $student[3][0];?> <span></span> </button>-->
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[4][0]; ?> " > <?php echo $student[4][1];  echo nl2br("\r\n"); echo $student[4][0];?> <span></span> </button>-->
              
               <!-- 4 -->
               
             <button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[0][0]; ?> " > <?php echo $student[0][1];  echo nl2br("\r\n"); echo $student[0][0];?> <span></span> </button>
                
                <button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[1][0]; ?> " > <?php echo $student[1][1];  echo nl2br("\r\n"); echo $student[1][0];?> <span></span> </button>
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[2][0]; ?> " > <?php echo $student[2][1];  echo nl2br("\r\n"); echo $student[2][0];?> <span></span> </button>-->
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[3][0]; ?> " > <?php echo $student[3][1];  echo nl2br("\r\n"); echo $student[3][0];?> <span></span> </button>-->
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[4][0]; ?> " > <?php echo $student[4][1];  echo nl2br("\r\n"); echo $student[4][0];?> <span></span> </button>-->
                
               <!-- 5 -->
               
              <button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[0][0]; ?> " > <?php echo $student[0][1];  echo nl2br("\r\n"); echo $student[0][0];?> <span></span> </button>
                
                <button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[1][0]; ?> " > <?php echo $student[1][1];  echo nl2br("\r\n"); echo $student[1][0];?> <span></span> </button>
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[2][0]; ?> " > <?php echo $student[2][1];  echo nl2br("\r\n"); echo $student[2][0];?> <span></span> </button>-->
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[3][0]; ?> " > <?php echo $student[3][1];  echo nl2br("\r\n"); echo $student[3][0];?> <span></span> </button>-->
                
                <!--<button type="submit" name="button" class="btn btn-primary btn-lg btn-block" id="input3"href = "./classification/classification.php" required = "true" value=" <?php echo $student[4][0]; ?> " > <?php echo $student[4][1];  echo nl2br("\r\n"); echo $student[4][0];?> <span></span> </button>-->
              
           </form>    
<script src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
<footer>
    <a href="https://seal.beyondsecurity.com/vulnerability-scanner-verification/studentcounselor.000webhostapp.com"><img src="https://seal.beyondsecurity.com/verification-images/studentcounselor.000webhostapp.com/vulnerability-scanner-2.gif" alt="Website Security Test" border="0"></a>
</footer>
</html>
