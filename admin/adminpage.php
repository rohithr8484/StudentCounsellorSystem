<?php
include('../login/session.php'); 
// session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>	Welcome Admin</title>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">

	h1 {
    font-size: 2em;
    margin: 0.67em 0;
}

div
{
	margin-bottom: : 5px;
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
    overflow: auto;
    background: #fff;
    padding: 20px;
}
		.headerWarp
		{
			width: 100%;
    float: right;
    margin-left: 0;
    margin-right: 0;
    padding-top: 50px
  
  			
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

#hideform1 {display:none;
    padding-top:40px;
}

#hideform2 {display:none;
    padding-top:40px;
}

#hideform3 {display:none;
    padding-top:40px;
}

#hideform4 {display:none;
    padding-top:40px;
}

#hideform5 {display:none;
    padding-top:40px;
}


.form-group{

			width: 27%;
		}

		#fileDiv
		{
			padding-bottom: 25px;
		}

		#fileDiv2
		{
			padding-bottom: 25px;
		}

		

		.inner
		{
			display: inline-block;
		}

        
		

#f1_upload_form1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: normal;
	color: #666666;
	text-align: left;
}

#f1_upload_process1{
   z-index:100;
   visibility:hidden;
   position:absolute;
   text-align:left;
   width:400px;
}	

#f1_upload_form2 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: normal;
	color: #666666;
	text-align: left;
}

#f1_upload_process2{
   z-index:100;
   visibility:hidden;
   position:absolute;
   text-align:left;
   width:400px;
}

#pt
{
    display: inline-block;
    max-width: 100%;
    margin-left: 15px;
    margin-bottom: 5px;
    font-weight: 300;
    color: #777;
    padding-top: 5px;

}

#pt2 {
    padding-right: 15px;
    
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
/*label {*/
/*    color: #FFFFFF;*/
/*}*/

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: #f9f5f5;
    background-color: #00040c;
}

button, input, optgroup, select, textarea {
    margin: 0;
    font: inherit;
    color: #000000;
}

#pt {
    display: inline-block;
    max-width: 100%;
    margin-left: 15px;
    margin-bottom: 5px;
    font-weight: 300;
    color: #FFFFFF;
    padding-top: 5px;
}

.btn-default {
    color: white;
    background-color: #;
    border-color: #ccc;
    background-color: #335cef;
}

	</style>

<script language="javascript" type="text/javascript">

function startUpload(cat){
    if(cat==0)
      {
      document.getElementById('f1_upload_process1').style.visibility = 'visible';
      document.getElementById('f1_upload_form1').style.visibility = 'hidden';
      }
     if(cat==1)
     {
      document.getElementById('f1_upload_process2').style.visibility = 'visible';
      document.getElementById('f1_upload_form2').style.visibility = 'hidden';
      }
      
      return true;
}


function stopUpload(success,cat){
      var result = '';
      if (success == 0)
        alert("Failed to upload");
        
      else if(success==2)
        alert("Size limit exceeded(>5MB");
        
      else if(success==3)
        alert("Only Excel doc(.xlsx) valid!");
      
      else if(success==4)
        alert("Upload successful!!");
      
      if(cat==0){
       document.getElementById('f1_upload_process1').style.visibility = 'hidden';
       document.getElementById('f1_upload_form1').innerHTML = '<label><br>Rename to studentdetails.xlsx only: <input name="fileToUpload" type="file" size="30" /><\/label><label><input type="submit" name="submitBtn" class="sbtn" value="Upload" /><\/label>';
       document.getElementById('f1_upload_form1').style.visibility = 'visible';  
      }
      if(cat==1){
          document.getElementById('f1_upload_process2').style.visibility = 'hidden';
          document.getElementById('f1_upload_form2').innerHTML = '<label><br>Rename to counsellordetails.xlsx only: <input name="fileToUpload" type="file" size="30" /><\/label><label><input type="submit" name="submitBtn" class="sbtn" value="Upload" /><\/label>';
          document.getElementById('f1_upload_form2').style.visibility = 'visible'; 
      }
      return true;   
}


