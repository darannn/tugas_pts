
<form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
<input type="hidden" name="nis" class="form-control" value="<?php echo $detail['nis']; ?>"><br>
NAMA<input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>"><br>
Alamat<input type="text" name="alamat" class="form-control" value="<?php echo $detail['alamat']; ?>"><br>
		
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary">
</form>
