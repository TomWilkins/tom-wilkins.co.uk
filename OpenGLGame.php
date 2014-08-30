<?php
   	include_once ('layout/page.php');

	$page = new Page();
	$page->setTitle("Projects - OpenGL Game");
	$page->setRoot("");
	$page->setDescription("Tom Wilkins - Graphics 2D top-down game created using OpenGL and C++.");
	$page->setMainPage(false);
	$html='<div class="jumbotron">
			<article>
				<h1>OpenGL Game - Switch.</h1>
				<div class="row">
					<div class="col-md-6 col-sm-6">
			        	<p>This was a coursework project for University, the breif was to make a 2D top-down roaming game using <a class="important">OpenGL</a> and <a class="important">C++.</a></p><br>
			        	<p>The game I created is called "Switch" and is a first-person shooter. The objective is to escape the hellish lands by fighting your way through the levels and destorying the boss.</p><br>
			        	<p>To complete the levels within the game you have to de-activate the forcefield sorounding the "lift" to the next level. To do this you have to active all the switches while avoiding death</p>
		        	</div>
					<div class="col-md-6 col-sm-6">
			        	<div class="thumbnail">
				         	<img src="projects/game/main.png" alt="Game">
				      	</div>
				    </div>
				</div><!-- row -->
			</article>
	   	</div><!-- jumbotron -->


	   	<article class="about section"> 
	        	<h1>Gameplay.</h1>

	        	<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="thumbnail">
				         	<img src="projects/game/game1.png" alt="Game">
				      	</div>
				      	<div class="caption">
				      	<p>Screenshot 1.</p>
				      	</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<p>Screenshot 1 shows the player running away from two different enemies, the closest one shooting at the player and the other one roaming around.</p>
					</div>
				</div>
		</article>
		<div class="jumbotron">
			<article>
				<div class="row">

					<div class="col-md-6 col-sm-6">
						<p>Screenshot 2 shows game footage of the player activating one of the switches. When the player is close-by the switch they will get a message prompting them to activate it.</p><br>
						<p>In this case the player is getting prompted to reload. Ammo is displayed in the top bar and starts at 20.</p>
					</div>

					<div class="col-md-6 col-sm-6">
						<div class="thumbnail">
				         	<img src="projects/game/game2.png" alt="Game">
				      	</div>
				      	<div class="caption">
				      		<p>Screenshot 2.</p>
				      	</div>
					</div>

				</div>
			</article>
		</div>
		<article class="about section"> 
				<div class="row">

					<div class="col-md-6 col-sm-6">
						<div class="thumbnail">
				         	<img src="projects/game/game3.png" alt="Game">
				      	</div>
				      	<div class="caption">
				      		<p>Screenshot 3.</p>
				      	</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<p>Screenshot 3 shows the player close to the lift and a switch, not all the switches have been activated and the lifts\' forcefield is still up. Also the player is close to the lava.</p><br>
						<p>If you would like a copy of the game, send me an email.<br><a href="mailto:tomwilkins93@hotmail.co.uk" class="btn btn-primary btn-lg" role="button">
					        Request Game</a></p>
					</div>
				</div><!-- row -->
	    </article>';

	$page->setBody($html);
	$page->printPage();

?>