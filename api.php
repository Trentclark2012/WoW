<?php
  require_once("session.php");	
	require_once("class.user.php");

  $user = new USER();
	$user_id = $_SESSION['user_session'];	
	$stmt = $user->prepareQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
  
  $key = include('api-key.php');
  
  function callAPI($url, $key)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_USERAGENT, 'WoW PVP');	
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $key));	
		$response = curl_exec($curl);
		curl_close($curl);
		$data = json_decode($response, true);				
		return $data;
	}
  
  $section = "data";
  $category = "talents";
  
  $pvp_url = 'https://us.api.battle.net/wow/' . $section . '/' . $category . '?locale=en_US&jsonp=name&apikey=' . $key;
  
  $response = callAPI($pvp_url, $key);
  
  echo "<pre>";
  print_r($response);
  echo "</pre>";
?>