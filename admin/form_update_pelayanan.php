
<div class=".col-md-6 ">
<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Data Pelayanan</h3>
		</div>
		<div class="panel-body">
			<form action="" method="post" name="tambahadmin">
				<!-- query SELECT UNTUK form -->
				<?php
					//$queryupdate = mysql_query("select * from pelayanan where id_pelayanan='".$_GET['id']."'");
					$queryupdate = mysql_query("select * from pelayanan p join teknisi t on p.id_teknisi = t.id_teknisi where id_pelayanan='".$_GET['id']."'");
					while ($record = mysql_fetch_array($queryupdate)){
					echo "<pre>";
					print_r($record);
					echo "</pre>";
				?>

				<div class="form-group">
					<label >ID Pelayanan</label>
						<input class="form-control" name="id" type="text" value="<?php
								 echo $record['id_pelayanan'];
								?>" readonly >
				</div>
				<div class="form-group">
					<label >Tanggal masuk<span class="penting">*</span></label>
					<input type="date" name="tanggal_masuk" class="form-control" value="<?php
								 echo $record['tanggal_masuk'];
								?>" >
				</div>
				<div class="form-group">
					<label >Tanggal Selesai<span class="penting">*</span></label>
					<input type="date" name="tanggal_selesai" class="form-control" value="<?php
								 echo $record['tanggal_selesai'];
								?>" >
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Customer Service <span class="penting">*</span></label>
					<select name="id_cs" class="form-control">

						<?php
							$querycs = "select * from customer_service ";
							$result = mysql_query($querycs);
							while($isi = mysql_fetch_array($result)){
							
							if($isi['id_cs']==$record['id_cs']){
							echo "<option selected=\"selected\" value=\"$isi[id_cs]\">$isi[nama_cs]</option>";
							}else{
							echo "<option value=\"$isi[id_cs]\">$isi[nama_cs]</option>";
							}
							
							}
						?>
						</select>
					
				</div>
				<div class="form-group">
					<label >Teknisi<span class="penting">*</span></label>
					<select name="id_teknisi" class="form-control">

						<?php
							$querytk = "select * from teknisi ";
							$result = mysql_query($querytk);
							while($isi = mysql_fetch_array($result)){
							
							if($isi['id_teknisi']==$record['id_teknisi']){
							echo "<option selected=\"selected\" value=\"$isi[id_teknisi]\">$isi[nama_teknisi]</option>";
							}else{
							echo "<option  value=\"$isi[id_teknisi]\">$isi[nama_teknisi]</option>";
							}
							
							}
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
		//$query = "UPDATE admin SET username = '".$_POST['username']."', `password` = '".$_POST['password']."' WHERE `id_admin` = ".$_POST['id']."";
		$query = "UPDATE `pelayanan` SET `tanggal_selesai` = '".$_POST['tanggal_selesai']."', `id_cs` = '".$_POST['id_cs']."', `id_teknisi` = '".$_POST['id_teknisi']."' WHERE `id_pelayanan` = '".$_POST['id']."'";
		$hasil = mysql_query($query) or die (mysql_error());
?>
<script>
alert("data sukses diupdate");
window.location='?mlebu=tbply';
</script>
<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" name="update" data-dismiss="alert"><span aria-hidden="false">&times;</span></button>
	<strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<?php
	}
?>