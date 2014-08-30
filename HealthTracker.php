<?php
   	include_once ('layout/page.php');

	$page = new Page();
	$page->setTitle("Projects - Health Tracker Application");
	$page->setRoot("");
	$page->setDescription("Tom Wilkins - Health Tracker Application created for a course project using model-view-controller design pattern.");
	$page->setMainPage(false);
	$html='<div class="jumbotron">
			<article>
				<h1>Health Tracker.</h1>
				<div class="row">
					<div class="col-md-6 col-sm-6">
			        	<p>For a course project we created a  Health Tracker Application in small teams of four. The project aim was to gain experience making a software application using <a class="important">Test-Driven Development</a> and the <a class="important">Model-View-Controller</a> design pattern in a small development team.</p>
			        	<br><p>We were given a design brief and firstly planned the design of the system and then implemented the design.</p>
		        	</div>
					<div class="col-md-6 col-sm-6">
			        	<div class="thumbnail">
				         	<img src="projects/healthtracker/home.png" alt="Health Tracker Application">
				      	</div>
				    </div>
				</div><!-- row -->
			</article>
	   	</div><!-- jumbotron -->

	   	<article class="about section"> 
	        	<h1>Technologies.</h1>

	        	<div class="row">
					
					<div class="col-md-6 col-sm-6">
						<div class="thumbnail">
				         	<img src="projects/healthtracker/profile.png" alt="Health Tracker Application">
				      	</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<p>The application has been built using <a class="important">Java</a> for the main backend code and uses <a class="important">JavaServer Pages</a> to display data to the user.</p>
						<br><p>It is connected to a <a class="important">PostgresSQL</a> database and uses SQL commands to manipulate data within it.</p>
						<br><p>Our team used <a class="important">Bitbucket</a> powered by Git for version control.</p>
					</div>
				</div><!-- row -->
	    </article>

	    <div class="jumbotron">
			<article>
				<h1>Features.</h1>
				<div class="row">
					<div class="col-md-4 col-sm-4">
			        	<p>The application\'s main purpose is to allow users to register their details and track their fitness and diet.</p><br>
			        	<p>In addition users can add fitness/ diet goals and create/ join groups. Groups allow users to connect together and help achieve similar goals.</p>
		        	</div>
					<div class="col-md-4 col-sm-4">
			        	<div class="thumbnail">
				         	<img src="projects/healthtracker/registration.png" alt="Health Tracker Application">
				      	</div>
				    </div>

				    <div class="col-md-4 col-sm-4">
			        	<div class="thumbnail">
				         	<img src="projects/healthtracker/goal.png" alt="Health Tracker Application">
				      	</div>
				    </div>
				</div><!-- row -->
			</article>
	   	</div><!-- jumbotron -->';

   	$page->setBody($html);
	$page->printPage();

?>