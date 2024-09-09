<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Turbo Trekkerz</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Natural Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- home -->
	<div id="home">
		<!-- banner -->
		<div class="banner_w3lspvt">
			<!-- nav -->
			<div class="nav_w3ls pt-4 pb-3 text-center">
				<?php include("vmenu.php"); ?>
			</div>
			<!-- //nav -->
			<!-- banner slider -->
			<div id="homepage-slider" class="st-slider">
				<input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
				<input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
				<input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
				<input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
				<div class="images">
					<div class="images-inner">
						<div class="image-slide">
							<div class="banner-w3ls-1">

							</div>
						</div>
						<div class="image-slide">
							<div class="banner-w3ls-2">

							</div>
						</div>
						<div class="image-slide">
							<div class="banner-w3ls-3">

							</div>
						</div>
					</div>
				</div>
				<div class="labels">
					<div class="fake-radio">
						<label for="slide1" class="radio-btn"></label>
						<label for="slide2" class="radio-btn"></label>
						<label for="slide3" class="radio-btn"></label>
					</div>
				</div>
				<!-- banner-text -->
				<div class="banner-text">
					<fieldset>
						<legend>
							<a href="index.html" class="logo">Turbo Trekkerz </a>
						</legend>
						<div class="banner-sub-txt">
							<h1 class="banner-txt">Nature is the art of God</h1>
							<p class="banner-txt1">Ut enim ad minim veniam, quis nostrud exercitation
								ullamco laboris
								nisi ut aliquip ex ea commodo consequat.</p>
							<a href="about.html" class="btn button-style mt-5">Read More</a>
						</div>
					</fieldset>
				</div>
				<!-- //banner-text -->
			</div>
			<!-- //banner slider -->
		</div>
		<!-- //banner -->
	</div>
	<!-- //home -->

	<!-- about -->
	<!-- services -->
	<section class="services text-center py-5" id="services">
		<div class="container">
			<h3 class="tittle text-center">Our Services</h3>
			<p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">Sed do eiusmod tempor incididunt ut labore et dolore
				magna
				aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
			<div class="row ser-sec-1">
				<?php
				$q = "select * from  category";
				$rs = mysqli_query($cn, $q);
				while ($row = mysqli_fetch_array($rs)) {
				?>
					<div class="col-md-4 ">
						<!-- Icon ends here -->
						<div class="service-content">
							<h5 class="py-5"> <?php print $row['c_name']; ?></h5>
						</div>
					</div>
				<?php } ?>

			</div>




		</div>
		</div>
	</section>
	<!-- //services -->




	<!-- middle section -->
	<div class="text py-5 text-center">
		<div class="container py-xl-5 py-lg-3">
			<div class="row py-4">
				<div class="col-md-12">
					<h5 class="text-wh text-capitalize font-weight-bold let mb-4">Nature always wears the colors of the
						spirit.</h5>
					<p>Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.
						Vestibulum at dui
						nunc. Nulla viverra pharetra sem, eget pulvinar neque pharetra ac int. lorem ipsum Vestibulum.
						placerat placerat
						dolor. Vestibulum at dui nunc. Nullam eu elit neque lectus.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //middle section -->
	<?php include("footer.php"); ?>