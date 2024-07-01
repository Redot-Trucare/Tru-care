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
	<title>Gallery || Truskin & Hair Clinic</title>
	<!-- Stylesheets -->
	<link href="vendor/slick/slick.css" rel="stylesheet">
	<link href="vendor/animate/animate.min.css" rel="stylesheet">
	<link href="vendor/twentytwenty/twentytwenty.css" rel="stylesheet">
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
						<span>Gallery</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color"></div>
					<h1>Gallery</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="text-center mb-3 mb-md-4 max-900">
					<p>We love to see our patients smile! Here are some of our best before-and-after pictures,<br>all in one fantastic Smile Gallery</p>
				</div>
				<div class="filters-by-category mb-2 mb-lg-4">
					<ul class="option-set justify-content-center" data-option-key="filter">
						<li><a href="#filter" data-option-value="*" class="selected">All</a></li>
						<li><a href="#filter" data-option-value=".category1">Crowns</a></li>
						<li><a href="#filter" data-option-value=".category2">Bridges</a></li>
						<li><a href="#filter" data-option-value=".category3">Dental Implants</a></li>
						<li><a href="#filter" data-option-value=".category4">Cosmetic Filling</a></li>
						<li><a href="#filter" data-option-value=".category5">Lumineers</a></li>
						<li><a href="#filter" data-option-value=".category6">Dentures</a></li>
						<li><a href="#filter" data-option-value=".category7">Porcelain Veneers</a></li>
						<li><a href="#filter" data-option-value=".category8">Diamond Polish</a></li>
					</ul>
				</div>
				<div class="gallery-wrap">
					<div class="loading-content">
						<div class="inner-circles-loader"></div>
					</div>
					<div class="gallery-smiles gallery-isotope" id="gallery">
						<div class="gallery-item category2 category7">
							<img src="images/content/gallery/smile-01.jpg" alt="" />
							<div class="after-label">After</div>
							<div class="before-label">Before</div>
							<div class="gallery-caption">
								<h5>Braces</h5>
								<p>This patients' teeth were corrected and straightened with almost invisible clear aligners.</p>
								<p>Dentist: <b>Dr. Gerald Gleaves</b></p>
							</div>
						</div>
						<div class="gallery-item category1 category5 category8">
							<img src="images/content/gallery/smile-02.jpg" alt="" />
							<div class="after-label">After</div>
							<div class="before-label">Before</div>
							<div class="gallery-caption">
								<h5>Hygiene Therapy</h5>
								<p>Our 'stain removal' treatment removed years of discolouration from tea, coffee and tobacco.</p>
								<p>Dentist: <b>Dr. Pamela Knaack</b></p>
							</div>
						</div>
						<div class="gallery-item category2 category4 category3">
							<img src="images/content/gallery/smile-03.jpg" alt="" />
							<div class="after-label">After</div>
							<div class="before-label">Before</div>
							<div class="gallery-caption">
								<h5>Braces</h5>
								<p>This patients' teeth were corrected and straightened with almost invisible clear aligners.</p>
								<p>Dentist: <b>Dr. Gerald Gleaves</b></p>
							</div>

						</div>
						<div class="gallery-item category4 category8 category6">
							<img src="images/content/gallery/smile-04.jpg" alt="" />
							<div class="after-label">After</div>
							<div class="before-label">Before</div>
							<div class="gallery-caption">
								<h5>Hygiene Therapy</h5>
								<p>Our 'stain removal' treatment removed years of discolouration from tea, coffee and tobacco.</p>
								<p>Dentist: <b>Dr. Pamela Knaack</b></p>
							</div>
						</div>
						<div class="gallery-item category3 category7">
							<img src="images/content/gallery/smile-05.jpg" alt="" />
							<div class="after-label">After</div>
							<div class="before-label">Before</div>
							<div class="gallery-caption">
								<h5>Braces</h5>
								<p>This patients' teeth were corrected and straightened with almost invisible clear aligners.</p>
								<p>Dentist: <b>Dr. Gerald Gleaves</b></p>
							</div>
						</div>
						<div class="gallery-item category4 category7 category3">
							<img src="images/content/gallery/smile-06.jpg" alt="" />
							<div class="after-label">After</div>
							<div class="before-label">Before</div>
							<div class="gallery-caption">
								<h5>Hygiene Therapy</h5>
								<p>Our 'stain removal' treatment removed years of discolouration from tea, coffee and tobacco.</p>
								<p>Dentist: <b>Dr. Pamela Knaack</b></p>
							</div>
						</div>
						<div class="gallery-item category1 category8">
							<img src="images/content/gallery/smile-07.jpg" alt="" />
							<div class="after-label">After</div>
							<div class="before-label">Before</div>
							<div class="gallery-caption">
								<h5>Braces</h5>
								<p>This patients' teeth were corrected and straightened with almost invisible clear aligners.</p>
								<p>Dentist: <b>Dr. Gerald Gleaves</b></p>
							</div>
						</div>
						<div class="gallery-item category2 category6">
							<img src="images/content/gallery/smile-08.jpg" alt="" />
							<div class="after-label">After</div>
							<div class="before-label">Before</div>
							<div class="gallery-caption">
								<h5>Hygiene Therapy</h5>
								<p>Our 'stain removal' treatment removed years of discolouration from tea, coffee and tobacco.</p>
								<p>Dentist: <b>Dr. Pamela Knaack</b></p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--//section-->
		<!--section call us-->
		<div class="section mt-5">
			<div class="container">
				<div class="banner-call">
					<div class="row no-gutters">
						<div class="col-md-7 d-flex align-items-center">
							<div class="text-center w-100">
								<h2>Want the Same <span class="theme-color">Wonderful Smile?</span></h2>
								<div class="h-decor"></div>
								<p class="mt-sm-1 mt-lg-4 text-left text-sm-center">We provide advanced, trusted dental care delivered by a dedicated team in our modern practice.</p>
								<div class="mt-2 mt-lg-4 text-center">
									<a href="#" class="banner-call-phone"><i class="icon-telephone"></i>1-800-267-0000</a>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-lg-5 mt-3 mt-md-0 text-center text-lg-left">
							<img src="images/content/banner-callus-2.jpg" alt="" class="shift-right">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--section call us-->
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
	<script src="vendor/twentytwenty/jquery.event.move.js"></script>
	<script src="vendor/twentytwenty/jquery.twentytwenty.js"></script>
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
	<!-- Custom Scripts -->
	<script src="js/app.js"></script>
    <script src="color/color.js"></script>

	<script src="js/app-shop.js"></script>
	<script src="form/forms.js"></script>
	
</body>
</html>
