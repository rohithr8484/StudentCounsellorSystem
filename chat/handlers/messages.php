<?php
include('../config.php');
switch( $_REQUEST['action'] ){
	case "sendMessage":
		//global $conn;
		session_start();
		$query = $conn->prepare("INSERT INTO messages SET user=?, message=?");
		$run = $query->execute([$_SESSION['username'], $_REQUEST['message']]);
		if( $run ){
			echo 1;
			exit;
		}
	break;
	case "getMessages":
		session_start();
		$query = $conn->prepare("SELECT * FROM messages");
		$run = $query->execute();
		$rs = $query->fetchAll(PDO::FETCH_OBJ);
		$chat = '';
		foreach( $rs as $message )
		{
			$chat .= '<div class="single-message '.(($_SESSION['username']==$message->user)?'right':'left').'">
						<strong><span id="bold">'.$message->user.': </span></strong><br /> <p>'.$message->message.'</p>
						<br /><span id="date">'.date('h:i a', strtotime($message->date)).'</span>
						</div>
						<div class="clear"></div>';
		}
		echo $chat;
	break;
}
?>