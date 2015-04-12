<?php 
session_start();
	include("execute/connect.php");
if(isset($_POST['login']) && isset($_POST['done'])){
	$result=mysql_query("SELECT * FROM login WHERE name='".$_POST['name']."' AND pass='".$_POST['pass']."'");
	$num=mysql_num_rows($result);
	if($num==1){
		$_SESSION['auth']=1;
		header("location:dashboard.php");
	}else{
		header("location:admin.php?err='yes'");
	}
}
if (isset($_GET['logout'])){
	session_destroy();
}
?>
<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Softech Australia </title>
	
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Google Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- CSS Files -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="js/ie8-responsive-file-warning.js"></script>
	<![endif]-->
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/fav-144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/fav-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/fav-72.png">
	<link rel="apple-touch-icon-precomposed" href="images/fav-57.png">
	<link rel="shortcut icon" href="images/fav.png">
	
</head>
<body>
<!-- Header Section Starts -->
	<header id="header-area">
	
	<!-- Starts -->
		<div class="container">
		<!-- Main Header Starts -->
			<div class="main-header">
				<div class="row">					
				
				<!-- Logo Starts -->
				<br><br>
					<div class="col-md-12">
						<div id="logo">
							<img src="img/softech1.jpg"  alt="logo" class="img-responsive" />
						</div>
					</div>
				<!-- Logo Ends -->
				
				</div>
			</div>
		<!-- Main Header Ends -->
		</div>
	<!-- Ends -->
	</header>
<!-- Header Section Ends -->
<!-- Registration Section Starts -->
		<section class="registration-area">
			<div class="row">
			<div class="col-sm-4">
			</div>
				<div class="col-sm-4">
				<?php 
				if(isset($_GET['err'])){
					echo '<div class="alert alert-danger">Please Enter Correct User Name and Password</div>';
				}else if(isset($_GET['sin'])){
					echo '<div class="alert alert-danger">Please Sing in first</div>;';
				}
				?>
				<!-- Registration Block Starts -->
				<br/>
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h1 class="portlet-heading" align="center">Login Here</h1>
						</div>
						<br/>
						<div class="panel-body">
						<!-- Registration Form Starts -->
							<form class="form-horizontal" action="admin.php" method="post">
							<!-- Personal Information Starts -->
								<div class="form-group">
									<label  class="col-sm-3 control-label">Username</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="name" placeholder="Username">
									</div>
								</div>
					
							
							<!-- Personal Information Ends -->
							<!-- Password Area Starts -->
								<div class="form-group">
									<label  class="col-sm-3 control-label">Password</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" name="pass" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
									<input type="hidden" name="done" value="yes" />
										<button type="submit" class="btn btn-brown" name="login">
											login
										</button>
									</div>
								</div>
							<!-- Password Area Ends -->
							</form>
						</div>
						</div>
				</div>
			</div>
			<br/>
		</section>
	
	<!-- Registration Section Ends -->
 <!-- GLOBAL SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="js/plugins/popupoverlay/defaults.js"></script>
    <script src="js/plugins/popupoverlay/logout.js"></script>
    <!-- HISRC Retina Images -->
    <script src="js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->

    <!-- THEME SCRIPTS -->
    <script src="js/flex.js"></script>
