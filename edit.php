<!--
	edit.php
-->

<?php
  require_once("session.php");	
	require_once("class.user.php");
  
  $admin = new USER();
	$admin_id = $_SESSION['user_session'];	
	$stmt = $admin->prepareQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$admin_id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
  
  function updateRow($user_name, $user_email)
  {
    $edit_user = new USER();
    $edit_stmt = $edit_user->prepareQuery("UPDATE users SET user_name=:user_name, user_email=:user_email WHERE user_id=:user_id");
    $edit_stmt->bindParam(":user_name", $user_name);
    $edit_stmt->bindParam(":user_email", $user_email);
    $edit_stmt->bindParam(":user_id", $_GET['user_id']);
    $edit_stmt->execute();
    $edit_user->redirect('admin.php');
    return;
  }
  
  if(isset($_POST['update']))
	{
		$uname = strip_tags($_POST['input_uname']);
		$umail = strip_tags($_POST['input_umail']);
		
		if($uname=="")	{
			$error[] = "Please enter a new username.";	
		}
		else if($umail=="")	{
			$error[] = "Please enter a new email address.";	
		}
		else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
			$error[] = 'Please enter a new valid email address.';
		}		
		else
		{
			try
			{
				$stmt = $admin->prepareQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
				$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
				$row=$stmt->fetch(PDO::FETCH_ASSOC);
        
        if(updateRow($uname,$umail)){	
          $admin->redirect('admin.php');
        }				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
  }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="stylesheet.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Login</title>
	</head>
	<style>
	.log
	{
		text-align: center;
	}
	.jumbotron
	{
		margin-top: 10em;
		background: #08080857;
		font-size: 25px;
		color: white;
	}
	
	body
	{
		background: url(PotentialBackgrounds/FireFrost_Mage_Background.jpg)
	}
	</style>
	<body> 
    <div class="container">    
      <div class="col-6 offset-3">
        <div class="jumbotron">
          <form method="POST">
            <div class="form-group">
              <label for="user_name">User Name</label>
              <input type="text" class="form-control" id="input_uname" name="input_uname" value="">
            </div>            
            <div class="form-group">
              <label for="user_email">Email Address</label>
              <input type="text" class="form-control" id="input_umail" name="input_umail" value="">
            </div>
            <input type="submit" class="btn btn-primary btn-lg btn-block" name="update" value="Update"></input>            
          </form>
        </div>
        <div class="log">
         <li class="nav-item active">
              <a class="nav-link" href="#">Edit User<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php?logout=true">Log Out</a>
            </li>
		</div>  
      </div>      
    </div>
   </body>
</html>

