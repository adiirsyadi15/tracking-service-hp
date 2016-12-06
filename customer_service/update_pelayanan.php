<div class=".col-md-6 ">
<div class="panel panel-default">
		<div class="panel-heading">
			
			<h3 class="panel-title">Tambah Data Detail Pelayanan</h3>
			
		</div>
		<div class="panel-body">
			<form action="" method="post" name="tambahadmin">
				<!-- query SELECT UNTUK form -->
				<?php
					//$queryupdate = mysql_query("select * from pelayanan where id_pelayanan='".$_GET['id']."'");
					$queryupdate = mysql_query("select * from detail_pelayanan dp where id_pelayanan='".$_GET['id']."'");
					while ($record = mysql_fetch_array($queryupdate)){
					/*
					echo "<pre>";
					print_r($record);
					echo "</pre>";
					*/
				?>
				<div class="form-group">
					<label >Id Pelayanan <span class="penting">*</span></label>
					<select name="id_pelayanan" class="form-control" disabled>
						<?php
							$querydp = "select * from detail_pelayanan ";
							$result = mysql_query($querydp);
							while($isi = mysql_fetch_array($result)){
							
							if($isi['id_pelayanan']==$record['id_pelayanan']){
							echo "<option selected=\"selected\" value=\"$isi[id_pelayanan]\">$isi[id_pelayanan]</option>";
							}else{
							echo "<option  value=\"$isi[id_pelayanan]\">$isi[id_pelayanan]</option>";
							}
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label >Id Pelanggan <span class="penting">*</span></label>
					<select name="id_customer" class="form-control" disabled>
						<?php
							$querycus = "select * from customer ";
							$result = mysql_query($querycus);
							while($isi = mysql_fetch_array($result)){
							
							if($isi['id_customer']==$record['id_customer']){
							echo "<option selected=\"selected\" value=\"$isi[id_customer]\">$isi[id_customer]</option>";
							}else{
							echo "<option  value=\"$isi[id_customer]\">$isi[id_customer]</option>";
							}
							
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label >Sparepart<span class="penting">*</span></label>
					<select name="id_sparepart" class="form-control">

						<?php
							$querytk = "select * from sparepart ";
							$result = mysql_query($querytk);
							while($isi = mysql_fetch_array($result)){
							
							if($isi['id_sparepart']==$record['id_sparepart']){
							echo "<option selected=\"selected\" value=\"$isi[id_sparepart]\">$isi[id_sparepart]</option>";
							}else{
							echo "<option  value=\"$isi[id_sparepart]\">$isi[id_sparepart]</option>";
							}
							
							}
						?>
					</select>
				</div>
				<div class="form-group">
							<label >Harga <span class="penting">*</span></label>
							<input type="number" class="form-control" value="<?php
								echo $record['harga']
							?>" name="harga">
				</div>
				<div class="form-group">
					<label >Status HP <span class="penting">*</span></label>
					<select name="status_perbaikan" class="form-control">
						
						<?php
						if ($record['status_perbaikan'] == "proses")
							echo "<option value='proses' selected>proses</option>";
							else echo "<option value='proses'>proses</option>";
						if ($record['status_perbaikan'] == "fix")
							echo "<option value='fix' selected>fix</option>";
							else echo "<option value='fix'>fix</option>";	
						if ($record['status_perbaikan'] == "cancel")
							echo "<option value='cancel' selected>cancel</option>";
							else echo "<option value='cancel'>cancel</option>";	
						
						?>
					</select>
				</div>
				<button type="submit" class="btn btn-primary" name="update">update</button>
				
				<?php
					}
				?>
			</form>
		</div>	
</div>

</div>

<?php
	if(isset($_POST['update'])){
		//$query = "UPDATE `pelayanan` SET `tanggal_selesai` = '".$_POST['tanggal_selesai']."', `id_cs` = '".$_POST['id_cs']."', `id_teknisi` = '".$_POST['id_teknisi']."' WHERE `id_pelayanan` = '".$_POST['id']."'";
		$query = "UPDATE `detail_pelayanan` SET `id_sparepart` = '".$_POST['id_sparepart']."', `harga` = '".$_POST['harga']."', `status_perbaikan` = '".$_POST['status_perbaikan']."' WHERE `id_pelayanan` = '".$_GET['id']."'";
		$hasil = mysql_query($query) or die (mysql_error());
?>
<script>
alert("data sukses diupdate");
window.location='?cs=hasilpel';
</script>
<?php
	}
?>