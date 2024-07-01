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
	<title>Blogs || Truskin & Hair Clinic</title>
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
						<span>Blogs</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<h1>Blogs</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="blog-isotope">
					<div class="blog-post">
						<div class="post-image">
							<a href="blog-details.php"><img src="images/blog/blog-post-img-1.jpg" alt=""></a>
						</div>
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<h2 class="post-title"><a href="blog-details.php">How to Choose the Best Toothbrush</a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-google-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">Oral hygiene is essential for your overall wellbeing, not just your oral health. In fact, gum disease is a major risk factor for developing certain dangerous health conditions, such as diabetes and heart disease […]</div>
						<div class="mt-2"><a href="blog-details.php" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>
					<!--<div class="blog-post bg-grey">
						<div class="post-image">
							<div class="post-video">
								<iframe src="https://player.vimeo.com/video/1710363?title=0&amp;byline=0&amp;portrait=0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<h2 class="post-title"><a href="blog-post-page.html">FREE Dental Screening & X-Rays</a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-google-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">It’s okay to not brush my teeth tonight. A thought that has crossed almost everyone’s minds at least once or twice. Well, it’s time to stop […]</div>
						<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>
					<div class="blog-post">
						<div class="post-image">
							<div class="slider-gallery post-carousel js-post-carousel">
								<a href="#"><img src="images/blog/blog-post-img-2.jpg" alt=""></a>
								<a href="#"><img src="images/blog/blog-post-img-2-1.jpg" alt=""></a>
								<a href="#"><img src="images/blog/blog-post-img-2-2.jpg" alt=""></a>
							</div>
						</div>
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<h2 class="post-title"><a href="blog-post-page.html">How to Choose the Best Toothbrush</a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-google-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">Oral hygiene is essential for your overall wellbeing, not just your oral health. In fact, gum disease is a major risk factor for developing certain dangerous health conditions, such as diabetes and heart disease […]</div>
						<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>
					<div class="blog-post bg-grey">
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<h2 class="post-title"><a href="blog-post-page.html">Are you brushing your teeth correctly?</a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-google-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">
							<p>Becoming a dentist can result in an abundance of professional possibilities. Besides private practice options, dental school graduates can teach future dentists, travel with international.</p>
							<div class="quote">
								<p>There are over 65 dental schools in the United States accredited by the ADA’s Commission on Dental Accreditation. Each program is meticulously assessed to ensure compliance with quality and content standards. Typically, DMD and DDS programs take four years to complete. Additional years are necessary for dental specialties such as Pediatric Dentistry and Oral and Maxillofacial Surgery.</p>
							</div>
						</div>
						<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>
					<div class="blog-post">
						<div class="post-image">
							<a href="blog-post-page.html"><img src="images/blog/blog-post-img-3.jpg" alt=""></a>
							<div class="post-link-wrapper">
								<div class="vert-wrap">
									<div class="vert"> <a href="#" class="post-link"><i class="icon-link-symbol"></i>www.dentalcliniclink.com</a> </div>
								</div>
							</div>
						</div>
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">The Benefits of Using a Tongue Scraper</a></h2>
									<div class="post-meta">
										<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
										<div class="post-meta-social">
											<a href="#"><i class="icon-facebook-logo"></i></a>
											<a href="#"><i class="icon-twitter-logo"></i></a>
											<a href="#"><i class="icon-google-logo"></i></a>
											<a href="#"><i class="icon-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">You probably think that as long as you brush and floss every day your oral health should be fine. While brushing and flossing is critical for […]</div>
						<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>
					<div class="blog-post bg-grey">
						<div class="post-image">
							<div class="post-music">
								<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/9913211&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
							</div>
						</div>
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<h2 class="post-title"><a href="blog-post-page.html">How to Choose the Best Toothbrush</a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-google-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">Oral hygiene is essential for your overall wellbeing, not just your oral health. In fact, gum disease is a major risk factor for developing certain dangerous health conditions, such as diabetes and heart disease […]</div>
						<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>-->
				</div>
				<div class="clearfix"></div>
				<!--<ul class="pagination justify-content-center">
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><span class="page-link">...</span></li>
					<li class="page-item"><a class="page-link" href="#">15</a></li>
				</ul>-->
			</div>
		</div>
	</div>
	<!--//section-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="row py-1 py-md-2 px-lg-0">
				<div class="col-lg-4 footer-col1">
					<div class="row flex-column flex-md-row flex-lg-column">
						<div class="col-md col-lg-auto">
							<div class="footer-logo">
								<img src="images/footer-logo.png" alt="" class="img-fluid">
							</div>
							<div class="mt-2 mt-lg-0"></div>
							<div class="footer-social d-lg-none">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
								<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="col-md">
							<div class="footer-text mt-1 mt-lg-2">
								<p>To receive email releases, simply provide
									<br>us with your email below</p>
								<form action="#" class="footer-subscribe">
									<div class="input-group">
										<input name="subscribe_mail" type="text" class="form-control" placeholder="Your Email" />
										<span><i class="icon-black-envelope"></i></span>
									</div>
								</form>
							</div>
							<div class="footer-social d-none d-lg-block">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
								<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3>Blog Posts</h3>
					<div class="h-decor"></div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="images/content/footer-post-author-03.jpg" alt="" class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="post.html">Medications & Oral Health</a></div>
							<p>September 26, 2018</p>
						</div>
					</div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="images/content/footer-post-author-01.jpg" alt="" class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="post.html">Smile For Your Health!</a></div>
							<p>August 22, 2018</p>
						</div>
					</div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="images/content/footer-post-author-02.jpg" alt="" class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="post.html">Tooth Fairy Traditions...</a></div>
							<p>July 25, 2018</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3>Our Contacts</h3>
					<div class="h-decor"></div>
					<ul class="icn-list">
						<li><i class="icon-placeholder2"></i>1560 Holden Street San Diego, CA 92139
							<br>
							<a href="contact.html" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Get directions on the map</span><i class="icon-right-arrow"></i></a>
						</li>
						<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">1-800-267-0000</span>, <span class="text-nowrap">1-800-267-0001</span></span></b>
							<br>(24/7 General inquiry)</li>
						<li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row text-center text-md-left">
					<div class="col-sm">Copyright © 2018 <a href="#">DentCo</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
						<a href="#">Privacy Policy</a></div>
					<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">For emergency cases&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<b>1-800-267-0000</b></div>
				</div>
			</div>
		</div>
	</div>
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
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
	<!-- Custom Scripts -->
	<script src="js/app.js"></script>
    <script src="color/color.js"></script>

	<script src="js/app-shop.js"></script>
	<script src="form/forms.js"></script>
	
</body>
</html>
