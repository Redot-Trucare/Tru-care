<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require('dbConfig.php');
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
	<title>Truskin & Hair Clinic</title>
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
<?php include 'header.php';?>
	<!--//header-->
	<div class="page-content">
		<!--section slider-->
		<div class="section mt-0">
			<div id="mainSliderWrapper">
				<div class="loading-content">
					<div class="inner-circles-loader"></div>
				</div>
				<div class="main-slider mb-0 arrows-white" id="mainSlider" data-slick='{"arrows": true, "responsive":[{"breakpoint": 768,"settings":{"arrows": false, "dots": true }}]}'>
					<div class="slide">
						<div class="img--holder" data-animation="kenburns" data-bg="images/content/slider/slide-01.jpg"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">Look fresh!
											<br><b>Skin Surgery Artistry</b></div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">Let us help you look your best!</div>
										<div class="slide-btn"><a href="services.php" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="img--holder" data-animation="kenburns" data-bg="images/content/slider/slide-02.jpg"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">We Provide
											<br><b>Full Medical Care!</b></div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">Highest standards of customer service</div>
										<div class="slide-btn"><a href="services.php" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section slider-->
		<!--section welcome-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 d-none d-lg-block">
						<img src="images/content/surgery-index-01.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-lg-6">
						<div class="title-wrap text-center text-lg-left mt-15 d-none d-md-block">
							<div class="h-sub">Welcome to Truskin & Hair Clinic</div>
							<h2 class="h1">Meet <span class="theme-color">Dr. Santhana</span></h2>
						</div>
						<div class="row">
							<div class="d-lg-none col-8 col-sm-6 col-lg-5 mx-auto"><img src="images/content/surgery-index-01.jpg" alt="" class="img-fluid"></div>
							<div class="col-sm">
								<div class="title-wrap text-center text-lg-left mt-3 mt-sm-0 d-md-none">
									<div class="h-sub">Welcome to our plastic surgeon clinic</div>
									<h2 class="h1">Meet <span class="theme-color">Dr. Santhana</span></h2>
								</div>
								<div class="text-left mt-3 mt-sm-0">
									<p class="p-lg">We are pleased that you have chosen to explore what we have to offer: aesthetic and reconstructive services that are provided by fellowship-trained plastic surgeons, in a safe and secure environment. Whether you desire minimally invasive facial rejuvenation or perforator flap breast reconstruction, we are committed to providing the highest quality experience, focusing on the unique needs of the plastic surgery patient.</p>
									<p>Plastic surgery provides evaluation and treatment for adult and pediatric patients who are candidates for reconstructive or aesthetic surgery</p>
									<div class="mt-0 mt-lg-2 mt-xl-4"><img src="images/content/signature.png" alt="" class="img-fluid"></div>
									<div class="mt-0 mt-lg-15 mt-xl-3"></div>
									<!--<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">Booking a Visit<i class="icon-right-arrow"></i></a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section welcome-->
		<!--section services-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="title-wrap text-center">
					<h2 class="h1">General Services</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row no-gutters services-box-wrap services-box-wrap-desktop">
					<div class="col-4 order-1">
						<div class="service-box-rotator js-service-box-rotator">
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-man"></i></div>
									<div class="service-box-icon-bg"><i class="icon-man"></i></div>
									<h3 class="service-box-title">Scar Treatment</h3>
									<p>Men of all ages and all walks of life are requesting plastic surgery for cosmetic reasons</p>
									<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-injecting"></i></div>
									<div class="service-box-icon-bg"><i class="icon-injecting"></i></div>
									<h3 class="service-box-title">Glowing Skin</h3>
									<p>Aesthetic plastic surgery can achieve impressive changes. We offer a wide variety of non-surgical procedures</p>
									<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-8 order-2">
						<div class="service-box">
							<div class="service-box-image" data-bg="images/content/service-02.jpg"></div>
							<div class="service-box-caption text-center w-50 ml-auto">
								<h3 class="service-box-title">Acne Treatment</h3>
								<p>Our Clinic is board certified in facial plastic surgery and plastic surgery and specializes in facial cosmetic procedures.</p>
								<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-4 order-2">
						<div class="service-box-rotator js-service-box-rotator">
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-man"></i></div>
									<div class="service-box-icon-bg"><i class="icon-man"></i></div>
									<h3 class="service-box-title">Hair Fall & PRP</h3>
									<p>Men of all ages and all walks of life are requesting plastic surgery for cosmetic reasons</p>
									<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-injecting"></i></div>
									<div class="service-box-icon-bg"><i class="icon-injecting"></i></div>
									<h3 class="service-box-title">Acene Treatment</h3>
									<p>Aesthetic plastic surgery can achieve impressive changes. We offer a wide variety of non-surgical procedures</p>
									<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4 order-2">
						<div class="service-box-rotator js-service-box-rotator">
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-man"></i></div>
									<div class="service-box-icon-bg"><i class="icon-man"></i></div>
									<h3 class="service-box-title">Anti Aging</h3>
									<p>Men of all ages and all walks of life are requesting plastic surgery for cosmetic reasons</p>
									<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-injecting"></i></div>
									<div class="service-box-icon-bg"><i class="icon-injecting"></i></div>
									<h3 class="service-box-title">Hyper Pigmentation</h3>
									<p>Aesthetic plastic surgery can achieve impressive changes. We offer a wide variety of non-surgical procedures</p>
									<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4 order-2">
						<div class="service-box-rotator js-service-box-rotator">
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-man"></i></div>
									<div class="service-box-icon-bg"><i class="icon-man"></i></div>
									<h3 class="service-box-title">Scar Treament</h3>
									<p>Men of all ages and all walks of life are requesting plastic surgery for cosmetic reasons</p>
									<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-injecting"></i></div>
									<div class="service-box-icon-bg"><i class="icon-injecting"></i></div>
									<h3 class="service-box-title">Glowing Skin</h3>
									<p>Aesthetic plastic surgery can achieve impressive changes. We offer a wide variety of non-surgical procedures</p>
									<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-8 order-3 order-lg-4 order-xl-3">
						<div class="service-box">
							<div class="service-box-image" data-bg="images/content/services-home.jpg"></div>
							<div class="service-box-caption text-center w-50 ml-auto">
								<h3 class="service-box-title">Mole & Wart Treatment</h3>
								<p>Cosmetic breast surgery can help you get the breast
									<br> shape & size you want</p>
								<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-4 order-5">
						<div class="service-box-rotator js-service-box-rotator">
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-body"></i></div>
									<div class="service-box-icon-bg"><i class="icon-body"></i></div>
									<h3 class="service-box-title">Body Procedures</h3>
									<p>Body Procedures are dedicated to aesthetic and functional enhancement of your body</p>
									<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-mommy"></i></div>
									<div class="service-box-icon-bg"><i class="icon-mommy"></i></div>
									<h3 class="service-box-title">Anti Aging</h3>
									<p>The goal of a mommy makeover is to restore the shape and appearance of a woman's body after childbearing.</p>
									<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row no-gutters services-box-wrap services-box-wrap-mobile">
					<div class="service-box-rotator js-service-box-rotator">
						<div class="service-box service-box-greybg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><i class="icon-man"></i></div>
								<div class="service-box-icon-bg"><i class="icon-man"></i></div>
								<h3 class="service-box-title">Male Plastic Surgery</h3>
								<p>Men of all ages and all walks of life are requesting plastic surgery for cosmetic reasons</p>
								<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
						<div class="service-box service-box-greybg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><i class="icon-injecting"></i></div>
								<div class="service-box-icon-bg"><i class="icon-injecting"></i></div>
								<h3 class="service-box-title">Non-Surgical Procedures</h3>
								<p>Aesthetic plastic surgery can achieve impressive changes. We offer a wide variety of non-surgical procedures</p>
								<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
						<div class="service-box service-box-greybg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><i class="icon-body"></i></div>
								<div class="service-box-icon-bg"><i class="icon-body"></i></div>
								<h3 class="service-box-title">Anti Aging</h3>
								<p>Body Procedures are dedicated to aesthetic and functional enhancement of your body</p>
								<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
						<div class="service-box service-box-greybg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><i class="icon-mommy"></i></div>
								<div class="service-box-icon-bg"><i class="icon-mommy"></i></div>
								<h3 class="service-box-title">Mommy Makeover</h3>
								<p>The goal of a mommy makeover is to restore the shape and appearance of a woman's body after childbearing.</p>
								<div class="btn-wrap"><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section services-->
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">See the difference</div>
					<h2 class="h1">Why Choose Us?</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle icn-text-circle--sm"><i class="icon-medicine"></i></div>
							<div>
								<h5 class="icn-text-title">High Standard of surgery</h5>
								<p>Our surgeons are fellows of the most rigorous and academically recognized accreditation body for surgeons, and have completed accredited fellowship training with high standards of quality.</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-team"></i></div>
							<div>
								<h5 class="icn-text-title">Committed Surgical Team</h5>
								<p>Our surgeons' expertise covers the broad scope of general, vascular and trauma surgery. This includes surgery of the breast, cancers, colon and rectum, endocrine system, and skin diseases.</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle icn-text-circle--sm"><i class="icon-syringe"></i></div>
							<div>
								<h5 class="icn-text-title">Modern Equipment</h5>
								<p>Our practice is equipped with the latest technology that allows us to perform the most modern treatments. We only use the premium brand products from the leading manufacturers.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<!--<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters flex-wrap flex-md-nowrap">
					<div class="col-md-7 col-lg-6">
						<div class="services-wrap1 float-right">
							<div class="service-tab-banner d-md-none">
								<img src="images/content/banner-right.jpg" alt="">
							</div>
							<div class="title-wrap text-center text-sm-left mt-2 mt-md-0">
								<h2 class="h1">Most <span class="theme-color">Popular Procedures</span></h2>
							</div>
							<p class="text-center text-sm-left">We are approach plastic surgery with precision and artistic vision to reveal each patient's unique beauty.</p>
							<div class="row">
								<div class="col-sm-6">
									<ul class="circle-list">
										<li>Breast Augmentation</li>
										<li>Breast Lift</li>
										<li>Liposuction</li>
										<li>Mommy Makeover</li>
										<li>Tummy Tuck</li>
										<li>Brazilian Butt Lift</li>
									</ul>
								</div>
								<div class="col-sm-6 mt-1 mt-md-0">
									<ul class="circle-list">
										<li>Eyelid surgery</li>
										<li>Facelift</li>
										<li>Neck Lift</li>
										<li>Rhinoplasty</li>
										<li>BOTOX® Cosmetic</li>
										<li>Injectables</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-6 service-tab-banner-alt d-none d-md-block align-items-center bg-cover bg-left" data-bg="images/content/banner-right.jpg">
					</div>
				</div>
			</div>
		</div>-->
		<!--//section-->
		<!--section achieved-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Clinic figures</div>
					<h2 class="h1">What Have We Achieved</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row d-block js-counter-carousel">
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-hand"></i></div>
							<div class="counter-box-number"><span class="count" data-to="15" data-speed="1500">0</span>+</div>
							<div class="decor"></div>
							<div class="counter-box-text">Years of experience</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-tooth-1"></i></div>
							<div class="counter-box-number"><span class="count" data-to="10" data-speed="1500">0</span>K</div>
							<div class="decor"></div>
							<div class="counter-box-text">Improved Smiles</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-team"></i></div>
							<div class="counter-box-number"><span class="count" data-to="50" data-speed="1500">0</span></div>
							<div class="decor"></div>
							<div class="counter-box-text">Surgical Specialists</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-placeholder3"></i></div>
							<div class="counter-box-number"><span class="count" data-to="4" data-speed="1500">0</span></div>
							<div class="decor"></div>
							<div class="counter-box-text">Our Locations</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section achieved-->
		<!--section faq-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-cover align-items-end" style="background-image: url(images/content/banner-left.jpg)"></div>
					<div class="col-xl-6">
						<div class="faq-wrap">
							<div class="text-center text-md-left">
								<div class="title-wrap">
									<h2 class="h1">Patient <span class="theme-color">Information</span></h2>
								</div>
							</div>
							<div id="faqAccordion1" class="faq-accordion mt-2 mt-lg-3" data-children=".faq-item">
								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span><span>What is the difference between cosmetic and reconstructive surgery?</span></a>
									<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
										<div>
											<p>Cosmetic surgery is performed to reshape normal structures of the body in order to improve appearance and self-esteem. Cosmetic surgery is usually not covered by health insurance because it is elective.</p>
										</div>
									</div>
								</div>
								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span><span>What is the recovery from cosmetic surgery like?</span></a>
									<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
										<div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ipsum, voluptatum. Pariatur expedita facere fugit, doloribus reiciendis.</p>
										</div>
									</div>
								</div>
								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span><span>Where will my procedure be performed?</span></a>
									<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
										<div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ipsum, voluptatum. Pariatur expedita facere fugit, doloribus reiciendis.</p>
										</div>
									</div>
								</div>
								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4" aria-expanded="false" class="collapsed"><span>4.</span><span>What are the possible risks?</span></a>
									<div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
										<div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ipsum, voluptatum. Pariatur expedita facere fugit, doloribus reiciendis repellendus.</p>
										</div>
									</div>
								</div>
							</div>
							<a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>Ask Question</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section faq-->
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Our Succes Storeies</div>
					<h2 class="h1">Before and After Gallery</h2>
					<div class="h-decor"></div>
				</div>
				<div class="gallery-hover gallery-hover-carousel js-gallery-hover-carousel">
					<div>
						<div class="gallery-hover-item style-1">
							<div class="gallery-hover-item-before" data-bg="images/content/hair-1.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Hair Fall & PRP
										</div>
										<p>Hair Fall & PRP surgery increases  gel implants, saline implants or in some cases, fat transfer.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">Before</div>
										<div class="gallery-hover-item-name">Helen Armstrong</div>
									</div>
								</div>
							</div>
							<div class="gallery-hover-item-after" data-bg="images/content/hair-2.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Hair Fall & PRP
										</div>
										<p>Hair Fall & PRP increases hair growth using silicone gel implants, saline implants or in some cases, fat transfer.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">After</div>
										<div class="gallery-hover-item-name">Helen Armstrong</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="gallery-hover-item style-2">
							<div class="gallery-hover-item-before" data-bg="images/content/surgery-before-after-2-1.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Chin Lift
										</div>
										<p>A chin lift is a correctional procedure to remove wrinkled and sagging skin from the chin area.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">Before</div>
										<div class="gallery-hover-item-name">Kimberly Jones</div>
									</div>
								</div>
							</div>
							<div class="gallery-hover-item-after" data-bg="images/content/surgery-before-after-2-2.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Chin Lift
										</div>
										<p>A chin lift is a correctional procedure to remove wrinkled and sagging skin from the chin area.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">After</div>
										<div class="gallery-hover-item-name">Kimberly Jones</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="gallery-hover-item style-3">
							<div class="gallery-hover-item-before" data-bg="images/content/surgery-before-after-3-1.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Restriction
										</div>
										<p>surgery is used to physically limit the amount of food the stomach can hold, which limits the number of calories you can eat.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">Before</div>
										<div class="gallery-hover-item-name">Amanda Smith</div>
										<div class="d-none d-md-block">
											<table>
												<tr>
													<td>Scale wt.:</td>
													<td><b>165 lbs</b></td>
												</tr>
												<tr>
													<td>Body Fat:</td>
													<td><b>37.20</b></td>
												</tr>
												<tr>
													<td>Abdomen:</td>
													<td><b>33.6</b></td>
												</tr>
												<tr>
													<td>Fatmass:</td>
													<td><b>61.43</b></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="gallery-hover-item-after" data-bg="images/content/surgery-before-after-3-2.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Weight Loss
										</div>
										<p>Weight-loss (bariatric) surgery helps you lose weight and lowers your risk of medical problems associated with obesity.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">After</div>
										<div class="gallery-hover-item-name">Amanda Smith</div>
										<div class="d-none d-md-block">
											<table>
												<tr>
													<td>Scale wt.:</td>
													<td><b>110 lbs</b></td>
												</tr>
												<tr>
													<td>Body Fat:</td>
													<td><b>28.1</b></td>
												</tr>
												<tr>
													<td>Abdomen:</td>
													<td><b>29.2</b></td>
												</tr>
												<tr>
													<td>Fatmass:</td>
													<td><b>50.43</b></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section special offers-->
		<!--<div class="section" id="specialOffer">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">For Our Dear Clients</div>
					<h2 class="h1">Special Offers</h2>
					<div class="h-decor"></div>
				</div>
				<div class="special-carousel js-special-carousel row">
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<div class="corner-ribbon-wrap">
									<div class="corner-ribbon">
										$750<span>OFF</span>
									</div>
								</div>
								<img src="images/content/special-photo-01.jpg" alt="">
							</div>
							<div class="special-card-caption">
								<div class="special-card-txt1">Love Yourself</div>
								<div class="special-card-txt2">Offer</div>
								<div class="special-card-txt3">Butt Lift or Tummy Tuck
									<br>or 360 Liposuction</div>
								<div><a href="#" class="btn"><i class="icon-right-arrow"></i><span>Schedule</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<div class="corner-ribbon-wrap">
									<div class="corner-ribbon">
										10%<span>OFF</span>
									</div>
								</div>
								<img src="images/content/special-photo-00.jpg" alt="">
							</div>
							<div class="special-card-caption">
								<div class="special-card-txt1">Acne</div>
								<div class="special-card-txt2">Treatment</div>
								<div class="special-card-txt3">All inclusive include implants
									<br>and all fees for specific dates</div>
								<div><a href="contact.php" class="btn"><i class="icon-right-arrow"></i><span>Contact now</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="images/content/special-photo-03.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">Whitening</div>
								<div class="special-card-txt2">Laser Teeth</div>
								<div class="special-card-txt3">
									Tooth whitening<br>and Home Bleaching</div>
								<div><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="images/content/special-photo-04.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">Porcelain</div>
								<div class="special-card-txt2">Veneer</div>
								<div class="special-card-txt3">6 Teeth or more in the same
									<br>jaw, upper or lower front</div>
								<div><a href="services.php" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<!--//section special offers-->
		<!--section testimonials-->
		<div class="section bg-grey-dark py-0">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-7 col-lg-6 mt-2 mt-lg-0">
						<div class="reviews-wrap-alt ml-auto d-flex flex-column justify-content-center">
							<div class="title-wrap text-center text-md-right">
								<div class="h-sub">What People Says</div>
								<h2 class="h1">Patient <span class="theme-color">Testimonials</span></h2>
							</div>
							<div class="js-reviews-carousel reviews-carousel text-center text-md-right">
								<div class="review">
									<div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
									<p class="review-text">You guys are all amazing! Everyone I have met at your office is kind, thoughtful, and listens to me. Everyone is so friendly from the time you walk in the door to the time you leave the office. </p>
									<p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
								</div>
								<div class="review">
									<div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
									<p class="review-text">I Am very impressed with you all as well as being highly proficient is absolutely adorable. I feel so relaxed in her capable hands and hope to be her patient for a very long time! You are a fantastic team and I feel very privileged to come to you all!!!</p>
									<p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
								</div>
								<div class="review">
									<div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
									<p class="review-text">You guys are all amazing! Everyone I have met at your office is kind, thoughtful, and listens to me. Everyone is so friendly from the time you walk in the door to the time you leave the office. </p>
									<p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-6">
						<div class="reviews-author-carousel">
							<div>
								<div class="img-before"><img src="images/content/single-testimonials-author-1-2.jpg" alt=""><span>BEFORE</span></div>
								<div class="img-after"><img src="images/content/single-testimonials-author-1-1.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section testimonials-->
		<!--section blog posts -->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">From the Blog</h2>
					<div class="h-decor"></div>
				</div>
				<div class="blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-3 mb-0 row">
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-details.php"><img src="images/content/news-01.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">17<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-details.php">The Simpler Solution That Lasts</a></h2>
								</div>
							</div>
							<div class="post-teaser">When patients visit our practice from places like Saratoga Springs, NY, they often express that laser hair removal can sound daunting or excessive ...</div>
							<div class="mt-2"><a href="blog-details.php" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-details.php"><img src="images/content/news-02.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">22<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-details.php">Trending Now: Thighlighting</a></h2>
								</div>
							</div>
							<div class="post-teaser">No longer is liposuction just used on the abdomen. Patients who come to us from Albany and beyond appreciate the versatility of liposuction — and it can also treat...</div>
							<div class="mt-2"><a href="blog-details.php" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-details.php"><img src="images/content/news-03.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">26<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-details.php">Our Spa One Bridal Packages</a></h2>
								</div>
							</div>
							<div class="post-teaser">There is no one more interested in looking beautiful than a bride. Photographs from a wedding day are designed to be timeless, cherished in frames in the homes of...</div>
							<div class="mt-2"><a href="blog-details.php" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-details.php"><img src="images/content/news-01.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">17<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-details.php">The Simpler Solution That Lasts</a></h2>
								</div>
							</div>
							<div class="post-teaser">When patients visit our practice from places like Saratoga Springs, NY, they often express that laser hair removal can sound daunting or excessive ...</div>
							<div class="mt-2"><a href="blog-details.php" class="btn btn-sm btn-hover-fill">Read more</a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-details.php"><img src="images/content/news-02.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">22<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-details.php">Trending Now: Thighlighting</a></h2>
								</div>
							</div>
							<div class="post-teaser">No longer is liposuction just used on the abdomen. Patients who come to us from Albany and beyond appreciate the versatility of liposuction — and it can also treat...</div>
							<div class="mt-2"><a href="blog-details.php" class="btn btn-sm btn-hover-fill">Read more</a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-details.php"><img src="images/content/news-03.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">26<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-details.php">Our Spa One Bridal Packages</a></h2>
								</div>
							</div>
							<div class="post-teaser">There is no one more interested in looking beautiful than a bride. Photographs from a wedding day are designed to be timeless, cherished in frames in the homes of...</div>
							<div class="mt-2"><a href="blog-details.php" class="btn btn-sm btn-hover-fill">Read more</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section blog posts -->
		<!--section-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="banner-center banner-center--p-sm bg-cover" style="background-image: url(images/content/banner-center-03.jpg)">
					<div class="banner-center-caption text-center">
						<div class="banner-center-text1">Trust Your Appearance to Us</div>
						<div class="banner-center-text4">Choose The Right Procedure For You</div>
						<a href="#" class="btn btn-white btn-hover-fill mt-2 mt-sm-3 mt-lg-5" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Request an appointment</span><i class="icon-right-arrow"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section call us-->
		<!--<div class="section mt-5">
			<div class="container">
				<div class="banner-call">
					<div class="row no-gutters">
						<div class="col-sm-6 col-lg-7 d-flex align-items-center justify-content-center">
							<div class="text-center">
								<h2>Looking for <br class="d-lg-none"> a <span class="theme-color">Plastic Surgeon?</span></h2>
								<div class="h-decor"></div>
								<p class="mt-sm-1 mt-lg-4 text-left text-sm-center">We're always accepting new patients! We believe in providing the best possible care to all our existing patients and welcome new patients to sample the service we have to offer. </p>
								<div class="mt-2 mt-lg-4">
									<a href="#" class="banner-call-phone"><i class="icon-telephone"></i>1-800-267-0000</a>
								</div>
							</div>
						</div>
						<div class="col-sm-5 col-lg-5 col-xl-4 mt-3 mt-md-0">
							<img src="images/content/banner-callus.jpg" class="shift-right-1" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<!--//section call us-->
	</div>
	<!--footer-->
	<?php include 'footer.php'; ?>
	<!--//footer-->
	<div class="backToTop js-backToTop">
		<i class="icon icon-up-arrow"></i>
	</div>
	<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Ask a Question</h3>
						<form class="mt-15" id="questionForm" method="post" novalidate>
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
								<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*" />
							</div>
							<div class="input-group">
								<span>
									<i class="icon-email2"></i>
								</span>
								<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*" />
							</div>
							<div class="input-group">
								<span>
									<i class="icon-smartphone"></i>
								</span>
								<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone" />
							</div>
							<textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
							<div class="text-right mt-2">
								<button type="submit" class="btn btn-sm btn-hover-fill">Ask Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
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