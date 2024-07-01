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
	<title>Contact Us || Truskin & Hair Clinic</title>
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
			<!-<div class="contact-map" id="googleMapContact">-->
			<iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1965.0680481375116!2d78.14869698199337!3d9.922621634448678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s279%2F2%2C%20VSR%20Complex%2C%20Thasildar%20Nagar%2C%20Anna%20Nagar%2C%20Madurai-%20625020!5e0!3m2!1sen!2sin!4v1719821340428!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<!--</div>-->
		</div>
		<!--//section-->
		<!--section-->
		<div class="section mt-0 bg-grey">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="title-wrap">
							<h5>Clinic Location</h5>
							<div class="h-decor"></div>
						</div>
						<ul class="icn-list-lg">
							<li><i class="icon-placeholder2"></i> 279/2, VSR Complex, Thasildhar Nagar, Anna Nagar, Madurai- 625020
							</li>
						</ul>
					</div>
					<div class="col-md mt-3 mt-md-0">
						<div class="title-wrap">
							<h5>Contact Info</h5>
							<div class="h-decor"></div>
						</div>
						<ul class="icn-list-lg">
							<li><i class="icon-telephone"></i><span class="text-nowrap">+91 9363910053</span>
								</span>
							</li>
							<li><i class="icon-black-envelope"></i><a href="mailto:truskin@gmail.com">truskin@gmail.com</a></li>
						</ul>
					</div>
					<div class="col-md mt-3 mt-md-0">
						<div class="title-wrap">
							<h5>Working Time</h5>
							<div class="h-decor"></div>
						</div>
						<ul class="icn-list-lg">
							<li><i class="icon-clock"></i>
								<div>
									<div class="d-flex"><span>Mon-Thu</span><span class="theme-color">08:00 - 20:00</span></div>
									<div class="d-flex"><span>Friday</span><span class="theme-color">07:00 - 22:00</span></div>
									<div class="d-flex"><span>Saturday</span><span class="theme-color">08:00 - 18:00</span></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md col-lg-5">
						<div class="pr-0 pr-lg-8">
							<div class="title-wrap">
								<h2>Get In Touch With Us</h2>
								<div class="h-decor"></div>
							</div>
							<div class="mt-2 mt-lg-4">
								<p>For general questions, please send us a message and we’ll get right back to you. You can also call us directly to speak with a member of our service team or insurance expert.</p>
								<p class="p-sm">Fields marked with a * are required.</p>
							</div>
							<div class="mt-2 mt-md-5"></div>
							<h5>Stay Connected</h5>
							<div class="content-social mt-15">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
								<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md col-lg-6 mt-4 mt-md-0">
						<form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
							<div class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<div>
								<input type="text" class="form-control" name="name" placeholder="Your name*">
							</div>
							<div class="mt-15">
								<input type="text" class="form-control" name="email" placeholder="Email*">
							</div>
							<div class="mt-15">
								<input type="text" class="form-control" name="phone" placeholder="Your Phone">
							</div>
							<div class="mt-15">
								<textarea class="form-control" name="message" placeholder="Message"></textarea>
							</div>
							<div class="mt-3">
								<button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Send message</span><i class="icon-right-arrow"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
	</div>
	<!--footer-->
	<?php include 'footer.php'; ?>
	<!--//footer-->
	<div class="backToTop js-backToTop">
		<i class="icon icon-up-arrow"></i>
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
