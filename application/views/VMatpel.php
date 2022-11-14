<table border="1px" class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddMatpel'); ?>" class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>ID Matpel</th>
		<th>Nama Matpel</th>
		<th>KKM</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataMatpel))
	{
		foreach($DataMatpel as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->id_matpel; ?></td>
		<td><?php echo $ReadDS->nama_matpel; ?></td>
		<td><?php echo $ReadDS->kkm; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataMatpel/'.$ReadDS->id_matpel.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataMatpel/'.$ReadDS->id_matpel) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
