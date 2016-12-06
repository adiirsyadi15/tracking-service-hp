
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Tambah Data Customer Service</h3>
					</div>
					<div class="panel-body">
						<form action="" method="post" name="update_hp" enctype="multipart/form-data">
							<!-- query SELECT UNTUK form -->
							<div class="form-group">
								<label >Nama <span class="penting">*</span></label>
								<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
							</div>
							<div class="form-group">
								<label >Password <span class="penting">*</span></label>
								<input type="password" class="form-control" name="password" placeholder="Masukkan Password">
							</div>
							<div class="form-group">
								<label >Alamat <span class="penting">*</span></label>
								<textarea class="form-control" rows="3" name="alamat"></textarea>
							</div>
							<div class="form-group">
								<label >Jenis Kelamin <span class="penting">*</span></label><br/>
								<label  class="radio-inline">
									<input name="jk" type="radio" value="L" checked="checked"/>Laki-laki
								</label>
								<label  class="radio-inline">
									<input name="jk" type="radio" value="P" />Perempuan
								</label>
							</div>
							<div class="form-group">
								<label >Nomor HP <span class="penting">*</span></label>
								<input type="text" class="form-control" name="nomor_hp" placeholder="Masukkan Nomor HP">
							</div>
							<div class="form-group">
								<label >Status<span class="penting">*</span></label>
								<select name="status" class="form-control">
									<option value="aktif">aktif</option>
									<option value="tidak aktif">tidak aktif</option>
								</select>
							</div>
							<div class="form-group">
								<label for="input_foto">File input</label>
								<input type="file" id="input_foto" class="input_foto" name="input_foto">
							  </div>
							<button type="submit" class="btn btn-primary" name="simpan">save</button>
							
						</form>
					</div>	
			</div>
		</div>
	</div>
</div>


<?php
	if(isset($_POST['simpan'])){
		$filefoto = $_FILES['input_foto']['name'];
		$query = "INSERT INTO `customer_service` (`id_cs`, `nama_cs`, password_cs, `alamat`, `jk`, `nomor_hp`, `status`, foto) VALUES ('0', '".$_POST['nama']."', '".$_POST['password']."', '".$_POST['alamat']."', '".$_POST['jk']."', '".$_POST['nomor_hp']."', '".$_POST['status']."', '$filefoto')";
		//echo $query;
		$hasil = mysql_query($query) or die (mysql_error());
		
	move_uploaded_file($_FILES['input_foto']['tmp_name'], "../images/".$_FILES['input_foto']['name']);
		
		
?>
<script>
alert("data sukses ditambahkan");
window.location='?mlebu=tbcs';</script>

<?php
	}
?>