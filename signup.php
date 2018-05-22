<?php
	session_start();
	require_once('class.user.php');
	$user = new USER();

	if($user->isLoggedIn()!="")
	{
		$user->redirect('home.php');
	}

	if(isset($_POST['btn-signup']))
	{
		$uname = strip_tags($_POST['input_uname']);
		$umail = strip_tags($_POST['input_umail']);
		$upass = strip_tags($_POST['input_upass']);
		
		if($uname=="")	{
			$error[] = "Please enter a username.";	
		}
		else if($umail=="")	{
			$error[] = "Please enter an email address.";	
		}
		else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
			$error[] = 'Please enter a valid email address.';
		}
		else if($upass=="")	{
			$error[] = "Please enter a password.";
		}
		else if(strlen($upass) < 8){
			$error[] = "Your password must be a minimum of 8 characters in length.";	
		}
		else
		{
			try
			{
				$stmt = $user->prepareQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
				$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
				$row=$stmt->fetch(PDO::FETCH_ASSOC);
					
				if($row['user_name']==$uname) {
					$error[] = "Sorry, that username is already taken !";
				}				
				else if($row['user_email']==$umail) {
					$error[] = "Sorry, that email address is already taken !";
				}
				else
				{
					if($user->register($uname,$umail,$upass,$unickname)){	
						$user->redirect('signup.php?joined');
					}
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
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="stylesheet.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Signup</title>
	</head>
	<style>
	.container
	{
		margin-top: 5em;
    	font-size: 25px;
    	padding: 1em;
    	background: #08080857;			
	}
	.account
	{
		text-align: center;
		color: white;
	}
	
	body
	{
		background: url(PotentialBackgrounds/FireFrost_Mage_Background.jpg)
	}
	</style>
	<body>
    <div class="container">
      <form method="post">
        <div class="centered">
          <h2 class="form-signin-heading" style="text-align: center;color: white;"><strong>Create Account</strong></h2>
        </div>
        <hr />
        <?php
          if(isset($error))
          {
            foreach($error as $error)
            {
        ?>
            <div class="alert alert-danger">
              <?php echo $error; ?>
            </div>
        <?php
            }
          }
          else if(isset($_GET['joined']))
          {
        ?>
            <div class="alert alert-info">
              Successfully registered! Thank you. <a href='index.php'>Login</a>
            </div>
        <?php
          }
        ?>
          <div class="form-group">
            <input type="text" class="form-control" name="input_uname" placeholder="Username" value="<?php if(isset($error)){echo $uname;}?>" />
          </div>         
          <div class="form-group">
            <input type="text" class="form-control" name="input_umail" placeholder="E-Mail" value="<?php if(isset($error)){echo $umail;}?>" />
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="input_upass" placeholder="Password" />
          </div>
          <div class="clearfix"></div>
          <hr />
          <div class="form-group">
            <button type="submit" class="btn btn-success btn-block" name="btn-signup">Sign Up</button>
          </div>
          <hr />
          <div class="account">
           <strong><h2>Already have an account?</h2></strong>
          </div>
          <a class="btn btn-primary btn-block" href="index.php">Sign In</a>
      </form>
    </div>
    </body>
</html>    
    
    
    