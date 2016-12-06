<?php
switch ($ask) {
	/*cs*/
	case 'tambahcus':
		require_once 'tambah_customer.php';
		break;
	case 'tambahpel':
		require_once 'tambah_pelayanan.php';
		break;
	case 'uppel':
		require_once 'update_pelayanan.php';
		break;
	case 'hasilpel':
		require_once 'tampil_hasil_pelayanan.php';
		break;
	
	case 'tampil':
		require_once 'myprofile.php';
		break;
	default:
		//require_once 'delete_admin.php';
		break;	
		}
?>