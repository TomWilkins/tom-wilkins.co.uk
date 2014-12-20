<?php 
	require_once('php/display_functions.php');
?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Portfolio | Tom Wilkins</title>
	<meta name="description" content="Tom Wilkins - My portfolio website showcasing my work and projects.">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- styles -->
	<link rel="stylesheet" href="bower_components/normalize.css/normalize.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- icons -->
	<link href="img/icons/apple-touch-icon.jpg" rel="apple-touch-icon" />
	<link href="img/icons/apple-touch-icon-76x76.jpg" rel="apple-touch-icon" sizes="76x76" />
	<link href="img/icons/apple-touch-icon-120x120.jpg" rel="apple-touch-icon" sizes="120x120" />
	<link href="img/icons/apple-touch-icon-152x152.jpg" rel="apple-touch-icon" sizes="152x152" />
	<link href="img/icons/apple-touch-icon-180x180.jpg" rel="apple-touch-icon" sizes="180x180" />
	<link href="img/icons/icon-hires.jpg" rel="icon" sizes="192x192" />
	<link href="img/icons/icon-normal.jpg" rel="icon" sizes="128x128" />

	<!-- jquery -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <!-- my script -->
	<script src="js/min/script.js"></script>

</head>
<body>
	<nav>
		<a id="toplink" href="#about">
			<img src="img/logo.jpg" srcset="img/logo@2x.jpg 2x" alt="Tom Wilkins Portfolio">
		</a>
		<a href="#about">about</a>
		<a href="#computing">computing</a>
		<a href="#graphics">graphics</a>
		<a href="#art">art</a>
		<div id = "social">
			<a href="mailto:tomwilkins93@hotmail.co.uk">
				<img src="img/email.svg" alt="email">
			</a>
			<a href="https://uk.linkedin.com/pub/tom-wilkins/74/78/951" target="_blank">
				<img src="img/linkedin.svg" alt="linkedin">
			</a>
			<a href="https://github.com/TomWilkins" target="_blank">
				<img src="img/github.svg" alt="github">
			</a>
		</div>
	</nav>

	<h1>Tom Wilkins Portfolio</h1>

	<main>
		<section id="about">
			<h2>About</h2>
	        <p>I am a <?=date("Y")-1994?>-year-old student studying Computer Science at the University of East Anglia and am currently on a placement year working as a Web and Tools Developer for <a class="feral" href="http://feralinteractive.com/" target="_blank">Feral Interactive</a>. I am an enthusiastic, confident and determined individual trying to achieve everything to the best of my ability.</p>
	        <p>I have previously worked as a Web Developer at a small SAAS company in Norwich called <a class="VA" href="https://www.vendorappraisal.com/" target="_blank">Vendor Appraisal</a>.<p>
	        <p>Currently I think that the two most interesting topics in Computer Science to me at the moment are the web and software. I am particularly interested by how they are combined into one medium through the web, allowing native software applications to be built entirely using the web platform (SAAS). It opens a number of possibilities that a few years ago, were unthinkable.</p> 
			<p>I have also had an interest in Art and Graphics since High School and have learnt to use editing software, for example Adobe Photoshop, which means that when I look at a web application I will consider not only its functional use but also the graphical design.</p>
			<p>This website is a portfolio showcasing some of my computing, graphics and artwork. Some of which has been done during academic study whilist the rest has been in my spare time. For a more in-depth overview, check out my <a class='linkedInLink' href="https://uk.linkedin.com/pub/tom-wilkins/74/78/951" target="_blank" >LinkedIn profile.</a></p>
	      	
		</section><!-- about -->
		<hr> 
		<section id="computing">
			<h2>Computing</h2>
			<br>
			<h3>Language Experience</h3>
			<?php printLanguages(); ?>

			<br>
			<br>
			<h3>Topics Studied at University</h3>
			<p><h4>2st Year (80%)</h4>
				Programming 2, Data Structures and Algorithms, <a class="link" href="https://www.uea.ac.uk/study/module/mod-detail/CMP-5013A" target="_blank">Architectures and Operating Systems</a>, <a class="link" href="https://www.uea.ac.uk/study/module/mod-detail/CMP-5012B" target="_blank">Software Engineering 1</a>, <a class="link" href="https://www.uea.ac.uk/study/module/mod-detail/CMP-5003A" target="_blank">System Analysis</a> and <a class="link" href="https://www.uea.ac.uk/study/module/mod-detail/CMP-5010B" target="_blank">Graphics 1.</a></p>
			<p><h4>1st Year (82%)</h4>
				<a class="link" href="https://www.uea.ac.uk/study/module/mod-detail/CMP-4008Y" target="_blank">Programming 1</a>, Computer Systems 1 & 2, Computing Fundamentals, Computing Revolution and <a class="link" href="https://www.uea.ac.uk/study/module/mod-detail/CMP-4005Y" target="_blank">Mathematics</a></p>
			<p id="topic-notice">* Some of the modules have had their information removed due to the course being restructured.</p>

			<br>
			<h3>Projects</h3>

			<p>These are relatively small personal/ course projects that I have undertaken or been involved with. For a more comprehensive list of my work please email me.</p>

			<article class="project">
				<!-- UEABC -->
			    <h4>UEABC</h4>

			    <div class="project_text">
				    <p>This was my first real world website project and where I learnt my foundation in HTML, CSS, PHP and JS.</p>
				    <p>The original website was created entirely from HTML and CSS, so I decided to rewrite it using PHP to create more maintainable code. I used the project to help me develop my knowledge and understanding of web design/ development, including how to make websites responsive.</p>
				    <p>You can see the design start to look more professional as the iterations progress towards the current live site.</p>
			    </div>
			    <div class="two_col_img">
			    	<figure>
			    		<img src='img/projects/ueabc/ueabc1.jpg' srcset="img/projects/ueabc/ueabc1@2x.jpg 2x"alt="UEABC Original Website">
			    		<figcaption>Original Website</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/ueabc/ueabc2.jpg' srcset="img/projects/ueabc/ueabc2@2x.jpg 2x"alt="UEABC First Iteration">
			    		<figcaption>First Iteration</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/ueabc/ueabc3.jpg' srcset="img/projects/ueabc/ueabc3@2x.jpg 2x"alt="UEABC Second Iteration">
			    		<figcaption>Second Iteration</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/ueabc/ueabc4.jpg' srcset="img/projects/ueabc/ueabc4@2x.jpg 2x"alt="UEABC Third Iteration">
			    		<figcaption>Third Iteration (<a class="link" href="http://ueabc.co.uk/" target="_blank">Live Site</a>)</figcaption>
			    	</figure>
			    </div>
		    </article>

	    	<article class="project">
			   	<!-- Health Tracker Project -->
		     	<h4>Health Tracker</h4>
		     	<div class="project_text">
		     		<p>This was a course project where we had to work in teams of 4 and create a Health Tracker system working from a brief. It introduced me to version control (Git), Test-Driven Development and helped me improve upon my knowledge of the Model-View-Controller design pattern.</p>
		     		<p>We created a complete plan of the system before implementing it using a range of software engineering UML diagrams, e.g. class diagrams.</p>
		     		<p>The application is built in Java and uses a PostgresSQL database and because the emphasis of the task was on back-end code, the front-end isn't that professional.</p>
	     		</div>
		         <div class="two_col_img">
			    	<figure>
			    		<img src='img/projects/healthtracker/home.jpg' srcset="img/projects/healthtracker/home@2x.jpg 2x"alt="Health Tracker Home Page">
			    		<figcaption>Home Page</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/healthtracker/login.jpg' srcset="img/projects/healthtracker/login@2x.jpg 2x"alt="Health Tracker Login">
			    		<figcaption>Login</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/healthtracker/profile.jpg' srcset="img/projects/healthtracker/profile@2x.jpg 2x"alt="Health Tracker Profile">
			    		<figcaption>User Profile</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/healthtracker/goal.jpg' srcset="img/projects/healthtracker/goal@2x.jpg 2x"alt="Health Tracker User Goals">
			    		<figcaption>User Goals</figcaption>
			    	</figure>
			    </div>
		    </article>

		    <article class="project">
			   	<!-- Game Project -->
		     	<h4>OpenGL Game: Switch</h4>
		     	<div class="project_text">
		     		<p>This was a course project where we had to create a 2D top-down roaming game using OpenGL in C++ (it was my first time using both).</p>
		     		<p>The game I created is called 'Switch' and is a first-person shooter. The objective is to escape the Hellish Lands by fighting your way through the levels and slaying the boss.</p>
		     	</div>

	         	<div class="two_col_img">
			    	<figure>
			    		<img src='img/projects/switch/main.jpg' srcset="img/projects/switch/main@2x.jpg 2x"alt="Switch Main Menu">
			    		<figcaption>Main Menu</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/switch/switch1.jpg' srcset="img/projects/switch/switch1@2x.jpg 2x"alt="Switch Game Play">
			    		<figcaption>Game Play</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/switch/switch2.jpg' srcset="img/projects/switch/switch2@2x.jpg 2x"alt="Switch Game Play">
			    		<figcaption>Game Play</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/switch/switch3.jpg' srcset="img/projects/switch/switch3@2x.jpg 2x"alt="Switch Game Play">
			    		<figcaption>Game Play</figcaption>
			    	</figure>
			    </div>
		    </article>
	    </section><!-- computing -->
	    <hr>
	    <section id="graphics">
	    	<h2>Graphics</h2>

	    	<p>I have gained experience in web graphics by doing front-end web design and taking templates/ mock-ups from paper to mark-up.</p>
	    	<p>At A-Level I took Graphic Communication and received an A*, this section showcases the main projects and their outcomes.</p> 
			<p>The graphics seen here have been designed by hand and then edited on the computer using an Adobe package.</p>

			<article class="project">
				<!-- Alfresco -->
		     	<h3>Alfresco</h3>
		     	<div class="project_text">
		     		<p>This project required me to channel my own interpretation of Alfresco into some kind of outcome. I decided to create a brand that targeted local communities, using their tourist attractions as the art. My local college was based in Twickenham so I used that as a foundation and inspiration for my outcomes.</p>
		        	<p>During the opening stages of the project I considered a number of different possible outcomes, finially deciding to create a series of watercolour art inspired by vintage National Rail posters such as <a class="link" href="http://enthralledbybeauty.files.wordpress.com/2010/07/railway-posters1.jpg" target="_blank">these</a>.</p>
		        	<p>The outcomes were first sketched on site, and then enhanced using black-line ink and computer editing.</p>
	        	</div>

	         	<div class="two_col_img">
			    	<figure>
			    		<img src='img/projects/alfresco/Logo.jpg' srcset="img/projects/alfresco/Logo@2x.jpg 2x"alt="Alfresco Logo">
			    		<figcaption>Logo</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/alfresco/Finals.jpg' srcset="img/projects/alfresco/Finals@2x.jpg 2x"alt="Final Outcomes">
			    		<figcaption>Outcomes</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/alfresco/InkFlowers.jpg' srcset="img/projects/alfresco/InkFlowers@2x.jpg 2x"alt="Ink Flowers">
			    		<figcaption>Ink Flowers</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/alfresco/PosterFlowers.jpg' srcset="img/projects/alfresco/PosterFlowers@2x.jpg 2x"alt="Flowers Poster">
			    		<figcaption>Flowers Poster</figcaption>
			    	</figure>
			    </div>
		    </article>

		    <article class="project">
			    <!-- Snowboards -->
		     	<h3>Snowboards</h3>
		     	<div class="project_text">
		     		<p>This project focused on me creating my own snowboard brand and board designs. I decided to create a brand that focused on high-end artistic designs allowing people to choose more "personal" boards.</p>
		        	<p>I went with the brand name "Atlas" inspired by <a class="link" href="http://en.wikipedia.org/wiki/Mount_Atlas" target="_blank">Mount Atlas</a>.</p>
					<p>To create an artistic design for the snowboards I experimented with patterns. I was inspired by a tiger pattern and tried to replicate it using lino printing, and then edited the prints on the computer.</p>
		        	<p>To make the designs come to life I created 3 plastic boards from acrylic and printed each design, sticking them onto separate boards.</p>
				</div>

	         	<div class="two_col_img">
			    	<figure>
			    		<img src='img/projects/atlas/Logo.jpg' srcset="img/projects/atlas/Logo@2x.jpg 2x"alt="Atlas Logo">
			    		<figcaption>Logo</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/atlas/Finals.jpg' srcset="img/projects/atlas/Finals@2x.jpg 2x"alt="Final Outcomes">
			    		<figcaption>Outcomes</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/atlas/Boards.jpg' srcset="img/projects/atlas/Boards@2x.jpg 2x"alt="Boards">
			    		<figcaption>Boards</figcaption>
			    	</figure>
			    	<figure>
			    		<img src='img/projects/atlas/HandBoards.jpg' srcset="img/projects/atlas/HandBoards@2x.jpg 2x"alt="Hand Made Boards">
			    		<figcaption>Hand Made Boards</figcaption>
			    	</figure>
			    </div>
		    </article>

	    </section><!-- graphics -->
	    <hr>
	    <section id="art">
	    	<h2>Art</h2>

	    	<p>One of my hobbies is drawing and painting, here is a selection of my favourites.</p>
	    	<div id="art-wrapper">
	    		<?php printArt(); ?>
	    	</div>
	    </section><!-- #art -->
    </main>

    <footer><hr>Copyright &copy; <?=date("Y")?> <span style="color:#333;">Tom Wilkins</span></footer>

    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-44076979-2', 'tom-wilkins.co.uk');
	  ga('send', 'pageview');

	</script>
</body>
</html>