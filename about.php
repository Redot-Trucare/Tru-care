<?php
session_start();
require("dbConfig.php");
require("functions.php");
require("showcart.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="websmirno.site">
	<meta name="format-detection" content="telephone=no">
	<title>About Us || Truskin & Hair Clinic</title>
	<!-- Stylesheets -->
	<link href="vendor/slick/slick.css" rel="stylesheet">
	<link href="vendor/animate/animate.min.css" rel="stylesheet">
	<link href="icons/style.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="color/color.css" rel="stylesheet">
<!--Favicon-->
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true&amp;libraries=places"></script>
</head>

<body class="shop-page">
	
	<!--<div class="settings-panel">
		<div class="settings-panel-buy-now">
			<a href="https://themeforest.net/item/medin-medical-clinic-html-template/22564438?s_rank=1" target="_blank" class="settings-panel-btn btn-primary">
				<img src="color/icon-cart.png" alt=""> Purchase Now
			</a>
		</div>
		<div class="settings-panel-colorswatch js-settings-panel-item">
			<div class="settings-panel-btn btn-primary js-settings-panel-btn">
				<img src="color/icon-settings.png" alt="">
			</div>
			<div class="settings-panel-inside">
				<a href="#" class="colorswatch1 active js-swatch-color"></a>
				<a href="#" class="colorswatch2 js-swatch-color" data-color="1"></a>
				<a href="#" class="colorswatch3 js-swatch-color" data-color="2"></a>
				<a href="#" class="colorswatch4 js-swatch-color" data-color="3"></a>
				<a href="#" class="colorswatch5 js-swatch-color" data-color="4"></a>
				<a href="#" class="colorswatch6 js-swatch-color" data-color="5"></a>
				<div class="clearfix"></div>
				<div class="title">Color</div>
			</div>
		</div>
		<div class="settings-panel-layout js-settings-panel-item">
			<div class="settings-panel-btn btn-primary js-settings-panel-btn">
				<img src="color/icon-layout.png" alt="">
			</div>
			<div class="settings-panel-inside">
				<a href="http://websmirno.site/medin/html/dentco-html/"><img src="color/screen-layout-1.png" alt=""></a>
				<a href="index-2.html" class="active"><img src="color/screen-layout-2.png" alt=""></a>	<a href="http://websmirno.site/medin/html/medol-html/"><img src="color/screen-layout-3.png" alt=""></a>
                <a href="http://websmirno.site/medin/html/medera-html/"><img src="color/screen-layout-4.png" alt=""></a>        <a href="http://websmirno.site/medin/html/medeye-html/"><img src="color/screen-layout-5.png" alt=""></a>
        <a href="http://websmirno.site/medin/html/medlab-html/"><img src="color/screen-layout-6.png" alt=""></a><a href="http://websmirno.site/medin/html/weightloss-html/"><img src="color/screen-layout-7.png" alt=""></a>
			</div>
		</div>
	</div>-->
<!--header-->
<?php include 'header.php'; ?>
<!--//header-->
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.php">Home</a>
						<span>About Us</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color">Our dentists working to your smile</div>
					<h1>About Our Clinic</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 text-center text-lg-left pr-md-4">
						<img src="images/content/about-01.jpg" class="w-100" alt="">
						<div class="row mt-3">
							<div class="col-6">
								<img src="images/content/about-03.jpg" class="w-100" alt="">
							</div>
							<div class="col-6">
								<img src="images/content/about-04.jpg" class="w-100" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6 mt-3 mt-lg-0">
						<p>Welcome to Trucare – Your Premier Destination for Advanced Skin and Hair Aesthetics</p>
                        <p>At Trucare, we are dedicated to helping you achieve your aesthetic goals by providing cutting-edge treatments and personalized care for your skin and hair. Our clinic combines the latest innovations in dermatology and trichology with a holistic approach to enhance your natural beauty and boost your confidence.</p>
						<!--<p>Come and experience dentistry carried out a little differently in our Private Practice. A practice where you will:</p>
					    <ul class="marker-list-md">
							<li>Be involved in your care and treatment choices</li>
							<li>Be welcomed and feel relaxed and cared for</li>
							<li>Appreciate the well qualified, experienced team</li>
							<li>Want the best dentistry available</li>
						</ul>-->
						<div class="mt-3 mt-md-7"></div>
						<h3>Mission / Vision</h3>
						<div class="mt-0 mt-md-4"></div>
						<p>Our mission is to deliver exceptional aesthetic services that promote the health and beauty of your skin and hair. We are committed to offering the highest standard of care, utilizing state-of-the-art technology and the expertise of our skilled professionals.</p>
						<div class="mt-3 mt-md-7"></div>
						<h3>Our Commitment to Excellence</h3>
						<div class="mt-0 mt-md-4"></div>
						<p>At Trucare, we are committed to delivering outstanding results and ensuring the satisfaction and well-being of our clients. We continuously strive to stay at the forefront of aesthetic medicine, bringing you the best possible care and results.</p>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<!--<div class="section">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 bg-grey">
						<div class="max-670 mx-lg-auto px-15">
							<div class="title-wrap">
								<h2 class="h1">Our <span class="theme-color">Advantages</span></h2>
							</div>
							<div class="mt-lg-5"></div>
							<div class="row">
								<div class="col-sm-7">
									<ul class="marker-list-md">
										<li>Specialists and Dentists as One Team</li>
										<li>Initial Dental Assessment</li>
										<li>All Types of Dental Services</li>
										<li>Safety by Credentials</li>
										<li>Dental Implant Experience</li>
										<li>Innovation</li>
										<li>3D Imaging Center</li>
									</ul>
								</div>
								<div class="col-sm-5 mt-1 mt-sm-0">
									<ul class="marker-list-md">
										<li>On-site Laboratory</li>
										<li>“Same Day” Dentistry</li>
										<li>“Same Day” Dental Implants</li>
										<li>Innovative Clinic Design</li>
										<li>Complimentary Consultations</li>
										<li>Insurance and Financing</li>
										<li>Services Cost</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 banner-left bg-full" style="background-image: url(images/content/banner-right.jpg)"></div>
				</div>
			</div>
		</div>-->
		<!--//section-->
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Motivation is easy</div>
					<h2 class="h1">Our Services</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-simple"><i class="icon-innovation"></i></div>
							<div>
								<h5 class="icn-text-title">Advanced Cosmetology</h5>
								<p>From acne treatment and scar reduction to anti-aging solutions and skin rejuvenation, we provide comprehensive care to enhance your skin's health and appearance.</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-simple"><i class="icon-compassion"></i></div>
							<div>
								<h5 class="icn-text-title">Expert Trichology</h5>
								<p>Our hair care services include diagnosis and treatment of hair loss, scalp treatments, hair transplant services, and management of scalp disorders.</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-simple"><i class="icon-integrity"></i></div>
							<div>
								<h5 class="icn-text-title">Aesthetic Enhancements</h5>
								<p>We offer a variety of aesthetic treatments such as chemical peels, laser hair removal, PRP therapy, and customized facials to revitalize your skin and hair.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="banner-center bg-cover" style="background-image: url(images/content/banner-center.jpg)">
					<div class="banner-center-caption text-center">
						<div class="banner-center-text1">Get the Smile You've Always Wanted!</div>
						<div class="banner-center-text2">We strive to provide the highest quality dental treatment at reasonable fees</div>
						<a href="#" class="btn btn-white mt-5" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Request an Appointment</span><i class="icon-right-arrow"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!--section-->
		<!--section-->
		<!--<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="title-wrap">
							<h2 class="h1">Our Office </h2>
							<div class="h-decor"></div>
						</div>
						<p>Our dental office in is a state of the art dental facility equipped with the newest technology, capable of handling all of your dental needs. All of our operatories are equipped with intraoral cameras that are able to show us, and you, the precise treatment you might attain on a television screen.</p>
						<div class="mt-4"></div>
						<h3>Amenities</h3>
						<div class="mt-lg-4"></div>
						<ul class="marker-list-md">
							<li>TV’s in each treatment room</li>
							<li>Complimentary coffee, Juice</li>
							<li>Wireless Internet</li>
							<li>Warm lavender towels</li>
						</ul>
					</div>
					<div class="col-lg-8 mt-4 mt-lg-0">
						<div class="slider-gallery">
							<ul class="slider-gallery-main list-unstyled js-slider-gallery-main">
								<li><img src="images/content/slider-gallery-00.jpg" alt=""></li>
								<li><img src="images/content/slider-gallery-01.jpg" alt=""></li>
								<li><img src="images/content/slider-gallery-02.jpg" alt=""></li>
								<li><img src="images/content/slider-gallery-03.jpg" alt=""></li>
								<li><img src="images/content/slider-gallery-04.jpg" alt=""></li>
								<li><img src="images/content/slider-gallery-05.jpg" alt=""></li>
							</ul>
							<ul class="slider-gallery-thumbs list-unstyled js-slider-gallery-thumbs">
								<li><img src="images/content/slider-gallery-00-sm.jpg" alt=""></li>
								<li><img src="images/content/slider-gallery-01-sm.jpg" alt=""></li>
								<li><img src="images/content/slider-gallery-02-sm.jpg" alt=""></li>
								<li><img src="images/content/slider-gallery-03-sm.jpg" alt=""></li>
								<li><img src="images/content/slider-gallery-04-sm.jpg" alt=""></li>
								<li><img src="images/content/slider-gallery-05-sm.jpg" alt=""></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<!--//section-->
	</div>
	<!--footer-->
	<?php include 'footer.php'; ?>
	<!--//footer-->
	<div class="backToTop js-backToTop">
		<i class="icon icon-up-arrow"></i>
	</div>
	<div class="modal modal-form fade" id="modalBookingForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Book an Appointment</h3>
						<form class="mt-15" id="bookingForm" method="post" novalidate>
							<div class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
								<input type="text" name="bookingname" class="form-control" autocomplete="off" placeholder="Your Name*" />
							</div>
							<div class="row row-xs-space mt-1">
								<div class="col-sm-6">
									<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
										<input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Your Email*" />
									</div>
								</div>
								<div class="col-sm-6 mt-1 mt-sm-0">
									<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
										<input type="text" name="bookingphone" class="form-control" autocomplete="off" placeholder="Your Phone" />
									</div>
								</div>
							</div>
							<div class="row row-xs-space mt-1">
								<div class="col-sm-6">
									<div class="input-group">
										<span>
											<i class="icon-birthday"></i>
										</span>
										<input type="text" name="bookingage" class="form-control" autocomplete="off" placeholder="Your age" />
									</div>
								</div>
							</div>
							<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-tooth"></i>
								</span>
								<select name="bookingservice" class="form-control">
									<option selected="selected" disabled="disabled">Select Service</option>
									<option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
									<option value="General Dentistry">General Dentistry</option>
									<option value="Orthodontics">Orthodontics</option>
									<option value="Children`s Dentistry">Children`s Dentistry</option>
									<option value="Dental Implants">Dental Implants</option>
									<option value="Dental Emergency">Dental Emergency</option>
								</select>
							</div>
							<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
								<div class="datepicker-wrap">
									<input name="bookingdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
								</div>
							</div>
							<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
								<div class="datepicker-wrap">
									<input name="bookingtime" type="text" class="form-control timepicker" placeholder="Time">
								</div>
							</div>
							<textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
							<div class="text-right mt-2">
								<button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Vendors -->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
	<script src="vendor/cookie/jquery.cookie.js"></script>
	<script src="vendor/bootstrap-datetimepicker/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="vendor/popper/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="vendor/waypoints/sticky.min.js"></script>
	<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="vendor/slick/slick.min.js"></script>
	<script src="vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
	<script src="vendor/countTo/jquery.countTo.js"></script>
	<script src="vendor/form-validation/jquery.form.js"></script>
	<script src="vendor/form-validation/jquery.validate.min.js"></script>
	<!-- Custom Scripts -->
	<script src="js/app.js"></script>
    <script src="color/color.js"></script>

	<script src="js/app-shop.js"></script>
	<script src="form/forms.js"></script>
	
</body>
</html>
