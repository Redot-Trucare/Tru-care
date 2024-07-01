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
								<span class="facebook"><a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a></span>
								<span class="google"><a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-x-logo"></i></a></span>
								<span class="instagram"><a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3>Services</h3>
					<div class="h-decor"></div>
					<?php
									include_once 'dbConfig.php'; 
									//$blo_id = $_GET['id'];
									$sql = $db->query("select id,title from services ORDER BY id DESC LIMIT 5");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
					<div class="footer-post d-flex">						
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="service-details.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></div>							
						</div>
					</div>
					<?php } }?>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3>Our Contacts</h3>
					<div class="h-decor"></div>
					<ul class="icn-list">
						<li><i class="icon-placeholder2"></i>279/2, VSR Complex, Thasildhar Nagar, Anna Nagar, Madurai- 625020
							<br>
							<a href="contact.php" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Get directions on the map</span><i class="icon-right-arrow"></i></a>
						</li>
						<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">+91 9363910053</span></span></b></li>
						<li><i class="icon-black-envelope"></i><a href="mailto:truskin@gmail.com">truskin@gmail.com</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row text-center text-md-left">
					<div class="col-sm">Copyright © 2024 <a href="#"> Truskin & Hair Clinic</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
						Design and Develop by <a target="_blank" href="https://jojogroup.in/">JOJO Softwares</a></div>
					<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">For emergency cases&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<b>1-800-267-0000</b></div>
				</div>
			</div>
		</div>
	</div>
