<h2>Danh sách khách hàng </h2>
<a href="./index.php?page=add">Thêm mới </a>
<table class="table">
	<thead>
		<tr>
			<th>STT</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th></th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($customers as $key => $customer): ?>
			<tr>
			<td><?=++$key;?></td>
				<td><?=$customer->name;?></td>
				<td><?=$customer->email;?></td>
				<td><?=$customer->address;?></td>
				<td><a href="./index.php?page=delete&id=<?=$customer->id;?>" class="btn btn-warning btn-sm">Delete</a></td>
				 <td> <a href="./index.php?page=edit&id=<?php echo $customer->id; ?>" class="btn btn-sm">Update</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>