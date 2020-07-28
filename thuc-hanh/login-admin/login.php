<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login admin</title>
	<style type="text/css">
		.login{
			height: 180px;
			width: 230px;
			margin: 0px;
			padding: 10px;
			border: 1px #ccc solid;
		}
		.login input{
			padding: 5px;
			margin: 5px;
		}
	</style>
</head>
<body>
	<?php 
	   if ($_SERVER["REQUEST_METHOD"] == "GET") {
	   	  $username = $_GET["username"];
	   	  $password = $_GET["password"];

	   	  if($username == 'admin' && $password == 'admin'){
	   	  	echo "<h2>welcome <span style='color:red;'>" .$username. "</span>to website</h2>";
	   	  }else{
	   	  	echo "login error";
	   	  }
	   }

	 ?>
	<form action="" method="get">
		<div class="login">
			<h1>Login admin</h1>
			<input type="text" name="username" placeholder="username" autocomplete="off">
			<input type="password" name="password" placeholder="password" autocomplete="off">
			<input type="submit" value="Sign in">

		</div>
	</form>
	
</body>
</html>