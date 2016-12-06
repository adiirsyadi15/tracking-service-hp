<?php
	session_start();
	require_once ("../koneksi.php");
	// username and password sent from form
	$myusername=$_POST['username'];
	$mypassword= $_POST['password'];
	if(isset($myusername) or isset($mypassword))
	{
		if($myusername == "" or $mypassword== "")
		{
?>
	 <script type="text/javascript">
	alert("LOGIN SALAH, USERNAME ATAU PASSWORD TIDAK
	BOLEH KOSONG");
	window.location = 'login_admin.php';
	</script>
<?php
		}
	}
// To protect MySQL injection (more detail about MySQL injection)
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
		$myusername = mysql_real_escape_string($myusername);
		$mypassword = mysql_real_escape_string($mypassword);
		$sql="SELECT * FROM admin WHERE username='".$myusername."' And password='".$mypassword."'";
		$result=mysql_query($sql);
		
		
		// Mysql_num_row is counting table row
		$count=mysql_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1){
		$_SESSION['user']=$myusername;
		$_SESSION['pass']=$mypassword;
?>
		
		<script language="JavaScript">
		alert('Silahkan masuk <?php
			echo $_SESSION['user'];
		?> ,dipergunakan dengan bijak!!');
		document.location='main.php?mlebu=sd'</script> 
		<?php
			}
			else{
		?>
		<script type="text/javascript">
		alert("LOGIN SALAH, USERNAME ATAU PASSWORD TIDAK ");
		window.location = 'login_admin.php';
		</script>
		<?php
			}
		?>