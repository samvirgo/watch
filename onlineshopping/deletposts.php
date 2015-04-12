<?php
session_start();
if($_SESSION['auth']!=1){
	header("location:admin.php?sin='yes'");
}
?>

<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Softech Australia</title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <link href="css/plugins/pace/pace.css" rel="stylesheet">
    <script src="js/plugins/pace/pace.js"></script>

    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="css/plugins/messenger/messenger.css" rel="stylesheet">
    <link href="css/plugins/messenger/messenger-theme-flat.css" rel="stylesheet">
    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="css/plugins/morris/morris.css" rel="stylesheet">
    <link href="css/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="css/plugins/datatables/datatables.css" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="css/style.css" rel="stylesheet">
     <link href="css/style1.css" rel="stylesheet">
          <link href="css/style2.css" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">

    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="css/demo.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- begin TOP NAVIGATION -->
        <nav class="navbar-top" >

            <!-- begin BRAND HEADING -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
                    <i class="fa fa-bars"></i> Menu
                </button>
            </div>
           

           <div class="nav-top">

                <!-- begin LEFT SIDE WIDGETS -->
                <ul class="nav navbar-left">
                    <li class="tooltip-sidebar-toggle">
                        <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
                <!-- end LEFT SIDE WIDGETS -->
 <!-- begin HOME/LOGOUT ACTIONS -->
                <ul class="nav navbar-right">
                    <li><a href="index.php" ><i class="fa fa-fw fa-home"></i> Home
								</a></li>
								  <li><a href="admin.php" ><i class="fa fa-fw fa-power-off"></i> Log
								Out</a></li>
                                       </ul>
                  <!-- end HOME/LOGOUT ACTIONS -->
                <!-- /.nav -->

            </div>
            <!-- /.nav-top -->
        </nav>
        <!-- /.navbar-top -->
        <!-- end TOP NAVIGATION -->

        <!-- begin SIDE NAVIGATION -->
       <nav class="navbar-side" >
			<div class="navbar-collapse sidebar-collapse collapse">
				<ul id="side" class="nav navbar-nav side-nav">
					<!-- begin SIDE NAV USER PANEL -->
					<li class="side-user hidden-xs">
       <br><br>    <br><br> <img class="img-circle img-logout" src="img/osman1.jpg" alt="">
						<p class="welcome">
							<i class="fa fa-key"></i> Logged in as
						</p>
						<p class="name tooltip-sidebar-logout">
							Osman <span class="last-name">Ayubi</span> <a
								style="color: inherit" class="logout_open" href="#logout"
								data-toggle="tooltip" data-placement="top" title="Logout"><i
								class="fa fa-sign-out"></i> </a>
						</p>
						<div class="clearfix"></div>
					</li>
					<!-- end SIDE NAV USER PANEL -->
					
					<!-- begin DASHBOARD LINK -->
					<li><a href="dashboard.php"> <i class="fa fa-dashboard"></i> Dashboard
					</a>
					</li>
					<li><a href="insert.php"><i class="fa fa-fw fa-plus-circle"></i>
					 insert new post</a></li>
					<li><a href="viewposts.php"><i class="fa fa-fw fa-eye"></i> view
							posts</a></li>
					<li><a href="editposts.php"><i class="fa fa-fw fa-edit"></i> edit
							posts</a></li>
					<li><a href="deletposts.php"><i class="fa fa-fw fa-trash-o"></i>
							delete posts</a></li>
					<li><a href="message.php"><i class="fa fa-fw  fa-envelope-o"></i>
							Messages</a></li>
							<?php
							include("execute/connect.php");

							$query="select* from about_us";
							$run=mysql_query($query);
							while($row=mysql_fetch_array($run)){

								$post_id=$row['post_id'];
								$post_title=$row['post_title'];
								$post_desc=$row['post_desc'];


								?>
					<li><a href="editabout.php?edit=<?php echo $post_id; ?>"><i
							class="fa fa-fw fa-edit"></i> edit about us info</a></li>

					<li><a href="editservices.php?edit=<?php echo $post_id; ?>"><i
							class="fa fa-fw fa-edit"></i> edit services info</a></li>
							<?php }?>
					<li><a href="admin.php"><i class="fa fa-fw  fa-power-off"></i> log
							out</a></li>
					<!-- end DASHBOARD LINK -->





				</ul>
				<!-- /.side-nav -->
			</div>
			<!-- /.navbar-collapse -->
		</nav>
        <!-- /.navbar-side -->
        <!-- end SIDE NAVIGATION -->

		<!-- begin MAIN PAGE CONTENT -->
		<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							Delete Posts
						</h1>
						<ol class="breadcrumb">
							<li><i class="fa fa-dashboard"></i> <a href="dashboard.php">Dashboard</a>
							</li>
							<li class="active"><i class="fa fa-trash-o"></i> Delete Posts</li>
						</ol>
					</div>
				</div>
				<!-- /.row -->
				<div class="table-responsive">
					<table
						class="table table-striped table-bordered table-hover "
						id="map-table-example">
						<thead>
							<tr>
								<td colspan="8" align="center" bgcolor="#54677a"><h1>Delete Your
										Posts</h1></td>
							</tr>
							<tr>
								<th>Post No</th>
								<th>Post Title</th>
								<th>Post Date</th>
								<th>Description</th>
								<th>Price</th>
								<th>Post Image</th>
								<th>Delete Post</th>
							</tr>
						</thead>
						<tbody>



						<?php
						include("execute/connect.php");

						$query="SELECT * FROM ads order by post_id desc";
						$run=mysql_query($query);
						while($row=mysql_fetch_array($run)){

							$post_id=$row['post_id'];
							$post_date=$row['post_date'];
							$post_title=$row['post_title'];
							$post_desc=$row['post_desc'];
							$post_price=$row['post_price'];
							$post_image=$row['post_image'];

							?>
							<tr align="center">

								<td><?php echo $post_id;   ?></td>

								<td><?php echo $post_title;   ?></td>

								<td><?php echo $post_date;   ?></td>
								<td><?php echo $post_desc;   ?></td>
								<td><?php echo $post_price;   ?></td>

								<td><img src="img/<?php echo $post_image; ?>" width="150" height="150"></td>


								<td><i class="fa fa-fw fa-trash-o"></i><a
									href="delete.php?del=<?php echo $post_id; ?>">Delete</a></td>


							</tr>
							<?php }?>

						</tbody>

					</table>
					<br>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->

	

	<!-- GLOBAL SCRIPTS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/plugins/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
	<script src="js/plugins/popupoverlay/defaults.js"></script>
	<!-- Logout Notification Box -->
	<div id="logout">
		<div class="logout-message">
			<img class="img-circle img-logout" src="img/osman2.jpg" alt="">
			<!-- Footer Section Starts -->
<footer id="footer-area">
	<!-- Copyright Area Starts -->
	<div class="copyright">
		<!-- Container Starts -->
		<div class="container">
			<!-- Starts -->
			<p align="center"> Copyright  2015  by  Softech Watches </p>
			<!-- Ends -->


		</div>
		<!-- Container Ends -->
	</div>
	<!-- Copyright Area Ends -->
</footer>
<!-- Footer Section Ends -->
		</div>
	</div>
	<!-- /#logout -->
	<!-- Logout Notification jQuery -->
	<script src="js/plugins/popupoverlay/logout.js"></script>
	<!-- HISRC Retina Images -->
	<script src="js/plugins/hisrc/hisrc.js"></script>

	<!-- PAGE LEVEL PLUGIN SCRIPTS -->

	<!-- THEME SCRIPTS -->
	<script src="js/flex.js"></script>

</body>



</html>
