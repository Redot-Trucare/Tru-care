<?php
session_start();
require("dbConfig.php");
require("functions.php");
require("showcart.php");
?>
<DOCTYPE html>
<html lang="en">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="websmirno.site">
	<meta name="format-detection" content="telephone=no">
	<title>Services || Truskin & Hair Clinic</title>
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
    <link href="css/style-0.css" rel="stylesheet">
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
						<span>Services</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color">What We Offer</div>
					<h1>Our Services</h1>
					<div class="h-decor"></div>
					<div class="text-center mt-4">
						<p>With years of experience and backed by state-of-the-art technology,<br>Truskin & Hair Clinic is dedicated to helping you be your best self</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row col-equalH">
					<?php
									include_once 'dbConfig.php'; 
									//$blo_id = $_GET['id'];
									$sql = $db->query("select * from services ORDER BY id ASC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="service-details.php?id=<?php echo $row['id'];?>"><img src="Admin/services-thumbnail/<?php echo $row['thumb_nail']; ?>" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="service-details.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h5>
							<div class="h-decor"></div>
							<p><?php echo substr($row['description'],0,75); ?>...</p>
							<!--<ul class="circle-list">
								<li>Barbed Suture Lift</li>
								<li>Blepharoplasty</li>
								<li>Face Lift – Full</li>
								<li>Facial Implants</li>
								<li>Facial Liposuction</li>
								<li>Hair Restoration</li>
								<li>Laser Facial Resurfacing</li>
								<li>Rhinoplasty</li>
							</ul>-->
						</div>
					</div>
					<?php } }?>
					<!--<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="service-page.html"><img src="images/content/services-02.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="service-page.html">Breast Procedures</a></h5>
							<div class="h-decor"></div>
							<p>Cosmetic breast surgery can help you get the breast shape & size you want</p>
							<ul class="circle-list">
								<li>Breast Augmentation</li>
								<li>Breast Lift</li>
								<li>Breast Reduction</li>
								<li>Male Breast Reduction</li>
								<li>Revision Breast Surgery</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="service-page.html"><img src="images/content/services-03.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="service-page.html">Male Plastic Surgery</a></h5>
							<div class="h-decor"></div>
							<p>Men of all ages and all walks of life are requesting plastic surgery for cosmetic reasons</p>
							<ul class="circle-list">
								<li>Abdominal &amp; Muscle Etching</li>
								<li>Buttock Implants</li>
								<li>Calf Augmentation</li>
								<li>Chin Implant</li>
								<li>Dermal Fillers</li>
								<li>Facelift</li>
								<li>Laser Treatments</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="service-page.html"><img src="images/content/services-04.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="service-page.html">Mommy Makeover</a></h5>
							<div class="h-decor"></div>
							<p>The goal of a mommy makeover is to restore the shape and appearance of a woman's body after childbearing.</p>
							<ul class="circle-list">
								<li>Breast augmentation</li>
								<li>Breast lift</li>
								<li>Buttock augmentation</li>
								<li>Liposuction</li>
								<li>Tummy tuck</li>
								<li>Vaginal rejuvenation</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="service-page.html"><img src="images/content/services-05.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="service-page.html">Non-Surgical Procedures</a></h5>
							<div class="h-decor"></div>
							<p>Aesthetic plastic surgery can achieve impressive changes. We offer a wide variety of non-surgical procedures</p>
							<ul class="circle-list">
								<li>Non-Surgical Body Contouring</li>
								<li>Botulinum Toxin</li>
								<li>Chemical Peels</li>
								<li>Fillers</li>
								<li>Laser Skin Rejuvenation</li>
								<li>Vein Treatments</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="service-page.html"><img src="images/content/services-06.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="service-page.html">Body Procedures</a></h5>
							<div class="h-decor"></div>
							<p>Body Procedures are dedicated to aesthetic and functional enhancement of your body</p>
							<ul class="circle-list">
								<li>Abdominoplasty</li>
								<li>Body Lift</li>
								<li>Buttocks Implants</li>
								<li>Calf Implants</li>
								<li>Labia Minora Reduction</li>
								<li>Fat Transfer</li>
								<li>Liposuction</li>
							</ul>
						</div>
					</div>-->
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
