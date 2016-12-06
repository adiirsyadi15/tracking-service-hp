<?php
session_start();
// atau menghapus semua session yang pernah dibuat dengan:
session_destroy();

//header('Location: login_admin.php');
?>

<script language="JavaScript">
alert('Sampai jumpa lagi <?php
	echo $_SESSION['nama_cs'];
?>');
document.location='login_cs.php'
</script> 