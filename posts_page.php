<!DOCTYPE html>
<html>
<head>
	<title>Chat system</title>

	<link rel="stylesheet" type="text/css" href="style.css">



    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</head>
<body>


  
<div id="wrapper">

		
		
		<div class="chat_wrapper">
			
			<div id="abc"></div>
			<div id="chat"></div>

			<form method="POST" id="messageFrm">
				<textarea name="message" cols="30" rows="7" class="textarea" placeholder="Please Type a message to send"></textarea>
				<input type="submit" value="Submit" class = "btn btn-default">
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
				var scrollpos = parseInt(scrollpos) + 520;
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