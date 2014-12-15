<?php
/**
 * Created by PhpStorm.
 * User: tomwilkins
 * Date: 22/06/2014
 * Time: 14:34
 */

include_once ('includes/layout/page.php');

$page = new Page();
$page->setTitle("Sheep Jump!");
$page->setRoot("");
$page->setDescription("Tom Wilkins - A game called sheep jump, created in JavaScript");
$page->setMainPage(false);
$html='<div class="jumbotron">
			<article>
				<h1>Sheep Jump!</h1>
				<div class="row">
					<div class="col-md-6 col-sm-6">
                         <canvas id="c"></canvas>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3>Controls</h3>
                        <p>Move left and right using the arrow keys, or "a" and "d" keys,
                        or you can use the mouse!</p>
                        <br>
                        <h3>Making</h3>
                        <p>This simple game has been made using HTML5 Canvas and JavaScript.
                        I followed this tutorial: <a href="http://michalbe.blogspot.co.uk/2010/09/simple-game-with-html5-canvas-part-1.html">http://michalbe.blogspot.co.uk/2010/09/simple-game-with-html5-canvas-part-1.html</a>.</p>
                    </div>
            </article>
        </div>';

$page->addFooterJS("js/sheepjump.js");
$page->setBody($html);
$page->printPage();

?>