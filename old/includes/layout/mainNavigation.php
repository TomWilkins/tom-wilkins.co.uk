<?php
class MainNav{
	
	private $navCode;
	private $mainPage = true;

	public function MainNav(){
		$this->navCode = $this->getCode();
		$mainPage = true;
	}

    public function getCode(){

		$html ='<div class="header">
					<div class="container">
						<nav class="navbar navbar-inverse" role="navigation">
				        	<div class="navbar-header">
					            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
						            <span class="sr-only">Toggle navigation</span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
					            </button>
					            <a class="navbar-brand scroll-top">TW.</a>
				        	</div>
				        	<!--/.navbar-header-->
					        <div id="main-nav" class="collapse navbar-collapse">
					            <ul class="nav navbar-nav">';
					            if ($this->mainPage){
						            $html.='<li><a href="#" class="scroll-link" data-id="About">About</a></li>
									<li><a href="#" class="scroll-link" data-id="Computing">Computing</a></li>
									<li><a href="#" class="scroll-link" data-id="Projects">Projects</a></li>
									<li><a href="#" class="scroll-link" data-id="Branding">Branding</a></li>
									<li><a href="#" class="scroll-link" data-id="Artwork">Artwork</a></li>';
								}else{
									 $html.='<li><a href="http://localhost/tom-wilkins/">Home</a></li>';
								}
					            $html.='</ul>
					        </div>
					        <!--/.navbar-collapse-->
					    </nav>
					    <!--/.navbar-->
					</div>
					<!--/.container-->
				</div>
				<!--/.header-->';
		return $html;
	}

	public function setMainPage($t){
		$this->mainPage = $t;
		$this->navCode = $this->getCode();
	}

	public function printMainNav(){
		echo $this->navCode;
	}
}
?>

