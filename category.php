
<!--

Author - Ryan Glynn
Project - Pet Adoption
Date - 10/06/2019

-->

<?php

// instead of using the same code on every file, we use this line to make a connection to the database.
include ('dbconnect.php');
session_start();

$dropDownVal = $_POST['options'];
$_SESSION["favcolor"] = $dropDownVal;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Results</title>
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
	<!-- Font Awesome -->
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
	<link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	<!-- Fancy Box -->
	<link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
	<link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
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
	<section class="section-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search-result bg-gray">
						<h2>Results For "<?php echo $_SESSION["favcolor"] ?>"</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="category-sidebar">
						<div class="widget category-list">
							<h4 class="widget-header">All Breeds</h4>
							<ul class="category-list">
								<?php $sql = "SELECT  DISTINCT an_bre FROM pets WHERE an_type = '$dropDownVal'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
    // output data of each row
									while($row = $result->fetch_assoc()) {

										?><li><?php echo $row['an_bre']; ?></a></li><?php 

									}
								} 
								?>


							</ul>
						</div>


					</div>
				</div>
				<div class="col-md-9">
					<div class="category-search-filter">
						<div class="row">
							<div class="col-md-6">
								<strong><?php echo $_SESSION["favcolor"] ?>s that need a home.</strong>
								
							</div>
							
						</div>
					</div>
					<div class="product-grid-list">
						<div class="row mt-30">



							<?php $sql = "SELECT   * FROM pets WHERE an_type = '$dropDownVal'";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
    // output data of each row
								while($row = $result->fetch_assoc()) {
									$varPic  =  $row['an_pic']."p".$row['an_id'].".jpg";
									?>


									<div class="col-sm-12 col-lg-4 col-md-6">
										<!-- product card -->
										<div class="product-item bg-light">
											<div class="card">
												<div class="thumb-content">
													<!-- <div class="price">$200</div> -->
													<a href="#">
														<img class="card-img-top img-fluid" src="<?php echo $varPic ?>" alt="Pet Camera Shy">
													</a>
												</div>
												<div class="card-body">
													<h4 class="card-title"><a href="single.html"><?php echo $row['an_name']; ?></a></h4>
													<ul class="list-inline product-meta">
														<li class="list-inline-item">
															<a href="#"><i class="fa fa-folder-open-o"></i><?php echo $row['an_bre']; ?></a>
														</li>
														<li class="list-inline-item">
															<a href="#"><i class="fa fa-calendar"></i><?php echo $row['an_gen']; ?></a>
														</li>
													</ul>
													<p class="card-text">
														<b>Animal ID</b> - <?php echo $row['an_id']; ?><br>
														<b>Colour</b>  -<?php echo $row['an_color']; ?><br>
														<b>Owner Address</b> - <?php echo $row['own_add']; ?><br>
													</p>
												</div>
											</div>
										</div>
									</div>


									<?php 

								}
							} 
							?>












						</div>




						<div class="pagination justify-content-center">
							<nav aria-label="Page navigation example">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
											<span class="sr-only">Previous</span>
										</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
											<span class="sr-only">Next</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>
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