// $(document).ready(function() {
//     $('#autofill').submit(function(){
//         parent.document.getElementById("#update").reload();
//         });             
//         return true;
// });


// $(document).ready(function() { /// Wait till page is loaded
//   $('#toggleform2').click(function(){
//       $('#update').load('adminpage.php #update', function() {
//           /// can add another function here
//       });
//   });
// }); //// End of Wait till page is loaded

// jQuery(function(){
//   jQuery('#toggleform2').click();
//   var frm = document.getElementById('#toggleform2');
//                             frm.reset();  // Reset all form data
// });

function clearupdate(){
    document.getElementById("update").reset();
    
}


    function sub(){
        alert("details updated!");
    }

</script> 
</head>
<body>
    
<!-- remove watermark-->
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



  <div class="container">


       <nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container6">
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
		             <li><a href="./homepage.php">Home</a></li>
		        	<li><a href="#">About</a></li>
		        	<li><a href="../post.php">Post</a></li>
		         </ul>
		         <ul class="nav navbar-nav navbar-right">
		        	
                    <li><label id = "pt">
                    <?php
                    echo "Username";
		        	echo nl2br("\r\n");  
		        	echo $login_session;
		        	?> </label></li>

                    <li id = "pt2"><a href="../logout/logout.php">logout<i class="fa fa-user-plus" aria-hidden="true"></i></a></li>

		         </ul>
		     </div>   
         </div>
    </nav>


 
	  <ul class="nav nav-tabs">
	    <li class="active"><a data-toggle="tab" href="#home">Progress Report</a></li>
	    <li><a data-toggle="tab" href="#menu">Student Upload</a></li>
	    <li><a data-toggle="tab" id = "studentupdate" onclick = "clearupdate();" href="#menu1">Student Update</a></li>
	    <li><a data-toggle="tab" href="#menu2">Counsellor Upload</a></li>
	    <li><a data-toggle="tab" href="#menu3">Counsellor Update</a></li>
	    <li><a data-toggle="tab" href="#menu4">View Student Details</a></li>
	  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        
        <div class="container" style="padding:50px; width:600px;margin:0px;">
        <form class="form-inline" action="marks_report.php" method="post" target="_blank">
          <div class="form-group">
            <label for="sem1">sem</label>
            
            <select class="form-control" name = "sem" id="sem1">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
              </select>
          </div>
          
          <div class="form-group">
            <label for="internal">Internal</label>
            <select class="form-control" name="internal" id="internal">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
              </select>
            
          </div>
          
          <button type="submit" class="btn btn-default">Print Report</button>
        </form>
        </div>
    </div>  

    <div id="menu" class="tab-pane fade">
      <h3>STUDENT UPLOAD</h3>
     
                <form action="studentUpload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload(0);">
                   <div id="fileDiv">
                    <h3>Select file to upload:</h3>
				    <div class="form-group">
                     <p  id="f1_upload_process1">Loading...<br/><img src="loader.gif" /><br/></p>
                     <p  id="f1_upload_form1" align="center"><br/>
                         <label>Rename to studentdetails.xlsx only:  
                              <input name="fileToUpload" type="file" size="30" />
                         </label>
                         <label>
                             <input type="submit" name="submitBtn" class="sbtn" value="Upload" />
                         </label>
                     </p>
                     </div>
                     <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                   </div>
                 </form>  


        <div id="container1">

        <button id="toggleform1" href="#" class="btn btn-default">Add student Details</button>
			<div id="hideform1">
			   <form autocomplete="off" name="addStudent" action="addStudent.php" method="post" enctype="multipart/form-data" target="upload_target" >
				   
						  <div class="form-group">
						    <label for="formGroupExampleInput">Name</label>
						    <input type="text" class="form-control" id="name1" placeholder="Name" required = " true" name = "sname">
						  </div>
                      
                         
                       <div class="form-group">
								    <label for="formGroupExampleInput11">USN</label>
								    <input type="text" class="form-control" id="formGroupExampleInput11" placeholder="USN" required = " true" name = "usn">
				       </div>
                        


						   <div class="form-group">
						    <label for="formGroupExampleInput">Counsellor Name</label>
						    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Counsellor name" required = " true" name = "cname">
						  </div>


						  <div class="form-group">
						    <label for="formGroupExampleInput">Parent's Name</label>
						    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Parent's name" required = " true" name = "pname">
						  </div>

						 

						   

						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" name = "email" required = " true" placeholder="Email">
						  </div>

						  

						 <div class="form-group">
							  <label for="inputPassword5">Password</label>
							<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name = "password" required="true" placeholder="Password">
							<small id="passwordHelpBlock" class="form-text text-muted">
							  Your password must be 8-15 characters long, contain letters and numbers, and must not contain spaces, special characters.
							</small>
						</div>


						<div class="form-group">
						    <label for="formGroupExampleInput1">Mobile Number</label>
						    <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Mobile Number" required = " true" name = "mobile"  pattern="[0-9]{10}">
						     <label>(eg. 9620249599)</label>
						</div>
                    
                    <p>
                        
                    <input type="button" id="btnSubmit"  class="btn btn-default" value="Add" onclick="clearform();" > <script>
                        function clearform(){
                            var frm = document.getElementsByName('addStudent')[0];
                            frm.submit(); // Submit the form
                            frm.reset();  // Reset all form data
                            // alert("Details saved!!");
                            return false; // Prevent page refresh
                            
                        }
                    </script>  
                    </p>
                    
                    
                   <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                    
			   </form>
			</div>
		</div>
 

	</div>




    <div id="menu1" class="tab-pane fade">
      <h3>STUDENT UPDATE</h3>


      

       <div id="container2">

       <form id="autofillStudent"name="autofillStudent" action="autofillStudent.php" method="post" enctype="multipart/form-data" target="update_target" > 

               <div class="form-group">
								    <label for="formGroupExampleInput10">USN</label>
								    <input type="text" class="form-control" id="formGroupExampleInput10" placeholder="USN" required = " true" name = "qusn">
				</div>

           

			<button type="submit" id="toggleform2" class="btn btn-default" name = "Update" required = "true" value="login" >Update student Details</button>
			 
			 <iframe id="update_target" name="update_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
		 </form>

					<!--<div id="hideform2">-->
					<div id="content">
					   <form autocomplete="off" id="update" name = "update" action="updateStudent.php" method="post" enctype="multipart/form-data" target="update_student">
						   
								  <div class="form-group">
								    <label for="name">Name</label>
								    <input type="text" class="form-control" id="name" placeholder="Name" required = " true" name = "sname" value = <?php if(isset($_SESSION['name'])) echo  $_SESSION['name'] ;?>>
								  </div>


								   <div class="form-group">
								    <label for="formGroupExampleInput2">Counsellor Name</label>
								    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Counsellor name" required = " true" name = "cname"  value = <?php if(isset($_SESSION['counsellor'])) echo $_SESSION['counsellor'];?>  >
								  </div>


								  <div class="form-group">
								    <label for="formGroupExampleInput5">Parent's Name</label>
								    <input type="text" class="form-control" id="formGroupExampleInput5" placeholder="Parent's name" required = " true" name = "pname"  value = <?php if(isset($_SESSION['parentname'])) echo $_SESSION['parentname'];?>   >
								  </div>
								   

								  <div class="form-group">
								    <label for="exampleInputEmail2">Email address</label>
								    <input type="email" class="form-control" id="exampleInputEmail2" name = "email" required = " true" placeholder="Email"  value = <?php if(isset($_SESSION['emailaddress'])) echo $_SESSION['emailaddress'];?>   >
								  </div>

								  

								 <div class="form-group">
									  <label for="inputPassword8">Password</label>
									<input type="password" id="inputPassword8" class="form-control" aria-describedby="passwordHelpBlock" name = "password" required="true" placeholder="Password" value = <?php if(isset($_SESSION['password'])) echo $_SESSION['password'];?> >
								
								</div>

								<div class="form-group">
								    <label for="formGroupExampleInput3">Mobile Number</label>
								    <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Mobile Number" required = " true" name = "mobile" maxlength="10"  pattern="[0-9]{10}"  value = <?php if(isset($_SESSION['mobilenumber'])) echo $_SESSION['mobilenumber'];?> >
								     
								</div>
		                    
		                    <p>
		                    	<button type="submit" id="updateStudent"  class="btn btn-default" name = "Update" required = "true" value="login" onclick="sub();">Update</button>     
		                    </p>
                        <iframe id="update_student" name="update_student" src="#" style="width:0;height:0;border:0px solid #fff;" ></iframe>
					   </form>
					</div>
					<!--</div>-->

		</div>

    </div>



    <div id="menu2" class="tab-pane fade">
          <h3>COUNSELLOR UPLOAD</h3>
     
               <form action="counsellorUpload.php" method="post" enctype="multipart/form-data" target="upload_target1" onsubmit="startUpload(1);">
                   <div id="fileDiv">
                    <h3>Select file to upload:</h3>
				    <div class="form-group">
				        
                     <p id="f1_upload_process2">Loading...<br/><img src="loader.gif" /><br/></p>
                     <p id="f1_upload_form2" align="center"><br/>
                         <label>Rename to counsellordetails.xlsx only:  
                              <input name="fileToUpload" type="file" size="30" />
                         </label>
                         <label>
                             <input type="submit" name="submitBtn" class="sbtn" value="Upload" />
                         </label>
                     </p>
                     </div>
                     <iframe id="upload_target1" name="upload_target1" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                   </div>
                 </form>


        <div id="container3">

        <button id="toggleform3" class="btn btn-default">Add counsellor Details</button>
			<div id="hideform3">
			   <form name="addCounsellor" autocomplete="off" action="addCounsellor.php" method="post" enctype="multipart/form-data" target="add_target">
				   
						  <div class="form-group">
						    <label for="formGroupExampleInput">Name</label>
						    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" required = " true" name = "cname">
						  </div>

                         
                       <div class="form-group">
								    <label for="formGroupExampleInput11">Staff ID</label>
								    <input type="text" class="form-control" id="formGroupExampleInput11" placeholder="Staff ID" required = " true" name = "sId">
				       </div>
                        
						 

						   

						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" name = "email" required = " true" placeholder="Email">
						  </div>

						  

						 <div class="form-group">
							  <label for="inputPassword5">Password</label>
							<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name = "password" required="true" placeholder="Password">
							<small id="passwordHelpBlock" class="form-text text-muted">
							  Your password must be 8-15 characters long, contain letters and numbers, and must not contain spaces, special characters.
							</small>
						</div>


						<div class="form-group">
						    <label for="formGroupExampleInput1">Mobile Number</label>
						    <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Mobile Number" required = " true" name = "mobile" maxlength="10"  pattern="[6-9][0-9]{9}">
						     <label>(eg. 9620249599)</label>
						</div>
                    
                    <p>
                    <input type="button" id="btnSubmit"  class="btn btn-default" value="Add" onclick="clearForm();" >
                    </p>
                    <script>
                        function clearForm(){
                            var frm = document.getElementsByName('addCounsellor')[0];
                            frm.submit(); // Submit the form
                            frm.reset();  // Reset all form data
                            alert("Details saved!!");
                            return false; // Prevent page refresh
                        }
                    </script> 
                    <iframe id="add_target" name="add_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
			   </form>
			</div>
		</div>

    </div>



    <div id="menu3" class="tab-pane fade">
      <h3>Counsellor Update</h3>
      
       
       <div id="container4">

       <form action="autofillCounsellor.php" method="post" enctype="multipart/form-data" target = "update_target2">

               <div class="form-group">
								    <label for="formGroupExampleInput13">Staff ID</label>
								    <input type="text" class="form-control" id="formGroupExampleInput13" placeholder="Staff ID" required = " true" name = "sId">
				</div>

		</p>	<button type="submit" id="toggleform4"  class="btn btn-default" name = "Update" required = "true" value="login" >Update Counsellor Details</button>
		</p>
		
		<iframe id="update_target2" name="update_target2" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
           
           </form>

					<!--<div id="hideform4">-->
					<div id="content2">
					   <form autocomplete="off" id="cupdate" action="updateCounsellor.php" method="post" enctype="multipart/form-data" target="update_target3">
						   
								
								   <div class="form-group">
								    <label for="formGroupExampleInput22">Counsellor Name</label>
								    <input type="text" class="form-control" id="formGroupExampleInput22" placeholder="Name" required = " true" name = "cname" value=<?php if(isset($_SESSION['cname'])) echo $_SESSION['cname'];?> >
								  </div>



								  <div class="form-group">
								    <label for="exampleInputEmail22">Email address</label>
								    <input type="email" class="form-control" id="exampleInputEmail22" name = "email" required = " true" placeholder="Email" value=<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>>
								  </div>

								 <div class="form-group">
									  <label for="inputPassword88">Password</label>
									<input type="password" id="inputPassword88" class="form-control" aria-describedby="passwordHelpBlock" name = "password" required="true" placeholder="Password" value=<?php if(isset($_SESSION['password'])) echo $_SESSION['password'];?>>
								
								</div>


								<div class="form-group">
								    <label for="formGroupExampleInput33">Mobile Number</label>
								    <input type="text" class="form-control" id="formGroupExampleInput33" placeholder="Mobile Number" required = " true" name = "mobile" maxlength="10"  pattern="[6-9][0-9]{9}" value=<?php if(isset($_SESSION['mobile'])) echo $_SESSION['mobile'];?>>
								     
								</div>
		                    
		                    <p>
		                    <button type="submit" id="updateCounsellorBtn"  class="btn btn-default" value = "Update" onclick = "sub();"> Update</button>     
		                    </p>
		                    
                        <iframe id="update_target3" name="update_target3" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
					   </form>
					</div>
					<!--</div>-->


				

		</div>

    </div>


    <div id="menu4" class="tab-pane fade">
      <h3>VIEW DETAILS</h3>

       <div id="container5">
		 

       <form action="autofillStudent.php" method="post" enctype="multipart/form-data" target="update_target">

               <div class="form-group">

								    <label for="formGroupExampleInput17">USN</label>
								    <input type="text" class="form-control" id="formGroupExampleInput17" placeholder="USN" required = " true" name = "qusn">
				</div>

           

			<button type="submit" id="toggleform5" class="btn btn-default" name = "Display" required = "true" >View Student Details</button>
			<iframe id="update_target" name="update_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
			</form>
		

					<!--<div id="hideform5">-->
					       <div id='content3'>
						    <form id="view" name = "view" autocomplete="off" >
						   
								  <div class="form-group">
								    <label for="name">Name</label>
								    <input type="text" class="form-control" id="name" placeholder="Name" required = " true" name = "sname" value = <?php if(isset($_SESSION['name'])) echo $_SESSION['name'] ; else echo "-" ;?> readonly>
								  </div>


								   <div class="form-group">
								    <label for="formGroupExampleInput2">Counsellor Name</label>
								    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Counsellor name" required = " true" name = "cname"  value = <?php if(isset($_SESSION['counsellor'])) echo $_SESSION['counsellor']; else echo "-" ;?>  readonly>
								  </div>


								  <div class="form-group">
								    <label for="formGroupExampleInput5">Parent's Name</label>
								    <input type="text" class="form-control" id="formGroupExampleInput5" placeholder="Parent's name" required = " true" name = "pname"  value = <?php if(isset($_SESSION['parentname'])) echo $_SESSION['parentname']; else echo "-" ;?>   readonly>
								  </div>
								   

								  <div class="form-group">
								    <label for="exampleInputEmail2">Email address</label>
								    <input type="email" class="form-control" id="exampleInputEmail2" name = "email" required = " true" placeholder="Email"  value = <?php if(isset($_SESSION['emailaddress'])) echo $_SESSION['emailaddress']; else echo "-" ;?>  readonly >
								  </div>


								<div class="form-group">
								    <label for="formGroupExampleInput3">Mobile Number</label>
								    <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Mobile Number" required = " true" name = "mobile" maxlength="10"  pattern="[0-9]{10}"  value = <?php if(isset($_SESSION['mobilenumber'])) echo $_SESSION['mobilenumber']; else echo "-" ;?> readonly>
								     
								</div>
					   </form>	
		           
					  
					</div>
					<!--</div>-->

		</div>

     
    </div>





  </div>
