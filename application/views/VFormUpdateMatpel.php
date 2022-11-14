<form action="<?php echo site_url('Welcome/UpdateDataMatpel'); ?>" method="post">
<table>
	<tr>
		<td>Nama Matpel</td>
		<td>:</td>
		<td><input type="hidden" name="id_matpel" class="form-control" value="<?php echo $detail['id_matpel']; ?>">
			<input type="text" name="nama_matpel" class="form-control" value="<?php echo $detail['nama_matpel']; ?>">
		</td>
	</tr>
	<tr>
		<td>KKM</td>
		<td>:</td>
		<td>
			<input type="text" name="kkm" class="form-control" value="<?php echo $detail['kkm']; ?>">
		</td>
	</tr>
		<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary">
		</td>
	</tr>
</table>
</form>
