<?php
class Footer{
	private $footer;
	private $rootRelHref;
	private $JS;

	public function Footer(){
		
	}

	public function generateFooter(){
		$this->footer = $this->getFooter();
	}

	/*

	<li class="share"><a class="facebook" href="https://www.facebook.com/UEABC" title="Click to view us on Facebook" target="_blank"><img src="'.$this->rootRelHref.'images/share/facebook2.png" alt="Share on Facebook" /></a><div class="borderLeft"></div></li>
	<li class="share"><a href="https://twitter.com/ueabc" title="Follow Us On Twitter!" target="_blank"><img class="twitter" src="'.$this->rootRelHref.'images/share/twitter2.png" alt="Share on Twitter" /></a></li>
	<li class="share"><a href="https://www.youtube.com/user/UEABC" title="Click to view our youtube channel!" target="_blank"><img class="youtube" src="'.$this->rootRelHref.'images/share/you_tube2.png" alt="Watch on youtube" /></a></li>
	<li><a href="/sitemap.php" title="site map">site map</a></li>
	<li><a>last updated: 18/06/2013</a></li>
	*/
	public function getFooter(){
		$foot = '<footer class="mainFooter">Copyright &copy; 2014 <a style="color:#333;">Tom Wilkins </a>
				</footer>

				<script src="http://code.jquery.com/jquery.js"></script>

    			<script src="'.$this->rootRelHref.'js/bootstrap.js"></script>
    			<script type="text/javascript">
					$(document).ready(function() {
						// navigation click actions	
						$(\'.scroll-link\').on(\'click\', function(event){
							event.preventDefault();
							var sectionID = $(this).attr("data-id");
							scrollToID(\'#\' + sectionID, 750);
						});
						// scroll to top action
						$(\'.scroll-top\').on(\'click\', function(event) {
							event.preventDefault();
							$(\'html, body\').animate({scrollTop:0}, \'slow\'); 		
						});
						// mobile nav toggle
						$(\'#nav-toggle\').on(\'click\', function (event) {
							event.preventDefault();
							$(\'#main-nav\').toggleClass("open");
						});
					});
					// scroll function
					function scrollToID(id, speed){
						var offSet = 100;
						var targetOffset = $(id).offset().top - offSet;
						
						var mainNav = $(\'#main-nav\');
						$(\'html,body\').animate({scrollTop:targetOffset}, speed);
						if (mainNav.hasClass("open")) {
							mainNav.css("height", "1px").removeClass("in").addClass("collapse");
							mainNav.removeClass("open");
						}
					}
					if (typeof console === "undefined") {
					    console = {
					        log: function() { }
					    };
					}
					
				</script>' . $this->JS .'
			</body><!-- END OF BODY -->

		</html>';
		return $foot;
	}

	public function getRoot(){
		return $this->rootRelHref;
	}

	public function addFooterJS($js){$this->JS.="<script src='" . $js . "'></script>";}

	public function setRoot($root){
		$this->rootRelHref = $root;
	}
    
	public function printFooter(){
		$this->generateFooter();
		echo $this->footer;
	}
}
?>

