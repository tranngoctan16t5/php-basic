<?php 
$str = "    TrAn    nGOc   tAN    ";
echo strlen($str) . "<br>"; // dua ve 13 ki tu
$str = strtolower($str);
echo $str . "<br>";
$str = trim($str);
$array = explode(" ",$str);

foreach ($array as $key => $value) {
	if(trim($value) == null) unset($array[$key]);
}

echo "<pre>";
print_r($array);
echo "</pre>";

echo $str = implode(" ",$array);
echo strlen($str);
 ?>