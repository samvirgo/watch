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
	
	<title> Softech Australia </title>
	
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Google Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- CSS Files -->
	<link href="css/style1.css" rel="stylesheet">
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
					<div class="col-md-9">
						<div id="logo">
							<img alt="" src="img/logo2.jpg " height="100px" width="200px">
						</div>
					</div>
					<!-- Logo Starts -->
					<!-- Search Starts -->
					<div class="col-md-3">
						<div id="search">
						<form action="search.php" method="get" enctype="multipart/form-data">
							<div class="input-group">
								<input type="text" class="form-control input-lg" name="value"
									placeholder="Search"> <span class="input-group-btn">
									<button class="btn btn-lg"  name="search" value="Search">
										<i class="fa fa-search"></i>
									</button> </span>
								
							</div>
								</form>
						</div>
					</div>
					<!-- Search Ends -->
				</div>
			</div>
			<!-- Main Header Ends -->
			<!-- Main Menu Starts -->
			<nav id="main-menu" class="navbar">
				<!-- Nav Header Starts -->
				<div class="navbar-header">
					<button type="button" class="btn btn-navbar navbar-toggle"
						data-toggle="collapse" data-target=".navbar-cat-collapse">
						<span class="sr-only">Toggle Navigation</span> <i
							class="fa fa-bars"></i>
					</button>
				</div>
				<!-- Nav Header Ends -->
				<!-- Navbar Cat collapse Starts -->
				<div class="collapse navbar-collapse navbar-cat-collapse">
					<ul class="nav navbar-nav">

						<li><a href="index.php">home</a>
						</li>
						<li><a href="about.php">about us</a>
						</li>
						<li><a href="service.php">services</a>
						</li>
						<li><a href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
				<!-- Navbar Cat collapse Ends -->
			</nav>
			<!-- Main Menu Ends -->
		</div>
		<!-- Ends -->
	</header>
	<!-- Header Section Ends -->
<!-- Product Search Starts -->
<section class="products-list">
	<div class="container">
		<!-- Heading Starts -->
		<h2 align="center">Your Search Result Is Here</h2>
		<!-- Heading Ends -->
		<hr>
<?php
include("execute/connect.php");
if(isset($_GET['search'])){
  $search_id=$_GET['value'];
  $search_query="select * from ads where
post_price like '%$search_id%'";
  $query = mysql_query($search_query);
  

   
		while($row=mysql_fetch_array($query)){
			
			$post_title=$row['post_title'];
			$post_desc=$row['post_desc'];
			$post_price=$row['post_price'];
			$post_date=$row['post_date'];
			$post_image=$row['post_image'];

			?>
<div class="col-md-3  ">
				<div class="product-col " >
					<div class="image">
						<img src="img/<?php echo $post_image; ?>" width="100%" height="250">
					</div>
					<div class="caption">
						<h3>
						<?php echo $post_title;?>
						</h3>
						

						<div >
						<?php echo $post_desc;?>
						</div>
						<div class="price-new">
							pubished on:
							<?php echo $post_date;?>
						</div>
						<div class="price">
							<span class="price-new">Price: <?php echo $post_price;?> </span>
						</div>
						
					</div>
				
				</div>
				</div>
					<?php }}?>
			</div>
			</section>
<!-- Product Search Ends -->
<!-- Footer Section Starts -->
	<footer id="footer-area">
	<!-- Copyright Area Starts -->
		<div class="copyright">
		<!-- Container Starts -->
			<div class="container">
			<!-- Starts -->
				<p align="center">
					Copyright  2015  by  Softech Watches
				</p>
			<!-- Ends -->
			
			
			</div>
		<!-- Container Ends -->
		</div>
	<!-- Copyright Area Ends -->
	</footer>
<!-- Footer Section Ends -->
<!-- JavaScript Files -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>	
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-hover-dropdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>




