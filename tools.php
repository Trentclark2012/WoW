<!doctype html>
<html>
<head>
  <title>Untitled Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body
	{
		background-image: url(PotentialBackgrounds/LitchKing.jpg)
	}
	.addon
	{
		text-align: center;
		color: white;
	}
	.navbar-inverse
	{
		width: 33%;
		margin-left: 44em;
	}
	
	.navbar-nav
	{
		margin-left: 4em;
	}
	.addons
	{
		margin-left: 34em;
		margin-top: 2em;
		background-color: skyblue;
	}
	.addons ul
	{
		font-size: 2em;
		
		text-align: center;
	}
	.links h2
	{
		text-align: center;
		color:white;
	}
	.list-group
	{
		text-align: center;
	}
	.video iframe
	{
		float: right;
	}
	.dropdown-item
	{
		display: block;	
		
	}
</style>
<body>
	<div class="container-fluid">
		<div class="row navigation">
			<div class="col-lg-12 ">
				<nav class="navbar navbar-inverse">
					<ul class="nav navbar-nav">
					  <li class="nav-link"><a href="home.php">Home</a></li>
					  <li class="nav-item dropdown">
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
					  <li class="active"><a href="tools.php">TOOLS</a></li>
					  <li class="nav-link"><a href="#" data-toggle="modal" data-target="#myModal">CONTACT</a></li>
					  <li class="nav-link"><a href="comment.php">FORUM</a></li>
					  <li class="nav-link"><a href="logout.php?logout=true">LOGOUT</a></li>
					</ul>
				</nav>
			</div>
		</div>
		 <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-lg">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title" style="text-align: center;">CONTACT US</h4>
			</div>
			<div class="modal-body" style="font-size: 20px;">
		  	  <strong>
				  <p>World Of Warcraft PvP Destination Site</p>
				  <p>For any Questions please contact us at the following:</p>
				  <p>Phone:543-678-5565</p>
				  <p>Email:WorldOfWarcraftSite@inc.com</p>
				  <p>Fax:233-1233-1222</p>
				  <p>Welcome to our PvP Site this was Created from scratch by Trenton M. Clark</p>
				  <p>School: Dunwoody College of Technology</p>
				  <p>Degree: Web Programming and Database Development</p>
			  </strong>
			<center>
			  <img src="indexPics/profilepic.jpg" width="576" height="385" alt="" style="margin-top: 1em;"/>
			</center>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
 	  </div> <!-- End of Popup Window -->
		<div class="row">
			<div class="col-lg-12 addon">
				<h1>POPULAR ADDONS</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 addons">
				<ul class="list-inline">
					<li><a href="#" title="GladiatorlosSA2" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="GladiatorlosSA2 is the best addon for those just starting in PvP. The addon uses sound to tell you every important ability that is being used by the enemy team. This is best for those just learning about the basics of PvP and learning to track cooldowns. This addon can also help you avoid or interrupt incoming crowd control.">GladiatorlosSA2</a></li>
					<li><a href="#" title="OmniBar" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Aside from being able to track your cooldowns, OmniBar is crucial to being able to do the same for the enemy team's cooldowns. OmniBar allows you to do just that. You can simply go into the interface and decide which interrupts/cooldowns should be tracked for each class. This will help you decide if you should use a defensive if the enemy team uses offensive abilities, or if you can cast (if there are no interrupts available).">OmniBar</a></li>
					<li><a href="#" title="BigDebuffs" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Paying attention to details is crucial to being successful in PvP. The first thing you need to pay attention to are your teammates. BigDebuffs increases the size of all crowd-control abilities on your raid frames. This is useful because, for example, you do not want to start using burst cooldowns if your teammate is stuck in crowd control. This is also especially useful for healers who want to get faster at dispelling debuffs.">BigDebuffs</a></li>
					<li><a href="#" title="Gladius" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content=" This addon is highly customizable and give you important information on the enemy team. Tracking diminishing returns, what honor talents they are using, and what spells they are casting are some examples of the information these addons give you.">Gladius</a></li>
					<li><a href="#" title="WeakAuras" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="An important part to maximizing your damage is being able to track specific procs and cooldowns, and WeakAuras 2 gives you that ability. Even if you are a beginner, you can import strings from other players and use them! Being able to track certain buffs drastically increases your healing/damage output. You can also track the remaining duration of a defensive buff that is active on you or a party member.">WeakAuras</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 video">
				
			</div>
			<div class="col-lg-4 links">
				<h2>Helpful Links to Sites!</h2>
				<ul class="list-group">
					<a href="http://simplearmory.com/#/" class="list-group-item">Simple Armory </a>
				    <a href="http://macro-wow.com/" class="list-group-item">Macro Wow</a>
				    <a href="https://arenamate.net/" class="list-group-item">Arena Mate </a>
				    <a href="http://www.arenajunkies.com/" class="list-group-item">Arena Junkies</a>
				    <a href="https://www.reddit.com/r/worldofpvp/comments/3hnxe1/comprehensive_pvp_youtube_streamer_list/" class="list-group-item">Comprehensive PVP YouTube and Streamer List</a>
				    <a href="http://www.skill-capped.com/wow/" class="list-group-item">Skill Capped</a>      
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 videos">
				<div class="col-lg-6 video">
					<iframe width="420" height="345" src="https://www.youtube.com/embed/4UwJ3Pg46WA"></iframe>
				</div>
				<div class="col-lg-6 video2">
					<iframe width="420" height="345" src="https://www.youtube.com/embed/fZqbdxdes9Y"></iframe>
				</div>
			</div>
		</div>
		
	</div>
	
	<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</body>
</html>