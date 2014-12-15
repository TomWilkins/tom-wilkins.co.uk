<?php 


function printLanguages(){
	
	$languageMap = array('PHP' => 5,
						 'JavaScript' => 4, 
						 'jQuery' => 4,
						 'Java' => 5,
						 'CSS' => 5,
						 'C' => 1,
						 'C++' => 3,
						 'C#' => 3,
						 'Python' => 2,
						 'SQL' => 4,
						 'noSQL' => 3,
						 'HTML' => 5,
						 'Object-C' => 2,
						 'Shell' => 2,
						 'MATLAB' => 2,
						 'Visual Basic' => 2);

 	$html='';

 	arsort($languageMap);
 	foreach($languageMap as $lang => $value){
 		$html .= '<tr><td>'.$lang.'</td><td class="val'.$value.'"></td></tr>';
 	}

 	print '<table id="languageMap">' . $html . '</table>';
}

function printArt(){
	$art = ['norwich_church', 'richmond_park', 'ueabc_rowing', 'norfolk_broads','tower_bridge', 'sardinia_beach_1', 'sardinia_beach_2'];

	$html='';
	foreach($art as $image){
		$html.="<figure class='art-image'>
		    		<img src='img/art/". $image .".jpg' srcset='img/art/". $image ."@2x.jpg 2x' alt='".str_replace("_", " ", $image)."'>
		    		<figcaption>".str_replace("_", " ", $image)."</figcaption>
		    	</figure>";
	}

	print $html;
}

?>