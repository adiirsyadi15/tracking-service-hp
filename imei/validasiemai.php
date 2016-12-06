<?php
$queryimei = "select * from hp";
$result = mysql_query($queryimei);
echo $result;

while($isi = mysql_fetch_array($result)){
	//echo $isi['imei'];
	
	if($isi['imei'] == $_GET['id_hp']){
		require_once('search_hasil.php');
	}else{
		require_once('tidakada.php');
	}
}
?>