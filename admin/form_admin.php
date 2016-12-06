<?php
//    mengatur error nip menjadi blank
    $error_username = "";
 
//dijalankan jika tombol submit ditekan
if(isset($_POST['simpan'])){
//    menangkap $post nip dan mengamankan inputan dengan fungsi
//    trim, htmlspecialchars dan stripslashes
    $username = htmlspecialchars(stripslashes(trim(($_POST['username']))));
    
//    nip tidak boleh kosong
    if($username == ""){
        $error_username= "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                username tidak boleh kosong
                </div>";
    }else{
//        nip harus 18 karakter. menggunakan fungsi strlen untuk
//        mengecek panjang karakter
        if(strlen($username)<>10){
        $error_username= "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                username Harus 10 digit
                </div>";
        };
        
//        nip harus berupa angka. menggunakan fungsi is_numeric untuk
//        mengecek angka atau bukan
        if(!is_numeric($username)){
            $error_username= "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                username Harus berupa angka
                </div>";
        };
    };
    
//    jika error nip blank (artinya tidak ada kesalahan)
    if($error_username === ""){
//    proses query disini, pada contoh ini hanya 
//    menampilkan pesan lolos validasi
        echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                Sukses Di Input
                </div>";
    };
    
}
?>
			<div class="panel panel-default">
							<div class="panel-heading">
								
								<h3 class="panel-title">Tambah Data admin</h3>
								
							</div>
							<div class="panel-body">
							<?php echo $error_username; ?>
								<form action="?mlebu=mimin" method="post" name="tambahadmin">
									<div class="form-group">
										<label >User Name <span class="penting">*</span></label>
										<input type="text" class="form-control" placeholder="Masukkan User Name" name="username" >
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password <span class="penting">*</span></label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" name="password">
									</div>
									<div class="checkbox">
										<label>
										  <input type="checkbox"> Check me out
										</label>
									</div>
									<button type="submit" class="btn btn-primary" name="simpan">save</button>
								</form>
							</div>	
					</div>
			</div>
	</div>
</div>
<?php
	if(isset($_POST['simpan'])){
		$query = "INSERT INTO admin (id_admin, username, password) VALUES (NULL, '".$_POST['username']."', '".$_POST['password']."')";
		//echo $query;
		$hasil = mysql_query($query) or die (mysql_error());
	
?>
<script>
alert("data sukses ditambahkan");
window.location='?mlebu=tbmimin';</script>

<?php
	}
?>