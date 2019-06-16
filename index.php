<!--

Author - Ryan Glynn
Project - Pet Adoption
Date - 10/06/2019

-->
<?php
include ('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adoptable Pets</title>

	<!-- FAVICON -->
	<link href="img/favicon.png" rel="shortcut icon">
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
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>

<body class="body-wrapper">



<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Adopt A Pet Now</h1>
					<p>Help all these special animals to enjoy a new life </p>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a>Dogs</a></li>
								<li class="list-inline-item">
									<a></i>Cats</a>
								</li>
								<li class="list-inline-item">
									<a></i>Rabbits</a>
								</li>
							</ul>
						</div>

					</div>
					<!-- Advance Search -->
					<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
									<form name = "formSearch" onsubmit="return validateForm()" method="POST">
										<div class="form-row">
											<div class="form-group col-md-4">
												<input type="text" class="form-control my-2 my-lg-1" name="product" id="search" placeholder="What are you looking for">

											</div>
											<div class="form-group col-md-3">
												<select name ="options" class="w-100 form-control mt-lg-1 mt-md-2">

													<!-- this is calling values from database to populate the dropdown box -->
													<?php  
													echo "<option name =\"owner1\">Category</option>";
													$sql = mysqli_query($conn, "SELECT DISTINCT an_type FROM pets");
													while ($row = $sql->fetch_assoc()){
														echo "<option>" . $row['an_type'] . "</option>";
													}

													?>
												</select>
											</div>
											<div class="form-group col-md-3">
												<input type="text" class="form-control my-2 my-lg-1" id="petid" name = "petid" placeholder="Pet Identification No ">

											</div>

											<div class="form-group col-md-2 align-self-center">
												<input type = "submit" value="Search Now " class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>

<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Recent Adoptions</h2>
					<p>These recent pets are loving their new homes.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">

				<div class="trending-ads-slide">
					<!-- Query to search cats with names -->
					<?php $sql = "SELECT * FROM pets WHERE an_name != ''";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$varPic  =  $row['an_pic']."p".$row['an_id'].".jpg";
							?>	<div class="col-sm-12 col-lg-4">
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
										
											<img class="card-img-top img-fluid" src="<?php echo $varPic ?>" alt="This Pet is Camera Shy">
										
										</div>
										<div class="card-body">
											<h4 class="card-title text-center"><a href="#"><?php echo $row['an_name']; ?></a></h4>
											
										</div>
									</div>
								</div>
							</div>
							<?php 

						}
					} 
					?>
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
			<div class="col-sm-8 col-12">
				<!-- Copyright -->
				<div class="copyright">
					<p>Copyright © <script>
						var CurrentYear = new Date().getFullYear()
						document.write(CurrentYear)
					</script>. All Rights Reserved, Developed by Ryan Glynn theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
				</div>
			</div>
			<div class="col-sm-4 col-12">
				<!-- Social Icons -->
				<ul class="social-media-icons text-right">
					<li><a class="fa fa-github" href="https://www.github.com" target="_blank"></a></li>
					<li><a class="fa fa-google" href="https://www.google.com" target="_blank"></a></li>
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
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#search").autocomplete({
			source: 'search.php',
			minLength: 0,
		});
	});




</script>
<script>



	function validateForm() {
		var x = document.forms["formSearch"]["options"].value;
		var y = document.forms["formSearch"]["petid"].value;
		var z = document.forms["formSearch"]["product"].value;



//validation - user must select an option
if (y == "" && x == "Category" && z =="")
{
	alert('Please select at least 1 option');
}


if (y != "")
{
	document.forms["formSearch"].action ="validate_id.php";
}
if (z != "")
{
	document.forms["formSearch"].action ="category2.php";
}

if (x != "Category" ) 
{
	document.forms["formSearch"].action ="category.php";

}

}

</script>

</body>

</html>

