<?php
   	include_once ('layout/page.php');

	$page = new Page();
	$page->setTitle("Projects - UEABC");
	$page->setRoot("");
	$page->setDescription("Tom Wilkins - UEABC website I have developed using PHP, HTML, CSS and JavaScript.");
	$page->setMainPage(false);
	$html='<div class="jumbotron">
			<article>
				<h1>UEABC.</h1>
				<div class="row">
					<div class="col-md-6 col-sm-6">
			        	<p>University Of East Anglia Boat Club\'s website created and designed by myself -  
			        	<a href="http://www.ueabc.co.uk">http://www.ueabc.co.uk</a>.</p><br>
			        	<p>I wanted to learn how to code in PHP and develop my HTML, CSS and JavaScript skills during my spare time. However I found it quite difficult without an objective or project to work towards.</p><br>
			        	<p>Luckily I had just became the Secretary of my University Rowing Club and noticed there website was in desperate need of an upgrade.</p>
		        	</div>
					<div class="col-md-6 col-sm-6">
			        	<div class="thumbnail">
				         	<img src="projects/ueabc/UEABC.png" alt="UEABC">
				      	</div>
				    </div>
				</div><!-- row -->
			</article>
	   	</div><!-- jumbotron -->


	   	<article class="about section"> 
	        	<h1>Original.</h1>

	        	<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="thumbnail">
				         	<img src="projects/ueabc/oldUEABC.png" alt="UEABC">
				      	</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<p>This is the original website that I decided to upgrade. The website design itself wasn\'t that bad but it was created using static HTML and CSS2.</p>
						<br><p>The first upgrade I made was to convert all the pages into PHP and abstract out the common code into functions for reuse, as well as converting out-of-date CSS techniques from CSS2 to CSS3.</p>
					</div>
				</div><!-- row -->
	    </article>

	    <div class="jumbotron">
			<article>
				<h1>Iteration 1.</h1>
				<div class="row">

					<div class="col-md-6 col-sm-6">
			        	<p>This iteration shows a fully working PHP website that uses elements of the previous version. I also added extra content such as photo and video archives.</p>
			        	<br><p>I have used the flat and minimalistic design to make the site more attractive and user friendly.</p>
		        	</div>

		        	<div class="col-md-6 col-sm-6">
			        	<div class="thumbnail">
				         	<img src="projects/ueabc/oldUEABC2.png" alt="UEABC">
				      	</div>
				    </div>
				</div><!-- row -->
			</article>
	   	</div><!-- jumbotron -->

	   	<article class="about section"> 
	        	<h1>Iteration 2.</h1>

	        	<div class="row">
					
					<div class="col-md-4 col-sm-4">
						<p>For this iteration I changed the design once again and made the website <a class="important">responsive</a>, meaning that it will adapt to the screen size.</p>
					</div>

					<div class="col-md-4 col-sm-4">
						<div class="thumbnail">
				         	<img src="projects/ueabc/UEABCredesign.png" alt="UEABC">
				      	</div>
					</div>

					<div class="col-md-4 col-sm-4">
						<div class="thumbnail">
				         	<img src="projects/ueabc/oldUEABCmobile.png" alt="UEABC">
				      	</div>
					</div>
				</div><!-- row -->
	    </article>

	    <div class="jumbotron">
			<article>
				<h1>Iteration 3 - Live Site.</h1>
				<div class="row">

					<div class="col-md-6 col-sm-6">
			        	<div class="thumbnail">
				         	<img src="projects/ueabc/UEABC.png" alt="UEABC">
				      	</div>
				    </div>

					<div class="col-md-6 col-sm-6">
			        	<p>In this re-design I wanted to make the website look more professional and lively.</p>
			        	<br><p>I added a number of extra features: such as admin control for making news posts, adding photos/ videos and managing users.</p>
			        	<br><p>To view the site and all its content go to <a href="http://www.ueabc.co.uk">http://www.ueabc.co.uk</a>.</p> 
		        	</div>
				</div><!-- row -->
			</article>
	   	</div><!-- jumbotron -->';

	$page->setBody($html);
	$page->printPage();

?>