
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Tambah Data Customer Service</h3>
					</div>
					<div class="panel-body">
						<form action="" method="post" name="update_hp">
							<!-- query SELECT UNTUK form -->
							<div class="form-group">
								<label >Nama <span class="penting">*</span></label>
								<input type="text" class="form-control" name="nama_teknisi" placeholder="Masukkan Nama">
							</div>
							<div class="form-group">
								<label >Alamat <span class="penting">*</span></label>
								<textarea class="form-control" rows="3" name="alamat"></textarea>
							</div>
							<div class="form-group">
								<label >Jenis Kelamin <span class="penting">*</span></label><br/>
								<label  class="radio-inline">
									<input name="jk_teknisi" type="radio" value="L" checked="checked"/>Laki-laki
								</label>
								<label  class="radio-inline">
									<input name="jk_teknisi" type="radio" value="P" />Perempuan
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
							<button type="submit" class="btn btn-primary" name="simpan">save</button>
							
					</form>
				</div>	
			</div>
		</div>
	</div>
</div>
<?php
	if(isset($_POST['simpan'])){
		//$query = "INSERT INTO `teknisi` (`id_teknisi`, `nama_teknisi`, `alamat`,jk_teknisi, `nomor_hp`, `status`) VALUES ('0', '".$_POST['nama']."', '".$_POST['alamat']."', '".$_POST['jk_teknisi']."', '".$_POST['nomor_hp']."', '".$_POST['status']."')";
		//echo $query;
		$query = "INSERT INTO `teknisi` (`id_teknisi`, `nama_teknisi`, `alamat`, jk_teknisi, `nomor_hp_teknisi`, `status`) VALUES ('0', '".$_POST['nama_teknisi']."', '".$_POST['alamat']."', '".$_POST['jk_teknisi']."', '".$_POST['nomor_hp']."', '".$_POST['status']."')";
		$hasil = mysql_query($query) or die (mysql_error());
		
?>
<script>
alert("data sukses ditambahkan");
window.location='?mlebu=tbtk';</script>

<?php
	}
?>