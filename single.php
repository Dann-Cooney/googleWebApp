<!--

Author - Ryan Glynn
Project - Pet Adoption
Date - 10/06/2019

-->


<?php

	// instead of using the same code on every file, we use this line to make a connection to the database.
include ('dbconnect.php');
session_start();

$petid = $_SESSION["sess_id"];


?>


<!DOCTYPE html>
<html lang="en">
<head>

	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pet</title>

	<!-- FAVICON -->
	<link href="img/favicon.png" rel="shortcut icon">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
	<link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	<link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
	<link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">
	
	<section class="page-search">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<a href="index.php"><span><i class="fa fa-home"> HOME</a></i></span>
				</div>
			</div>
		</div>
	</section>
<!--===================================
=            Store Section            =
====================================-->

<?php 

$sql = "SELECT  * FROM pets WHERE an_id = '$petid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$varPic  =  $row['an_pic']."p".$row['an_id'].".jpg";
		?><section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
				<div class="product-details">
					<h1 class="product-title"><?php echo $row['an_name']; ?></h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-paw"></i><a href=""><?php echo $row['an_type']; ?></a></li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Breed<a href=""><?php echo $row['an_bre']; ?></a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Gender<a href=""><?php echo $row['an_gen'];  ?></a></li>
						</ul>
					</div>

					<!-- product slider -->
					<div class="product-slider">
						
							<img class="img-fluid w-100" src="<?php echo $varPic ?>" alt="">
						
					</div>

				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget price text-center">
						<h4><?php echo $row['an_id']; ?></h4>
						
					</div>
					<!-- User Profile widget -->
					<div class="widget user text-center">
						<img class="rounded-circle img-fluid mb-5 px-5" src="images/user/user-thumb.jpg" alt="">
						<h4><a href="">Joe Bloggs</a></h4>
						<p class="member-time"><?php echo $row['own_add']; ?></p>
						<ul class="list-inline mt-20">
							<li class="list-inline-item"><a href="" class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">Contact</a></li>
						</ul>
					</div>
					
				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
</section>
<?php  
	}
} 

 ?>

<!--============================
=            Footer            =
=============================-->
<!-- Footer Bottom -->
<footer class="footer-bottom">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-12">
				<!-- Copyright -->
				<div class="copyright">
					<p>Copyright © <script>
						var CurrentYear = new Date().getFullYear()
						document.write(CurrentYear)
					</script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
				</div>
			</div>
			<div class="col-sm-6 col-12">
				<!-- Social Icons -->
				<ul class="social-media-icons text-right">
					<li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
					<li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
					<li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
					<li><a class="fa fa-vimeo" href=""></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Container End -->
	<!-- To Top -->
	<div class="top-to">
		<a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
	</div>
</footer>

<!-- JAVASCRIPTS -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
<!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>

</body>

</html>