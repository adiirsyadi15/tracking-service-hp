
		<div class="col-md-2">
				<div class="pull-left">
					  <h3>DASHBOARD</small></h3>
				</div>	
		</div>
		<div class="col-md-4">
				
				<div class="pull-left">
					  <h4>HPINDO SERVICE <br/><small>tempat service hp</small></h4>
				</div>	
		</div>
		<div class="col-md-6">
			<nav class="navbar" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				   <ul class="nav navbar-nav navbar-right">
					  <li><a href="../hpindo.php"><i class="fa fa-home"></i> Website </a></li>
					  
					  <li><a href="?mlebu=sd"><i class="glyphicon glyphicon-edit"></i> Editor </a></li>
					  <li><a href="?mlebu=tambahcus"><i class="glyphicon glyphicon-plus"></i> Pelayanan </a></li>
					  
					  <li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['user']?> <b class="caret"></b></a>
						 <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
							<li>
							   <div class="row">
								  <div class="col-md-6">
										<p><br/></p>
										<img src="../images/iphone_4.png" alt="photos" class="img-circle images_signout">
								</div>
								  
								  <div class="col-md-6">
								  		<label class="nama_signout pull-left"><?php echo $_SESSION['user']?> <label><p><br/></p>
								</div>
							   </div>
							   <div class="row signout">
								  <div class="col-md-12">
										<a href="destroysession.php" class="btn btn-xs btn-info pull-right btn_signout">Sign Out</a>
								  </div>
							   </div>
							</li>
						 </ul>
					  </li>
						 </ul>
					  </li>
				   </ul>
				</div>
	<!-- /.navbar-collapse -->
			</nav>
		</div>

