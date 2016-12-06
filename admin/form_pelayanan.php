<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
					<div class="panel-heading">
						
						<h3 class="panel-title">Tambah Data Pelayanan</h3>
						
					</div>
					<div class="panel-body">
						<form action="" method="post" name="tambahadmin">
							<div class="form-group">
								<label >Tanggal Masuk<span class="penting">*</span></label>
								<input type="date" class="form-control" placeholder="Masukkan User Name" name="tanggal_masuk">
							</div>
							<div class="form-group">
								<label >Tanggal Selesai<span class="penting">*</span></label>
								<input type="date" class="form-control" placeholder="Masukkan User Name" name="tanggal_selesai">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Customer Service <span class="penting">*</span></label>
								<select name="id_cs" class="form-control">

									<option>pilih CS</option>
									<?php
										$querycs = "select * from customer_service";
										$result = mysql_query($querycs);
										while($row = mysql_fetch_array($result)){
									?>
									<option value="<?php echo $row['id_cs']?>"><?php echo $row['nama_cs']?></option>
									<?php
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<label >Teknisi<span class="penting">*</span></label>
								<select name="id_teknisi" class="form-control">
									
									<option>pilih Teknisi</option>
									<?php
										$querytk = "select * from teknisi";
										$result = mysql_query($querytk);
										while($row = mysql_fetch_array($result)){
									?>
									<option value="<?php echo $row['id_teknisi']?>"><?php echo $row['nama_teknisi']?></option>
									<?php
										}
									?>
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
		$query = "INSERT INTO `pelayanan` (`id_pelayanan`, `tanggal_masuk`, `tanggal_selesai`, `id_cs`, `id_teknisi`) VALUES ('0', '".$_POST['tanggal_masuk']."', '".$_POST['tanggal_selesai']."', '".$_POST['id_cs']."', '".$_POST['id_teknisi']."')";
		//echo $query;
		$hasil = mysql_query($query) or die (mysql_error());
		
?>
<script>
alert("data sukses ditambahkan");
window.location='?mlebu=tbply';</script>

<?php
	}
?>