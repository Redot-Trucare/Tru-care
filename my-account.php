<?php
session_start();
require('dbConfig.php');
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
	<title>My Account || Truskin & Hair Clinic</title>
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
				<a href="index-2.html" class="active"><img src="color/screen-layout-2.png" alt=""></a>
                <a href="http://websmirno.site/medin/html/medol-html/"><img src="color/screen-layout-3.png" alt=""></a>
                <a href="http://websmirno.site/medin/html/medera-html/"><img src="color/screen-layout-4.png" alt=""></a>
                <a href="http://websmirno.site/medin/html/medeye-html/"><img src="color/screen-layout-5.png" alt=""></a>
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
						<a href="index.html">Home</a>
						<span>Doctors Timetable</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<h1>My Account</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
			  <div class="row">
				  <div class="col-lg-6">	
				<div class="text-center mb-4 mb-md-5 max-900">
				</div>
				<div class="nav nav-pills justify-content-center" role="tablist">
					<?php
if(isset($_SESSION['SESS_LOGGEDIN']))
{	
require("dbConfig.php");
$checksqluser = $db->query("select * from customers WHERE email = '" . $_SESSION['SESS_USERNAME']. "'");
//mysqli_query($db,$checksqluser);
//echo $checksqluser;

		$customrow = $checksqluser->fetch_assoc(); ?>
                            <!--<h3>Dashboard </h3><br>-->
                            <p>Hello, <strong><?php echo $customrow['forename'];?> <?php echo $customrow['surname']; ?></strong> (If Not <strong><?php echo $customrow['surname']; ?>
                                                            !</strong><a href="logout.php" class="logout"> Sign out</a>)</p>
                            <p>From your account dashboard. you can easily check &amp; view your</p>
					<p><a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab" aria-expanded="true">Recent Orders</a></p>
					<p><a class="nav-link" data-toggle="pill" href="#tab-B" role="tab" aria-expanded="false">Shipping and Billing Addresses</a></p>
					<p><a class="nav-link" data-toggle="pill" href="#tab-C" role="tab" aria-expanded="false">Edit your password and Account details.</a></p>
					
					
				</div>
				</div>
				<div class="col-lg-6">
				<div id="tab-content" class="tab-content mt-3 mt-md-4">
					<div id="tab-A" class="tab-pane fade show active" role="tabpanel">
						<div class="cd-schedule loading">
							<div data-event="event-1">
								<h3>Orders</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="alt-font">
                                        <tr>
                                            <th>Order Id</th>
                                            <th>Product</th>
                                            <th>Quantity X Price</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
							$prodcatsql2 = $db->query("SELECT * FROM orderitems WHERE customer_id = " . $_SESSION['SESS_USERID'] . " and payment_type = 1;");

//$prodcatres = mysql_query($prodcatsql);
//$numrows = mysql_num_rows($prodcatres);
if($prodcatsql2->num_rows == 0)
{
echo "<tr><td><h4>No Orders to display</h4></td></tr>";

}
else
{
//echo "<table cellpadding='10'>";
while($prodrow2 = $prodcatsql2->fetch_assoc())
{
	$result = $db->query("SET NAMES utf8");//the main trick
	$prodcatsql3 = $db->query("SELECT * from products WHERE id = ". $prodrow2['product_id']. ";");
	/*$prodcatsql3 = "SELECT * from products WHERE id = ". $prodrow2['product_id']. ";";
	mysqli_query($db,$prodcatsql3);
	echo $prodcatsql3;*/
//$custres = mysql_query($custsql)or die(mysql_error());;
while($prodrow3 = $prodcatsql3->fetch_assoc())
{
	?>   									
                                        <tr>
                                            <td><?php 
                        $ordidsql = $db->query("SELECT * FROM order_billing WHERE order_id = '". $prodrow2['order_id'] ."'");
$ordidrows = $ordidsql->fetch_assoc();
echo $ordidrows['bill_no'];
                        ?></td>
                                            <td><?php echo $prodrow3['product_name']; ?></td>
                                            <td><?php echo $prodrow2['quantity'];?> X <?php echo $prodrow3['price'];?></td>
                                            <td><?php 
							 $prodcatsql4 = $db->query("SELECT * from orders WHERE id = ". $prodrow2['order_id']. " and customer_id = " . $_SESSION['SESS_USERID'] . " ;");
	/*$prodcatsql3 = "SELECT * from products WHERE id = ". $prodrow2['product_id']. ";";
	mysqli_query($db,$prodcatsql3);
	echo $prodcatsql3;*/
//$custres = mysql_query($custsql)or die(mysql_error());;
while($prodrow4 = $prodcatsql4->fetch_assoc())
{ ?>
	                     <?php
							if($prodrow4['status'] == '2'){ 
							echo "<span class='pending'>Order Placed</span>";
					}  else if(($prodrow4['status'] == '12')){ 
							echo "<span class='success'>Delivered</span>";	
						
					}  else if($prodrow4['status'] == '10'){ 
							echo "<span class='paid'>In Transit</span>";
					}
					  else if($prodrow4['status'] == '3'){ 
							echo "<span class='failed'>Cancel</span>";	
					}					  
				} ?><td>
                                            <td><?php $quantitytotal = $prodrow3['price'] * $prodrow2['quantity']; ?> $ <?php echo $quantitytotal; ?> </td>
                                        </tr>
                                        <?php } } } }?>                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
							</div>
						</div>
					
					<div id="tab-B" class="tab-pane fade" role="tabpanel">
					  <p class="xs-fon-13 margin-10px-bottom">The following addresses will be used on the checkout page by default.</p>
							<?php 
								$prodcatsql1 = $db->query("SELECT * FROM customers WHERE customer_id = " . $customrow['customer_id'] . ";");
