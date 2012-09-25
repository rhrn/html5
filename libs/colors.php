<?php
//if(defined('STDIN')) 
  //echo("Running from CLI"); 
//else 
  //echo("Not Running from CLI"); 

	$ch = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');

	$i = 1;
	$colors = array();
	foreach ($ch as $c1) {
		$colors[] = '<div id="level'.$i.'" class="level">' . "\n";
		foreach ($ch as $c2 ) {
			foreach ($ch as $c3) {
				$colors[] = "\t" . '<div class="color" data-color="'.$c1.$c2.$c3.'"></div>' . "\n";
				//$colors[] = $c1.$c2.$c3;
			}
		}
		$colors[] = '</div>' . "\n";
		$i++;
	}

	//echo json_encode($colors);
	echo implode($colors);
