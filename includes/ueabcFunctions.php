<?php
    function ueabcTitle($url, $title){
        $htmlTitle=('<!DOCTYPE html>
<html>
<head>
	<title>
		'.$title.'
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="title" content="'.$title.'" />
	<meta name="description" content="The UEA Boat Club is a competitive rowing club in Norwich that caters for students of the University of East Anglia. We are a competitive club, training and racing throughout the year at events across the UK. " />
	<meta name="keywords" content="Rowing, Sculling, Boathouse, Norwich, University of East Anglea, UEA, UEABC" />
	<link rel="stylesheet" href="'.$url.'css/ueabc.css">
        <link rel="image_src" href="FacebookShareImage" />
        <link rel="stylesheet" href="'.$url.'lightbox/css/lightbox.css" type="text/css" media="screen" />
	<link href=\'http://fonts.googleapis.com/css?family=PT+Sans:400,700\' rel=\'stylesheet\' type=\'text/css\'>
        <script src="'.$url.'lightbox/js/jquery-1.7.2.min.js"></script>
        <script src="'.$url.'lightbox/js/lightbox.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $(\'#pull\');
				menu 		= $(\'nav ul\');
				menuHeight	= menu.height();

			$(pull).on(\'click\', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(\':hidden\')) {
        			menu.removeAttr(\'style\');
        		}
    		});
		});
	</script>
