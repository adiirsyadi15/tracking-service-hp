<?php
require_once ("../koneksi.php");

//require_once ("akses.php");
$akses=(isset($_REQUEST['cari'])) ? $_REQUEST['cari'] :"";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>HPINDO Service</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/style_table.css" rel="stylesheet">
	<link href="../css/style_form.css" rel="stylesheet">
	<link href="../css/style_images.css" rel="stylesheet">
	<link href="../css/style_sidebar.css" rel="stylesheet">
	<link href="../css/style_hasil.css" rel="stylesheet">
	<link href="../css/style_footer.css" rel="stylesheet">
	
    <link rel="shortcut icon" href="#">

  </head>

<body>
<header id="header">
	<div class="container header_adm">
		<div class="row">
			<?php
				require_once ("header.php");					 
			?>
		</div>
    </div>
</header>
<content>
	<div class="container">
		<div class="row">
			<div class="col-md-3"> 
					<?php
						require_once("menu_kiri.php");
					?>
			</div>
			<div class="col-md-9"> 
					<?php
						require_once 'search_hasil.php';
					?>
			</div>
		</div><!--/row-->
	</div>
</content>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12"> 
					<?php
					require_once'footer.php';
					?>
			</div>
		</div>
	</div>
</footer>
    <script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
  </body>
</html>
