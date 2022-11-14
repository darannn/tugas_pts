<table border="1px" class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddJadwal'); ?>" class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>ID Jadwal</th>
		<th>Nama Kelas</th>
		<th>Nama Matpel</th>
		<th>Nama Guru</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataJadwal))
	{
		foreach($DataJadwal as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->id_jadwal; ?></td>
		<td><?php echo $ReadDS->nama_kelas; ?></td>
		<td><?php echo $ReadDS->nama_matpel; ?></td>
		<td><?php echo $ReadDS->nama; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataJadwal/'.$ReadDS->id_jadwal.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataJadwal/'.$ReadDS->id_jadwal) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
