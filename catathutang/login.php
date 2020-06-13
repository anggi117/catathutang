<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<head>
<title>Login Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
	<?php 
	//User Redirect Session Bruh//
	if(isset($_SESSION['admin']))
		header('Location: gallery.php');
	if(isset($_SESSION['member']))
		header('Location: index.php');
	//User Redirect Session Bruh//
	
	$error ='';
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		//Session//
		$_SESSION['email'] = $email;
		//print//
		$cek_email = $connect->prepare("SELECT * from userdata where email = '$email'");
		$cek_email->execute();
		$hasil_email = $cek_email->rowCount();
		if($hasil_email !=''){
			//print//
			$masuk = $connect->prepare("SELECT password FROM userdata where email = '$email'");
			$masuk->execute();
			$masuk->rowCount();
			$tampil = $masuk->fetch(PDO::FETCH_LAZY);
			if($tampil['password']){
				//print//
				$status = $connect->prepare("SELECT status FROM userdata where email = '$email'");
				$status->execute();
				$status->rowCount();
				$tampilkan = $status->fetch(PDO::FETCH_LAZY);
				if($tampilkan['status'] == 0){
					$_SESSION['member'] = $email;
					print '<meta http-equiv="refresh" content="0;url=login.php">';
				}else{
					$_SESSION['admin'] =  $email;
					print '<meta http-equiv="refresh" content="0;url=index.php">';
				}
			}else{
				$error = "Email atau kata sandi salah";
			}
		}else{
			$error = "Email tidak terdaftar";
		}
}
	?>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>
		<form action="" method="post">
			 <?php if($error !=''): ?>
        <div class="alert alert-danger error-msg" role="alert">
            <i class="fas fa-exclamation-triangle"></i>&nbsp; <?php echo $error; ?>
        </div>
    <?php endif; ?>
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<p>Don't Have an Account ?<a href="registration.php">Create an account</a></p>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->