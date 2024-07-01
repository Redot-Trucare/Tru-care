<?php
require("dbConfig.php");
function pf_validate_number($value, $function, $redirect) {
if(isset($value) == TRUE) {
if(is_numeric($value) == FALSE) {
$error = 1;
}
if(@$error == 1) {
header("Location: " . $redirect);
}
else {
$final = $value;
}
}
else {
if($function == 'redirect') {
header("Location: " . $redirect);
}
if($function == "value") {
$final = 0;
}
}
return $final;
}


function showcart()
{
if(isset($_SESSION['SESS_ORDERNUM']))
{
if(isset($_SESSION['SESS_LOGGEDIN']))
{
	require("dbConfig.php");
$custsql = $db->query("SELECT id, status, registered from orders WHERE session = '" . session_id(). "' AND customer_id = ". $_SESSION['SESS_USERID']. " AND status < 2;");
$custrow = $custsql->fetch_assoc();

$result = $db->query("SET NAMES utf8");//the main trick

$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.id AND orderitems.size = products.Size AND orderitems.customer_id = ". $_SESSION['SESS_USERID']. " AND orderitems.session_id = '" . session_id(). "'  AND orderitems.payment_type = 0 GROUP BY orderitems.product_id");
$itemnumrows = $itemssql->num_rows;

/*$itemssql2 = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.Product_id AND orderitems.customer_id = ". $_SESSION['SESS_USERID']. " AND orderitems.session_id = '" . session_id(). "' AND orderitems.payment_type = 0 GROUP BY orderitems.product_id");
$itemnumrows2 = $itemssql2->num_rows;*/
}
else
{
	require("dbConfig.php");
	//require("show.php");
$custsql = $db->query("SELECT id, status, registered from orders WHERE session = '" . session_id(). "' AND registered = 0 AND status < 2;");
$custrow = $custsql->fetch_assoc();

$result = $db->query("SET NAMES utf8");//the main trick

$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.id AND orderitems.size = products.Size  AND orderitems.session_id = '" . session_id(). "' AND orderitems.order_id = " . $custrow['id']. " GROUP BY orderitems.product_id");
//mysqli_query($db,$itemssql);
//echo $itemssql;
//$itemssql = $db->query("Select Product_Name, Sum(Quantity), Amount, ( Sum(Quantity) * Amount ) As Total_Amount From Orderitems Group By Product_Name Order By Product_Name AND order_id = " . $custrow['id']);
$itemnumrows = $itemssql->num_rows;

/*$itemssql2 = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.Product_id AND orderitems.session_id = '" . session_id(). "' AND products.Region = 'All' AND orderitems.order_id = " . $custrow['id']. " GROUP BY orderitems.product_id");
//mysqli_query($db,$itemssql2);
//echo $itemssql2;
$itemnumrows2 = $itemssql2->num_rows;*/

//echo "<h3><a href='#' data-toggle='modal' data-target='.bs-example-modal-md' data-whatever='@mdo'><i class='fa fa-user'></i> Sign In</a></h3><br>";
//$itemnumrows = 0;
}
}
else
{
	require("dbConfig.php");
$itemnumrows = 0;
//$itemnumrows2 = 0;
}

if($itemnumrows == 0)
{
echo "<h3><strong>Cart is empty., Add more products. Happy Shopping</strong></h3><br>";
}

else 
{
	require("dbConfig.php"); ?>
	<div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<!--<div class="alert alert-success text-uppercase" role="alert">
						<i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> You've got free shipping!
					</div>-->
					 
                	<form action="#" method="post" class="cart style2">
                		<table class="table price-table js-fixed-table">
                            <thead>
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
								<?php
							while($itemsrow = $itemssql->fetch_assoc()) { ?>
								<?php @$quantitytotal1 += $itemsrow['price'] * $itemsrow['pro_count'];
									  $quantitytotal11 = $itemsrow['price'] * $itemsrow['pro_count']; ?>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" width="35%" src="Admin/products/<?php echo $itemsrow['image1']; ?>" alt="<?php echo $itemsrow['product_name'];?>"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#"><?php echo $itemsrow['product_name'];?> </a>
                                        </div>
                                        
                                        <!--<div class="cart__meta-text">
                                            Color: Navy<br>Size: Small<br>
                                        </div>-->
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item text-center">
                                        <span class="money">$<?php echo $itemsrow['price'];?></span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-center">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
												<?php echo $itemsrow['pro_count'];?>
                                                <!--<a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                <input class="cart__qty-input qty" type="text" name="updates[]" value="1" pattern="[0-9]*">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="small--hide cart-price text-center">
                                        <div><span class="money">$<?php echo $quantitytotal11;?>.00</span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="delete.php?id=<?php echo $itemsrow['itemid']; ?>" class="btn btn--secondary cart__remove" title="Remove tem">Remove</a></td>
                                </tr>
                               
                                     <?php 
                                             $pro_total2 = $quantitytotal1;
                                             //$curr = $itemsrow['Currency_Type'];
                                            } if($pro_total2 == 0 && $pro_total1 == 0) { echo "<tr><td>Empty Cart</td></tr>"; } ?>
                            </tbody>
                    		<!--<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="" class="btn btn--link btn--small cart-continue"><i class="anm anm-chevron-cir-left"></i> Continue shopping</a></td>
                                    <td colspan="3" class="text-right">
	                                    <button type="submit" name="clear" class="btn btn--link btn--small small--hide"><i class="icon icon anm anm-times-l"></i> Clear Shoping Cart</button>
                                    	<button type="submit" name="update" class="btn btn--link btn--small cart-continue ml-2"><i class="anm anm-sync-ar"></i> Update Cart</button>
                                    </td>
                                </tr>
                            </tfoot>-->
                    </table> 
                    </form>                   
               	</div>
               	
               	<div class="container mt-4">
                    <div class="row">
                    	<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4 cart-col">
							<?php  /*if($pro_total > 2000) {*/
									 
	                            //@$total = $total + $quantitytotal;
@$pro_total = $pro_total1 + $pro_total2;
	                             
	                              /*if(isset($_SESSION['SESS_LOGGEDIN'])) { 
	                                 $customcoup1 = $db->query("SELECT * FROM coupon_status WHERE customer_id = '".$_SESSION['SESS_USERID']."' and order_id = " . $custrow['id']. "");
										  $custcheck1 = $customcoup1->num_rows;
										  if ($custcheck1 == 1) { } else {
$totalsql = $db->query("UPDATE orders SET total = ". $pro_total . " WHERE id = ". $_SESSION['SESS_ORDERNUM']);
}
*/
	                            ?>
                        	<!--<h5>Discount Codes</h5>
                            <form action="#" method="post">
                            	<div class="form-group">
                                    <label for="address_zip">Enter your coupon code if you have one.</label>
                                    <input type="text" name="coupon">
                                </div>
                                <div class="actionRow">
                                    <div><input type="button" class="btn btn-secondary btn--small" value="Apply Coupon"></div>
                                </div>
                            </form>-->
                            <?php //} ?>
                        </div>
                        
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4 cart-col">
                        	<!--<h5>Estimate Shipping and Tax</h5>-->
							
                        </div>
                        
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                            <div class="solid-border">	
                              <div class="row border-bottom pb-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                                <span class="col-12 col-sm-6 text-right"><span class="money">$<?php echo $pro_total;?>.00</span></span>
                              </div>
                              <!--<div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Tax</span>
                                <span class="col-12 col-sm-6 text-right">$10.00</span>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Shipping</span>
                                <span class="col-12 col-sm-6 text-right">Free shipping</span>
                              </div>-->
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand Total</strong></span>
                                <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">$<?php echo $pro_total;?>.00</span></span>
                              </div>
                              <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                              <!--<p class="cart_tearm">
                                <label>
                                  <input type="checkbox" name="tearm" class="checkbox" value="tearm" required>
                                  I agree with the terms and conditions
								</label>
                              </p>-->
                              <a href="checkout.php" class="btn btn--small-wide checkout">Proceed To Checkout</a>
                              <!--<input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Proceed To Checkout">-->
                              <div class="paymnet-img"><img src="assets/images/payment-img.jpg" alt="Payment"></div>
                              <!--<p><a href="#;">Checkout with Multiple Addresses</a></p>-->
                            </div>
        
                        </div>
                    </div>
                </div>
		
<?php
}
}

