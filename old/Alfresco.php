<?php
   	include_once ('layout/page.php');

	$page = new Page();
	$page->setTitle("Branding - Alfresco");
	$page->setRoot("");
	$page->setDescription("Tom Wilkins - Alfresco in Twickenham graphical branding project.");
	$page->setMainPage(false);
	$html='<div class="jumbotron">
			<article>
				<h1>Alfresco.</h1>
				<div class="row">
					<div class="col-md-6 col-sm-6">
			        	<p>Alfresco in Twickenham was an A-Level piece of coursework that involved me creating a promotional brand of <a class="important">Alfresco</a>. 
			        	</p><br><p>To reach the final outcome I performed a lot of research and initial planning/ designs, exploring a number of concepts.</p>
			        	<br><p>The final outcome was inspired by vintage National Rail posters such as <a href="http://enthralledbybeauty.files.wordpress.com/2010/07/railway-posters1.jpg" target="_blank"><i>these</i></a>.
			        	</p>
		        	</div>
					<div class="col-md-6 col-sm-6">
			        	<div class="thumbnail">
				         	<img src="artwork/Alfresco/flowerPoster.png" alt="Alfresco">
				      	</div>
				    </div>
				</div><!-- row -->
			</article>
	   	</div><!-- jumbotron -->

	   	<article class="about section"> 
	        	<h1>Design.</h1>

	        	<div class="row">
					
					<div class="col-md-6 col-sm-6">
						<div class="thumbnail">
				         	<img src="artwork/Alfresco/inkFlower.png" alt="Alfresco">
				      	</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<p>To create the final outcomes I first went sketching on-location and then enhanced those sketches using black-line ink, then I scanned the result into the computer for editing.
						</p><br><p>Using editing software, I manipulated the ink drawings and printed out new versions. I then painted them using watercolour and finally scanned them into the computer for editing.</p>
					</div>
				</div><!-- row -->
	    </article>

	    <div class="jumbotron">
			<article>
				<h1>Concept and Final Outcome.</h1>
				<div class="row">
					<div class="col-md-6 col-sm-6">
			        	<p>The concept of the project was to create the Alfresco brand and use Twickenham as the first location. I chose to create promotional merchandise for the final outcome.</p>
			        	<br><p>People would only be able to get the merchandise in the location
						and inspire them to spend more time outdoors, the main target market being tourists. Alfresco merchandise could then be created for other locations and follow a similar pattern.</p>
						<br><p>The final outcomes can be seen on the right; they include a poster, postcards and coasters.</p>
		        	</div>
					<div class="col-md-6 col-sm-6">
			        	<div class="thumbnail">
				         	<img src="artwork/Alfresco/finals.png" alt="Alfresco">
				      	</div>
				    </div>
				</div><!-- row -->
			</article>
	   	</div><!-- jumbotron -->';

   	$page->setBody($html);
	$page->printPage();

?>