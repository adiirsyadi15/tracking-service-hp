
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Edit Data HP</h3>
					</div>
					<div class="panel-body">
						<form action="" method="post" name="update_hp">
							<!-- query SELECT UNTUK form -->
							<?php
								$queryupdate = mysql_query("select * from hp where imei='".$_GET['id']."'");
								while ($record = mysql_fetch_array($queryupdate)){
							?>

							<div class="form-group">
								<label >IMEI<span class="penting">*</span></label>
								<input type="text" class="form-control" name="imei" value="<?php
										 echo $record['imei'];
										?>" readonly>
							</div>
							<div class="form-group">
								<label >Merek <span class="penting">*</span></label>
								<input type="text" class="form-control" name="merek" value="<?php
									 echo $record['merek'];
									?>">
							</div>
							<div class="form-group">
								<label >Tipe <span class="penting">*</span></label>
								<input type="text" class="form-control" name="tipe" value="<?php
										 echo $record['tipe_hp'];
										?>">
							</div>
							<div class="form-group">
								<label >Keterangan <span class="penting">*</span></label>
								<textarea class="form-control" rows="3" name="keterangan"><?php 
											echo $record['keterangan'];
										?>
								</textarea>
							</div>
							<div class="form-group">
								<label >Status <span class="penting">*</span></label>
								<select name="status" class="form-control">
									
									<?php
										if ($record['status'] == "diambil")
											echo "<option value='diambil' selected>diambil</option>";
											else echo "<option value='diambil'>diambil</option>";
										if ($record['status'] == "belum diambil")
											echo "<option value='belum diambil' selected>belum diambil</option>";
											else echo "<option value='belum diambil'>belum diambil</option>";	
										
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
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/login.js"></script>
</body>
</html>

<?php
	if(isset($_POST['update'])){
		//echo $query;
		
		$query ="UPDATE `hp` SET `merek` = '".$_POST['merek']."', `tipe_hp` = '".$_POST['tipe']."', `keterangan` = '".$_POST['keterangan']."', `status` = '".$_POST['status']."' WHERE `imei` = '".$_POST['imei']."'";
		$hasil = mysql_query($query) or die (mysql_error());
		
?>
<script>
alert("data sukses diupdate");
window.location='?mlebu=tbhape';
</script>

<?php
	}
	require_once("footer.php");
?>