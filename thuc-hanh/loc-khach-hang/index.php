<?php
$customer_list = array(
	"1"=> array("name"=>"mai van hoang","day_of_birth"=>"1983/08/20","address"=>"ha noi","profile"=>"../../image/anh1.jpeg"),
	"2"=> array("name"=>"Nguyen Van Nam","day_of_birth"=>"1983/08/21","address"=>"Bac giang","profile"=>"../../image/anh2.jpeg"),
	"3"=> array("name"=>"Nguyen Thai Hoa","day_of_birth"=>"1983/08/22","address"=>"Nam Dinh","profile"=>"../../image/anh3.jpeg"),
	"4"=> array("name"=>"Tran Dang Khoa","day_of_birth"=>"1983/08/17","address"=>"Ha Tay","profile"=>"../../image/anh4.jpeg"),
	"5"=> array("name"=>"Nguyen Dinh Thi","day_of_birth"=>"1983/08/19","address"=>"Ha Noi","profile"=>"../../image/anh5.jpeg")
);
function searchByDate($customers,$from_date,$to_date){
	if(empty($from_date) && empty($to_date)){
		return $customers;
	}
	$filtered_customerd=[];
	foreach ($customers as $customer) {
		if(!empty($from_date) && (strtotime($customer['day_of_birth'])) < (strtotime($from_date)))
			continue;
		if(!empty($to_date) && (strtotime($customer['day_of_birth'])) > (strtotime($to_date)))
			continue;
		$filtered_customerd[] = $customer;
	}
	return $filtered_customerd;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
		$from_date = NULL;
		$to_date = NULL;
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$from_date = $_POST['from'];
			$to_date = $_POST['to'];
		}
		$filtered_customers = searchByDate($customer_list,$from_date,$to_date);

		?>
		<form action="" method="post">
			Từ : <input type="text" id="from" name="from" placeholder="yyyy/mm/dd"
			value="<?php echo isset($from_date)?$from_date:'' ?>">
			Đến: <input type="text" id="to" name="to" placeholder="yyyy/mm/dd"
			value="<?php echo isset($to_date)?$to_date:'' ?>">
			<input type="submit" id="submit" value="Lọc">
		</form>
		<table border="0">
			<caption><h2>Danh sách khách hàng</h2></caption>
			<tr>
				<th>STT</th>
				<th>Ten</th>
				<th>Ngay sinh</th>
				<th>Dia chi</th>
				<th>Anh</th>
			</tr>
			<?php foreach ($filtered_customers as $index => $customer): ?>
			<tr>
				<td><?=$index + 1?></td>
				<td><?=$customer['name']?></td>
				<td><?=$customer['day_of_birth']?></td>
				<td><?=$customer['address']?></td>
				<td><div class="profile"><img src="<?=$customer['profile']?>" alt=""></div></td>
			</tr>
			<?php endforeach; ?>
		
		</table>
	</body>
</html>


