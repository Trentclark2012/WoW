<?php
	session_start();	
	require_once 'class.user.php';
	$session = new USER();	
	if(!$session->isLoggedIn())
	{
		$session->redirect('index.php');
	}
?>