<form action="<?php echo site_url('Welcome/UpdateDataKelas'); ?>" method="post">
<table>
	<tr>
		<td>ID Kelas</td>
		<td>:</td>
		<td>
			<input type="text" name="id_kelas" class="form-control" value="<?php echo $detail['id_kelas']; ?>">
		</td>
	</tr>
	<tr>
		<td>Nama Kelas</td>
		<td>:</td>
		<td>
			<input type="text" name="nama_kelas" class="form-control" value="<?php echo $detail['nama_kelas']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary">
		</td>
	</tr>
</table>
</form>
