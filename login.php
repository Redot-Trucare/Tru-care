<?php
require("dbConfig.php");
require("functions.php");
require("showcart.php");
if(isset($_SESSION['SESS_LOGGEDIN'])) {
header("Location: " . $config_basedir);
}

if(isset($_POST['submit']))
{
$loginsql = $db->query("SELECT * FROM logins WHERE username = '" . $_POST['userBox']. "' AND password = '" . $_POST['passBox'] . "'");
//$loginres = mysql_query($loginsql);
//$numrows = mysql_num_rows($loginres);

if($loginsql->num_rows == 1)
{
$loginrow = $loginsql->fetch_assoc();
session_start();
$_SESSION['SESS_LOGGEDIN'] = 1;
$_SESSION['SESS_USERNAME'] = $loginrow['username'];
$_SESSION['SESS_USERID'] = $loginrow['id'];

$update = $db->query("UPDATE orders SET customer_id = " . $_SESSION['SESS_USERID'] . ", registered = 1 WHERE session = '" . session_id() . "' And registered = 0");
$update = $db->query("UPDATE orderitems SET customer_id = " . $_SESSION['SESS_USERID'] . " WHERE session_id = '" . session_id() . "' And customer_id = 0");
$ordersql = $db->query("SELECT id FROM orders WHERE customer_id = " . $_SESSION['SESS_USERID'] . " AND status < 2 AND session = '" . session_id() . "'");
//$orderres = mysql_query($ordersql);
 $orderrow = $ordersql->fetch_assoc();
$_SESSION['SESS_ORDERNUM'] = $orderrow['id'];
//$itemnumrows = $ordersql->num_rows;

header("Location: checkout.php");

}
else
{
	   
//header("Location: " . $_SERVER['SCRIPT_NAME'] . "?error=true");
header("Location: checkout?error=true");
}
}
if(isset($_POST['login_submit']))
{
$loginsql = $db->query("SELECT * FROM logins WHERE username = '" . $_POST['userBox']. "' AND password = '" . $_POST['passBox'] . "'");
//$loginres = mysql_query($loginsql);
//$numrows = mysql_num_rows($loginres);

if($loginsql->num_rows == 1)
{
$loginrow = $loginsql->fetch_assoc();
session_start();
$_SESSION['SESS_LOGGEDIN'] = 1;
$_SESSION['SESS_USERNAME'] = $loginrow['username'];
$_SESSION['SESS_USERID'] = $loginrow['id'];

$update = $db->query("UPDATE orders SET customer_id = " . $_SESSION['SESS_USERID'] . ", registered = 1 WHERE session = '" . session_id() . "' And registered = 0");
$update = $db->query("UPDATE orderitems SET customer_id = " . $_SESSION['SESS_USERID'] . " WHERE session_id = '" . session_id() . "' And customer_id = 0");
$ordersql = $db->query("SELECT id FROM orders WHERE customer_id = " . $_SESSION['SESS_USERID'] . " AND status < 2 AND session = '" . session_id() . "'");
//$orderres = mysql_query($ordersql);
 $orderrow = $ordersql->fetch_assoc();
$_SESSION['SESS_ORDERNUM'] = $orderrow['id'];
//$itemnumrows = $ordersql->num_rows;

header("Location: index.php");

}
else
{
header("Location: " . $_SERVER['SCRIPT_NAME'] . "?error=true");
}
}

else
{ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="websmirno.site">
	<meta name="format-detection" content="telephone=no">
	<title>Register & Login || Truskin & Hair Clinic</title>
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
						<span>Login & Register</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container mt-6">
				<div class="row">
					<div class="col-lg-6">
						<div class="question-box">
							<h5 class="question-box-title">Login if you are a Registered customer.</h5>
							<form action="login.php" method="post">
								 <input class="form-control" name="userBox" placeholder="Email" type="text">
                                 <input class="form-control" name="passBox" placeholder="Password" type="password">
								<button type="submit" name="login_submit" class="btn btn-sm btn-hover-fill mt-15"><i class="icon-right-arrow"></i><span>Login</span><i class="icon-right-arrow"></i></button>
							</form>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="question-box">
						<h5 class="question-box-title">Create an Account</h5>
							<form id="questionForm" method="post" action="reg.php">
								<input  class="form-control"  name="first_name" placeholder="First Name" type="text">
                                        <input  class="form-control"  name="last_name" placeholder="Last Name" type="text">
                                        <input  class="form-control" name="email" placeholder="Email Addres" type="text">
                                        <input  class="form-control"  name="phone" placeholder="Mobile No" type="text">
                                        <input  class="form-control"  name="password" placeholder="Password" type="password"><span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								<button type="submit" name="reg_submit" class="btn btn-sm btn-hover-fill mt-15"><i class="icon-right-arrow"></i><span>Register</span><i class="icon-right-arrow"></i></button>
							</form>
						</div>
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
	<script src="vendor/form-validation/jquery.form.js"></script>
	<script src="vendor/form-validation/jquery.validate.min.js"></script>
	<!-- Custom Scripts -->
	<script src="js/app.js"></script>
    <script src="color/color.js"></script>
    
      <script>
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
  });
</script>

	<script src="js/app-shop.js"></script>
	<script src="form/forms.js"></script>
	
</body>
</html>
<?php
}
?>
