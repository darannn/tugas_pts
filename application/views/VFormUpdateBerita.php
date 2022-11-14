

<form action="<?php echo site_url('Welcome/UpdateDataBerita'); ?>" method="post">
<table>
	<tr>
	<div class="form-group">
		<td>Nama Berita</td>
		<td>:</td>
		<td><input type="hidden" name="id_berita" class="form-control" value=" <?php echo $detail['id_berita']; ?>">
			<input type="text" name="nama_berita" class="form-control" value="<?php echo $detail['nama_berita']; ?>">
		</td>
	</div>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary">
		</td>
	</tr>
</table>
</form>
