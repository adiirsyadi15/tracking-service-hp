
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Tambah Data Customer</h3>
					</div>
					<div class="panel-body">
						<form action="" method="post" name="update_hp">
							<!-- query SELECT UNTUK form -->
							<div class="form-group">
								<label >IMEI<span class="penting">*</span></label>
								
								<select name="id_hp" class="form-control">

									<option>pilih nomor imei</option>
									<?php
										$queryhp = "select * from hp";
										$result = mysql_query($queryhp);
										while($row = mysql_fetch_array($result)){
									?>
									<option value="<?php echo $row['imei']?>"><?php echo $row['imei']?></option>
									<?php
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<label >Nama <span class="penting">*</span></label>
								<input type="text" class="form-control" name="nama_customer" placeholder="Masukkan Nama">
							</div>
							<div class="form-group">
								<label >Nomor HP <span class="penting">*</span></label>
								<input type="text" class="form-control" name="nomor_hp" placeholder="Masukkan Nomor HP">
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
		//echo $query;
		$query = "INSERT INTO `customer` (`id_customer`, `id_hp`, `nama_customer`, `nomor_hp`) VALUES ('0','".$_POST['id_hp']."', '".$_POST['nama_customer']."', '".$_POST['nomor_hp']."')";
		$hasil = mysql_query($query) or die (mysql_error());
		
?>
<script>
alert("data sukses ditambah");
window.location='?mlebu=tbcus';
</script>

<?php
	}
?>