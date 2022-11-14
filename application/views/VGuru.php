<table border="1px" class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddGuru'); ?>" class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>NIP</th>
		<th>Nama</th>
		<th>No. Hp</th>
		<th>Email</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataGuru))
	{
		foreach($DataGuru as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->nip; ?></td>
		<td><?php echo $ReadDS->nama; ?></td>
		<td><?php echo $ReadDS->no_hp; ?></td>
		<td><?php echo $ReadDS->email; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataGuru/'.$ReadDS->nip.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataGuru/'.$ReadDS->nip) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