</head>
<body>
    
    <div id="wrapper">
        <div id="share">
            last updated: 18/06/2013
        </div>');
        
       return $htmlTitle; 
    }
     
    function ueabcNavbar($url){
        $nav = ('
        <div id="navindex">
	<nav class="clearfix">
		<ul class="clearfix">
			<li><a href="/" title="Home">Home</a></li>
			<li><a title="About us">About us</a>
                            <ul>
                               <li><a href="/about-us/" title="About UEABC">About UEABC</a></li>
                                    <li><a href="/about-us/Rowing" title="About Rowing">About Rowing</a></li>
                                    <li><a href="/about-us/where-we-row" title="Where We Row">Where We Row</a></li>
                                    <li><a href="/about-us/donations" title="Donations">Donations</a></li>
                                    <li><a href="/about-us/The-Team/" title="The Team">The Team ></a>
                                    <ul>
                                        <li><a href="/about-us/The-Team/womens-squad" title="Womens Squad">Womens Squad</a></li>
                                        <li><a href="/about-us/The-Team/mens-squad" title="Mens Squad">Mens Squad</a></li>
                                        <li><a href="/about-us/The-Team/coxes" title="Coxes">Coxes</a></li>
                                        <li><a href="/about-us/The-Team/coaches" title="Coaches">Coaches</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
			<li><a title="Training">Training</a>
				<ul>
                                    <li><a href="/Training/" title="Boathouse">Boathouse</a></li>
                                    <li><a href="/Training/boats" title="Boats">Boats</a></li>
                                    <li><a href="/Training/land-training" title="Land Training">Land Training</a></li>
                                    <li><a href="/Training/learn-to-row" title="Learn to Row">Learn to Row</a></li>
                                    <li><a href="/Training/trainingcamp" title="Training Camp">Training Camp</a></li>
                                </ul>
                            </li>
			<li><a title="Results">Results</a>
				<ul>
                                    <li><a href="/Results/2012-13" title="Results 2012/13">Results 2012/13</a></li>
                                    <li><a href="/Results/2011-12" title="Results 2011/12">Results 2011/12</a></li>
                                    <li><a href="/Results/2010-11" title="Results 2010/11">Results 2010/11</a></li>
				</ul>
                            </li>
			<li><a title="Media">Media</a>
                                <ul>
                                    <li><a href="/Media/" title="News">News</a></li>
                                    <li><a href="/Media/videos" title="Videos">Videos</a></li>
                                    <li><a href="/Media/photos/index" title="Photos">Photos ></a>
                                    <ul>
                                        <li><a href="/Media/photos/races" title="Races">Races</a></li>
                                        <li><a href="/Media/photos/training" title="Training">Training</a></li>
                                        <li><a href="/Media/photos/socialEvents" title="Social Events">Social Events</a></li>
                                    </ul>
                                    </li>
				</ul>
                            </li>
                            <li><a href="/Members/" title="Members">Members</a></li>
                            <li><a href="/Contacts" title="Contacts">Contacts</a></li>
		</ul>
		<a href="#" id="pull">Menu
                    <img id="logo2" src="'.$url.'images/UEABC-Logo.png" alt="UEABC Logo" />
                </a>
	</nav>
        </div>
        <div id="page">
            <a id="banner" href="/" title="Home"><img src="'.$url.'images/banner.png" alt="UEA Boat Club" /></a>
            <div id="photo">
                <img id="main" src="'.$url.'images/photo4.png" alt="Men Rowing" />
                <img id="logo" src="'.$url.'images/UEABC-Logo.png" alt="UEABC Logo" />
            </div>');
        return $nav;
    }

    function ueabcShareFooter($url){
        
        $foot=('</div>
         <div id="share2">
            <a rel="nofollow" href="https://www.facebook.com/UEABC" title="Click to view us on Facebook" target="_blank"><img class="png" src="'.$url.'images/facebook-share.png" alt="Share on Facebook" /></a>
            <a href="https://twitter.com/ueabc" title="Follow Us On Twitter!" target="_blank"><img class="png" src="'.$url.'images/twitter-share.png" alt="Share on Twitter" /></a>
            <a style="top:-4px; left: 17px;" href="https://www.youtube.com/user/UEABC" title="Click to view our youtube channel!" target="_blank"><img style="width:41px; height:41px;" class="png" src="'.$url.'images/youtube-share.png" alt="Watch on youtube" /></a>
            <a href="/sitemap" title="Site Map">Site Map</a>
            <div id="text">Website Enquires: tomwilkins93@hotmail.co.uk</div>
            <div id="smallText">last updated: 18/06/2013<br/>
            <a href="mailto:tomwilkins93@hotmail.co.uk" title="email">Website Enquires: tomwilkins93@hotmail.co.uk</a>
            </div>
        </div>
        
    </div>
</body>
</html>');
        return $foot;
    }
    function addNewUser($uername, $password){
        include("DBaccess.php");
        $password = md5($password);
        
        mysql_query("INSERT INTO member (username, userpassword, userType) VALUES ('".$uername."', '".$password."', 'rower')");
                          
    }
    function validUser($username, $password){
        
        //include("../DBaccess.php");
        $dbusername = 'adminTW'; // Your MySQL Username
        $dbpassword = 'ueabc@08'; // Your MySQL Password
        $name = 'ueabcDB'; // Your MySQL Database
        $host = '213.171.200.56'; // MySQL Host (Remote or Local)

        $stepone = mysql_connect($host, $dbusername, $dbpassword);
        $connect = mysql_select_db($name, $stepone);
        if (!$connect) {
            die('Could not connect: ' . mysql_error());
        }

        $valid = false;
        
        $password = md5($password);
        
        $sql = mysql_query("SELECT * FROM `member` WHERE '".$username."' = `username` AND '".$password."' = `userpassword`") or die("MySQL Error - Failed to Select users");
        
        while ($results = mysql_fetch_array($sql)){
            $_SESSION['username'] = $username;
            $_SESSION['userType'] = $results['userType'];
            $valid = true;
        }
        if (!$valid){
            return false;
        }else if($valid){
            return true;
        }
    }
    function input(){
         $email = null;
         $email = $_POST['email'];
         $inDB = false;
         $result = filter_var( $email, FILTER_VALIDATE_EMAIL );
         
         if ($email != null && $result){   
            
              $sql = mysql_query("SELECT * FROM `allumini` WHERE `email` = '".$email."'") or die("MySQL Error - Failed to Select allumini");
         
         while ($results = mysql_fetch_array($sql)){
             $inDB = true;
         }
         
         if ($inDB){
             echo "<script type='text/javascript'>\n";
             echo "alert('Your email is already in the system!');\n";
             echo "</script>";
         }else if($email != null){
             mysql_query("INSERT INTO allumini (email) VALUES ('".$email."')") or die("MySQL Error - Failed to insert allumini");
             echo "<script type='text/javascript'>\n";
             echo "alert('Your email has been added!');\n";
             echo "</script>";
             
         }
         }else if($email != null && !$result){
             echo "<script type='text/javascript'>\n";
             echo "alert('Email is invalid!');\n";
             echo "</script>";
         }
    }    
    function ueabcAllumini(){
            echo "<div id=\"email\"><form action=\"".input()."\" method=\"post\">Enter your email for news and event updates!  <input type=\"text\" name=\"email\" placeholder=\"signup@email.com\"> <button type=\"submit\" value=\"Submit\">Enter</button> </form></div>";
    }
?>