//$prodcatres = mysql_query($prodcatsql);
//$numrows = mysql_num_rows($prodcatres);
if($prodcatsql1->num_rows == 0)
{
echo "<h1>No Details</h1>";

}
else
{
//echo "<table cellpadding='10'>";
while($prodrow1 = $prodcatsql1->fetch_assoc())
{ ?>
                           
                            <h4 class="billing-address">Billing address</h4>
                            <p><strong><?php echo $prodrow1['forename']; ?> <?php echo $prodrow1['surname']; ?></strong></p>
                                                        <p><?php echo $prodrow1['add1']; ?>, <?php echo $prodrow1['add2']; ?>, <?php echo $prodrow1['add3']; ?><br>
                                                            <?php echo $prodrow1['district']; ?> - <?php echo $prodrow1['postcode']; ?>, <?php echo $prodrow1['state']; ?><br>
                                                            <?php echo $prodrow1['country']; ?></p>
                                                            
                                                            <p>Mobile : <?php echo $prodrow1['phone']; ?></p>
                                                            <p>Email : <?php echo $prodrow1['email']; ?></p>
                             <?php } } ?>      
					</div>
					<div id="tab-C" class="tab-pane fade" role="tabpanel">
					  <h3>Account details </h3>
                            <div class="account-login-form bg-light-gray padding-20px-all">
								<?php 
								$prodcatsql1 = $db->query("SELECT * FROM customers WHERE customer_id = " . $customrow['customer_id'] . ";");
