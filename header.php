<header class="header">
		<div class="header-mobile-info">
			<div class="header-mobile-info-content js-info-content">
				<ul class="icn-list-sm">
					<li><i class="icon-placeholder2"></i>1560 Holden Street San Diego,
						<br> CA 92139
					</li>
					<li><i class="icon-telephone"></i><span class="text-nowrap">1-800-267-0000</span>, <span class="text-nowrap">1-800-267-0001</span></li>
					<li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a></li>
					<li><i class="icon-clock"></i>Mon-Fri: 08:00 - 20:00
						<br> Saturday: 08:00 - 18:00</li>
				</ul>
			</div>
		</div>
		<div class="header-mobile-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-3">
						<div class="header-mobile-info-toggle js-info-toggle"></div>
					</div>
					<div class="col-auto header-button-wrap ml-auto"><a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i>APPOINTMENT<i class="icon-right-arrow"></i></a></div>
				</div>
			</div>
		</div>
		<div class="header-topline d-none d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<div class="header-phone"><i class="icon-telephone"></i><a href="tel:1-847-555-5555">+91 9363910053</a></div>
						<div class="header-info"><i class="icon-placeholder2"></i>279/2, VSR Complex, Thasildhar Nagar, Anna Nagar, Madurai- 625020</div>
						<div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:truskin@gmail.com">truskin@gmail.com</a></div>
					</div>
					<div class="col-auto ml-auto d-flex align-items-center">
						<!--<span class="header-social">
							<a href="#" class="hovicon"></a>
							<a href="#" class="hovicon">My Account</a>
							<a href="" class="hovicon">Logout</a>
						
						</span>-->
					</div>
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>
					<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
						<a href="index.php" class="header-logo"><img src="images/logo.png" alt="" class="img-fluid"></a>
					</div>
					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link" href="about.php">About Us</a>
										</li>
										<li class="nav-item">
											<a href="services.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
											<ul class="dropdown-menu">
												<?php
									include_once 'dbConfig.php'; 
									//$blo_id = $_GET['id'];
									$sql = $db->query("select id,title from services ORDER BY id ASC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
												<li><a class="dropdown-item" href="service-details.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></li>
										<?php } }?>
											</ul>											
										</li>
										<!--<li class="nav-item">
											<a href="products.php" class="nav-link">Products</a>
										</li>-->
										<li class="nav-item">
											<a href="gallery.php" class="nav-link">Gallery</a>
										</li>
										<!--<li class="nav-item">
											<a href="our-specialist.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Specialists</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="our-specialist.html">All Specialists</a></li>
												<li><a class="dropdown-item" href="doctor-page.html">Doctor Page</a></li>
												<li><a class="dropdown-item" href="schedule.html">Schedule Table</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="testimonials.html">Testimonials</a>
										</li>-->
										<li class="nav-item dropdown">
											<a href="blogs.php" class="nav-link">Blogs</a>											
										</li>
										<li class="nav-item">
											<a class="nav-link" href="contact.php">Contacts</a>
										</li>
										<?php
/* if(isset($_SESSION['SESS_LOGGEDIN']))
{	
require("dbConfig.php");
$checksqluser = $db->query("select * from customers WHERE email = '" . $_SESSION['SESS_USERNAME']. "'");
//mysqli_query($db,$checksqluser);
//echo $checksqluser;

		$customrow = $checksqluser->fetch_assoc();*/ ?>
		   <!--<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php //echo $customrow['forename']; ?> <?php //echo $customrow['surname']; ?> !</a>
											<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="my-account.php">My Account</a></li>
									        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
											</ul>											
										</li>-->
										<?php// } else { ?>
											<!--<li class="nav-item">
											<a class="nav-link" href="login.php">Login / Register</a>
										</li>-->	
										<?php //} ?>	
                                </ul>
								</div>
							</nav>
						</div>
						<!--<div class="header-search">
							<form action="#" class="form-inline">
								<i class="icon-search"></i>
								<input type="text" placeholder="Search">
								<button type="submit"><i class="icon-search"></i></button>
							</form>
						</div>-->
						<div class="header-cart cart-toggler">
							<?php //addcart();?>
							<!--<a href="#" class="icon icon-cart"></a>
							
							<span class="badge">2</span>
							<div class="header-cart-dropdown">
								<div class="prd-sm">
									<div class="prd-sm-img">
										<a href="products.php"><img src="images/product/prd-sm-1.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="prd-sm-info">
										<h3><a href="products.php">Active Wow Teeth Whitening Charcoal Powder</a></h3>
										<div class="price">$38.88</div>
									</div>
									<div class="prd-sm-delete"><i class="icon-close"></i></div>
								</div>
								<div class="prd-sm">
									<div class="prd-sm-img">
										<a href="products.php"><img src="images/product/prd-sm-2.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="prd-sm-info">
										<h3><a href="products.php">Electric Toothbrush</a></h3>
										<div class="price">$39.97</div>
									</div>
									<div class="prd-sm-delete"><i class="icon-close"></i></div>
								</div>
								<div class="header-cart-total">
									<div class="float-left">Total:</div>
									<div class="float-right">$78.85</div>
								</div>
								<a href="#" class="btn btn-sm btn-hover-fill"><span>CheckOut</span></a>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
