<div class="panel panel-default">
					<div class="panel-heading">
						
						<h3 class="panel-title">Tambah Data Pelayanan</h3>
						
					</div>
					<div class="panel-body">
						<form action="" method="post" name="tambahadmin">
							<div class="form-group">
							<label >Nama Pelanggan <span class="penting">*</span></label>
								<select name="id_customer" class="form-control" >

									<?php
										$querycs = "select * from customer order by id_customer desc limit 1";
										$result = mysql_query($querycs);
										while($row = mysql_fetch_array($result)){
									?>
									<option value="<?php echo $row['id_customer']?>"><?php echo $row['nama_customer']?></option>
									<?php
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<label >Tanggal Masuk<span class="penting">*</span></label>
								<input type="date" class="form-control" placeholder="Masukkan User Name" name="tanggal_masuk">
							</div>
							<div class="form-group">
								<label >Tanggal Selesai<span class="penting">*</span></label>
								<input type="date" class="form-control" placeholder="Masukkan User Name" name="tanggal_selesai">
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
							
							<div class="form-group">
								<label >Sparepart<span class="penting">*</span></label>
								<select name="id_sparepart" class="form-control">
    
								<option>pilih Id Sparepart</option>
								<?php
									$querys = "select * from sparepart";
									$result = mysql_query($querys);
									while($row = mysql_fetch_array($result)){
								?>
								<option value="<?php echo $row['id_sparepart']?>"><?php echo $row['id_sparepart']?></option>
								<?php
									}
								?>
								</select>
							</div>
							<div class="form-group">
										<label >Biaya Service<span class="penting">*</span></label>
										<input type="number" class="form-control" value="75000" name="harga">
							</div>
							<div class="form-group">
								<label >Status HP <span class="penting">*</span></label>
								<select name="status_perbaikan" class="form-control">
									<option value="fix">fix</option>
									<option value="proses" selected>proses</option>
									<option value="cancel">cancel</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary" name="simpan">save</button>
						</form>
					</div>	
			</div>
		</div>
		
		<?php
	if(isset($_POST['simpan'])){
		//memasukkan data pelayanan
		$querypel = "INSERT INTO `pelayanan` (`id_pelayanan`, `tanggal_masuk`, `tanggal_selesai`, `id_cs`, `id_teknisi`) VALUES ('0', '".$_POST['tanggal_masuk']."', '".$_POST['tanggal_selesai']."', '".$_SESSION['user']."', '".$_POST['id_teknisi']."')";
		//echo $querypel;
		$hasil = mysql_query($querypel) or die (mysql_error());
		//mengambil data terahir
		$queryambil = "select * from pelayanan order by id_pelayanan desc limit 1";
		$ambilid = mysql_query($queryambil) or die (mysql_error());
		
		while ($record = mysql_fetch_array($ambilid)) {
			//echo $record['id_pelayanan'];
			$id_pelayanan= $record['id_pelayanan'];
			/*
			echo "<pre>";
					print_r($record);
					echo "</pre>";
			*/
		}
		//masukkan data detail pelayanan
		$querydetailpel = "INSERT INTO `detail_pelayanan` (`id_pelayanan`, `id_customer`, `id_sparepart`, `harga`, `status_perbaikan`) VALUES ('$id_pelayanan', '".$_POST['id_customer']."', '".$_POST['id_sparepart']."', '".$_POST['harga']."', '".$_POST['status_perbaikan']."')";
			//echo $querydetailpel;
		$hasil = mysql_query($querydetailpel) or die (mysql_error());
		
?>

<script>
alert("data sukses ditambahkan");
window.location='?mlebu=tbdp';
</script>



<?php
	}
?>