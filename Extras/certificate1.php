<?php
   include('./login/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>certificate1</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
  <script src="http://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript" ></script>
  	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dropdown.js"></script>

	<style type="text/css">
		body{
	background: url(https://images.unsplash.com/32/Mc8kW4x9Q3aRR3RkP5Im_IMG_4417.jpg?auto=format&fit=crop&w=1050&q=80); 
	background-size:cover; 
	background-position: center;
	font-family: 'Open Sans', sans-serif;
       }

       #h1margin
       {

        margin-left: 1.66%;
         margin-top: 5%;
       }
h1{
	margin-left: 1.66%;
	margin-top: 25%;
  margin: 10 20 30 40;
	font-family: 'Raleway', sans-serif;
	text-align: left;
  color: white;
}
 

.images
{
  margin: 25px;
}





	</style>

</head>

<body>

     <h1 id="h1margin">Student Name <span class="label label-primary">Miranda</span></h1>


        
     
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
		         	<li class="active"><a href="#">Home</a></li>
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


   
                         

  <a href="#" class="pop">
    <img src="/certificateimages/1.jpg" style="width: 200px; height: 125px;" class="images">
</a>
    
<a href="#" class="pop">
    <img src="/certificateimages/4.jpg" style="width: 200px; height: 125px;" class="images">
</a>

<a href="#" class="pop">
    <img src="/certificateimages/3.jpg" style="width: 200px; height: 125px;" class="images">
</a>

<a href="#" class="pop">
    <img src="/certificateimages/5.jpg" style="width: 200px; height: 125px;" class="images">
</a>

<a href="#" class="pop">
    <img src="/certificateimages/2.jpg" style="width: 200px; height: 125px;" class="images">
</a>

<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
    </div>
  </div>
</div>



   
         
</body>
           

			  	

<script type="text/javascript">
  $(function() {
    $('.pop').on('click', function() {
      $('.imagepreview').attr('src', $(this).find('img').attr('src'));
      $('#imagemodal').modal('show');   
    });   
       });
</script>


<script src="http://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript" ></script>
  	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dropdown.js"></script>



</html>