</div>



<script type="text/javascript">
	
	$( "#toggleform1" ).on( "click", function() {
		  $('#hideform1').toggle();
		 
		  $('html:not(:animated), body:not(:animated)').animate({
            scrollTop: $("#hideform1").offset().top
        }, 1400);
        
		});


	$( "#toggleform2" ).on( "click", function() {
	   
	    $('#content').load('adminpage.php #update');
		 $('#content').load('adminpage.php #update');
	//load twice necessary  
		    

		 //$('#hideform2').toggle();
		  // $('html:not(:animated), body:not(:animated)').animate({
    //          scrollTop: $("#hideform2").offset().top
    //      }, 1400);
		// $('#update')[0].reset();
	    //document.getElementsByName('update')[0].reset(); 
	});
	
	
	
// 		$( "#updateStudent" ).on( "click", function() {
// 		    alert("details updated!");
// 		    <?php unset( $_SESSION['name'],$_SESSION['counsellor'],$_SESSION['parentname'],$_SESSION['emailaddress'],$_SESSION['password'],$_SESSION['mobilenumber']);?>
// 		    $('#content').load('adminpage.php #update'); //to refresh form after submission 
// 		});
		


	$( "#toggleform3" ).on( "click", function() {
		  $('#hideform3').toggle();
		  
		   $('html:not(:animated), body:not(:animated)').animate({
            scrollTop: $("#hideform3").offset().top
        }, 1400);
        
		});

	$( "#toggleform4" ).on( "click", function() {
		  //$('#hideform4').toggle();
		  
		  // $('html:not(:animated), body:not(:animated)').animate({
    //         scrollTop: $("#hideform4").offset().top
    //     }, 1400);
         $('#content2').load('adminpage.php #cupdate');
		 $('#content2').load('adminpage.php #cupdate');
        
		});
	
		
// 	$( "#updateCounsellorBtn").on( "click", function() {
// 		    alert("details updated!");
// 		    <?php unset($_SESSION['cname'],$_SESSION['email'],$_SESSION['password'],$_SESSION['mobile']);?>
// 		    $('#content2').load('adminpage.php #cupdate'); //to refresh form after submission 
// 		});


	$( "#toggleform5" ).on( "click", function() {
	    
	    $('#content3').load('adminpage.php #view');
		 $('#content3').load('adminpage.php #view');
        <?php unset($_SESSION['name'],$_SESSION['counsellor'],$_SESSION['parentname'],$_SESSION['emailaddress'],$_SESSION['mobilenumber']);?>
		 
		  //$('#hideform5').toggle();
		  
		  // $('html:not(:animated), body:not(:animated)').animate({
    //         scrollTop: $("#hideform5").offset().top
    //     }, 1400);
        
		});
</script>

<footer>
    <a href="https://seal.beyondsecurity.com/vulnerability-scanner-verification/studentcounselor.000webhostapp.com"><img src="https://seal.beyondsecurity.com/verification-images/studentcounselor.000webhostapp.com/vulnerability-scanner-2.gif" alt="Website Security Test" border="0"></a>
</footer>

</body>






</html>