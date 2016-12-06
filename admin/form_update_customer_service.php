
<div class="container">
	<div class="row">
		<div class="col-md-9 ">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Edit Data Customer Service</h3>
					</div>
					<div class="panel-body">
					
						<form action="" method="post" name="update_cs" enctype="multipart/form-data">
							<!-- query SELECT UNTUK form -->
							<?php
								$queryupdate = mysql_query("select * from customer_service where id_cs='".$_GET['id']."'");
								while ($record = mysql_fetch_array($queryupdate)){
								/*
								echo "<pre>";
									print_r($record);
								echo "</pre>";
								*/
							?>
							<div class="form-group">
								<label >ID Customer Service <span class="penting">*</span></label>
								<input type="text" class="form-control" name="id_cs" value="<?php
										echo $record['id_cs'];
									?>" readonly>
							</div>
							<div class="form-group">
								<label >Nama <span class="penting">*</span></label>
								<input type="text" class="form-control" name="nama" value="<?php
										echo $record['nama_cs'];
									?>">
							</div>
							<div class="form-group">
								<label >Password <span class="penting">*</span></label>
								<input type="password" class="form-control" name="password" value="<?php
										echo $record['password_cs'];
									?>" >
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
									if ($record['jk'] == "P")
									echo "<label class='radio-inline'><input type='radio' value='P' name='jk' id='kelamin' checked>Perempuan</label>";
									else echo "<label class='radio-inline'><input type='radio' name='jk' id='kelamin' value='P'>Perempuan</label>";
									 
									if ($record['jk'] == "L")
									echo "<label class='radio-inline'><input class='radio-inline' type='radio' value='L' name='jk' id='kelamin' checked>Laki-laki</label>";
									else echo "<label class='radio-inline'><input class='radio-inline' type='radio' name='jk' id='kelamin' value='L'>Laki-laki</label>";
									?>
							</div>
							<div class="form-group">
								<label >Nomor HP <span class="penting">*</span></label>
								<input type="text" class="form-control" name="nomor_hp" value="<?php
										echo $record['nomor_hp'];
									?>">
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
							<div class="form-group">
								<label for="input_foto">File input</label>
								<input type="file" id="input_foto" class="input_foto" name="input_foto" value="<?php
										echo $record['foto'];
									?>">
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
		//echo $query;
		$query = "UPDATE `customer_service` SET `nama_cs` = '".$_POST['nama']."', `alamat` = '".$_POST['alamat']."', password_cs = '".$_POST['password']."', `jk` = '".$_POST['jk']."', `nomor_hp` = '".$_POST['nomor_hp']."', `status` = '".$_POST['status']."' WHERE `id_cs` = '".$_POST['id_cs']."'";
		$hasil = mysql_query($query) or die (mysql_error());
		
		$filefoto = $_FILES['input_foto']['name'];
		if($filefoto == null){
		}else{
		$queryfoto = "UPDATE `customer_service` SET `foto` = '$filefoto' WHERE `id_cs` = '".$_POST['id_cs']."'";
		$upfoto = mysql_query($queryfoto) or die (mysql_error());
		move_uploaded_file($_FILES['input_foto']['tmp_name'], "../images/".$_FILES['input_foto']['name']);
	
	}
?>
<script>
alert("data sukses diupdate");
window.location='?mlebu=tbcs';
</script>

<?php
	}
?>