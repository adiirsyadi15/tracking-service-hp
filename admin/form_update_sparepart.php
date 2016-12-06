
<div class="container">
	<div class="row">
		<div class="col-md-9 ">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Edit Data admin</h3>
					</div>
					<div class="panel-body">
						<form action="" method="post" name="tambahadmin">
							<!-- query SELECT UNTUK form -->
							<?php
								$queryupdate = mysql_query("select * from sparepart where id_sparepart='".$_GET['id']."'");
								while ($record = mysql_fetch_array($queryupdate)){
							?>

							<div class="form-group">
								<label >ID Sparepart</label>
									<input class="form-control" name="id_sparepart" type="text" value="<?php
											echo $record['id_sparepart'];
										?>" readonly >
							</div>
							<div class="form-group">
								<label >Nama <span class="penting">*</span></label>
								<input type="text" class="form-control" value="<?php
										echo $record['nama'];
									?>" name="nama">
							</div>
							<div class="form-group">
								<label >Seri <span class="penting">*</span></label>
								<input type="text" class="form-control" value="<?php
										echo $record['seri'];
									?>" name="seri">
							</div>
							<div class="form-group">
								<label >Harga <span class="penting">*</span></label>
								<input type="text" class="form-control" value="<?php
										echo $record['harga'];
									?>" name="harga">
							</div>
							
							<button type="submit" class="btn btn-primary" name="update">update</button>
							
							<?php
								}
							?>
						</form>
					</div>	
			</div>
		</div>
	</div>
</div>

<?php
	if(isset($_POST['update'])){
		$query ="UPDATE `servis_hp`.`sparepart` SET `nama` = '".$_POST['nama']."', `seri` = '".$_POST['seri']."', `harga` = '".$_POST['harga']."' WHERE `id_sparepart` = '".$_POST['id_sparepart']."'";
		$hasil = mysql_query($query) or die (mysql_error());
?>
<script>
alert("data sukses diupdate");
window.location='table_admin.php';
</script>
<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" name="update" data-dismiss="alert"><span aria-hidden="false">&times;</span></button>
	<strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<script>
window.location='?mlebu=tbsp';
</script>
<?php
	}
?>