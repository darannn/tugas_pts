<form action="<?php echo site_url('Welcome/UpdateDataProfile'); ?>" method="post">
<table>
	<tr>
		<td>Nama Profile</td>
		<td>:</td>
		<td><input type="hidden" name="id_profile" class="form-control" value="<?php echo $detail['id_profile']; ?>">
			<input type="text" name="nama_profile" class="form-control" value="<?php echo $detail['nama_profile']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary">
		</td>
	</tr>
</table>
</form>
