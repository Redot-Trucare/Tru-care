<?php
session_start();

require("dbConfig.php");
require("showcart.php");
$pro_id = $_GET['id'];
/*
$lang_id = $_GET['language'];
$genre_id = $_GET['genre'];
$author_id = $_GET['author'];
$publisher_id = $_GET['publisher'];

$vinyl_genre_id = $_GET['vinyl_genre'];
$vinyl_artist_id = $_GET['vinyl_artist'];
$vinyl_record_label = $_GET['vinyl_record_label']; 
$vinyl_language_id = $_GET['vinyl_language']; 

$cd_genre_id = $_GET['cd_genre'];
$cd_artist_id = $_GET['cd_artist'];
$cd_record_label = $_GET['cd_record_label']; 
$cd_language_id = $_GET['cd_language']; 
*/
$prodcountcheck = $db->query("SELECT View_count FROM products Where id='$pro_id'");
$countrow = $prodcountcheck->fetch_assoc();
if($countrow['View_count'] == ''){
	$prodcountsql = "update products set View_count='1' where id=$pro_id";
        mysqli_query($db,$prodcountsql);
	} else {
       //$count = $countrow['view_count'];
        $prodcountsql = "update products set View_count='" .$countrow['View_count'] . "' + '1' where id=$pro_id";
        mysqli_query($db,$prodcountsql);
        //echo $prodcountsql;
	}
                       $result = $db->query("SET NAMES utf8");//the main trick
                       $prodcatsql = $db->query("SELECT * FROM products Where id='$pro_id'"); 
                       if($prodcatsql->num_rows > 0)
{
while($prodrow = $prodcatsql->fetch_assoc())
 
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
	<title><?php echo $prodrow['product_name']; ?> || Truskin & Hair Clinic</title>
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
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.php">Home</a>
						<span><a href="products.php">Home</a></span>
						<span><?php echo $prodrow['product_name']; ?></span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container mt-6">
				<div class="row product-block">
					<div class="col-md-6">
						<div class="product-block-gallery">
							<div class="product-previews" id="productPreviews">
								<a href="#" class="product-previews-item active" data-image="Admin/products/<?php echo $prodrow['image1']; ?>" data-zoom-image="Admin/products/<?php echo $prodrow['image1']; ?>">
									<img src="Admin/products/<?php echo $prodrow['image1']; ?>" />
								</a>
								<a href="#" class="product-previews-item" data-image="Admin/products/<?php echo $prodrow['image2']; ?>" data-zoom-image="Admin/products/<?php echo $prodrow['image2']; ?>">
									<img src="Admin/products/<?php echo $prodrow['image2']; ?>" />
								</a>
								<!--<a href="#" class="product-previews-item" data-image="images/product/prd-big-3.jpg" data-zoom-image="images/product/prd-big-3.jpg">
									<img src="images/product/prd-thumb-3.jpg" />
								</a>-->
							</div>
							<div class="product-block-mainimage">
								<img id="mainImage" src="Admin/products/<?php echo $prodrow['image1']; ?>" data-zoom-image="Admin/products/<?php echo $prodrow['image1']; ?>" />
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-block-info">
							<!--<div class="star-rating"><span class="txt-gradient"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></span>
								<span class="rating-text">2 customer reviews</span>
							</div>-->
							<h2 class="product-block-title"><?php echo $prodrow['product_name']; ?></h2>
							<div class="product-block-price">$ <?php echo $prodrow['price'];?></div>
							<!--<div class="product-block-price-comment">+ Free Shipping</div>
							<div class="product-block-description">
								<table class="table table-striped">
									<tr>
										<td><span>Location:</span></td>
										<td>Front, Driver Or Passenger Side</td>
									</tr>
									<tr>
										<td><span>Product Fit:</span></td>
										<td>Direct Fit</td>
									</tr>
									<tr>
										<td><span>Quantity Sold:</span></td>
										<td>Sold Individually</td>
									</tr>
									<tr>
										<td><span>Anticipated Ship Out Time:</span></td>
										<td>1-2 Business Days</td>
									</tr>
								</table>
							</div>-->
							<div class="product-block-actions">
								 <form method="post" action="purchase.php?id=<?php echo $prodrow['id'];?>"  enctype="multipart/form-data">
								<div class="qty-count">
									<!--<span class="count-reduce">–</span>
									<input type="text" class="count-input" value="1" readonly>
									<span class="count-add">+</span>-->
									<input class="count-input" min="1" id="inputNumber" type="number" value="1" name="amountBox">
								</div>
								<input type="hidden" name="sku" value="<?php echo $prodrow['sku_id']; ?>">
							   <input type="hidden" name="product_id" value="<?php echo $prodrow['id'];?>">
                               <input type="hidden" id="price" name="price" value="<?php echo $prodrow['price'];?>">                                
							 <input type="hidden" id="currency" name="currency" value="  <?php //echo $prodrow['Currency_Type']; ?>">
							 <input type="hidden" id="color" name="color" value="  <?php //echo $prodrow['Color']; ?>">  							 
							  <button type="submit" name="submit" class="btn btn-fill btn-noanimate product-block-add-to-cart">
                                        Add to cart<i class="icon-cart"></i>
                                        </button>
								<!--<a href="#" class="btn btn-fill btn-noanimate product-block-add-to-cart ">Add To Cart<i class="icon-cart"></i></a>-->
							    </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section mt-5">
			<div class="container">
				<div class="prd-tabs-wrap">
					<!-- Nav tabs -->
					<div class="nav nav-pills" role="tablist">
						<a class="nav-link active" data-toggle="pill" href="#tab1" role="tab">Description</a>
						<!--<a class="nav-link" data-toggle="pill" href="#tab2" role="tab">Reviews (2)</a>-->
					</div>
					<!-- Tab panels -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tab1">
							<p><?php echo $prodrow['description'];?></p>
							<!--<h5>Super Saver Tube</h5>
							<p>Order the Dental Expert activated charcoal toothpaste and get more for less with our super-saver tube. Get maximum value for your money and whiten your teeth with total confidence. At Dental Expert, we believe in providing the highest possible value to our customers at all times.</p>
							<h5>100% Safe & Natural</h5>
							<p>Get whiter teeth and improved oral health today using bamboo charcoal and other all-natural ingredients whose value and benefits have been acknowledged for years. Dental Expert teeth whitening toothpaste hasno artificial colors or chemicals, and is 100% safe for use by adults.</p>-->
						</div>
						<div role="tabpanel" class="tab-pane" id="tab2">
							<h6>Joseph C. Lane</h6>
							<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
							<p>Excellent clinic which has looked after my families dental healthcare for many years. Last year I received private treatment for a tooth implant and the whole process was professionally managed and delivered.</p>
							<div class="divider"></div>
							<h6>Jenny M. Fischer</h6>
							<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
							<p>I am so grateful for the opportunity to come to the Loma Linda School of Dentistry. The prices are more than fair and my mouth is already doing much better. Everyone is helpful</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">Similar Products</h2>
					<div class="h-decor"></div>
				</div>
				<div class="prd-grid prd-carousel">
					<div class="prd">
						<div class="prd-img">
							<a href="product-details.php"><img src="images/product/prd-5.jpg" class="img-fluid" alt=""></a>
						</div>
						<div class="prd-info">
							<h3><a href="product-details.php">Waterpik ADA Accepted WP-660 Aquarius Water Flosser</a></h3>
							<div class="price">$59.98</div>
							<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>

							<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
						</div>
					</div>
					<div class="prd">
						<div class="prd-img">
							<a href="product-details.php"><img src="images/product/prd-2.jpg" class="img-fluid" alt=""></a>
						</div>
						<div class="prd-info">
							<h3><a href="product-details.php">Active Wow Teeth Whitening Charcoal Powder</a></h3>
							<div class="price">$38.88</div>
							<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
							<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
						</div>
					</div>
					<div class="prd">
						<div class="prd-img">
							<a href="product-details.php"><img src="images/product/prd-7.jpg" class="img-fluid" alt=""></a>
						</div>
						<div class="prd-info">
							<h3><a href="product-details.php">Oral-B  Glide Pro-Health Comfort Plus Mint Flavor Floss</a></h3>
							<div class="price">$5.79</div>
							<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
						</div>
					</div>
					<div class="prd">
						<div class="prd-img">
							<a href="product-details.php"><img src="images/product/prd-8.jpg" class="img-fluid" alt=""></a>
						</div>
						<div class="prd-info">
							<h3><a href="product-details.php">Cool Mint Listerine Antiseptic Mouthwash</a></h3>
							<div class="price">$5.98</div>
							<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>

							<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
						</div>
					</div>
					<div class="prd">
						<div class="prd-img">
							<a href="product-details.php"><img src="images/product/prd-9.jpg" class="img-fluid" alt=""></a>
						</div>
						<div class="prd-info">
							<h3><a href="product-details.php">5 Pack Charcoal Toothbrush</a></h3>
							<div class="price">$11.62</div>
							<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
	</div>
	<!--footer-->
	<?php include 'footer.php';?>
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
	<script src="vendor/jquery.elevateZoom/jquery.elevateZoom-3.0.8.min.js"></script>
	<script src="vendor/form-validation/jquery.form.js"></script>
	<script src="vendor/form-validation/jquery.validate.min.js"></script>
	<!-- Custom Scripts -->
	<script src="js/app.js"></script>
    <script src="color/color.js"></script>

	<script src="js/app-shop.js"></script>
	<script src="form/forms.js"></script>
	
</body>
</html>
<?php } } else { echo "<h1>N/A</h1>"; }?>
