<form action="<?php echo site_url('Welcome/UpdateDataJadwal'); ?>" method="post">
	
	<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Kelas</label>
                    <div class="col-sm-10">
                              <select name="id_kelas" class="form-control">
                                <?php
                                if(!empty($GetKelas))
                                  {
                                    $no=1;
                                    foreach($GetKelas as $GetKelas_read) 
                                  {  
                                ?>
                                 <option value="<?php echo $GetKelas_read->id_kelas; ?>"><?php echo$no; echo ". "; echo $GetKelas_read->nama_kelas; ?></option>
                                 <?php
                                    $no++;}}
                                 ?>
                              </select><br>
                    </div>
                  </div>
				  <br>

	
	<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Matpel</label>
                    <div class="col-sm-10">
                              <select name="id_matpel" class="form-control">
                                <?php
                                if(!empty($GetMatpel))
                                  {
                                    $no=1;
                                    foreach($GetMatpel as $GetMatpel_read) 
                                  {  
                                ?>
                                 <option value="<?php echo $GetMatpel_read->id_matpel; ?>"><?php echo$no; echo ". "; echo $GetMatpel_read->nama_matpel; ?></option>
                                 <?php
                                    $no++;}}
                                 ?>
                              </select><br>
                    </div>
                  </div>
					<br>
	
	<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-10">
                              <select name="nip" class="form-control">
                                <?php
                                if(!empty($GetGuru))
                                  {
                                    $no=1;
                                    foreach($GetGuru as $GetGuru_read) 
                                  {  
                                ?>
                                 <option value="<?php echo $GetGuru_read->nip; ?>"><?php echo$no; echo ". "; echo $GetGuru_read->nama; ?></option>
                                 <?php
                                    $no++;}}
                                 ?>
                              </select><br>
                    </div>
                  </div>
				<br>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary">
		</td>
	</tr>
</table>
</form>
