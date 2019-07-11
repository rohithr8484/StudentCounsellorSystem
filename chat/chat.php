<?php 

session_start();
if(isset($_SESSION['login_user']))
    $_SESSION['username'] =  $_SESSION['login_user'];
if(!isset( $_SESSION['username']))
    $_SESSION['username'] =  $_GET['usn'];
?>
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
	<title>Chat system</title>

	<link rel="stylesheet" type="text/css" href="style.css?version=50">
	


 <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</head>
<body>
    
    <!--remove watermark-->
   <style> 
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
    display: none;}
</style>




  
<div id="wrapper">

		
		
		<div class="chat_wrapper">
			
			<div id="abc"></div>
			<div id="chat"></div>

			<form method="POST" id="messageFrm">
				<textarea name="message" cols="30" rows="7" class="textarea" placeholder="Please Type a message to send"></textarea>
				<button type="submit" class="btn btn-default" id="button1"><span id = "send">SEND</span></button>
			</form>

		</div>


	</div>


	<script>
		LoadChat();
		setInterval(function(){
		
				LoadChat();
		
		}, 1000);
		function LoadChat()
		{
			$.post('handlers/messages.php?action=getMessages', function(response){
				
				var scrollpos = $('#chat').scrollTop();
				var scrollpos = parseInt(scrollpos) + 1020;
				var scrollHeight = $('#chat').prop('scrollHeight');
				$('#chat').html(response);
				if( scrollpos < scrollHeight ){
					
				}else{
					$('#chat').scrollTop( $('#chat').prop('scrollHeight') );
				}
			});
		}
		$('.textarea').keyup(function(e){
			if( e.which == 13 ){
				$('form').submit();
			}
		});
		$('form').submit(function(){
			var message = $('.textarea').val();
			$.post('handlers/messages.php?action=sendMessage&message='+message, function(response){
				if( response==1 ){
					LoadChat();
					document.getElementById('messageFrm').reset();
				}
			});
			return false;
		});
	</script>


</body>
</html>