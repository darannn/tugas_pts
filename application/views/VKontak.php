<table border="1px" class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddKontak'); ?>" class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>ID Kontak</th>
		<th>Nama Kontak</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataKontak))
	{
		foreach($DataKontak as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->id_kontak; ?></td>
		<td><?php echo $ReadDS->nama_kontak; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataKontak/'.$ReadDS->id_kontak.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataKontak/'.$ReadDS->id_kontak) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
