<?php
   	include_once ('layout/page.php');

	$page = new Page();
	$page->setTitle("Branding - Snowboards");
	$page->setRoot("");
	$page->setDescription("Tom Wilkins - Snowboard design project branded under Atlas.");
	$page->setMainPage(false);
	$html='<div class="jumbotron">
			<article>
				<h1>Atlas Snowboards.</h1>
				<div class="row">
					<div class="col-md-6 col-sm-6">
			        	<p>This project was for my A-Level coursework and the brief was to create snowboard designs.</p>
			        	<br><p>I spent a lot of time researching into snowboard brands and designs, and decided to create a brand that focused on high-end artistic designs allowing people to choose more "personal" boards.</p>
			        	<br><p>The final outcome can be seen with the Atlas brand logo on the right.</p>
		        	</div>
					<div class="col-md-6 col-sm-6">
			        	<div class="thumbnail">
				         	<img src="artwork/Snowboards/allBoards.png" alt="Snowboards">
				      	</div>
				    </div>
				</div><!-- row -->
			</article>
	   	</div><!-- jumbotron -->
 
	   	<article class="about section"> 
	        	<h1>Brand.</h1>

	        	<div class="row">
					
					<div class="col-md-6 col-sm-6">
						<div class="thumbnail">
				         	<img src="artwork/Snowboards/logo.png" alt="Snowboards">
				      	</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<p>When deciding on a brand identity I wanted to come up with a name that was original and recognisable. After shortlisting some ideas I chose to go with "Atlas" inspired by <a href="http://en.wikipedia.org/wiki/Mount_Atlas">Mount Atlas</a>.
						</p><br>
						<p>Mount Atlas was also the inspiration for the logo design. The typography was chosen to give it an edge, and the black/ white colour scheme was chosen to make it stand out. Also it can easily be used for advertisement, e.g. stickers.</p>
					</div>
				</div><!-- row -->
	    </article>

	    <div class="jumbotron">
			<article>
				<h1>Design.</h1>
				<div class="row">
					<div class="col-md-4 col-sm-4">
			        	<p>To create an artistic design for the snowboards I researched into patterns. I was inspired by a tiger pattern and tried to replicate it using lino printing. I created 3 prints, one of which can be seen to the right.</p>
			        	<br><p>I took those prints, scanned them into the computer and then edited them using Photoshop. I played around with a few different designs and concepts and came up with 3 patterns for the final boards.</p>
		        	</div>
					<div class="col-md-4 col-sm-4">
			        	<div class="thumbnail">
				         	<img src="artwork/Artwork/print1.png" alt="Snowboard">
				      	</div>
				    </div>

				    <div class="col-md-4 col-sm-4">
			        	<div class="thumbnail">
				         	<img src="artwork/Snowboards/blueBoards.jpeg" alt="Snowboards">
				      	</div>
				    </div>
				</div><!-- row -->
			</article>
	   	</div><!-- jumbotron -->

	   	<article class="about section"> 
	        	<h1>Boards.</h1>

	        	<div class="row">
					
					<div class="col-md-6 col-sm-6">
						<div class="thumbnail">
				         	<img src="artwork/Snowboards/boards1.png" alt="Snowboards">
				      	</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<p>To make the designs come to life I created 3 plastic boards from acrylic and printed each design, sticking them onto separate boards.</p>
						<br><p>
						You can clearly see the front and back of the boards differentiated by the logo and brand name, as well as the binding pins.</p>
					</div>
				</div><!-- row -->
	    </article>';

   	$page->setBody($html);
	$page->printPage();

?>