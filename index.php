<?php
	session_start();
	require_once("class.user.php");
	$login = new USER();

	if($login->isLoggedIn()!="")
	{
		$login->redirect('home.php');
	}

	if(isset($_POST['btn-login']))
	{
		$uname = strip_tags($_POST['txt_uname_email']);
		$umail = strip_tags($_POST['txt_uname_email']);
		$upass = strip_tags($_POST['txt_password']);
			
		if($login->login($uname,$umail,$upass))
		{
      if($uname == 'admin')
      {
        $login->redirect('admin.php');
      }
      else
      {
        $login->redirect('home.php');
      }			
		}
		else
		{
			$error = "The username or password was incorrect";
		}	
	}
?>

<!DOCTYPE html>
<html>
	<head>
	 <title>Untitled Document</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="stylesheet.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<style>
		body{
			background: url(PotentialBackgrounds/Legion_Wallpaper.jpg)
		}
	</style>
	<body>
    <div class="container" style="margin-top: 15em; background: #08080857;padding: 5em;">
      <div class="col-6 offset-3">
        <form method="post" id="login-form">				
          <div id="error">
          <?php
            if(isset($error))
            {
          ?>
              <div class="alert alert-danger">
                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
              </div>
          <?php
            }
          ?>
          </div>					
          <div class="form-group">
            <input type="text" class="form-control" name="txt_uname_email" placeholder="Username" required />
            <span id="check-e"></span>
          </div>					
          <div class="form-group">
            <input type="password" class="form-control" name="txt_password" placeholder="Password" />
          </div>				 
          <hr />					
          <div class="form-group">
            <button type="submit" name="btn-login" class="btn btn-primary btn-block">Sign In</button>
          </div>  
          <hr />          
          <a class="btn btn-success btn-block" href="../WoW/signup.php">Sign Up</a>            
        </form>
      </div>
    </div>
  </body>
</html>
