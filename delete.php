<?php
  require_once("session.php");	
	require_once("class.user.php");
  
  $admin_id = $_GET['user_id'];
  $admin = new USER();
  $stmt = $admin->prepareQuery("DELETE FROM users WHERE user_id=:user_id");
  $stmt->bindparam(":user_id", $admin_id);
  $stmt->execute();
  $admin->redirect('admin.php');
?>