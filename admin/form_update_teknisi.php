
<div class="container">
	<div class="row">
		<div class="col-md-9 ">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Edit Data Customer</h3>
					</div>
					<div class="panel-body">
					
						<form action="" method="post" name="update_hp">
							<!-- query SELECT UNTUK form -->
							<?php
								 $queryupdate = mysql_query("select * from teknisi where id_teknisi='".$_GET['id']."'");
								while ($record = mysql_fetch_array($queryupdate)){
							?>
							<div class="form-group">
								<label >ID Teknisi <span class="penting">*</span></label>
								<input type="text" class="form-control" name="id_teknisi" value="<?php
										echo $record['id_teknisi'];
									?>" readonly>
							</div>
							<div class="form-group">
								<label >Nama <span class="penting">*</span></label>
								<input type="text" class="form-control" name="nama_teknisi" value="<?php
										echo $record['nama_teknisi'];
									?>">
							</div>
							<div class="form-group">
								<label >Alamat <span class="penting">*</span></label>
								<textarea class="form-control" rows="3" name="alamat"><?php
									echo $record['alamat'];
									?>
								</textarea>
							</div>
							<div class="form-group">
								<label >Jenis Kelamin <span class="penting">*</span></label><br/>
								
								
								<?php
									if ($record['jk_teknisi'] == "P")
									echo "<label class='radio-inline'><input type='radio' value='P' name='jk_teknisi' id='kelamin' checked>Perempuan</label>";
									else echo "<label class='radio-inline'><input type='radio' name='jk_teknisi' id='kelamin' value='P'>Perempuan</label>";
									 
									if ($record['jk_teknisi'] == "L")
									echo "<label class='radio-inline'><input class='radio-inline' type='radio' value='L' name='jk_teknisi' id='kelamin' checked>Laki-laki</label>";
									else echo "<label class='radio-inline'><input class='radio-inline' type='radio' name='jk_teknisi' id='kelamin' value='L'>Laki-laki</label>";
									?>
							</div>
							<div class="form-group">
								<label >Nomor HP <span class="penting">*</span></label>
								<input type="text" class="form-control" name="nomor_hp_teknisi" value="<?php
										echo $record['nomor_hp_teknisi'];
									?>"">
							</div>
							<div class="form-group">
								<label >Status<span class="penting">*</span></label><br/>
								<select name="status" class="form-control">
									<?php
										if ($record['status'] == "aktif")
											echo "<option value='aktif' selected>aktif</option>";
											else echo "<option value='aktif'>aktif</option>";
										if ($record['status'] == "tidak aktif")
											echo "<option value='tidak aktif' selected>tidak aktif</option>";
											else echo "<option value='tidak aktif'>tidak aktif</option>";
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
	</div>
</div>

<?php
	if(isset($_POST['update'])){
		$query = "UPDATE `servis_hp`.`teknisi` SET `nama_teknisi` = '".$_POST['nama_teknisi']."', `alamat` = '".$_POST['alamat']."',`jk_teknisi` = '".$_POST['jk_teknisi']."', `nomor_hp_teknisi` = '".$_POST['nomor_hp_teknisi']."', `status` = '".$_POST['status']."' WHERE `id_teknisi` = '".$_POST['id_teknisi']."'";
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
window.location='?mlebu=tbtk';
</script>
<?php
	}
?>