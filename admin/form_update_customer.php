<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Data Customer</h3>
		</div>
		<div class="panel-body">
			<form action="" method="post" name="update_hp">
				<!-- query SELECT UNTUK form -->
				<?php
					$queryupdate = mysql_query("select * from customer where id_customer='".$_GET['id']."'");
					while ($record = mysql_fetch_array($queryupdate)){
				?>
				
				<div class="form-group">
					<label >Id Customer<span class="penting">*</span></label>
					<input type="text" class="form-control" name="id_customer" value="<?php
							 echo $record['id_customer'];
							?>" readonly>
				</div>
				<div class="form-group">
					<label >IMEI<span class="penting">*</span></label>
					<input type="text" class="form-control" name="id_hp" value="<?php
							 echo $record['id_hp'];
							?>" readonly>
				</div>
				<div class="form-group">
					<label >Nama <span class="penting">*</span></label>
					<input type="text" class="form-control" name="nama_customer" value="<?php
						 echo $record['nama_customer'];
						?>">
				</div>
				<div class="form-group">
					<label >Nomor HP <span class="penting">*</span></label>
					<input type="text" class="form-control" name="nomor_hp" value="<?php
							 echo $record['nomor_hp'];
							?>">
				</div>
				<button type="submit" class="btn btn-primary" name="update">update</button>
				
				<?php
					}
				?>
			</form>
		</div>	
</div>



<?php
	if(isset($_POST['update'])){
		//echo $query;
		$query = "UPDATE `servis_hp`.`customer` SET `id_hp` = '".$_POST['id_hp']."', `nama_customer` = '".$_POST['nama_customer']."', `nomor_hp` = '".$_POST['nomor_hp']."' WHERE `customer`.`id_customer` = '".$_POST['id_customer']."'";
		$hasil = mysql_query($query) or die (mysql_error());
		
?>
<script>
alert("data sukses diupdate");
window.location='?mlebu=tbcus';
</script>

<?php
	}
?>