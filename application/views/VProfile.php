<table border="1px" class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddProfile'); ?>" class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>ID Profile</th>
		<th>Nama Profile</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataProfile))
	{
		foreach($DataProfile as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->id_profile; ?></td>
		<td><?php echo $ReadDS->nama_profile; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataProfile/'.$ReadDS->id_profile.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataProfile/'.$ReadDS->id_profile) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
