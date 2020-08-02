<h1>Bạn có chắc chắn muốn xóa khách hàng này ?</h1>
<h3><?= $customer->name; ?></h3>
<form action="./index.php?page=delete" method="post">
	<input type="hidden"  name="id" value="<?=$customer->id;?>">
	<div class="form-group">
		<input type="submit" value="Delete" class="btn btn-danger">
		<a href="index.php" class="btn btn-default">Cancel</a>
	</div>
</form>