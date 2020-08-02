<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	$arr = [10,19,3,4,5,6,7];

	function searchMin($arrayMin){
		$mang=[];
		$min = $arrayMin[0];
		$dem = count($arrayMin);
		for ($i=0; $i <$dem ; $i++) { 
			if($i<$min){
				$min = $arrayMin[$i];
				$position = $i;
			}
			
		}
			array_push($mang, $min);
			array_push($mang, $position);
		return $mang;
	}
        echo "min la : " . searchMin($arr)[0] . "va vi tri la :" . searchMin($arr)[1] ;
	?>

	
</body>
</html>