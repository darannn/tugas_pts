<table border="1px" class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddKelas'); ?>" class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>ID Kelas</th>
		<th>Nama Kelas</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataKelas))
	{
		foreach($DataKelas as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->id_kelas; ?></td>
		<td><?php echo $ReadDS->nama_kelas; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataKelas/'.$ReadDS->id_kelas.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataKelas/'.$ReadDS->id_kelas) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
