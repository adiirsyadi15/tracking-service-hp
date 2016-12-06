<?php

	if($_GET['id'] != ""){
		
		$query = mysql_query("DELETE FROM customer WHERE id_customer = '".$_GET['id']."'");
		
		//echo $query;
		echo "<script>alert('data berhasil di hapus')
		</script>";
		echo "<meta http-equiv='refresh' content='0;url=?mlebu=tbcus'>";
		}
?>
