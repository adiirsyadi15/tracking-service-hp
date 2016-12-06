<?php
switch ($akses) {
	/*imei*/
	case 'hasilsearch':
		require_once 'search_tampil.php';
		break;
	
	
	default:
		require_once '404.php';
		break;
}
?>