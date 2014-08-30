<?php

	
	/* ------------------------------
	--------- HOME PAGE /index.php --
	------------------------------ */

	$rootURL = "";
	require_once('common.php');

	getTopHTML('Home Page', $rootURL);
	getNavBar();

?>
<div class ="content">

	<div class="homePage">
		<!-- *******************************  -->
		<!-- ********** HOME PAGE **********  -->
		<!-- *******************************  -->
		<article class="about">
	        <a class="title">About Me</a>
	        <br><br>
	        <p>I am a 19-year-old student, currently studying <a class="important">Computer Science</a> at the University Of East Anglia. </p>
	        <br>
			<p>I am an enthusiastic, dedicated, confident individual wanting to achieve everything to the best of my ability.</p> 
			<br>
			<p>One aspect of computer science that I am very passionate about is Web Design. I aim to create fluid, beautiful websites that appeal to all, with easy to use features and navigation. To fully achieve this I use <a class="important">Responsive Web Design</a> meaning that the website will shrink to the size of the screen, adjusting content dynamically.</p> 
			<br>
			<p>Graphics, layout and design are all key features of not only creating a great website, but a great brand. Having done A-Level graphics I have worked on a number of projects that have involved creating a brand identify from scratch, which has helped me to develop as a web designer.</p>
			<br>
			<!-- If needs be... <p>I am currently <a class="important">available</a> for new projects.</p> -->
		</article>
		<img class="me" src="images/TomWilkins.png" title="">
		<article class="contact">
			<a class="title">Contact Me</a>
	        <br><br>
	        <p>CV upon request.</p>
	        <br>
	        <p>Email: <a class="important" href="mailto:tomwilkins93@hotmail.co.uk" target="_top">tomwilkins93@hotmail.co.uk</a></p>
	        <br>
	<?php
		getContactForm();
	?>
		</article>

	</div><!-- .homePage -->

	<div class="computingPage">
		<!-- *******************************  -->
		<!-- ******* COMPUTING PAGE ********  -->
		<!-- *******************************  -->
		<article class="skills">
	        <a class="pageTitle">Computing</a>
	        <br><br> 
			<P>I have learnt a number of different programming languages over the past few years, most of which, outside of education. </p>
			<br>
			<p>I have a lot of experience with the following languages and skills: </p>
			<br>
			<p class="important">PHP, MySQL, HTML, CSS, JavaScript, JQuery, Java, Visual Basic, Responsive Web Design, Adobe Photoshop/ Illustrator/ InDesign.</p>
			<br>
			<p>As well as developing my knowledge and understanding of the above, I am always trying to learn a new language/ technique. A few of them are:</p>
			<br>
			<p>C, C#, C++, Python, Ajax.</p>
		</article>
		<article class="skills">
			<a class="title">Projects</a>
			<br><br>
			<p>I have completed a number of projects that have either been self-projects (for developing my skills), for education (University) or for clients. Below are a few examples of some recent projects.</p> 
		</article>
		<article class="project UEABC1">
			<a>
				<span class="overText">Click to find out more...<br>(Content below)</span>
				<img src="projects/UEABClive.png" >
				<a class="projectTitle">UEABC 1</a>
			</a>
		</article>
		<article class="project UEABC2">
			<a>
				<span class="overText">Click to find out more...<br>(Content below)</span>
				<img src="projects/UEABCredesign.png">
				<a class="projectTitle">UEABC 2</a>
			</a>
		</article>
		<article class="project Festival">
			<a>
				<span class="overText">Click to find out more...<br>(Content below)</span>
				<img src="projects/Festival2.png">
				<a class="projectTitle">Festival</a>
			</a>
		</article>
	

		<!-- *******************************  -->
		<!-- ******* Computing Projects ****  -->
		<!-- *******************************  -->
		<div class ="sliderUEABC1">
			<article class="skills">
				<a class="title">UEABC 1</a>
				<br><br>
				<p>At my University I am a member of the rowing club (UEABC) and decided to update the website from its old, outdated design (HTML static pages). I re-constructed the website using PHP with the help of HTML and CSS3. The website also demostrates use of MySQL - the photos and videos are dynamically generated from an external database. </p>
				<br>
				<p>I also decided to experiment and develop my responsive web design skills. To understand what I’m on about, go to the website and change the size of your browser, or visit it on your mobile/tablet (or just resize this screen and watch the live demo below).</p>
				<br>
				<p>Website: <a href="http://www.ueabc.co.uk">http://www.ueabc.co.uk</a></p>

			</article>
			<article class="demo">
				<a class="title">Live Demo</a>
				<iframe src="http://www.ueabc.co.uk" ></iframe>
			</article>
		</div>

		<div class ="sliderUEABC2">
		
			<article class="skills">
				<a class="title">UEABC 2</a>
				<br><br>
				<p>I am constantly developing websites I have previously created/ worked on, integrating new ideas I’ve had and new features I’ve come across - UEABC 2 is an example. I have experimented with CSS3 animations and JQuery that can be seen by the navigation hover and the photo slider.</p>
				<br>
				<p>Note: this is not a full website, only a re-construction of the homepage from UEABC 1.</p> 
			</article>
			<article class="demo">
				<a class="title">Live Demo</a>
				<iframe src="" ></iframe>
			</article>
		</div>

		<div class ="sliderFestival">
		
			<article class="skills">
				<a class="title">Festival</a>
				<br><br>
				<p>This was a University project - we had to create a fully functioning site using the <a class="important">Model-View-Controller</a> method. The website got users to register festivals/ festival trips (car journeys) and allowed users to send messages, upload photos to a personal gallery and more. The website was created using Java Server Pages (JSP) which is html injected with Java. We were also restricted to CSS2, XHTML 1.0 Strict and no JavaScript. </p>
				<br>
				<p>Note: the demo page below is just a screenshot and not interactive.</p>

			</article>
			<article class="demo">
				<img src="projects/Festival2.png" title="Festival">
			</article>
		</div>
	</div><!-- .computingPage -->

	<div class="brandingPage">
		<!-- *******************************  -->
		<!-- ******* BRANDING PAGE *********  -->
		<!-- *******************************  -->
		<article class="brandingDescription">
			<a class="pageTitle">Branding</a>
			<br><br>
			<p>All of the branding projects I have undertaken have been for educational purposes.</p>
			<br>
			<p> In my experience to create a strong brand identity, you need to have a clear concept and idea of what you want to achieve, from there you start to map out ideas that you then develop and refine.  </p>
			<br>
			<p>Most (if not all) of the graphics seen have been created from scratch by hand and then scanned into the computer and edited using <a class="important">Adobe Photoshop/ Illustrator/ InDesign.</a></p>
		</article>
		
		<article class="branding Alfresco">
			<a>
				<span class="overText">Click to find out more...<br>(Content below)</span>
				<img src="artwork/Alfresco/flowerPoster.png" >
				<a class="projectTitle">Alfresco</a>
			</a>
		</article>
		<article class="branding Snowboards">
			<a>
				<span class="overText">Click to find out more...<br>(Content below)</span>
				<img src="artwork/Snowboards/allBoards.png" >
				<a class="projectTitle">Atlas Snowboards</a>
			</a>
		</article>
		<article class="branding FoodFestival">
			<a>
				<span class="overText">Click to find out more...<br>(Content below)</span>
				<img src="artwork/foodFestival/logo.png" >
				<a class="projectTitle">Food Festival</a>
			</a>
		</article>
		<!-- *******************************  -->
		<!-- ******* Branding Projects *****  -->
		<!-- *******************************  -->
		<div class ="sliderAlfresco">
		
			<article class="skills">
				<a class="title">Alfresco</a>
				<br><br>
				<p>Alfresco promotes healthy outdoor living for local areas (in this case Twickenham is the local area). </p>
				<br>
				<p>When designing and developing Alfresco I wanted to capture the freedom and essence of the outdoors. The artistic techniques I used were pen, ink and watercolor. </p>
				
			</article>
			<article class="demo">
				<img src="artwork/Alfresco/finals.png" title="Alfresco">
			</article>
		</div>
		<div class ="sliderSnowboards">
		
			<article class="skills">
				<a class="title">Atlas Snowboards</a>
				<br><br>
				<p>Atlas Snowboards was created to market high-end artistic snowboard designs. </p>
				<br>
				<p>The three designs in the poster developed from a combination of tiger patterns and paint textures. </p>

			</article>
			<article class="demo">
				<img src="artwork/Snowboards/allBoards.png" title="All Boards">
			</article>
			<article class="demo">
				<img src="artwork/Snowboards/boards1.png" title="Boards">
			</article>
			<article class="demo">
				<img src="artwork/Snowboards/finals.png" title="Finals">
			</article>
		</div>
		<div class ="sliderFoodFestival">
		
			<article class="skills">
				<a class="title">The Big Food Festival</a>
				<br><br>
				<p>This project focused on creating a leaflet to promote The Big Food Festival – celebrating 60 years of the ‘Festival Of Britain’. </p>
				<br>
				<p>Most of the leaflet I created by hand and then edited into Photoshop. </p>
			</article>
			<article class="demo">
				<img src="artwork/foodFestival/side1.png" title="Food Festival">
			</article>
			<article class="demo">
				<img src="artwork/foodFestival/side2.png" title="Food Festival">
			</article>
		</div>
	</div><!-- .brandingPage -->

	<div class="artworkPage">
		<!-- *******************************  -->
		<!-- ******* ARTWORK PAGE **********  -->
		<!-- *******************************  -->
		<article class="artworkDescription">
			<a class="pageTitle">Artwork</a>
			<br><br>
			<p>Graphic design requires a lot of artwork. Before designing anything on the computer you need to design it on paper, resulting in me developing as an artist throughout my A-Levels. </p>
			<br>
			<p>Painting is now one of my favorite hobbies and below is a collection of my best artwork. </p>
			<br>
			<button type="button" class="showHide">Show Artwork!</button>
		</article>

		<div class ="artworkContainer">

			<article class="artwork">
				<a href="artwork/Artwork/richmondPark.png" data-lightbox="roadtrip" title="Richmond Park">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/richmondPark.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/rowers.png" data-lightbox="roadtrip" title="Rowers">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/rowers.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/sardinia2.png" data-lightbox="roadtrip" title="Sardinia">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/sardinia2.png" >
				</a>
			</article>

			<article class="artwork">
				<a href="artwork/Artwork/inflames.png" data-lightbox="roadtrip" title="In Flames">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/inflames.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/park1.png" data-lightbox="roadtrip" title="Park">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/park1.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/park2.png" data-lightbox="roadtrip" title="Park">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/park2.png" >
				</a>
			</article>

			<article class="artwork">
				<a href="artwork/Artwork/print1.png" data-lightbox="roadtrip" title="Print">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/print1.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/print2.png" data-lightbox="roadtrip" title="Print">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/print2.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/print3.png" data-lightbox="roadtrip" title="Print">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/print3.png" >
				</a>
			</article>

			<article class="artwork">
				<a href="artwork/Artwork/windowView.png" data-lightbox="roadtrip" title="Window View">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/windowView.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/towerBridge.png" data-lightbox="roadtrip" title="Tower Bridge">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/towerBridge.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/tree.png" data-lightbox="roadtrip" title="Tree">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/tree.png" >
				</a>
			</article>

			<article class="artwork">
				<a href="artwork/Artwork/cakeBook.png" data-lightbox="roadtrip" title="Cake Book">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/cakeBook.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/deers.png" data-lightbox="roadtrip" title="Deers">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/deers.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/broads.png" data-lightbox="roadtrip" title="Broads">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/broads.png" >
				</a>
			</article>

			<article class="artwork">
				<a href="artwork/Artwork/gameCover1.png" data-lightbox="roadtrip" title="Game Cover">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/gameCover1.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/gameCover2.png" data-lightbox="roadtrip" title="Game Cover">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/gameCover2.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/gameCover3.png" data-lightbox="roadtrip" title="Game Cover">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/gameCover3.png" >
				</a>
			</article>

			<article class="artwork">
				<a href="artwork/Artwork/sardinia1.png" data-lightbox="roadtrip" title="Sardinia">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/sardinia1.png" >
				</a>
			</article>
			<article class="artwork">
				<a href="artwork/Artwork/castle.png" data-lightbox="roadtrip" title="Castle">
					<span class="overText">Click on me...</span>
					<img src="artwork/Artwork/castle.png" >
				</a>
			</article>

		</div>
	</div><!-- .artworkPage -->


</div><!-- .content -->

<?php
	getFooterHTML();
?>