function checkout_showcart()
{
if(isset($_SESSION['SESS_ORDERNUM']))
{
if(isset($_SESSION['SESS_LOGGEDIN']))
{
	require("dbConfig.php");
$custsql = $db->query("SELECT id, status, registered, total from orders WHERE session = '" . session_id(). "' AND customer_id = ". $_SESSION['SESS_USERID']. " AND status < 2;");
$custrow = $custsql->fetch_assoc();

$result = $db->query("SET NAMES utf8");//the main trick

$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.id AND orderitems.size = products.Size  AND orderitems.customer_id = ". $_SESSION['SESS_USERID']. " AND orderitems.session_id = '" . session_id(). "' AND orderitems.payment_type = 0 GROUP BY orderitems.product_id");
$itemnumrows = $itemssql->num_rows;

}
else
{
	require("dbConfig.php");
	//require("show.php");
$custsql = $db->query("SELECT id, status, registered, total from orders WHERE session = '" . session_id(). "' AND registered = 0 AND status < 2;");
$custrow = $custsql->fetch_assoc();

$result = $db->query("SET NAMES utf8");//the main trick

$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.id AND orderitems.size = products.Size  AND orderitems.session_id = '" . session_id(). "' AND orderitems.order_id = " . $custrow['id']. " GROUP BY orderitems.product_id");
//mysqli_query($db,$itemssql);
//echo $itemssql;
//$itemssql = $db->query("Select Product_Name, Sum(Quantity), Amount, ( Sum(Quantity) * Amount ) As Total_Amount From Orderitems Group By Product_Name Order By Product_Name AND order_id = " . $custrow['id']);
$itemnumrows = $itemssql->num_rows;

/*$itemssql2 = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.Product_id AND orderitems.session_id = '" . session_id(). "' AND products.Region = 'All' AND orderitems.order_id = " . $custrow['id']. " GROUP BY orderitems.product_id");
//mysqli_query($db,$itemssql2);
//echo $itemssql2;
$itemnumrows2 = $itemssql2->num_rows;*/

}
}
else
{
	require("dbConfig.php");
$itemnumrows = 0;
$itemnumrows2 = 0;
}

?>
<div class="your-order-payment">
                        <div class="your-order">
                            <h2 class="order-title mb-4">Your Order</h2>

                            <div class="table-responsive-sm order-table"> 
                                <table class="bg-white table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Product Name</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
	                          
							while($itemsrow = $itemssql->fetch_assoc()) { ?>
                                        <tr>
											<?php 
												@$quantitytotal1 += $itemsrow['price'] * $itemsrow['pro_count'];
												$quantitytotal11 = $itemsrow['price'] * $itemsrow['pro_count'];?>
                                            <td class="text-left"><?php echo ucwords($itemsrow['product_name']);?></td>
                                            <td>$ <?php echo $itemsrow['price'];?>.00</td>
                                            <td><?php echo $itemsrow['pro_count'];?></td>
                                            <td>$ <?php echo $quantitytotal11;?>.00</td>
                                        </tr>
                                        <?php 
                                             $pro_total2 = $quantitytotal1;
                                             //$curr = $itemsrow['Currency_Type'];
                                            } @$pro_total = $pro_total2; ?>                                        
                                    </tbody>
                                    <tfoot class="font-weight-600">
                                        <!--<tr>
                                            <td colspan="4" class="text-right">Shipping </td>
                                            <td>$50.00</td>
                                        </tr>-->
                                        <tr>
                                            <td colspan="3" class="text-right">Total</td>
                                            <td>$ <?php echo $pro_total; ?>.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        
                        <hr>

                        
                    </div>
<?php
}



