<?php

	
	/* ------------------------------
	--------- ERROR PAGE /error.php --
	------------------------------ */

	$rootURL = "";
	require_once('common.php');

	getTopHTML('', $rootURL);
?>

<div class ="content">

	<article class="skills">
		<a class="title">Error</a>
		<br><br>
		<p>An error has occured, click <a class="important" href="/">here</a> to go to the home page. 
	</article>

</div>


<?php
	getFooterHTML();
?>