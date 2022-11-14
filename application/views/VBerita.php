<table border="1px" class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddBerita'); ?>" class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>ID Berita</th>
		<th>Nama Berita</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataBerita))
	{
		foreach($DataBerita as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->id_berita; ?></td>
		<td><?php echo $ReadDS->nama_berita; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataBerita/'.$ReadDS->id_berita.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataBerita/'.$ReadDS->id_berita) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