//$prodcatres = mysql_query($prodcatsql);
//$numrows = mysql_num_rows($prodcatres);
if($prodcatsql1->num_rows == 0)
{
echo "<h1>No Details</h1>";

}
else
{
//echo "<table cellpadding='10'>";
while($prodrow1 = $prodcatsql1->fetch_assoc())
{
	?>
                                <form  id="updateForm" method="post">
									<input name="cus_id" placeholder="<?php echo $customrow['customer_id']; ?>" value="<?php echo $customrow['customer_id']; ?>" type="hidden">
                                    <fieldset>
                                        <p>Already have an account? <a href="login.php"> Log in instead!</a></p>

                                        <!--<div class="row">
                                            <div class="form-group">
                                                <div class="form-group margin-15px-top col-md-12 col-lg-12 col-xl-12">
                                                    <label class="control-label padding-10px-right"><strong>Title</strong></label>
                                                    <label class="radio-inline">
                                                        <input name="Mr" value="1" checked="checked" type="radio" class="padding-10px-right"> Mr. &nbsp;
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input name="Mrs" value="0" type="radio" class="padding-10px-right"> Mrs.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>-->
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-firstname">First Name <span class="required-f">*</span></label>
                                                <input name="first_name" value="<?php echo $customrow['forename']; ?>" id="input-firstname" class="form-control" type="text">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-lastname">Last Name <span class="required-f">*</span></label>
                                                <input name="sur_name" value="<?php echo $prodrow1['surname']; ?>" id="input-lastname" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-firstname">Flat Number / Building Name </label>
                                                <input id="user_add" name="user_add" value="<?php echo $prodrow1['add1']; ?>" class="form-control" type="text">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-lastname">Locality / Area / Street </label>
                                                <input id="user_add" name="user_add2" value="<?php echo $prodrow1['add2']; ?>" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-firstname">District <span class="required-f">*</span></label>
                                                <input id="user_district" name="user_district" value="<?php echo $prodrow1['district']; ?>" class="form-control" type="text">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-lastname">Pincode <span class="required-f">*</span></label>
                                                <input id="user_postcode" name="user_postcode" value="<?php echo $prodrow1['postcode']; ?>" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-firstname">State <span class="required-f">*</span></label>
                                                <select class="form-control" name="user_state" id="user_state">
							                         <option value="<?php echo $prodrow1['state']; ?>"><?php echo $prodrow1['state']; ?></option>
													 <option value="">Select State</option>
													 <option value="Tamil Nadu">Tamil Nadu</option>
											    </select>		 
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-lastname">Country <span class="required-f">*</span></label>
                                                <select class="form-control" name="user_country" id="user_country">
							                         <option value="<?php echo $prodrow1['country']; ?>"><?php echo $prodrow1['country']; ?></option>
													 <option value="">Select Country</option>
													 <option value="India">India</option>
											    </select>		 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                                <input id="reg_email" name="reg_email" value="<?php echo $prodrow1['email']; ?>"  class="form-control" type="email" readonly>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-telephone">Mobile <span class="required-f">*</span></label>
                                                <input id="mobile" name="mobile" value="<?php echo $prodrow1['phone']; ?>"  class="form-control" type="tel" readonly>
                                            </div>
                                        </div>
                                         <?php $accuser = $db->query("select * from logins WHERE username = '" . $_SESSION['SESS_USERNAME']. "'"); 
                                                            $accinfo = $accuser->fetch_assoc();                                                           
                                                            ?>
                                        <div class="row">
											<legend style="margin-top: 0px;">Login details</legend>
                                             <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-email">Username <span class="required-f">*</span></label>
                                                <input type="text" id="reg_email" name="username" value="<?php echo $accinfo['username']; ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-password">Current Password <span class="required-f">*</span></label>
                                                <input type="password" name="current_password" id="current_password" value="<?php echo $accinfo['password']; ?>" readonly><span toggle="#current_password" class="fa fa-fw fa-eye field-icon toggle-password" id="togglePassword" style="margin-top: 18px;margin-left: -25px;display: inline;"></span>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-password">New Password <span class="required-f">*</span></label>
                                                <input type="password" name="new_password" id="confirm-pwd"><span toggle="#confirm-pwd" class="fa fa-fw fa-eye field-icon toggle-password" style="margin-top: 18px;margin-left: -25px;display: inline;"></span>
                                            </div>
                                        </div>

                                        <!--<div class="row">
                                            <div class="col-md-12 col-lg-12 col-xl-12 required">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="">Receive offers from our partners
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="">Sign up for our newsletter 
                                                    </label>
                                                    <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p><br>

                                                </div>
                                            </div>
                                        </div>-->
                                    </fieldset>

                                    <button type="submit" name="submit" class="btn margin-15px-top btn-primary">Save Changes</button>
                                </form>
<h4 id="res" class="mt-3" style="text-align: center;"></h4>
                                <?php } } ?>
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#updateForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "pro_update.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res").html(resp);
				},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
                            </div>
					</div>
					</div>
					<!--<div id="tab-B" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span>Hours</span></div>
								<ul>
									<li><span>08:00</span></li>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span>Monday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Tuesday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Wednesday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Thursday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Friday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Saturday</span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Sunday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab-C" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span>Hours</span></div>
								<ul>
									<li><span>08:00</span></li>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span>Monday</span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Tuesday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Wednesday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Thursday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Friday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Saturday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Sunday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab-D" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span>Hours</span></div>
								<ul>
									<li><span>08:00</span></li>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span>Monday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Tuesday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Wednesday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Thursday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Friday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Saturday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Sunday</span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab-E" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span>Hours</span></div>
								<ul>
									<li><span>08:00</span></li>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span>Monday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Tuesday</span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Wednesday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Thursday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Friday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Saturday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Sunday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab-F" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span>Hours</span></div>
								<ul>
									<li><span>08:00</span></li>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span>Monday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Tuesday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Wednesday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Friday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Friday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Saturday</span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Sunday</span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab-G" class="tab-pane fade" role="tabpanel">
						<div class="cd-schedule loading">
							<div class="timeline">
								<div class="timeline-top-info"><span>Hours</span></div>
								<ul>
									<li><span>08:00</span></li>
									<li><span>09:00</span></li>
									<li><span>10:00</span></li>
									<li><span>11:00</span></li>
									<li><span>12:00</span></li>
									<li><span>13:00</span></li>
									<li><span>14:00</span></li>
									<li><span>15:00</span></li>
									<li><span>16:00</span></li>
									<li><span>17:00</span></li>
									<li><span>18:00</span></li>
									<li><span>19:00</span></li>
								</ul>
							</div>
							<div class="events">
								<ul>
									<li class="events-group">
										<div class="schedule-top-info"><span>Monday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="12:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Tuesday</span></div>
										<ul>
											<li class="doctor-card" data-start="09:00" data-end="14:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Wednesday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card d-lg-none" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Thursday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="11:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="11:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="15:00" data-end="17:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="17:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Friday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="12:00" data-end="14:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-03-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Saturday</span></div>
										<ul>
											<li class="doctor-card" data-start="8:00" data-end="13:00" data-event="event-2">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-02-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Gerald Gleaves</div>
													<div class="doctor-position">General Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="13:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="events-group">
										<div class="schedule-top-info"><span>Sunday</span></div>
										<ul>
											<li class="doctor-card" data-start="08:00" data-end="12:00" data-event="event-3">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Frank Bigham</div>
													<div class="doctor-position">Associate Dentist</div>
												</a>
											</li>
											<li class="doctor-card" data-start="14:00" data-end="18:00" data-event="event-1">
												<a href="doctor-page.html">
													<div class="doctor-photo"><img src="images/content/doctop-01-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Pamela Knaack</div>
													<div class="doctor-position">Dental Hygienist</div>
												</a>
											</li>
											<li class="doctor-card before-last-time" data-start="18:00" data-end="20:00" data-event="event-4">
												<a href="doctor-page.html">
													<div class="doctor-photo d-lg-none"><img src="images/content/doctop-04-sm.jpg" alt=""></div>
													<div class="doctor-name">Dr. Billy Logan</div>
													<div class="doctor-position">Cosmetic Dentist</div>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						</div>-->
					</div>
				</div>
			</div>
			<!--//section-->
		</div>
	</div>
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
	<script src="vendor/schedule/schedule.js"></script>
	<!-- Custom Scripts -->
	<script src="js/app.js"></script>
    <script src="color/color.js"></script>

	<script src="js/app-shop.js"></script>
	<script src="form/forms.js"></script>
	
</body>
</html>
