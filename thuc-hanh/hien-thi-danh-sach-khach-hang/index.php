<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset="UTF-8">
	<title>Document</title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
		}
		th,td{
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
	</style>
</head>
<body>
	<?php
	$listCustomer = array(
		"1" => array("name"=>"tran ngoc tan",
			"ngaysinh"=>"1998-02-02",
			"diachi"=>"da nang",
			"anh"=>"../../image/anh1.jpeg"),
		"2" => array("name"=>"nguyen my linh",
			"ngaysinh"=>"1999-05-06",
			"diachi"=>"quang nam",
			"anh"=>"../../image/anh2.jpeg"),
		"3" => array("name"=>"Nguyen dinh hoa",
			"ngaysinh"=>"1994-09-04",
			"diachi"=>"quang nam",
			"anh"=>"../../image/anh3.jpeg")
	);
	?>

	<table border="0">
		<caption><h1>Danh sách khách hàng </h1></caption>
		<tr>
			<th>STT</th>
			<th>Tên</th>
			<th>Ngày sinh</th>
			<th>Địa chỉ</th>
			<th>Ảnh</th>
		</tr>
			<?php
	foreach ($listCustomer as $key => $values) {
		echo "<tr>";
		echo "<td>".$key."</td>";
		echo "<td>".$values['name']."</td>";
		echo "<td>".$values['ngaysinh']."</td>";
		echo "<td>".$values['diachi']."</td>";
		echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
	}
	?>

	</table>
</body>
</html>