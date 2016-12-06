<?php
	
	if($_GET['id'] != ""){
		
		$query = mysql_query("DELETE FROM hp WHERE imei = '".$_GET['id']."'");
		
		//echo $query;
		echo "<script>alert('data berhasil di hapus')
		</script>";
		echo "<meta http-equiv='refresh' content='0;url=?mlebu=tbhape'>";
		}
?>