function success_showcart()
{
if(isset($_SESSION['SESS_ORDERNUM']))
{
if(isset($_SESSION['SESS_LOGGEDIN']))
{
	require("dbConfig.php");
$custsql = $db->query("SELECT id, status, registered, total from orders WHERE session = '" . session_id(). "' AND customer_id = ". $_SESSION['SESS_USERID']. " AND status < 2;");
$custrow = $custsql->fetch_assoc();

$result = $db->query("SET NAMES utf8");//the main trick

$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.SKU AND orderitems.size = products.Size AND orderitems.primary_color = products.Color AND orderitems.customer_id = ". $_SESSION['SESS_USERID']. " AND orderitems.session_id = '" . session_id(). "'  AND products.Region = 'India' AND orderitems.payment_type = 0 GROUP BY orderitems.product_id");
$itemnumrows = $itemssql->num_rows;

$itemssql2 = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.SKU AND orderitems.size = products.Size AND orderitems.primary_color = products.Color AND orderitems.customer_id = ". $_SESSION['SESS_USERID']. " AND orderitems.session_id = '" . session_id(). "' AND products.Region = 'All' AND orderitems.payment_type = 0 GROUP BY orderitems.product_id");
$itemnumrows2 = $itemssql2->num_rows;
}
else
{
	require("dbConfig.php");
	//require("show.php");
$custsql = $db->query("SELECT id, status, registered, total from orders WHERE session = '" . session_id(). "' AND registered = 0 AND status < 2;");
$custrow = $custsql->fetch_assoc();

$result = $db->query("SET NAMES utf8");//the main trick

$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.SKU AND orderitems.size = products.Size AND orderitems.primary_color = products.Color AND orderitems.session_id = '" . session_id(). "' AND products.Region = 'India' AND orderitems.order_id = " . $custrow['id']. " GROUP BY orderitems.product_id");
//mysqli_query($db,$itemssql);
//echo $itemssql;
//$itemssql = $db->query("Select Product_Name, Sum(Quantity), Amount, ( Sum(Quantity) * Amount ) As Total_Amount From Orderitems Group By Product_Name Order By Product_Name AND order_id = " . $custrow['id']);
$itemnumrows = $itemssql->num_rows;

$itemssql2 = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.SKU AND orderitems.size = products.Size AND orderitems.primary_color = products.Color AND orderitems.session_id = '" . session_id(). "' AND products.Region = 'All' AND orderitems.order_id = " . $custrow['id']. " GROUP BY orderitems.product_id");
//mysqli_query($db,$itemssql2);
//echo $itemssql2;
$itemnumrows2 = $itemssql2->num_rows;

}
}
else
{
	require("dbConfig.php");
$itemnumrows = 0;
$itemnumrows2 = 0;
}

?>
<div id="order_review" class="woocommerce-checkout-review-order">
											<table class="shop_table woocommerce-checkout-review-order-table">
												<thead>
													<tr>
														<th class="product-name">Product</th>
														<th class="product-name">Unit Price</th>
														<th class="product-total">Total</th>
													</tr>
												</thead>
												
												<tbody>
													<?php			

											$quantitytotal2 = 0;
											while($itemsrow2 = $itemssql2->fetch_assoc())
{

?>
                                            <tr class="cart_item">
												<?php 
												
												$quantitytotal2 += $itemsrow2['Price'] * $itemsrow2['pro_count'];
												$quantitytotal22 = $itemsrow2['Price'] * $itemsrow2['pro_count'];
?> 

                                                    <td class="product-name">
                                                        <?php echo ucwords($itemsrow2['Product_Title']);?> <strong class="product-quantity"> × <?php echo $itemsrow2['pro_count'];?></strong>
                                                    </td>
                                                    <td class="product-name">
                                                        <span class="amount">TZs <?php echo $itemsrow2['Price'];?></span>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">TZs <?php echo $quantitytotal22;?>.00</span>
                                                    </td>
                                                </tr>
                                                <?php
	                           $pro_total1 = $quantitytotal2;
	                           $curr = $itemsrow2['Currency'];
							}
							while($itemsrow = $itemssql->fetch_assoc())
{

?>
                                            <tr class="cart_item">
												<?php 
												@$quantitytotal1 += $itemsrow['Price'] * $itemsrow['pro_count'];
												$quantitytotal11 = $itemsrow['Price'] * $itemsrow['pro_count'];?>
												<td class="product-name">
                                                        <?php echo ucwords($itemsrow['Product_Title']);?> <strong class="product-quantity"> × <?php echo $itemsrow['pro_count'];?></strong>
                                                    </td>
                                                    <td class="product-name">
                                                        <span class="amount">TZs <?php echo $itemsrow['Price'];?></span>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">TZs <?php echo $quantitytotal11;?>.00</span>
                                                    </td>
                                                </tr>
                                                 <?php 
                                             $pro_total2 = $quantitytotal1;
                                             $curr = $itemsrow['Currency_Type'];
                                            }
                                             $itstosql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.SKU AND orderitems.size = products.Size AND orderitems.primary_color = products.Color AND orderitems.session_id = '" . session_id(). "' AND orderitems.order_id = '". $custrow['id'] ."' GROUP BY orderitems.product_id");
//mysqli_query($db,$itstosql);
//echo $itstosql;
//$itstorows = $itstosql->num_rows;
while($itrow = $itstosql -> fetch_assoc())
{
                                             $quan = $itrow['quantity'];
	$sku = $itrow['SKU'];
	
	 $stsql = $db->query("select quantity from stocks WHERE sku = '$sku'");
	 while($storow = $stsql->fetch_assoc()){
		 
		 If($storow['quantity'] == 0){
			 $message = '"' .$itrow['Product_Title']. '" not in Stock';
			 echo "<script type='text/javascript'>alert('$message');</script>";
			 //echo 'alert("' . $itrow['Title']. '" not in Stock")';
			 //echo 'No Stock';
			 }
		 
		 }
	
}
	                           
@$pro_total = $pro_total1 + $pro_total2;
	                             
	                             //
//$totalsql = $db->query("UPDATE orders SET total = ". $pro_total . " WHERE id = ". $_SESSION['SESS_ORDERNUM']);


	                            ?>
												
												</tbody>
												
												<tfoot>
													
													
													<tr class="order-total">
														<th>Total</th>
														<td></td>
														<td>
															<strong>
																<span class="woocommerce-Price-amount amount">
																	<span class="woocommerce-Price-currencySymbol">$</span><?php echo $pro_total; ?>.00
																</span>
															</strong> 
														</td>
													</tr>
													<?php /*if($total > 2000) {*/ 
										if(isset($_SESSION['SESS_LOGGEDIN'])) {
										 $customsql = $db->query("SELECT * FROM coupon_status WHERE order_id = '".$custrow['id']."' and customer_id = '".$_SESSION['SESS_USERID']."' and session_id = '".session_id()."'");
										  $coupcheck = $customsql->num_rows;
										  $couprow = $customsql->fetch_assoc();
										  if($coupcheck == 1) {
										?>
													<tr class="order-total">
										 <th>Coupon Code Applied</th>
										 <td>
                                            <strong>
                                                <span class="amount"><?php echo $couprow['discount'];?> %</span>
                                            </strong>
                                        </td>
                                        </tr>
                                        <tr class="order-total">
										 <th>Total Payable</th>
										 <td></td>
										  <td>
										     <strong>
										         <span class="amount">TZs <?php echo $couprow['sell_price'];?></span>
										      </strong>
										   </td>
										 </tr>
	                                    <?php } else {} }?>
												</tfoot>
											</table>											
											
										</div>
                                <?php
}

