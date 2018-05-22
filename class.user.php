<?php
  require_once("config.php");
  class USER
	{
    private $connection;
    
    public function __construct()
		{
			$database = new Database();
			$db = $database->dbConnection();
			$this->connection = $db;
		}
    
    public function prepareQuery($sql)
		{
			$stmt = $this->connection->prepare($sql);
			return $stmt;
		}
    
    public function register($uname,$umail,$upass)
		{
			try
			{				
				$hashed_password = password_hash($upass, PASSWORD_DEFAULT);
				
				$stmt = $this->connection->prepare("INSERT INTO users(user_name,user_email,user_pass) 
																			VALUES(:uname, :umail, :upass)"
																		);														
				$stmt->bindparam(":uname", $uname);
				$stmt->bindparam(":umail", $umail);
				$stmt->bindparam(":upass", $hashed_password);			  
					
				$stmt->execute();	
				
				return $stmt;	
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}				
		}
    
    public function login($uname,$umail,$upass)
		{
			try
			{
				$stmt = $this->connection->prepare("SELECT user_id, user_name, user_email, user_pass FROM users WHERE user_name=:uname OR user_email=:umail ");
				$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				if($stmt->rowCount() == 1)
				{
					if(password_verify($upass, $userRow['user_pass']))
					{
						$_SESSION['user_session'] = $userRow['user_id'];
						return true;
					}
					else
					{
						return false;
					}
				}
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
    
    public function isLoggedIn()
    {
      if(isset($_SESSION['user_session']))
			{
				return true;
			}
    }
    
    public function isAdmin($uname)
    {
      if($uname == "admin")
      {
        return true;
      }
      else
      {
        return false;
      }
    }
    
    public function logout()
		{
			session_destroy();
			unset($_SESSION['user_session']);
			return true;
		}
    
    public function redirect($url)
		{
			header("Location: $url");
		}
    
    
  }
?>