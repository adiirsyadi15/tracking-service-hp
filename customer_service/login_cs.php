<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login CS</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
 <link href="../css/bootstrap-theme.min.css" rel="stylesheet"/>
</head>

<body>
<p><br/><br/><br/><br/></p>
 <div class="container">
      <div class="row"> 
	<div class="col-md-4">
		<h2></h2>
	</div>
  <div class="col-md-4">
       <div class="panel panel-default">
       <div class="panel-body">
          <div class="page-header">
		  
         <a href="../hpindo.php" class="glyphicon glyphicon-home pull-right"></a>
         <h3>Login Customer Service</h3>
      </div>
      <form action="login_cs_proses.php" method="post" accept-charset="utf-8" role="form">
         <div class="form-group">
            <label >ID CS</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="id" placeholder="Enter ID"  />
        </div>
         </div>
         <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           <input type="password" class="form-control" name="password" placeholder="Password"  />
        </div>
         </div>
         <hr/>
         
         <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-lock"></span> Login</button>
         <p>
</p>
      </form>
       </div>
    </div>
    
     </div>
	 <div class="col-md-4">
	</div>
  </div>
    </div>
 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>