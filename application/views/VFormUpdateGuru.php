<form action="<?php echo site_url('Welcome/UpdateDataGuru'); ?>" method="post">
<table>
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td>
			<input type="text" name="nip" class="form-control" value="<?php echo $detail['nip']; ?>">
		</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
			<input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>">
		</td>
	</tr>
	<tr>
		<td>No. Hp</td>
		<td>:</td>
		<td>
			<input type="text" name="no_hp" class="form-control" value="<?php echo $detail['no_hp']; ?>">
		</td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td>:</td>
		<td>
			<input type="text" name="email" class="form-control" value="<?php echo $detail['email']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary">
		</td>
	</tr>
</table>
</form>
