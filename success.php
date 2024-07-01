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
	<title>Success || Truskin & Hair Clinic</title>
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
						<span>Order Success</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<!--<div class="h-sub theme-color">Our dentists working to your smile</div>-->
					<h1>Order Success</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 text-center">
					<?php
         error_reporting(E_ERROR | E_PARSE);
         // Report all errors except E_NOTICE   
error_reporting(E_ALL ^ E_NOTICE);  
                        //if(isset($_POST['chequesubmit'])) {
require("dbConfig.php");
$res1 = "select id,customer_id from logins where username='".$_SESSION['SESS_USERNAME']."'";
$res2 = mysqli_query($db,$res1);
//echo $res1;
$ctrow = $res2->fetch_assoc();
$cusm_results = "select * from customers where customer_id=".$ctrow['customer_id'];
$cusmt_results = mysqli_query($db,$cusm_results);
//echo $cusm_results;
$cutrow = $cusmt_results->fetch_assoc();
$cutrows_ema = $cutrow['email'];
$cutrows_name = $cutrow['forename'];
$cutrows_surname = $cutrow['surname'];
$cutrows_phone = $cutrow['phone'];
$cutrows_add1 = $cutrow['add1'];
$cutrows_district = $cutrow['district'];
$cutrows_state = $cutrow['state'];
$cutrows_country = $cutrow['country'];
//echo $cutrows_ema;  
require("dbConfig.php");
$custsql = $db->query("SELECT id, status, registered, session from orders WHERE session = '" . session_id() . "'");

$custrow = $custsql->fetch_assoc();

$itemssql = "SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.session_id = '" . session_id(). "' AND orderitems.order_id = '" . $custrow['id']. "' GROUP BY orderitems.product_id";
$results_item = mysqli_query($db,$itemssql);
//echo $itemssql;
$itemnumrows = $results_item->num_rows;

 
$custsql1 = $db->query("SELECT id, status, registered, session from orders WHERE customer_id = ". $_SESSION['SESS_USERID']. " AND session = '" . session_id() . "'");

$custrow1 = $custsql1->fetch_assoc();

$itemssql1 = "SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.id AND orderitems.size = products.size AND orderitems.customer_id = ". $_SESSION['SESS_USERID']. " AND orderitems.session_id = '" . session_id(). "' AND orderitems.order_id = '" . $custrow['id']. "' GROUP BY orderitems.product_id";
$results_item1 = mysqli_query($db,$itemssql1);
//echo $itemssql;
$itemnumrows = $results_item1->num_rows;

$upsql = "UPDATE orders SET status = 2,payment_type = 2,registered = 3 WHERE customer_id = ". $_SESSION['SESS_USERID']. " AND session = '" . session_id(). "'";
$upsql2 = "UPDATE orderitems SET payment_type = 1 WHERE customer_id = ". $_SESSION['SESS_USERID']. " AND session_id = '" . session_id(). "'";
$billsql1 = $db->query("SELECT Distinct id from orders WHERE session = '" . session_id(). "' AND customer_id = ". $_SESSION['SESS_USERID'] ." ");

$billrow1 = $billsql1->fetch_assoc();
$billsql = $db->query("SELECT Count(id) as bills from order_billing");

$billrow = $billsql->fetch_assoc();
$upsql3 = "INSERT INTO order_billing(bill_no, order_id, customer_id) VALUES ('" .$billrow['bills'] . "' + '1','". $billrow1['id'] ."','". $_SESSION['SESS_USERID'] ."')";

$upres1 = mysqli_query($db,$upsql);
$upres2 = mysqli_query($db,$upsql2);
$upres3 = mysqli_query($db,$upsql3);
    //echo $upsql;
    //echo $upsql2;
    
$itemsql2 = "SELECT sku_id, product_id, quantity, size, primary_color FROM orderitems WHERE orderitems.session_id = '" . session_id(). "' AND orderitems.order_id = '" . $custrow['id']. "' AND payment_type = '1' GROUP BY product_id";
$results_item2 = mysqli_query($db,$itemssql);
while($itrow = $results_item2->fetch_assoc())
{
    $quan = $itrow['quantity'];
    $sku = $itrow['sku_id'];
    $product_id = $itrow['product_id'];
  $size = $itrow['size'];
  $color = $itrow['primary_color'];
  $upsql4 = "UPDATE products SET Stock = Stock - '$quan'  WHERE sku_id = '$sku' AND Size = '$size'";
    mysqli_query($db,$upsql4);
    
    $prodcountcheck = $db->query("SELECT Sell_count FROM products Where id='$product_id'");
$countrow = $prodcountcheck->fetch_assoc();
if($countrow['Sell_count'] == ''){
	$prodcountsql = "update products set Sell_count='1' where id=$product_id";
        mysqli_query($db,$prodcountsql);
	} else {
       //$count = $countrow['view_count'];
        $prodcountsql = "update products set Sell_count='" .$countrow['Sell_count'] . "' + '1' where id=$product_id";
        mysqli_query($db,$prodcountsql);
        //echo $prodcountsql;
	}
}
if($upres1 && $upres2){
    
    $billnosql = $db->query("SELECT bill_no from order_billing WHERE order_id = '". $billrow1['id'] ."' AND customer_id = '". $_SESSION['SESS_USERID'] ."'");

$billnorow = $billnosql->fetch_assoc();
?><!--<p><i class="fa fa-check-square"></i></p>-->
                                    
                                    <!--<span><img src="assets/img/check1.png" alt="" style="width:100px; height:100px;"></span>-->
                                     <h2 class="text-green mt-3" style="color: #187d41;">Your Order successfully placed!</h2>
                                    <h2 class="text-green mt-3">Thank you for your purchase!</h2>
                                    <h3 class="card-text mb-4">Your order # is: <b style="color: #d8003f;">ORDER ID : <?php echo $billnorow['bill_no'];?></b>.</h3>
                                    <!--<p class="card-text mb-1">You will receive an order confirmation email with details of your order and a link to track its progress.</p>
                                    <p class="card-text mb-1">All necessary information about the delivery, we sent to your email</p>-->
                                    <a href="index.php" class="btn primary__btn border-radius-5">Go to Home</a>
                                    <a href="logout.php" class="btn primary__btn border-radius-5">Signout</a>
<?php } else { ?>
    <p><div class="check"><i class="fa fa-close" aria-hidden="true"></i></div></p>
    <h1 style="color: red;">Purchase is Not Successful</h1>
           <p><a href="logout.php">Signout</a></p>
<?php } ?>            
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
