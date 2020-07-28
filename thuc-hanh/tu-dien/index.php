<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Document</title>
</head>
<body>
	
	<form action="" method="post">
		<h1>Ứng dụng từ điển </h1>
		<input type="text" name="search" placeholder="enter word">
		<input type="submit">
	</form>
	<?php


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$searchWord= $_POST["search"];
		

		$listWord = array("apple"=>"quả táo",
			"book"=>"sách",
			"hello"=>"xin chào");

		$flag=0;
		foreach ($listWord as $word => $dictionary) {
			if($word == $searchWord){
				 echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $dictionary ;
				 	$flag=1;
			}
		
		}
		if($flag==0){
			echo "Not word exist !!";
		}
	}
	?>
</body>
</html>