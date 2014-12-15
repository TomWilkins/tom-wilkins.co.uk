<?php
	set_include_path('/Users/tomwilkins/documents/github_repos/tom-wilkins/includes/');
   	include_once ('layout/page.php');

	$page = new Page();
	$page->setTitle("Portfolio");
	$page->setRoot("");
	$page->setDescription("Tom Wilkins - A breif description of myself and the website.");

	$aboutMe = '<div data-spy="scroll" data-target="#navbar-example" data-offset="0"
   				style="overflow:auto; position: relative;">
				    <div class="jumbotron">
				        <article class="about"> 
				        	<h1 id="About">About Me!</h1>
				        	<img class="img-responsive me pull-right" src="images/TomWilkins.png" title="">
					        <p>I am a 20-year-old student, currently studying <a class="important">Computer Science</a> at the  <a class="important">University Of East Anglia</a>. I am an enthusiastic, dedicated, confident individual wanting to achieve everything to the best of my ability.</p> 
							<br>
							<p>Two aspect of Computer Science that I am very passionate about is <a class="important">Web Design</a> and <a class="important">Software Development</a>. I aim to create fluid, beautiful websites that appeal to all, with easy to use features and navigation. As well as creating efficient, powerful and sustainable Software Applications.</p>
							<br>
							<p>Graphics, layout and design are all key features of not only creating a great website, but a great brand identity. Having done A-Level graphics I have worked on projects that have involved creating a brand identify from scratch.</p>
					      	<p><a href="mailto:tomwilkins93@hotmail.co.uk" class="btn btn-primary btn-lg" role="button">
					        Email Me</a><a href="https://uk.linkedin.com/pub/tom-wilkins/74/78/951" target="_blank" class="btn btn-social-icon btn-lg btn-linkedin" style="margin-left:10px;">
										    <i class="fa fa-linkedin"></i>
										  </a></p>
					    </article>
				   	</div>
    			';

    $comp ='<article class="about section"> 
	        	<h1 id="Computing">Computing.</h1>
		        <P>I have learnt a number of different <a class="important">programming languages</a> over the past few years, most of which, outside of education. </p>
				<br>
				<p>I have <a class="important">experience</a> with the following languages and skills: </p>
				<br>
				<p>C++, PHP, SQL, HTML, CSS, JavaScript, JQuery, Java, Visual Basic, Responsive Web Design, Software Development, System Analysis, Adobe Photoshop/ Illustrator/ InDesign.</p>
				<br>
				<p>Have a look at this simple <a class="important">HTML5 Canvas</a> game I have created using JavaScipt: <a href="Sheep-Jump.php">Sheep Jump</a></p>
		    </article>';


	$proj =	'<div class="jumbotron"><article class="about"> 
	        	<h1 id="Projects">Projects.</h1>
	        	<div class="row">

	        		<!-- UEABC -->
	        		<div class="col-sm-6 project">
				      	<div class="thumbnail">
				         	<img src="projects/ueabc/UEABC.png" alt="UEABC">
				      	</div>
				      	<div class="caption">
				         	<h3>UEABC</h3>
				         	<p>University Rowing Club Website - PHP, HTML, CSS, JavaScript, JQuery.</p>
				         	<p><a href="UEABC.php" target="_blank" class="btn btn-primary" role="button">
				               View
				            </a></p>
				      	</div>
				   	</div>

				   	<!-- Health Tracker Project -->
				   	<div class="col-sm-6 project">
				      	<div class="thumbnail">
				         	<img src="projects/healthtracker/home.png" alt="healthTracker">
				      	</div>
				      	<div class="caption">
				         	<h3>Health Tracker</h3>
				         	<p>Course Project: Health Tracker Web Application - Java, JSP, MVC, HTML, CSS, SQL, JavaScript.</p>
				         	<p><a href="HealthTracker.php" target="_blank" class="btn btn-primary" role="button">
				               View
				            </a></p>
				      	</div>
				   	</div>

				   	<!-- Game Project -->
				   	<div class="col-sm-6 project">
				      	<div class="thumbnail">
				         	<img src="projects/game/main.png" alt="Game">
				      	</div>
				      	<div class="caption">
				         	<h3>OpenGL Game</h3>
				         	<p>Course project - OpenGL Game</p>
				         	<p><a href="OpenGLGame.php" target="_blank" class="btn btn-primary" role="button">
				               View
				            </a></p>
				      	</div>
				   	</div>

				   	<!-- Festival Project -->
				   	<div class="col-sm-6 project">
				      	<div class="thumbnail">
				         	<img src="projects/festival/Festival2.png" alt="Festival">
				      	</div>
				      	<div class="caption">
				         	<h3>Festival Car Share</h3>
				         	<p>Course project - Festival Car Share Web Application.</p>
				         	<p><a href="FestivalCarShare.php" target="_blank" class="btn btn-primary" role="button">
				               View
				            </a></p>
				      	</div>
				   	</div>

				</div>
			</div>';


	$brand='<article class="about section"> 
	        	<h1 id="Branding">Branding.</h1>
				<p>All of the branding projects I have undertaken have been for <a class="important">educational purposes</a>.</p>
				<br>
				<p> In my experience to create a strong brand identity, you need to have a clear concept and idea of what you want to achieve, from there you start to map out ideas that you then develop and refine.  </p>
				<br>
				<p>Most (if not all) of the graphics seen here have been created from scratch by hand and then scanned into the computer and edited using <a class="important">Adobe Photoshop/ Illustrator/ InDesign</a>.</p>
	        
	        <div class="row">

	        		<!-- Alfresco -->
	        		<div class="col-sm-6 project">
				      	<div class="thumbnail">
				         	<img src="artwork/Alfresco/flowerPoster.png" alt="Alfresco">
				      	</div>
				      	<div class="caption">
				         	<h3>Alfresco</h3>
				         	<p>College project - Alfresco.</p>
				         	<p><a href="Alfresco.php" target="_blank" class="btn btn-primary" role="button">
				               View
				            </a></p>
				      	</div>
				   	</div>

				   	<!-- Snowboards -->
				   	<div class="col-sm-6 project">
				      	<div class="thumbnail">
				         	<img src="artwork/Snowboards/allBoards.png" alt="Snowboards">
				      	</div>
				      	<div class="caption">
				         	<h3>Atlas Snowboards</h3>
				         	<p>College project - Snowboards.</p>
				         	<p><a href="Snowboards.php" target="_blank" class="btn btn-primary" role="button">
				               View
				            </a></p>
				      	</div>
				   	</div>
				</article></div>';

	$art='<div class="jumbotron"><article class="about"> 
	        <h1 id="Artwork">Artwork.</h1>
	        <div class="row">

	        	<div class="col-sm-6 project">
			      	<div class="thumbnail">
						<img src="artwork/Artwork/richmondPark.png" >
			      	</div>
			      	<div class="caption">
			         	<p>Richmond Park.</p>
			      	</div>
			   	</div>

			   	<div class="col-sm-6 project">
			      	<div class="thumbnail">
						<img src="artwork/Artwork/rowers.png" >
			      	</div>
			      	<div class="caption">
			         	<p>Rowing.</p>
			      	</div>
			   	</div>

			   	<div class="col-sm-6 project">
			      	<div class="thumbnail">
						<img src="artwork/Artwork/cakeBook.png" >
			      	</div>
			      	<div class="caption">
			         	<p>Cake Book Mini-Project.</p>
			      	</div>
			   	</div>

			   	<div class="col-sm-6 project">
			      	<div class="thumbnail">
						<img src="artwork/Artwork/towerBridge.png" >
			      	</div>
			      	<div class="caption">
			         	<p>Tower Bridge.</p>
			      	</div>
			   	</div>

			   	<div class="col-sm-6 project">
			      	<div class="thumbnail">
			         	<img src="artwork/Artwork/sardinia2.png" >
			      	</div>
			      	<div class="caption">
			         	<p>Sardinia.</p>
			      	</div>
			   	</div>

			   	<div class="col-sm-6 project">
			      	<div class="thumbnail">
			         	<img src="artwork/Artwork/sardinia1.png" >
			      	</div>
			      	<div class="caption">
			         	<p>Sardinia.</p>
			      	</div>
			   	</div>

			   	<div class="col-sm-6 project">
			      	<div class="thumbnail">
			         	<img src="artwork/Artwork/park1.png" >
			      	</div>
			      	<div class="caption">
			         	<p>Morden Hall Park.</p>
			      	</div>
			   	</div>

			   	<div class="col-sm-6 project">
			      	<div class="thumbnail">
			         	<img src="artwork/Artwork/park2.png" >
			      	</div>
			      	<div class="caption">
			         	<p>Morden Hall Park.</p>
			      	</div>
			   	</div>

			   	<div class="col-sm-6 project">
			      	<div class="thumbnail">
			         	<img src="artwork/Artwork/gameCover1.png" >
			      	</div>
			      	<div class="caption">
			         	<p>GCSE: Game Cover.</p>
			      	</div>
			   	</div>

			   	<div class="col-sm-6 project">
			      	<div class="thumbnail">
			         	<img src="artwork/Artwork/gameCover3.png" >
			      	</div>
			      	<div class="caption">
			         	<p>GCSE: Game Cover.</p>
			      	</div>
			   	</div>

			   	<div class="col-sm-6 project">
			      	<div class="thumbnail">
			         	<img src="artwork/Artwork/gameCover2.png" >
			      	</div>
			      	<div class="caption">
			         	<p>GCSE: Game Cover.</p>
			      	</div>
			   	</div>

			   	<div class="col-sm-6 project">
			      	<div class="thumbnail">
			         	<img src="artwork/Artwork/print1.png" >
			      	</div><div class="caption">
			         	<p>Lino Print.</p>
			      	</div>
			   	</div>
	        </div>
	    </article></div>';


	$page->setBody($aboutMe.$comp.$proj.$brand.$art.'</div>');
	$page->printPage();

?>