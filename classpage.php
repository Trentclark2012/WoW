<?php
$class = $_GET["class"];
$talentTree = $_GET["talentTree"];




?>
<!doctype html>
<html>
<head>
  <title><?php echo $class;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	.row.content
	{
		height: auto;
	}
	.image
	{
		height: 100%;
		text-transform: capitalize;
		
	}
	.row.imgTree
	{
		margin-top: 12em;
	}
	.talentTree img
	{
		margin-left: 8em;
	}
	.info
	{
	
		font-size: 20px;
		color: white;
		background-color:  #08080857;
	}
	.row.button 
	{
		text-align: center;
		bottom: 0;
		margin-top: 10em;
		
	}
	.btn-xlb
	{
		padding: 10x 20px;
		font-size: 50px;
		border-radius: 10px;
		margin-right: 1em;
	}
	.btn-xln
	{
		padding: 10x 20px;
		font-size: 50px;
		border-radius: 10px;
	}
	.dropdown-item
	{
		display: block;
	}
	
</style>
<body style="background-image: url(PotentialBackgrounds/Fantasy_Forest.jpg)">
 <div class="container-fluid">
 <nav class="navbar navbar-inverse" style="width: 32%;margin-left: 45em;">


			<ul class="nav navbar-nav" style="margin-left: 4em;">
			  <li class="nav-link"><a href="home.php">HOME</a></li>
			  <li class="active dropdown">
				<a class="active dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  CLASSES
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="classpage.php?class=deathKnight&talentTree=deathKnight">Death Knight</a>
				  <a class="dropdown-item" href="classpage.php?class=demonHunter&talentTree=demonHunter">Demon Hunter</a>
				  <a class="dropdown-item" href="classpage.php?class=druid&talentTree=druid">Druid</a>
				  <a class="dropdown-item" href="classpage.php?class=hunter&talentTree=hunter">Hunter</a>
				  <a class="dropdown-item" href="classpage.php?class=mage&talentTree=mage">Mage</a>
				  <a class="dropdown-item" href="classpage.php?class=monk&talentTree=monk">Monk</a>
				  <a class="dropdown-item" href="classpage.php?class=paladin&talentTree=paladin">Paladin</a>
				  <a class="dropdown-item" href="classpage.php?class=priest&talentTree=priest">Priest</a>
				  <a class="dropdown-item" href="classpage.php?class=rogue&talentTree=rogue">Rogue</a>
				  <a class="dropdown-item" href="classpage.php?class=shaman&talentTree=shaman">Shaman</a>
				  <a class="dropdown-item" href="classpage.php?class=warlock&talentTree=warlock">Warlock</a>
				  <a class="dropdown-item" href="classpage.php?class=warrior&talentTree=warrior">Warrior</a>
				</div>
			  </li>
			  <li class="nav-link"><a href="tools.php">TOOLS</a></li>
			  <li class="nav-link"><a href="#" data-toggle="modal" data-target="#myModal">CONTACT</a></li>
			  <li class="nav-link"><a href="comment.php">FORUM</a></li>
			  <li class="nav-link"><a href="logout.php?logout=true">LOGOUT</a></li>
			</ul>
		
		  
		</nav>
  <div class="row content">
  	<div class="col-sm-12" style="text-align: center; color: white;">
  		<h1><strong style="background-color:  #08080857; padding: 0.2em;"><?php echo $class;?></strong></h1>
  	</div>
  
    <div class="row imgTree">
  		<div class="col-sm-3 image">
  			<center>
  				<img src="indexPics/<?php echo $class; ?>.jpg" width="425" height="450" alt="Class Choice"/>
  			</center>
  		</div>
  		<div class="col-sm-9 talentTree">
  			<img src="talents/<?php echo $talentTree; ?>.png" width="670" height="320" alt="Talent Tree"/>
  		</div>
    </div>
    <div class="row">
    	<div class="col-sm-3">
    		
    	</div>
    	<div class="col-sm-6 info">
    		<center>
    			<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et"</p>
    		</center>
    	</div>
    </div>
  </div>

 </div>
</body>
</html>