<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <title>Simple Comment System</title>
     <link type="text/css" rel="stylesheet" href="css/style.css">
     <link type="text/css" rel="stylesheet" href="css/example.css">
     <script type="text/javascript" 
	 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
	 
	 
     </script>
  </head>
  <style>
	 body
	  {
		background-image: url(PotentialBackgrounds/Horde_Charge_Background.jpg)
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
	.title
	  {
		  color: white;
		  background-color: #08080857;
		  width: auto;
		  margin-left: 37em;
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
					  <li class="nav-link"><a href="tools.php">TOOLS</a></li>
					  <li class="nav-link"><a href="#" data-toggle="modal" data-target="#myModal">CONTACT</a></li>
					  <li class="active"><a href="comment.php">FORUM</a></li>
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
		<div class="col-lg-6 title">
			<center><h2><strong>WoW Forum, Express your thoughts on all things WoW!</strong></h2></center>
		</div>
<?php 
include('config.php'); // Connect to the database  ?>

<div class="cmt-container" >

<?php 
	$query = $this->connection("SELECT * FROM comments");
	$query->execute();  

	while($data = $query->fetch(PDO::FETCH_ASSOC))
	{ 
        $name = $data['name'];
        $comment = $data['comment'];
        $date = $data['date'];
		?>
    
    <div class="cmt-cnt">
        <img src="indexPics/profile-img.jpg" />
        <div class="thecom">
            <h5><?php echo $name; ?>
            </h5><span class="com-dt"><?php echo $date; ?></span> 
            <br/>
            <p><?php echo $comment; ?></p>
        </div>
		</br>
    </div><!-- end "cmt-cnt" -->
    
<?php } ?>


    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>
    
    <div class="new-com-cnt">
       <input type="text" id="name-com" name="name-com" 
                       value="" placeholder="Your name" />
      
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>
    
    <div class="clear"></div>
</div>
<!-- end of comments container "cmt-container" -->


<script type="text/javascript">
   $(function(){ 
        $('.new-com-bt').click(function(event){    
            $(this).hide();
            $('.new-com-cnt').show();
            $('#name-com').focus();
        });

        $('.the-new-com').bind('input propertychange', function() {
           $(".bt-add-com").css({opacity:0.6});
           var checklength = $(this).val().length;
		   if(checklength){ $(".bt-add-com").css({opacity:1}); }
        });
	
		// on clicking 'Cancel'
	   $('.bt-cancel-com').click(function(){
			$('.the-new-com').val('');
            $('.new-com-cnt').fadeOut('fast', function(){
                $('.new-com-bt').fadeIn('fast');
            });
        });

        // on clicking 'Post comment'
        $('.bt-add-com').click(function(){
            var theCom = $('.the-new-com');
            var theName = $('#name-com');
           
		    if( !theCom.val()) { 
                alert('You need to write a comment!'); 
			 	}
			 
		else{ 
             $.ajax({
               type: "POST",
                url: "add-comment.php",
               data: {   name : theName.val(), 
					  comment : theCom.val()  },
            success: function(xyz) {
                       theCom.val('');
                       theName.val('');
                       $('.new-com-cnt').hide('fast', function(){
                           	$('.new-com-bt').show('fast');
							$('.new-com-bt').before(xyz); })
                      }  
                });
            }
      });
 });	</script></div></body></html>
