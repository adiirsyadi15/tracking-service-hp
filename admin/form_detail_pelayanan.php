<div class="panel panel-default">
		<div class="panel-heading">
			
			<h3 class="panel-title">Tambah Data Detail Pelayanan</h3>
			
		</div>
		<div class="panel-body">
			<form action="" method="post" name="tambahadmin">
				<div class="form-group">
					<label >Id Pelayanan <span class="penting">*</span></label>
					<select name="id_pelayanan" class="form-control">
						<?php
							$querypl = "select * from pelayanan order by id_pelayanan desc limit 1";
							$result = mysql_query($querypl);
							while($row = mysql_fetch_array($result)){
						?>
						<option value="<?php echo $row['id_pelayanan']?>"><?php echo $row['id_pelayanan']?></option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label >Id Pelanggan <span class="penting">*</span></label>
					<select name="id_customer" class="form-control">

						<option>pilih Pelanggan</option>
						<?php
							$querycs = "select * from customer";
							$result = mysql_query($querycs);
							while($row = mysql_fetch_array($result)){
						?>
						<option value="<?php echo $row['id_customer']?>" required><?php echo $row['id_customer']?></option>
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
							<label >Harga <span class="penting">*</span></label>
							<input type="number" class="form-control" value="20000" name="harga">
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
<?php
	if(isset($_POST['simpan'])){
		$query = "INSERT INTO `detail_pelayanan` (`id_pelayanan`, `id_customer`, `id_sparepart`, `harga`, `status_perbaikan`) VALUES ('".$_POST['id_pelayanan']."', '".$_POST['id_customer']."', '".$_POST['id_sparepart']."', '".$_POST['harga']."', '".$_POST['status_perbaikan']."')";
		//echo $query;
		$hasil = mysql_query($query) or die (mysql_error());
		
?>
<script>
alert("data detail pelayanan sukses ditambahkan");
window.location='?mlebu=tbdp';</script>

<?php
	}
?>