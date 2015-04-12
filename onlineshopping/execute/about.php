<!doctype html>
<html >
<head>
<meta charset="utf-8">
<title>Softech Australia</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Google Web Fonts -->
<link
	href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700"
	rel="stylesheet" type="text/css">
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>
<link
	href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
	rel="stylesheet">

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
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="img/fav-144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="img/fav-114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="img/fav-72.png">
<link rel="apple-touch-icon-precomposed" href="images/fav-57.png">
<link rel="shortcut icon" href="images/fav.png">

</head>
<body>
<?php

		include("execute/connect.php");
		$select_posts="select * from about_us";
		$run_posts=mysql_query($select_posts);

		while($row=mysql_fetch_array($run_posts)){
			$post_id= $row['post_id'];
			$post_title=$row['post_title'];
			$post_desc=$row['post_desc'];
			

			?>
	<!-- Main Container Starts -->
	<div id="main-container" class="container">
		<div class="row">
		<div class="col-lg-12 text-center">
					<img src="img/About.jpg" height="30%" width="100%">

				</div>
				<br>
				
			<!-- Primary Content Starts -->
			<div class="col-md-9">
				<h2><?php echo $post_title;?></h2>
				<p><?php echo $post_desc;?></p>
			</div>
				<?php } ?>
				<!-- Sidebar Starts -->
				<div class="col-md-3">
				
				
				<!-- Bestsellers Links Starts -->
				
					<div class="product1-col">
						<marquee direction="down"><div class="image">
							<img src="img/81.jpg" width="100%" height="250" />
						</div>
						<br>
						<div class="image">
							<img src="img/82.jpg" width="100%" height="250"/>
						</div>
						<br>
						<div class="image">
							<img src="img/80.jpg" width="100%" height="250" />
						</div>
						</marquee>
					</div>
				<!-- Bestsellers Links Ends -->
				</div>
			<!-- Sidebar Ends -->
		</div>
	</div>
</body>
</html>