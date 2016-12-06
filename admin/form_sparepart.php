
<div class="panel panel-default">
				<div class="panel-heading">
					
					<h3 class="panel-title">Tambah Data Sparepart</h3>
					
				</div>
				<div class="panel-body">
					<form action="" method="post" name="tambahadmin">
						<div class="form-group">
							<label >Nama Sparepart<span class="penting">*</span></label>
							<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Seri <span class="penting">*</span></label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Seri dari sparepart" name="seri">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Harga <span class="penting">*</span></label>
							<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Harga" name="harga">
						</div>
						
						<button type="submit" class="btn btn-primary" name="simpan">save</button>
					</form>
				</div>	
		</div>
</div>
<?php
	if(isset($_POST['simpan'])){
		$query = "INSERT INTO `sparepart` (`id_sparepart`, `nama`, `seri`, `harga`) VALUES ('0', '".$_POST['nama']."', '".$_POST['seri']."', '".$_POST['harga']."')";
		//echo $query;
		$hasil = mysql_query($query) or die (mysql_error());
	
?>
<script>
alert("data sukses ditambahkan");
window.location='?mlebu=tbsp';</script>

<?php
	}
?>