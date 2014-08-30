<?php
/**
 * Created by PhpStorm.
 * User: tomwilkins
 * Date: 22/06/2014
 * Time: 14:34
 */

include_once ('layout/page.php');
$score =0;
$addingScore = false;

if(isset($_POST['addScore'])){
    //$addingScore = true;
    $name = $_POST['username'];
    $userScore = $_POST['score'];

    $name = strip_tags($name);
    $name = mysqli_real_escape_string($con, $name);

    if (strlen($name) > 0 && strlen($name) < 10){
        $stmt = mysqli_prepare($con, "INSERT INTO SheepJump (Name, Score) VALUES (?, ?)");

        mysqli_stmt_bind_param($stmt, "si", $name, $userScore);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        //mysqli_query($con, "INSERT INTO SheepJump (Name, Score) VALUES ('".$name."', ".$userScore.")");
        echo "<script>alert('Score Added!');location.assign('http://localhost/tom-wilkins/Sheep-Jump.php')</script>";

    }else{
        echo "<script>alert('Invalid username - must be greater than 0 and less than 10 characters');</script>";
        $score =  $userScore;
    }
    unset($_POST['addScore']);
    unset($_POST['username']);
    unset($_POST['score']);
}else{
    $addingScore = false;
}

$sql="select Name, Score from SheepJump order by Score desc limit 10";
$result = mysqli_query($con, $sql);

$page = new Page();
$page->setTitle("Sheep Jump!");
$page->setRoot("");
$page->setDescription("Tom Wilkins - A game called sheep jump, created in JavaScript");
$page->setMainPage(false);

$html='<div class="jumbotron">
			<article>
				<h1>Sheep Jump!</h1>
				<div class="row">
				    <div class="col-md-3 col-sm-3">
                        <h3>Top 10!</h3>';
                        $pos =1;
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            $html.='<br>'.$pos.') '.$row["Name"].' - '.$row["Score"];
                            $pos++;
                        }
                        $html.='</div>
					<div class="col-md-6 col-sm-6">
                         <canvas id="c"></canvas>
                         <form role="form" action="" id="highscoreForm" method="post">
                             <input type="text" id="name" name="username" placeholder="Enter name">
                             Score: <span id="score">'.$score.'</span>
                             <input type="hidden" name="score" id="scoretwo" value="">
                             <input type="hidden" name="addScore" value="true">
                             <button type="submit" class="btn btn-default">Submit</button>
                         </form>
                    </div>

                    <div class="col-md-3 col-sm-3">
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
if (!$addingScore){
    $page->addFooterJS("js/hideForm.js");
}
$page->setBody($html);
$page->printPage();

?>