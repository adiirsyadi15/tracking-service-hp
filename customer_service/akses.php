<?php 
session_start();
if (isset($_SESSION['user'])&& isset($_SESSION['pass'])) {
	$namalogin=$_SESSION['user'];
	$passlogin=$_SESSION['pass'];
}
else{
?>	
		<script type="text/javascript">
		alert("anda belum login");
		window.location = 'login_cs.php';
		</script>
		<?php
}
?>