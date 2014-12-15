<?php
class Head{
	private $topHTML;
	private $title;
	private $js;
	private $css;
	private $bottomHTML;
	private $rootRelHref;
	private $metaDescription;

	public function Head(){
		
	}

	public function generateHead(){
		$this->topHTML = $this->topHead();
		$this->js;
		$this->css;
		$this->bottomHTML = $this->bottomHead();
	}

	public function setMetaDescription($description){
		$this->metaDescription = '<meta name="description" content="'.$description.'">';
	}

    public function topHead(){
		$html ='
		<!DOCTYPE html>
			<html lang="en" manifest="tomwilkins.appcache">
				<head>
					'.$this->metaDescription.'
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
      				<link href="'.$this->rootRelHref.'css/bootstrap.min.css" rel="stylesheet">
      				<link href="'.$this->rootRelHref.'css/bootstrap-social.css" rel="stylesheet">
      				<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      				<link rel="stylesheet/less" type="text/css" href="'.$this->rootRelHref.'css/style.less" /> 
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53a6e1583a9ff2be"></script>
					<script src="'.$this->rootRelHref.'js/less.js" type="text/javascript"></script>
					<script src="'.$this->rootRelHref.'js/snow-storm.js" type="text/javascript"></script>
				';
		return $html;
	}

	public function getRoot(){
		return $this->rootRelHref;
	}

	public function setRoot($root){
		$this->rootRelHref = $root;
	}

	public function setTitle($title){
		$this->title = '<title>Tom Wilkins - ' . $title . '</title>';
	}

	protected function bottomHead(){
		$html = '</head>
				<body data-spy="scroll" data-target=".navbar-collapse" class="body">';
		return $html;
	}

	public function setJS($js){
		$this->js = $js;
	}

	public function setCSS($css){
		$this->css = $css;
	}

	public function printHead(){
		$this->generateHead();
		echo $this->topHTML, $this->title, $this->js, $this->css, $this->bottomHTML;
	}
}
?>

