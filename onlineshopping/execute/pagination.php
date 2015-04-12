
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
<section class="products-list">
	<div class="container">
		<!-- Heading Starts -->
		<h2 class="product-head">Latest Products</h2>
		<!-- Heading Ends -->
	
		
<?php

		include("execute/connect.php");
		$sql=mysql_query("SELECT COUNT(post_id) FROM ads");
$row=mysql_fetch_array($sql);
$rows=$row[0];
$pages_rows=8;
$last=ceil($rows/$pages_rows);
if($last<1){
	$last=1;
}
$pagenum=1;
if(isset($_GET['pn'])){
	$pagenum=preg_replace('#[^0-9]#', '', $_GET['pn']);
}
if($pagenum<1){
	$pagenum=1;
}elseif ($pagenum>$last){
	$pagenum=$last;
}
$limit='LIMIT '.($pagenum-1)*$pages_rows.','.$pages_rows;
$sql="SELECT * FROM ads order by post_id desc $limit";
$query=mysql_query($sql);
$pagination='';
if ($last!=1){
	if($pagenum>1){
		$pre=$pagenum-1;
		$pagination.='<li><a href="index.php?pn='.$pre.'">&laquo;</a></li>';
		
		for ($i=$pagenum-4; $i<$pagenum; $i++){
			if($i>0){
				$pagination.="<li><a href='index.php?pn=".$i."'>".$i."</a></li>";
			}
		}
	}
	$pagination.="<li class='active'><a>".$pagenum."</a></li>";
	for ($i=$pagenum+1;$i<=$last;$i++){
		$pagination.="<li><a href='index.php?pn=".$i."'>".$i."</a></li>";
		if($i>$pagenum+4){
			break;
		}
	}
	if($pagenum!=$last){
		$next=$pagenum+1;
		$pagination.="<li><a href='index.php?pn=".$next."'>&raquo;</a></li>";
	}
}

		while($row=mysql_fetch_array($query)){
			$post_id= $row['post_id'];
			$post_title=$row['post_title'];
			$post_date=$row['post_date'];

			$post_desc=$row['post_desc'];
			$post_price=$row['post_price'];
			$post_image=$row['post_image'];

			?>
	<!-- Products Row Starts -->
		
			<div class="col-md-3 dark ">
				<div class="product-col " >
					<div class="image">
						<img src="img/<?php echo $post_image; ?>" width="100%" height="250">
					</div>
					<div class="caption">
						<h3>
						<?php echo $post_title;?>
						</h3>
						

						<div class="price-new">
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
				<?php }  ?>
				<div class="text-center col-md-12">
				<ul class="pagination"><?php 
				echo $pagination;
				?></ul></div>
		</div>
		<!-- Products Row Ends -->
	

</section>
</body>
</html>