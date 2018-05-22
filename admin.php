<?php
	require_once("session.php");	
	require_once("class.user.php");	
  
  $admin = new USER();
	$user_id = $_SESSION['user_session'];	
	$stmt1 = $admin->prepareQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt1->execute(array(":user_id"=>$user_id));	
	$result=$stmt1->fetch(PDO::FETCH_ASSOC); 
 
  
  $table = new USER();
  $stmt2 = $table->prepareQuery("SELECT * FROM users");
  $stmt2->execute();
  $row = $stmt2->fetchAll();
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
		<title>Admin Page</title>
	</head>
	<style>
	.log
	{
		text-align: center;
	}
	.table-responsive
	{
		margin-top: 10em;
		background: #08080857;
		font-size: 25px;
		color: white;
	}
	
	body
	{
		background: url(PotentialBackgrounds/Shaman_Wallpaper.jpg)
	}
	</style>
	<body>
    <div>
    <h1 style="text-align: center;">Admin Page!</h1>
    </div>
    <div class="container">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">User ID</th>
              <th scope="col">User Name</th>
              <th scope="col">Email Address</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>   
          <tbody>    
            <?php     
              foreach($row as $r => $row)
              {
            ?>
                <tr>
                  <td><?php echo($row['user_id']); ?></td>
                  <td><?php echo($row['user_name']); ?></td>
                  <td><?php echo($row['user_email']); ?></td>
                  <td>
                    <span><a href="edit.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-success">Edit</a></span>
                    <span><a href="delete.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a></span>
                  </td>
                </tr>
            <?php                
              }             
            ?>               
          </tbody>
        </table>
        <div class="log">  
			<a href="logout.php?logout=true" class="btn btn-success">Log Out</a>
		</div>
      </div>
    </div>
  </body>
</html>