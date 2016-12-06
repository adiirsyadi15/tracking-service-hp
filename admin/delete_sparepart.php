<?php

	if($_GET['id'] != ""){
		$id = $_GET['id'];
		
		$query = mysql_query("delete from sparepart where id_sparepart = '".$_GET['id']."'");
		
		//echo $query;
		echo "<script>alert('data berhasil di hapus')
		</script>";
		echo "<meta http-equiv='refresh' content='0;url=?mlebu=tbsp'>";
		}
?>
