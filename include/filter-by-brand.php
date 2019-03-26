<?php

$brandArray = array("marca");
$arrayLength = 0;

foreach ($_SESSION["produtos"] as $item	){
		$validate = 0;
	for($i = 0; $i <= $arrayLength; $i++){ 
		if($brandArray[$i] == $item["marca"]){
			$validate += 1;
			break;
		}
	}
	if($validate == 0){
		echo "<li><a href='?action=".$item["marca"]."'>".$item["marca"]."</a></li>";
		array_push($brandArray, $item["marca"]);
		$arrayLength += 1;
	}
}?>