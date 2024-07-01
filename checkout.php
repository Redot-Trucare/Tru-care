<?php
	 error_reporting(E_ERROR | E_PARSE);
		 // Report all errors except E_NOTICE   
//error_reporting(E_ALL ^ E_NOTICE);  
//ob_start();
session_start();
require("dbConfig.php");
require("showcart.php");
require("functions.php");
$statussql = $db->query("SELECT status, registered FROM orders WHERE id = '" .$_SESSION['SESS_ORDERNUM']. "'");
//$statusres = mysql_query($statussql);
$statusrow = $statussql->fetch_assoc();
$st = $statussql->num_rows;
$status = $st['status'];
$reg = $st['registered'];

if($status == 1) {
//header("Location:  checkout.php");
 echo "<script type='text/javascript'>window.location.href = 'checkout.php';</script>";
}
/*if($status == 0)  {
header("Location:  checkout.php");
 echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";
}
if($status == '')  {
header("Location:  checkout.php");
 echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";
}*/
if($status >= 2) {
header("Location: " . $config_basedir);
}

if(isset($_POST['submit']))
{
if(isset($_SESSION['SESS_LOGGEDIN']))
{
if($_POST['addselecBox'] == 1)
{
/*if(empty($_POST['name']) ||
empty($_POST['add1']) ||
empty($_POST['add2']) ||
empty($_POST['add3']) ||
empty($_POST['district']) ||
empty($_POST['postcode']) ||
empty($_POST['state']) ||
empty($_POST['country']))
{
header("Location: " . $basedir . "checkout-address.php");
exit;
}*/
require("dbConfig.php");
$updatesql = "UPDATE customers SET forename = '" . strip_tags(addslashes( $_POST['name'])) . "', add1 = '" . strip_tags(addslashes( $_POST['add1'])) . "',add2 = '" . strip_tags(addslashes( $_POST['add2'])) . "', add3 = '" . strip_tags(addslashes( $_POST['add3'])) . "', district = '" . strip_tags(addslashes( $_POST['user_district'])) . "', state = '" . strip_tags(addslashes( $_POST['user_state'])) . "', country = '" . strip_tags(addslashes( $_POST['user_country'])) . "', postcode = '" . strip_tags(addslashes( $_POST['postcode'])) . "' WHERE email = '" . $_SESSION['SESS_USERNAME']. "'";
mysqli_query($db, $updatesql);


echo $updatesql;
$loginsql = $db->query("SELECT * FROM logins WHERE username = '" . $_SESSION['SESS_USERNAME']. "'");
//$loginres = mysql_query($loginsql);
//$numrows = mysql_num_rows($loginres);
if($loginsql->num_rows == 1)
{
$loginrow = $loginsql->fetch_assoc();

$_SESSION['SESS_LOGGEDIN'] = 1;
$_SESSION['SESS_USERNAME'] = $loginrow['username'];
$_SESSION['SESS_USERID'] = $loginrow['id'];
header("Location: success.php");
 
}
}
if($_POST['addselecBox'] == 2)
{
if(empty($_POST['forenameBox']) ||
empty($_POST['surnameBox']) ||
empty($_POST['add1Box']) ||
empty($_POST['add2Box']) ||
empty($_POST['district']) ||
empty($_POST['postcodeBox']) ||
empty($_POST['phoneBox']) ||
empty($_POST['emailBox']))
{
header("Location: checkout?error=1");
exit;
}
require("dbConfig.php");
$addsql = "INSERT INTO delivery_addresses(forename, surname, add1, add2, add3, district, state, country, postcode, phone, email)VALUES('" . strip_tags(addslashes( $_POST['forenameBox'])) . "', '" . strip_tags(addslashes( $_POST['surnameBox'])) . "', '" . strip_tags(addslashes( $_POST['add1Box'])) . "', '" . strip_tags(addslashes( $_POST['add2Box'])) . "', '" . strip_tags(addslashes( $_POST['add3Box'])) . "', '" . strip_tags(addslashes( $_POST['district'])) . "', '" . strip_tags(addslashes( $_POST['state'])) . "', '" . strip_tags(addslashes( $_POST['country'])) . "', '" . strip_tags(addslashes( $_POST['postcodeBox'])) . "', '" . strip_tags(addslashes(
$_POST['phoneBox'])) . "', '" . strip_tags(addslashes($_POST['emailBox'])) . "')";
//mysql_query($addsql);
mysqli_query($db, $addsql);
//echo $addsql;
$setaddsql = $db->query("UPDATE orders SET delivery_add_id = " . mysqli_insert_id($db) . ", status = 1, cancel_status='S1' WHERE id = " . $_SESSION['SESS_ORDERNUM']);
//mysql_query($setaddsql);
header("Location: success.php");
 
}
else
{
$custsql = "UPDATE orders SET delivery_add_id = 0, status = 1, cancel_status='S1' WHERE id = " . $_SESSION['SESS_ORDERNUM'];
mysqli_query($db,$custsql);

header("Location: success.php");
 
}
}
}

