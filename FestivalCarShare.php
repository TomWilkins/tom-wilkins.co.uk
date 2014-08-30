<?php
   	include_once ('layout/page.php');

	$page = new Page();
	$page->setTitle("Projects - Festival Car Share Application");
	$page->setRoot("");
	$page->setDescription("Tom Wilkins - Festival Car Share Application created for a course project using model-view-controller design pattern.");
	$page->setMainPage(false);
	$html='<div class="jumbotron">
			<article>
				<h1>Festival Car Share.</h1>
				<div class="row">
					<div class="col-md-8 col-sm-8">
			        	<p>This was the first application  I worked on, built using <a class="important">Java, JavaServer Pages, HTML, CSS</a> and <a class="important">SQL</a>. I worked with another person on this project, and we used a <a class="important">Model-View-Controller</a> architecture.</p><br>
			        	<p>The web app is designed for users to advertise trip shares for different festivals, users can either register as a festival trip "goer", allowing them to sign up to trips or festival trip "organiser", allowing them to set up trips.</p>
		        	</div>
					<div class="col-md-4 col-sm-4">
			        	<div class="thumbnail">
				         	<img src="projects/festival/Festival1.png" alt="Festival Applicaiton">
				      	</div>
				    </div>
				</div><!-- row -->
			</article>
	   	</div><!-- jumbotron -->

   		<article class="about section"> 
	        	<h1>Features.</h1>

	        	<div class="row">
					
					<div class="col-md-6 col-sm-6">
						<div class="thumbnail">
				         	<img src="projects/festival/search.png" alt="Health Tracker Application">
				      	</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<p>Users registered as Organisers can create new festivals as well as trips, however they first need to get verified by an Admin. All users can search for Festivals by name and location and can search for other users.</p>
						<br><p>The application has a messaging feature allowing different users to contact each other directly, and users have a gallery where they can upload any festival photos taken for future reference.</p>
					</div>
				</div><!-- row -->
	    </article>';

   	$page->setBody($html);
	$page->printPage();

?>