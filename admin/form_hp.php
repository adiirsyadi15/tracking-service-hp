
			<div class="panel panel-default">
					<div class="panel-heading">
						
						<h3 class="panel-title">Tambah Data HP</h3>
						
					</div>
					<div class="panel-body">
						<form action="" method="post" name="tambah_hp">
							<div class="form-group">
								<label >IMEI<span class="penting">*</span></label>
								<input type="text" maxlength="15"  class="form-control" placeholder="Masukkan Nomor IMEI hp" name="imei" required>
							</div>
							<div class="form-group">
								<label >Merek <span class="penting">*</span></label>
								<input type="text" class="form-control" placeholder="Masukkan Merek HP" name="merek">
							</div>
							<div class="form-group">
								<label >Tipe <span class="penting">*</span></label>
								<input type="text" class="form-control" placeholder="Masukkan Tipe HP" name="tipe">
							</div>
							<div class="form-group">
								<label >Keterangan <span class="penting">*</span></label>
								<textarea class="form-control" rows="3" name="keterangan"></textarea>
							</div>
							<div class="form-group">
								<label >Status <span class="penting">*</span></label>
								<select name="status" class="form-control">
									<option value="diambil">diambil</option>
									<option value="belum diambil" selected="selected">belum diambil</option>
								</select>
								
							</div>
							<button type="submit" class="btn btn-primary" name="simpan">save</button>
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
	if(isset($_POST['simpan'])){
		$query = "INSERT INTO `hp` (`imei`, `merek`, `tipe_hp`, `keterangan`, `status`) VALUES ('".$_POST['imei']."', '".$_POST['merek']."', '".$_POST['tipe']."', '".$_POST['keterangan']."', '".$_POST['status']."')";
		//echo $query;
		$hasil = mysql_query($query) or die (mysql_error());
		
?>
<script>
alert("data sukses ditambahkan");
window.location='?mlebu=tbhape';</script>

<?php
	}
	require_once("footer.php");
?>