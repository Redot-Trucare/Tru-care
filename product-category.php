<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="websmirno.site">
	<meta name="format-detection" content="telephone=no">
	<title>Shopping Products || Truskin & Hair Clinic</title>
	<!-- Stylesheets -->
	<link href="vendor/slick/slick.css" rel="stylesheet">
	<link href="vendor/animate/animate.min.css" rel="stylesheet">
	<link href="icons/style.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="vendor/nouislider/nouislider.css" rel="stylesheet">
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
						<span>Products</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<h1>Shoppping Products</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container mt-3 mt-lg-5">
				<div class="row">
					<div class="col-md-4 col-lg-3 column-filters">
						<div class="column-filters-inside">
							<div class="side-block">
								<h3 class="side-block-title">Categories</h3>
								<ul class="category-list">
									<?php
									include_once 'dbConfig.php'; 
									//$blo_id = $_GET['id'];
									$cat_sql = $db->query("select Distinct category_name from products ORDER BY category_name ASC");
									
									if($cat_sql->num_rows>0){
                                    while($cat_row = $cat_sql->fetch_assoc()){ ?>
									<li><a href="product-category.php?category=<?php echo $cat_row['category_name'];?>"><?php echo $cat_row['category_name'];?></a></li>
									<?php } }?>
								</ul>
							</div>
							<!--<div class="side-block">
								<h3 class="side-block-title">Price</h3>
								<div class="range">
									<div id="rangeSlider1"></div>
									<p>Price: $<span id="number-1-2"></span> - $<span id="number-1-1"></span></p>
								</div>
							</div>
							<div class="side-block">
								<h3 class="side-block-title">Popular</h3>
								<div class="prd-sm">
									<div class="prd-sm-img">
										<a href="shop-product.html"><img src="images/product/prd-sm-1.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="prd-sm-info">
										<h3><a href="shop-product.html">Active Wow Teeth Whitening Charcoal Powder</a></h3>
										<div class="price">$38.88</div>
									</div>
								</div>
								<div class="prd-sm">
									<div class="prd-sm-img">
										<a href="shop-product.html"><img src="images/product/prd-sm-2.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="prd-sm-info">
										<h3><a href="shop-product.html">Electric Toothbrush</a></h3>
										<div class="price">$39.97</div>
									</div>
								</div>
								<div class="prd-sm">
									<div class="prd-sm-img">
										<a href="shop-product.html"><img src="images/product/prd-sm-3.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="prd-sm-info">
										<h3><a href="shop-product.html">Oral B Replacement Brush Heads<br>(5 Pack)</a></h3>
										<div class="price">$19.99</div>
									</div>
								</div>
							</div>-->
						</div>
					</div>
					<div class="col-md-8 col-lg-9">
						<!--<div class="filters-row align-items-center">
							<div class="filters-row-left"><span>Showing 1–9 of 18 results</span>
								<div class="form-inline">
									<div class="select-wrapper">
										<select name="sorting">
											<option value="">Default Sorting</option>
											<option value="">Sort By Price</option>
											<option value="">Sort By Name</option>
										</select>
									</div>
								</div>
							</div>
							<div class="filters-row-right d-flex align-items-center">
								<span>Pages:</span>
								<ul class="pagination justify-content-center pl-1">
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
								</ul>
							</div>
						</div>-->
						<div class="prd-grid">
							<?php
									include_once 'dbConfig.php'; 
									$cate_name = $_GET['category'];
									// Get the total number of records from our table "students".
$total_pages = $db->query("SELECT * FROM products WHERE category_name = '$cate_name' AND Product_Status = 'Active' ORDER BY id DESC")->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 3;

if ($stmt = $db->prepare("SELECT id,image1,product_name,price FROM products WHERE category_name = '$cate_name' AND Product_Status = 'Active' ORDER BY id DESC LIMIT ?,?")) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();

                                   while ($row = $result->fetch_assoc()){ ?>
							<div class="prd">
								<div class="prd-img">
									<a href="product-details.php?id=<?php echo $row['id'];?>"><img src="Admin/products/<?php echo $row['image1'];?>" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="product-details.php"><?php echo $row['product_name'];?></a></h3>
									<div class="price">$ <?php echo $row['price'];?></div>
									<!--<div class="star-rating">
									  <span class="txt-gradient">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
									   </span>
									 </div>--> 
									 <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
								</div>
							</div>
							<?php } ?>   
							<!--<div class="prd">
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
									<a href="product-details.php"><img src="images/product/prd-3.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="product-details.php">Electric Toothbrush</a></h3>
									<div class="price">$49.97</div>
									<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
								</div>
							</div>
							<div class="prd">
								<div class="prd-img">
									<a href="product-details.php"><img src="images/product/prd-4.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="product-details.php">GUM Special Go-betweens Proxabrush Refills</a></h3>
									<div class="price">$19.97</div>
									<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
								</div>
							</div>
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
									<a href="product-details.php"><img src="images/product/prd-6.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="prd-info">
									<h3><a href="product-details.php">5 Pack Charcoal Toothbrush</a></h3>
									<div class="price">$5.26</div>
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
							</div>-->
						</div>
						<div class="clearfix"></div>
						<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			   <ul class="mt-5 pagination justify-content-center">
				<?php if ($page > 1): ?>
				<li class="page-item"><a class="page-link" href="products.php?page=<?php echo $page-1 ?>"><i class="far fa-arrow-left"></i></a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="page-item start"><a class="page-link" href="products.php?page=1">1</a></li>
				<li class="page-item dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page-item page"><a class="page-link" href="products.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page-item page"><a class="page-link" href="products.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="page-item active"><a class="page-link" href="products.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page-item page"><a class="page-link" href="products.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page-item page"><a class="page-link" href="products.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="page-item dots">...</li>
				<li class="page-item end"><a class="page-link" href="products.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="page-item"><a class="page-link" href="products.php?page=<?php echo $page+1 ?>"><i class="far fa-arrow-right"></i></a></li>
				<?php endif; ?>
			</ul>
			<?php endif; ?>
						<!--<ul class="mt-5 pagination justify-content-center">
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><span class="page-link">...</span></li>
							<li class="page-item"><a class="page-link" href="#">15</a></li>
						</ul>-->
					</div>
					<?php
	$stmt->close();
}
?>
				</div>
			</div>
		</div>
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
	<script src="vendor/nouislider/nouislider.min.js"></script>
	<script src="vendor/form-validation/jquery.form.js"></script>
	<script src="vendor/form-validation/jquery.validate.min.js"></script>
	<!-- Custom Scripts -->
	<script src="js/app.js"></script>
    <script src="color/color.js"></script>

	<script src="js/app-shop.js"></script>
	<script src="form/forms.js"></script>
	
</body>
</html>
