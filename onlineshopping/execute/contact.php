<!doctype html>
<html lang="en">
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
	href="font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

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
<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<img src="img/Contact1.png" height="30%" width="90%">

				</div>
			</div>
			<br>
			
			
	<?php
include("execute/connect.php");

 		
if(isset($_POST['submit'])){
   $post_name=$_POST['name'];
   $post_email=$_POST['email'];
   $post_message=$_POST['message'];
    $post_date=date('d-m-y');


if($post_name=="" or $post_email=="" or $post_message=="" ){
echo "<script>alert('any of the feild is empty')</script>";
exit();
}
else{

$insert_query="insert into contact(post_name,post_email,post_message,post_date) values
('$post_name','$post_email','$post_message','$post_date')";

if(mysql_query($insert_query)){
	 echo "<center><h1>Your message has been sent!</h1></center>";
          

}

}

}


?>
<br>
<br>
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-6">
					<form name="sentMessage" id="contactForm" action="contact.php" method="post" >
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control"
										placeholder="Your Name *" name="name" required
										data-validation-required-message="Please enter your name.">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<input type="email" class="form-control"
										placeholder="Your Email *" name="email" required
										data-validation-required-message="Please enter your email address.">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Your Message *"
										name="message" rows="6" cols="50"
										data-validation-required-message="Please enter a message." ></textarea>
									<p class="help-block text-danger"></p>
								</div>
								<div class="col-md-12 text-center">
								<div id="success"></div>
								<button type="submit" class="btn btn-brown" name="submit">
											Send Your Message
										</button>
										<br>
										
										<br>
										<br>
										<br>
							</div>
							</div>
								
							
							
							
						</div>
					</form>
					
				</div>
				<div class="col-md-5">
							<h4>
							Address:</h4>
                         <p> Sellmoor Limited</p>
                          <p>79 Middlesex Street</p>
                          <p>Australia</p>
                           <p> Europe<p>

                          <p> <i class="fa fa-phone"></i>  Tel: 0061405541500
							</p>
							 <p><i class="fa fa-envelope"></i>  Email: omarayubi@gmail.com <p>
							
							</div>
			</div>
		</div>
	</section>
		</body>
		</html>