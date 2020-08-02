<?php 
if(isset($message)){
	echo "<p class='alert-info'>$message</p>";
	
}
?>
<div class="col-12 col-md-12">
	<div class="row">
		<div class="col-12">
			<h1>Thêm mới khách hàng </h1>
		</div>
		<div class="col-12">
			<form method="post"> 
				<div class="form-group">
					<label>Tên khách hàng </label>
					<input type="text" name="name" class="form-control" placeholder="Nhập tên " required="" autocomplete="off">				
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-group" placeholder="Nhập email" required="" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Địa chỉ</label>
					<input type="text" name="address" class="form-group" placeholder="Nhập địa chỉ" required="" autocomplete="off">
				</div>
				<button type="submit" class="btn btn-primary">Thêm mới </button>
				<button class="btn btn-secondary" onclick="window.history.go(-1);return false;">Hủy</button>
			</form>
		</div>
	</div>
</div>
