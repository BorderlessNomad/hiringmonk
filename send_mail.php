<?php

unset($_SESSION['message']);
unset($_SESSION['status']);

if(isset($_POST, $_POST['message'], $_POST['email'], $_POST['name'])) {
	$message = null;
	
	if(empty($_POST['message'])) {
		$message = "Please enter message<br/>";
	} 

	if(empty($_POST['email'])) {
		$message = "Please enter email<br/>";
	} 

	if(empty($_POST['name'])) {
		$message = "Please enter your name<br/>";
	}

	if($message == null) {
		$status = true;
		$message = "Thanks we've recived your contact information.";
	} else {
		$status = false;
	}

	$_SESSION['message'] = $message;
	$_SESSION['status'] = $status;

	header('Location: ./#contact');
}
?>