function cart_price()
{
	$item_details = '';
if(isset($_SESSION['SESS_ORDERNUM']))
{
if(isset($_SESSION['SESS_LOGGEDIN']))
{
	require("dbConfig.php");
$custsql = $db->query("SELECT id, status, registered, total from orders WHERE session = '" . session_id(). "' AND customer_id = ". $_SESSION['SESS_USERID']. " AND status < 2;");
$custrow = $custsql->fetch_assoc();

$result = $db->query("SET NAMES utf8");//the main trick

$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.SKU AND orderitems.size = products.Size AND orderitems.primary_color = products.Color AND orderitems.customer_id = ". $_SESSION['SESS_USERID']. " AND orderitems.session_id = '" . session_id(). "'  AND products.Region = 'India' AND orderitems.payment_type = 0 GROUP BY orderitems.product_id");
$itemnumrows = $itemssql->num_rows;

$itemssql2 = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.SKU AND orderitems.size = products.Size AND orderitems.primary_color = products.Color AND orderitems.customer_id = ". $_SESSION['SESS_USERID']. " AND orderitems.session_id = '" . session_id(). "' AND products.Region = 'All' AND orderitems.payment_type = 0 GROUP BY orderitems.product_id");
$itemnumrows2 = $itemssql2->num_rows;
}
else
{
	require("dbConfig.php");
	//require("show.php");
$custsql = $db->query("SELECT id, status, registered, total from orders WHERE session = '" . session_id(). "' AND registered = 0 AND status < 2;");
$custrow = $custsql->fetch_assoc();

$result = $db->query("SET NAMES utf8");//the main trick

$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.SKU AND orderitems.size = products.Size AND orderitems.primary_color = products.Color AND orderitems.session_id = '" . session_id(). "' AND products.Region = 'India' AND orderitems.order_id = " . $custrow['id']. " GROUP BY orderitems.product_id");
//mysqli_query($db,$itemssql);
//echo $itemssql;
//$itemssql = $db->query("Select Product_Name, Sum(Quantity), Amount, ( Sum(Quantity) * Amount ) As Total_Amount From Orderitems Group By Product_Name Order By Product_Name AND order_id = " . $custrow['id']);
$itemnumrows = $itemssql->num_rows;

$itemssql2 = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.SKU AND orderitems.size = products.Size AND orderitems.primary_color = products.Color AND orderitems.session_id = '" . session_id(). "' AND products.Region = 'All' AND orderitems.order_id = " . $custrow['id']. " GROUP BY orderitems.product_id");
//mysqli_query($db,$itemssql2);
//echo $itemssql2;
$itemnumrows2 = $itemssql2->num_rows;

}
}
else
{
	require("dbConfig.php");
$itemnumrows = 0;
$itemnumrows2 = 0;
}

?>

												<?php			

											$quantitytotal2 = 0;
											while($itemsrow2 = $itemssql2->fetch_assoc())
{

?>
                                           
												<?php 
												
												$quantitytotal2 += $itemsrow2['Price_Us'] * $itemsrow2['pro_count'];
												$quantitytotal22 = $itemsrow2['Price_Us'] * $itemsrow2['pro_count'];
?> 

                                                    
                                              <?php
	                           $pro_total1 = $quantitytotal2;
	                           $curr = $itemsrow2['Currency'];
	                           $item_details .= $itemsrow2["Title"] . ', ';
							}
							while($itemsrow = $itemssql->fetch_assoc())
{

?>
                                            
												<?php 
												@$quantitytotal1 += $itemsrow['Price'] * $itemsrow['pro_count'];
												$quantitytotal11 = $itemsrow['Price'] * $itemsrow['pro_count'];?>
												
                                                 <?php 
                                                 //$order_details .= '';
                                             $pro_total2 = $quantitytotal1;
                                             $curr = $itemsrow['Currency_Type'];
                                             $item_details .= $itemsrow["Product_Title"] . ', ';
                                             
                                            }
                                             $customsql = $db->query("SELECT * FROM coupon_status WHERE order_id = '".$custrow['id']."' and customer_id = '".$_SESSION['SESS_USERID']."' and session_id = '".session_id()."'");
										  $coupcheck = $customsql->num_rows;
										  $couprow = $customsql->fetch_assoc();
										  if($coupcheck == 1) {
									@$pro_total = $couprow['sell_price'];
										  } else {
@$pro_total = $pro_total1 + $pro_total2;
}
	                           
//@$pro_total = $pro_total1 + $pro_total2;
	                             $item_details = substr($item_details, 0, -2);
	                  
//$totalsql = $db->query("UPDATE orders SET total = ". $pro_total . " WHERE id = ". $_SESSION['SESS_ORDERNUM']);


	                            ?>
												
                                   			<input type="hidden" name="total_amount" value="<?php echo $pro_total; ?>" />
									<input type="hidden" name="currency_code" value="TZs" />
									<input type="hidden" name="item_details" value="<?php echo $item_details; ?>" />
                                <?php
}
?>
