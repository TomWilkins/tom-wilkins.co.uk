<?php

function getTopHTML($title, $rootURL){
	$html = '<!DOCTYPE html>
					<html>
					    <head>
					        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
					        <!-- <link rel="stylesheet" href="'.$rootURL.'css/style.css" type="text/css" /> -->
					        <link rel="stylesheet/less" type="text/css" href="'.$rootURL.'css/styles.less" />
					        <script src="'.$rootURL.'scripts/less.js" type="text/javascript"></script>
					        <link href="'.$rootURL.'css/lightbox.css" rel="stylesheet" />
					        
							<meta name="viewport" content="width=device-width, initial-scale=1.0">
					        <title>'.$title.'</title>
					        <script src="'.$rootURL.'scripts/jquery-1.10.2.min.js"></script>
							<script src="'.$rootURL.'scripts/lightbox-2.6.min.js"></script>
							
					        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
					        <script src="'.$rootURL.'scripts/jquery.scrollNav.min.js"></script>
					  
							<script>
								$(document).ready(function(e) {

									$(".artwork").hide();
									$(".showHide").click(function(){
										  $(".artwork").toggle(1500);

										  if ( $(".showHide").text() == "Show Artwork!"){
										  	$(".showHide").text("Hide Artwork!");
										  }else{
										  	$(".showHide").text("Show Artwork!");
										  }
										  
									});

								  	$(".sliderUEABC1").hide();
								  	$(".sliderUEABC2").hide();
								  	$(".sliderFestival").hide();

								  	$(".sliderAlfresco").hide();
								  	$(".sliderSnowboards").hide();
								  	$(".sliderFoodFestival").hide();


								    $(".UEABC1").click(function() {
								    	$(".sliderUEABC2").hide(1500);
								    	$(".sliderFestival").hide(1500);

								    	$(".sliderUEABC1").show(1500);

								  	}); 
 									$(".UEABC2").click(function() {

 										$(".sliderUEABC1").hide(1500);
								    	$(".sliderFestival").hide(1500);

								    	$(".sliderUEABC2").show(1500);
								  	}); 
 									$(".Festival").click(function() {

 										$(".sliderUEABC2").hide(1500);
								    	$(".sliderUEABC1").hide(1500);

								    	$(".sliderFestival").show(1500);
								  	}); 

									$(".Alfresco").click(function() {
								    	$(".sliderSnowboards").hide(1500);
								    	$(".sliderFoodFestival").hide(1500);

								    	$(".sliderAlfresco").show(1500);
								  	}); 
 									$(".Snowboards").click(function() {

 										$(".sliderFoodFestival").hide(1500);
								    	$(".sliderAlfresco").hide(1500);

								    	$(".sliderSnowboards").show(1500);
								  	}); 
 									$(".FoodFestival").click(function() {

										$(".sliderSnowboards").hide(1500);
								    	$(".sliderAlfresco").hide(1500);

								    	$(".sliderFoodFestival").show(1500);
								  	}); 
								});
							  	
							</script>
					    </head>
					    <body class="body">';
    echo $html;
}

function getNavBar(){
	$html ='<header>
        	<div class="navBar">
        		<script>
	        		$( document ).ready(function() {
						$(".content").scrollNav({
						    sections: ".pageTitle",
						    fixedMargin: 30,
						    animated: true,
						    showHeadline: false
						});
					
					});
        		</script>
        		<!--
		        <nav><ul>
		        	<li><a href="index.php">Home</a></li>
		      		<li><a href="computing/">Computing</a></li>
		      		<li><a href="artworkBranding/">Artwork/ Branding</a></li>
		      		<li><a href="blog/">Blog</a></li>
		        </ul>
		    	<a href="#" id="pull">Menu</a></nav>
		    	-->
		    </div>
        </header>';
    echo $html;
}

function getFooterHTML(){
	$html='<footer>
            Copyright &copy; 2013 <a style="color:black;">Tom Wilkins </a>
        </footer>
    </body>
</html>';
	echo $html;
}

function getContactForm(){
	$form='<form action="'.mailToMe().'" class="contactForm" method="post">

			<input name="sent" type="hidden" value="sent">

			<input class="name" name="name" type="text" placeholder="What is your name?">
			<input class="email" name="email" type="text" placeholder="Your email address.">
			<textarea class="message" name="message" type="text" placeholder="Write here..."></textarea>
			<button type="submit" class="submit" >Send!</button>
		</form>';
	print $form;
}

function mailToMe(){

	//checks if the user clicked send 
	if($_POST){

		$switch = true;
		$endMessage = "";

		// gets and validates email
		if(isset($_POST['email'])){
			$email = $_POST['email'];
			
			if (!filter_var( $email, FILTER_VALIDATE_EMAIL )){

				$endMessage .= "Invalid Email ";
				$switch = false;
			}
		}else{
			$endMessage .= "Invalid Email";
			$switch = false;
		}

		// checks if name is entered
		if (!isset($_POST['name']))
		{
			$endMessage .= "No name entered ";
		}

		// checks if message is entered
		if (!isset($_POST['message']))
		{
			$endMessage .= "No message entered";
		}

		if ( isset($_POST['name']) && $switch && isset($_POST['message']) )
		  {
	 	  $email = $_POST['email'] ;
		  //remove characters from name
		  $name =htmlspecialchars($_POST['name']);

		  //remove characters from message
		  $message = htmlspecialchars($_POST['message']) ;

		  //checks the length of the name and message to make sure content is added
		  if (strlen($name) > 0 && strlen($message) > 0){

		  	 // send mail 
		  	mail("tomwilkins93@hotmail.co.uk", $name,$message, "From:" . $email);

		  	 echo "<script> $(document).ready(function() { alert('Message successfully sent');}); </script>";
		  	}else if (strlen($name) == 0){
		  		echo "<script> $(document).ready(function() {alert('No name entered.');});  </script>";
		  	}else if(strlen($message) == 0){
		  		echo "<script> $(document).ready(function() {alert('No message entered.');});  </script>";
		  	}else{
		  		echo "<script> $(document).ready(function() {alert('Message failed to send.');});  </script>";
		  	}
		 
		 
		  }
		else
		  {	
		  	echo "<script>$(document).ready(function() { alert('". $endMessage ."');});  </script>";
		  }
	}
}

?>