<form action="<?php echo site_url('Welcome/UpdateDataKontak'); ?>" method="post">
<table>
	<tr>
		<td>Nama Kontak</td>
		<td>:</td>
		<td><input type="hidden" name="id_kontak" value="<?php echo $detail['id_kontak']; ?>" class="form-control" >
			<input type="text" name="nama_kontak" value="<?php echo $detail['nama_kontak']; ?>" class="form-control">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary">
		</td>
	</tr>
</table>
</form>