else
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
	<title>Checkout || Truskin & Hair Clinic</title>
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
						<span>Checkout</span>
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
					<h1>Cart</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php          
if(!isset($_SESSION['SESS_LOGGEDIN']))
{
if(isset($_GET['error'])) {
echo "<h5 style='text-align: center;color: #ff0909;'>Incorrect username/password</h5><br>";
}
?>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box returning-customer">
                        <h3><i class="icon anm anm-user-al"></i> Returning customer? <span>Click here to login</span></h3>
                        <div id="customer-login" class="customer-content mt-4">
                            <div class="customer-info cart__summary border-radius-10">
                                <p class="coupon-text">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                <form  action="login.php" method="post">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputEmail1">Email address <span class="required-f">*</span></label>
                                            <input type="email"name="userBox" class="form-control" id="exampleInputEmail1" required>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputPassword1">Password <span class="required-f">*</span></label>
                                            <input type="password" class="form-control" name="passBox" id="exampleInputPassword1" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-check width-100 margin-20px-bottom">
                                                <!--<label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value=""> Remember me!
                                                </label>
                                                <a href="#" class="float-right">Forgot your password?</a>-->
                                            </div>
                                            <button type="submit" name="submit" class="btn primary__btn w-100 mt-3">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box customer-coupon">
                        <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> New User? <span>Register Here</span></h3>
                        <div id="have-coupon" class="coupon-checkout-content mt-4">
                            <div class="cart__summary border-radius-10">
                                <div id="coupon" class="coupon-dec tab-pane active">
									<form action="reg.php" method="post">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputEmail1">First Name <span class="required-f">*</span></label>
                                            <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" required>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputPassword1">Last Name <span class="required-f">*</span></label>
                                            <input type="text" name="last_name" class="form-control"id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputPassword1">Mobile <span class="required-f">*</span></label>
                                            <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputEmail1">Email address <span class="required-f">*</span></label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputPassword1">Password <span class="required-f">*</span></label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-4">
                                            <button class="btn primary__btn w-100" type="submit" name="register_user">Register</button>
                                        </div>
                                    </div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php } ?> 
				</div>
				<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
					<?php  if(isset($_SESSION['SESS_LOGGEDIN'])) { ?>
                    <div class="create-ac-content bg-light-gray padding-20px-all">						
                        <form class="form delivery-form" action="checkout.php" method="POST">
						   <div class="tab">
                                <div class="checkbox-form">
									<?php $checksql22 = $db->query("select * from customers WHERE email = '" . $_SESSION['SESS_USERNAME']. "'");
		$custorow = $checksql22->fetch_assoc();
		if($custorow['add1'] != ''){
		?>
	<input type="radio" name="addselecBox" class="tablinks" onclick="openCity(event, 'reg')"
value="3" style="padding: 10px;" checked> <span  class="checkout-title" style="font-size: 16px;color: #000;font-weight: 700;"> Deliver to Registered Address </span></input>
<br>
<p><!--<strong>Address :</strong><br>-->
  <?php echo $custorow['add1']; ?>,<br>
  <?php echo $custorow['add2']; ?>, <?php echo $custorow['add3']; ?><br>
  <?php echo $custorow['district']; ?> - <?php echo $custorow['postcode']; ?><br>
  <?php echo $custorow['state']; ?>, <?php echo $custorow['country']; ?></p>
<p><strong>Email : </strong> <?php echo $custorow['email']; ?></p>
<p><strong>Mobile : </strong> <?php echo $custorow['phone']; ?></p>							
<br><input type="radio" name="addselecBox" class="tablinks" onclick="openCity(event, 'Paris')"
value="2" style="padding: 10px;"> <span  class="checkout-title" style="font-size: 16px;color: #000;font-weight: 700;"> Deliver to this Address </span></input>
   <?php } else {
	   ?>
	   <input type="hidden" name="addselecBox" class="tablinks" onclick="openCity(event, 'London')"
value="1" style="padding: 10px;"> &nbsp;&nbsp;<span  class="checkout-title" style="font-size: 16px;color: #000;font-weight: 700;"> Add your Delivery Address Here </span></input><br>

<?php 
} ?>		
<div id="reg" class="tabcontent">
		<input type="hidden" class="form-control" name="name" value="<?php echo $custorow['forename']; ?>" />
		<input type="hidden" name="add1" class="form-control" value="<?php echo $custorow['add1']; ?>" />
		<input type="hidden" name="add2" class="form-control" value="<?php echo $custorow['add2']; ?>" />
		<input type="hidden" name="add3" class="form-control" value="<?php echo $custorow['add3']; ?>" />
		<input type="hidden" name="district" class="form-control" value="<?php echo $custorow['district']; ?>" />
		<input type="hidden" name="postcode" class="form-control" value="<?php echo $custorow['postcode']; ?>" />
		<input type="hidden" name="state" class="form-control" value="<?php echo $custorow['state']; ?>" />
		<input type="hidden" name="country" class="form-control" value="India"/>
	 </div>
	 <div id="London" class="tabcontent section__shipping--address__content">
	 <div class="row mt-3">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="checkout__input--list">
                                                <label>First Name</label>
                                                <input id="name" class="form-control" type="text" placeholder="First Name" class="checkout__input--field border-radius-5"  value="<?php echo $custorow['forename']; ?>" name="forenameBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="checkout__input--list">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="surname" placeholder="Last Name" value="<?php echo $custorow['surname']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info">
                                                <label>Mobile</label>
                                                <input type="text" class="form-control" name="phoneBox" placeholder="Mobile" value="<?php echo $custorow['phone']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="emailBox" placeholder="Email" value="<?php echo $custorow['email']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <div class="billing-info">
                                                <label>Street Address</label>
                                                <input type="text" class="mb-2 form-control" name="add1" placeholder="Flat Number/ Building Name" />
                                                <input type="text" class="mb-2 form-control" name="add2" placeholder="Locality / Area / Street " />
                                                <input type="text" class="form-control" name="add3" placeholder="Landmark" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="billing-info">
                                                <label>District / City</label>
                                                <input type="text" class="form-control" name="user_district" placeholder="District / City" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="billing-info mb-20px">
                                                <label>Postcode / ZIP</label>
                                                <input type="text" class="form-control" name="postcode" placeholder="Postcode / ZIP" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="checkout__input--list checkout__input--select select">
												<label class="checkout__select--label" for="state">State</label>
                                                 <select class="form-control" name="user_state" id="user_state">
													 <option value="">Select State</option>													 
													 <option value="Tamil Nadu">Tamil Nadu</option>
												 </select>	
                                            </div>
                                        </div>
                                        <!--<script type="text/javascript" src="jquery.min.js"></script>
                            <script>
	$(document).ready(function() {
	$("#user_state").change(function() {
		var state_id = $(this).val();
		if(state_id != "") {
			$.ajax({
				url:"get_country_checkout1.php",
				data:{s_id:state_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#user_country").html(resp);
				}
			});
		} else {
			$("#user_country").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script>-->        
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="checkout__input--list checkout__input--select select">
												<label class="checkout__select--label" for="country">Country</label>
                                                <select class="form-control" name="user_country" id="user_country">
													 <option value="">Select Country</option>
													 <option value="India">India</option>
												  </select>	 
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                                                        				
                                    <!--<input class="checkout-toggle" id="cbox" type="checkbox" name="addselecBox" value="2"/>
                                    <span style="font-size: 14px;color: #000;font-weight: 700;"> Deliver to this Address </span></input>-->
                                     <div id="Paris" class="tabcontent" style="display: none;">
                                    <div class="row mt-3">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info">
                                                <label>First Name</label>
                                                <input id="name" class="form-control" type="text" placeholder="First Name" class="checkout__input--field border-radius-5"  name="forenameBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info">
                                                <label>Last Name</label>
                                                <input id="name" class="form-control" type="text" placeholder="Last Name" class="checkout__input--field border-radius-5"  name="surnameBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <div class="billing-info">
                                                <label>Street Address</label>
                                                <input type="text" class="mb-2 form-control" name="add1Box" placeholder="Flat Number/ Building Name" />
                                                <input type="text" class="mb-2 form-control" name="add2Box" placeholder="Locality / Area / Street " />
                                                <input type="text" class="form-control" name="add3Box" placeholder="Landmark" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="billing-info">
                                                <label>District / City</label>
                                                <input type="text" class="form-control" name="district" placeholder="District / City" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="billing-info mb-20px">
                                                <label>Postcode / ZIP</label>
                                                <input type="text" class="form-control" name="postcodeBox" placeholder="Postcode / ZIP" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="checkout__input--list checkout__input--select select">
												<label class="checkout__select--label" for="state">State</label>
                                                <select class="form-control" name="state" id="state">
													 <option value="">Select State</option>
													 <option value="Tamil Nadu">Tamil Nadu</option>
												 </select>
                                            </div>
                                        </div>
                                        <!--<script type="text/javascript" src="jquery.min.js"></script>
                            <script>
	$(document).ready(function() {
	$("#state").change(function() {
		var state_id = $(this).val();
		if(state_id != "") {
			$.ajax({
				url:"get_country_checkout1.php",
				data:{s_id:state_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#country").html(resp);
				}
			});
		} else {
			$("#country").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script>-->
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="checkout__input--list checkout__input--select select">
												<label class="checkout__select--label" for="country">Country</label>
                                                <select class="form-control" name="country" id="country">
													 <option value="">Select Country</option>
													 <option value="India">India</option>
												</select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="billing-info">
                                                <label>Mobile</label>
                                                <input type="text" class="form-control" name="phoneBox" placeholder="Mobile" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="billing-info">
                                                <label>Email</label>
                                                <input name="emailBox" class="form-control" placeholder="Email" type="email" />
                                            </div>
                                        </div>
                                    </div> 
                                    </div> 
                                      <div class="row">
                                         <div class="col-lg-12 col-md-12 mt-5">
                                        <div class="order-button-payment mb-30">
                                            <input type="submit" class="btn primary__btn border-radius-5 w-100" id="place_order" name="submit" value="Place the order">
                                        </div>
                                        </div> 
                                 </div>       								
                                    </div>                                   												
                                </div>
                                </form>  
                              
                    </div>
                   <?php } ?>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <?php checkout_showcart(); ?>
                </div>
				</div>
				<?php } ?>
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
	
	  <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
	
</body>
</html>
