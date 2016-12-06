<?php
switch ($akses) {
	/*admin*/
	case 'search':
		require_once 'search_imei.php';
		break;
	case 'hsearch':
		require_once 'search_tamil.php';
		break;
	
	case 'logout':
		require_once 'destroysession.php';
		break;
	
	default:
		require_once '404.php';
		break;
}
?>