<?php
switch ($ask) {
	/*selamat datang admin*/
	case 'sd':
		require_once 'selamat_datang.php';
		break;
	/*admin*/
	case 'mimin':
		require_once 'form_admin.php';
		break;
	case 'tbmimin':
		require_once 'table_admin.php';
		break;
	case 'upmimin':
		require_once 'form_update_admin.php';
		break;
	case 'delmimin':
		require_once 'delete_admin.php';
		break;	
	/*hp*/
	case 'hape':
		require_once 'form_hp.php';
		break;
	case 'tbhape':
		require_once 'table_hp.php';
		break;
	case 'uphape':
		require_once 'form_update_hp.php';
		break;
	case 'delhape':
		require_once 'delete_hp.php';
		break;
	/*customer*/
	case 'cus':
		require_once 'form_customer.php';
		break;
	case 'tbcus':
		require_once 'table_customer.php';
		break;
	case 'upcus':
		require_once 'form_update_customer.php';
		break;
	case 'delcus':
		require_once 'delete_customer.php';
		break;
	/*sparepart*/
	case 'sp':
		require_once 'form_sparepart.php';
		break;
	case 'tbsp':
		require_once 'table_sparepart.php';
		break;
	case 'upsp':
		require_once 'form_update_sparepart.php';
		break;
	case 'delsp':
		require_once 'delete_sparepart.php';
		break;
		
	/*Teknisi*/
	case 'tk':
		require_once 'form_teknisi.php';
		break;
	case 'tbtk':
		require_once 'table_teknisi.php';
		break;
	case 'uptk':
		require_once 'form_update_teknisi.php';
		break;
	case 'deltk':
		require_once 'delete_teknisi.php';
		break;
	
	/*CS*/
	case 'cs':
		require_once 'form_customer_service.php';
		break;
	case 'tbcs':
		require_once 'table_customer_service.php';
		break;
	case 'upcs':
		require_once 'form_update_customer_service.php';
		break;
	case 'delcs':
		require_once 'delete_customer_service.php';
		break;
	case 'tampilcs':
		require_once 'hasil_customer_service.php';
		break;
		
	/*pelayanan*/
	case 'ply':
		require_once 'form_pelayanan.php';
		break;
	case 'tbply':
		require_once 'table_pelayanan.php';
		break;
	case 'upply':
		require_once 'form_update_pelayanan.php';
		break;
	case 'delply':
		require_once 'delete_pelayanan.php';
		break;
		
	/*detail pelayanan*/
	case 'dp':
		require_once 'form_detail_pelayanan.php';
		break;
	case 'tbdp':
		require_once 'table_detail_pelayanan.php';
		break;
	case 'updp':
		require_once 'form_update_detail_pelayanan.php';
		break;
	case 'deldp':
		require_once 'delete_ply.php';
		break;	
	
	/*tambah transaksi pelayanan*/
	case 'tambahcus':
		require_once 'tambah_customer.php';
		break;
	case 'tambahpel':
		require_once 'tambah_pelayanan.php';
		break;
	
	case 'logout':
		require_once 'destroysession.php';
		break;
	
	default:
		require_once '404.php';
		break;
}
?>