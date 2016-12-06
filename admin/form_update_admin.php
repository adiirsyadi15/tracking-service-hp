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
								$queryupdate = mysql_query("select * from admin where id_admin='".$_GET['id']."'");
								while ($record = mysql_fetch_array($queryupdate)){
							?>

							<div class="form-group">
								<label >ID</label>
									<input class="form-control" name="id" type="text" value="<?php
											 echo $record['id_admin'];
											?>" readonly >
							</div>
							<div class="form-group">
								<label >User Name  <span class="penting">*</span></label>
								<input type="text" name="username" class="form-control" value="<?php
											 echo $record['username'];
											?>" >
							</div>
							<div class="form-group">
								<label >Password <span class="penting">*</span></label>
								<input type="password" class="form-control" id="exampleInputPassword1" value="<?php
											 echo $record['password'];
											?>" name="password">
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox"> chekme data
								</label>
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
		$query = "UPDATE admin SET username = '".$_POST['username']."', `password` = '".$_POST['password']."' WHERE `id_admin` = ".$_POST['id']."";
		$hasil = mysql_query($query) or die (mysql_error());
?>
<script>
alert("data sukses diupdate");
window.location='?mlebu=tbmimin';
</script>

<?php
	}
?>