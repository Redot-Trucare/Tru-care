<?php


session_start();
require("dbConfig.php");
require("functions.php");
require("showcart.php");

$blog_id = $_GET['id'];

$prodcountcheck = $db->query("SELECT View_count FROM services Where id='$blog_id'");
$countrow = $prodcountcheck->fetch_assoc();
if($countrow['View_count'] == ''){
	$prodcountsql = "update services set view_count='1' where id=$blog_id";
        mysqli_query($db,$prodcountsql);
	} else {
       //$count = $countrow['view_count'];
        $prodcountsql = "update services set View_count='" .$countrow['View_count'] . "' + '1' where id=$blog_id";
        mysqli_query($db,$prodcountsql);
        //echo $prodcountsql;
	}
                       $result = $db->query("SET NAMES utf8");//the main trick
                       $prodcatsql = $db->query("SELECT * FROM services Where id='$blog_id'"); 
                       if($prodcatsql->num_rows > 0)
{
while($blorow = $prodcatsql->fetch_assoc())
 
{
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
	<title><?php echo $blorow['title'];?>  || Truskin & Hair Clinic</title>
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
						<a href="index.html">Home</a>
						<a href="services.php">Services</a>
						<span><?php echo $blorow['title'];?></span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container mt-6">
				<div class="row">
					<div class="col-md">
						<ul class="services-nav flex-column flex-nowrap">
							<!--<li class="nav-item">
								<a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Cosmetic Dentistry</a>
								<div class="collapse show" id="submenu1">
									<ul class="flex-column nav">
										<li class="nav-item"><a class="nav-link" href="#">Orthodontics</a></li>
										<li class="nav-item"><a class="nav-link active" href="#">White Fillings</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Porcelain Veneers</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Teeth Whitening</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Inlays & Onlays</a></li>
									</ul>
								</div>
							</li>-->
							<?php
									include_once 'dbConfig.php'; 
									//$blo_id = $_GET['id'];
									$sql = $db->query("select title,id from services ORDER BY id ASC");
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
							<li class="nav-item"><a class="nav-link <?php if($row['id'] == $blog_id)  echo "active";?>" href="service-details.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></li>
							        <?php }}?>
							<!--<li class="nav-item"><a class="nav-link" href="#">Children`s Dentistry</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Dental Implants</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Orthodontics</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Dental Emergency</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Periodontics</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Dental Surgery</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Dental Crowns & Bridges</a></li>-->
						</ul>
						<!--<div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
							<div class="col-auto col-sm col-md-auto">
								<div class="contact-box contact-box-1">
									<h5 class="contact-box-title">Working Time</h5>
									<ul class="icn-list">
										<li><i class="icon-clock"></i>Mon-Thu 08:00 - 20:00
											<br>Friday 07:00 - 22:00
											<br>Saturday 08:00 - 18:00</li>
									</ul>
								</div>
							</div>
							<div class="col-auto col-sm col-md-auto">
								<div class="contact-box contact-box-2">
									<h5 class="contact-box-title">Contact Info</h5>
									<ul class="icn-list">
										<li><i class="icon-telephone"></i>
											<div class="d-flex flex-wrap">
												<span>Phone:&nbsp;&nbsp;</span>
												<span>1-800-267-0000<br>
												1-800-267-0001</span></div>
										</li>
										<li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="question-box mt-3">
							<h5 class="question-box-title">Ask the Experts</h5>
							<form id="questionForm" method="post" novalidate>
								<div class="successform">
									<p>Your message was sent successfully!</p>
								</div>
								<div class="errorform">
									<p>Something went wrong, try refreshing and submitting the form again.</p>
								</div>
								<input type="text" class="form-control" name="name" placeholder="Your name*">
								<input type="text" class="form-control" name="email" placeholder="E-mail*">
								<input type="text" class="form-control" name="phone" placeholder="Phone">
								<textarea class="form-control" name="message" placeholder="Question*"></textarea>
								<button type="submit" class="btn btn-sm btn-hover-fill mt-15"><i class="icon-right-arrow"></i><span>Ask Now</span><i class="icon-right-arrow"></i></button>
							</form>
						</div>-->
					</div>
					<div class="col-md-8 col-lg-9 mt-4 mt-md-0">
						<div class="title-wrap">
							<h1><?php echo $blorow['title'];?></h1></div>
						<div class="service-img">
							<img src="Admin/services/<?php echo $blorow['image'];?>" class="img-fluid" alt="">
						</div>
						<div class="pt-2 pt-md-4">
							<p><?php echo $blorow['description'];?></p>
							<!--<p>As dentists we believe prevention is always better than cure and will always encourage and help you to look after your teeth so you don't develop tooth decay in the first place. If you do have decay and need a filling then we recommend white fillings as a good solution that is both aesthetic and functional.</p>
							<div class="mt-3 mt-lg-6"></div>
							<h3>Why Dental Fillings Are Important</h3>
							<div class="mt-0 mt-lg-4"></div>
							<p>Patients often experience tooth decay because of inappropriate nutritional habits, poor oral care at home or genetics leading to many cavities. Before creating a treatment plan, the dental professional will extensively review the patient’s medical history and their daily routine in efforts to detect any underlying issues such as medical ailments that may be the reason for exaggerated decay formation. According to collected information, a proper course of treatment is chosen including suitable dental materials most beneficial to the individual needs of each patient.</p>
							<div class="mt-3 mt-lg-6"></div>
							<h3>The Procedure of Tooth Filling</h3>
							<div class="mt-0 mt-lg-4"></div>
							<p>Although each procedure varies subtly, there are some basic guidelines to treat cavities, and they are followed by all dental professionals.</p>
							<div class="mt-3"></div>
							<ul class="numbered-list-lg">
								<li>The patient is anesthetized using local anesthesia such as Carbocaine for short procedures, Lidocaine for medium length sessions, and Marcaine for multiple fillings. Patients with feelings of anxiety may be offered Nitrous Oxide (laughing gas) for the duration of the treatment. Only in extreme cases, the patient is given IV sedation or general anesthesia and may be referred to a more suitable dental setting such as a hospital.</li>

								<li>The area to be treated is secured by latex sheet that protects the tooth and keeps it dry during the procedure. It also prevents the debris from entering the oral region keeping the patient comfortable. For multiple fillings, when the treatment may require extended period of time, a bite block is used to help the patient keep their mouth open in a relaxed position without any strain on the jaw muscles.</li>

								<li>In case of composite fillings, the shade is chosen to closely mimic the appearance of the surrounding dentition.</li>

								<li>The decay is removed using a high-speed handpiece, slow-speed handpiece, laser or the combination of all three devices. The prepared surface may be etched with an appropriate solution to remove any remaining bacteria and create a porous layer for adhesive purposes. Amalgam or resin material is placed in small increments using hand instruments. The biting surface is then checked and adjusted as necessary.</li>
							</ul>
							<div class="mt-3"></div>
							<p>Filling placement is necessary to treat cavities and prolong the longevity of the natural teeth. With today’s technology continuously improving, new methods are developed to benefit the patients and ensure their positive oral health for a lifetime.</p>-->
							<!--<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
								<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span>Why do I need a Filling?</a>
										<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
											<div>
												<p>If the cavity isn’t repaired, this cavity will continue to expand—eventually entering into your nerve canal. This can be excruciatingly painful. However, it can also lead to dire problems such as abscess or infection. Replacing old fillings or fixing chipped teeth can also be required. The most important reason to fix your cavity early on is to avoid a painful and costly root canal.</p>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span>Composite Filling</a>
										<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
											<div>
												<p>Doloremque nihil sed ratione ipsa molestiae maxime necessitatibus dolorem in, quasi delectus minima tempora! Tempora quo beatae, id temporibus est sint veritatis suscipit ullam ipsa facilis, sunt dignissimos, perferendis placeat, reiciendis quos ad officia mollitia velit explicabo? Illum nobis minus, doloremque tempore animi tenetur, harum sint quas voluptatum neque tempora dolorum laborum nisi suscipit vel nesciunt, fuga eos iusto maiores corrupti quaerat, deserunt modi culpa totam? Iure voluptates esse, laborum quos similique accusamus neque corporis reiciendis saepe.</p>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span>How do I know if my teeth are healthy?</a>
										<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
											<div>
												<p>Nulla, ab quis perferendis tempore natus soluta, saepe, ullam ducimus at dignissimos nihil maiores! Perspiciatis pariatur itaque id sunt perferendis veritatis, adipisci quam voluptatum facilis. Similique saepe aspernatur cumque esse.</p>
											</div>
										</div>
									</div>
								</div>
							</div>-->
						</div>
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
<?php } } else { echo "<h1>Blog Not Available</h1>"; }?>
