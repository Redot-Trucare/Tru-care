<?php
function addcart()
{
if(isset($_SESSION['SESS_ORDERNUM']))
{
if(isset($_SESSION['SESS_LOGGEDIN']))
{
	require("dbConfig.php");
$custsql = $db->query("SELECT id, status,registered from orders WHERE customer_id = ". $_SESSION['SESS_USERID'] . " AND status < 2");
//$custres = mysql_query($custsql)or die(mysql_error());;
//mysqli_query($db,$custsql);
//echo $custsql;
$custrow = $custsql->fetch_assoc();


$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.id AND orderitems.size = products.Size AND orderitems.customer_id = ". $_SESSION['SESS_USERID']. "  AND orderitems.session_id = '" . session_id(). "' AND orderitems.payment_type = 0 GROUP BY orderitems.product_id");
  //mysqli_query($db,$itemssql);
  //echo $itemssql;
$itemnumrows = $itemssql->num_rows;
}
else
{
	require("dbConfig.php");
	
$custsql = $db->query("SELECT id, status, registered from orders WHERE session = '" . session_id() . "' AND registered = 0 AND status < 2;");

$custrow = $custsql->fetch_assoc();

$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.id AND orderitems.size = products.Size AND orderitems.session_id = '" . session_id(). "' AND orderitems.order_id = " . $custrow['id'] . " GROUP BY orderitems.product_id");

//$itemssql = $db->query("Select Product_Name, Sum(Quantity), Amount, ( Sum(Quantity) * Amount ) As Total_Amount From Orderitems Group By Product_Name Order By Product_Name AND order_id = " . $custrow['id']);
$itemnumrows = $itemssql->num_rows;

}
}
else
{
	require("dbConfig.php");
$itemnumrows = 0;
}

if($itemnumrows == 0)
{
//echo "<h3>You cannot shop cart Because yet to Confirm Your Last order. (OR)  <a href='#' data-toggle='modal' data-target='.bs-example-modal-md' data-whatever='@mdo'><i class='fa fa-user'></i> Sign In</a></h3><br>";
?>
<a href="#" class="icon icon-cart"></a>
							<span class="badge">0</span>
                                        

<?php
}

else
{
	require("dbConfig.php");
//echo "<table cellpadding='10'>";
/*echo "<tr>";
echo "<td></td>";
echo "<td><strong>Item</strong></td>";
echo "<td><strong>Quantity</strong></td>";
echo "<td><strong>Unit Price</strong></td>";
echo "<td><strong>Total Price</strong></td>";
echo "<td></td>";
echo "</tr>";*/

?>
<a href="#" class="icon icon-cart"></a>
							<span class="badge"><?php echo $itemnumrows;?></span>
							<div class="header-cart-dropdown">
								<?php
while($itemsrow = $itemssql->fetch_assoc())
{
$quantitytotal = $itemsrow['price'] * $itemsrow['pro_count'];
?>
								<div class="prd-sm">
									<div class="prd-sm-img">
										<a href="products.php"><img src="Admin/products/<?php echo $itemsrow['image1']?>" class="img-fluid" alt=""></a>
									</div>
									<div class="prd-sm-info">
										<h3><a href="products.php"><?php echo $itemsrow['product_name']?></a></h3>
										<div class="price"><?php echo $itemsrow['price']; ?></div>
									</div>
									<div class="prd-sm-delete"><a href="delete.php?id=<?php echo $itemsrow['itemid']; ?>"><i class="icon-close"></i></a></div>
								</div>
								<?php 
		        						 @$total = $total + $quantitytotal;
		        						 }
		        						?>  
								
								<div class="header-cart-total">
									<div class="float-left">Total:</div>
									<div class="float-right">$<?php echo $total; ?></div>
								</div>
								<a href="cart.php" class="btn btn-sm btn-hover-fill"><span>Cart</span></a>
							</div>

	<!--<a href="#" class="site-header__cart btn-minicart" data-toggle="modal" data-target="#minicart-drawer">
                            <i class="icon anm anm-bag-l"></i>
                            <span class="site-cart-count"><?php echo $itemnumrows;?></span>
                        </a>
    <div class="minicart-right-drawer modal right fade" id="minicart-drawer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="cart-drawer" class="block block-cart">
                    <a href="delete.php?id=<?php //echo $custrow['id']; ?>" class="close-cart" data-dismiss="modal" aria-label="Close"><i class="anm anm-times-r"></i></a>
                    <h4>Your cart (<?php //echo $itemnumrows;?> Items)</h4>
                    <div class="minicart-content">
                        <ul class="clearfix">
							<?php/*
while($itemsrow = $itemssql->fetch_assoc())
{
$quantitytotal = $itemsrow['price'] * $itemsrow['pro_count'];*/
?>
                            <li class="item clearfix">
                                <a class="product-image" href="">
                                    <img src="Admin/Uploads/<?php //echo $itemsrow['image1']?>" alt="" title="">
                                </a>
                                <div class="product-details">
                                    <a href="delete.php?id=<?php //echo $itemsrow['itemid']; ?>" class="remove"><i class="anm anm-times-sql" aria-hidden="true"></i></a>
                                    <a href="#" class="edit-i remove"><i class="icon icon-pencil" aria-hidden="true"></i></a>
                                    <a class="product-title" href=""><?php //echo $itemsrow['product_name']?></a>
                                    <div class="variant-cart"><?php //echo $itemsrow['size']; ?></div>
                                    <h5>Quanity : <?php //echo $itemsrow['pro_count']; ?></h5>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">$<?php //echo $itemsrow['price']; ?></span>
                                        </div>
                                     </div>
                                </div>
                            </li>
                            <?php /*
		        						 @$total = $total + $quantitytotal;
		        						 }*/
		        						?>  
                        </ul>
                    </div>
                    <div class="minicart-bottom">
                        <div class="subtotal list">
                            <span>Sub Total:</span>
                            <span class="product-price">$ <?php //echo $total; ?></span>
                        </div>
                        <div class="subtotal">
                            <span>Total:</span>
                            <span class="product-price">$<?php //echo $total; ?></span>
                        </div>
                        <a href="checkout.php"><button type="button" class="btn proceed-to-checkout">Proceed to Checkout</button></a>
                        <a href="cart.php"><button type="button" class="btn btn-secondary cart-btn">View Cart</button></a>
                    </div>
                </div>
    		</div>
    	</div>
    
                                            
                            </div>
    <!--End MiniCart Drawer-->     					
    						<?php } } 
    					
    					function mobile_addcart()
{
if(isset($_SESSION['SESS_ORDERNUM']))
{
if(isset($_SESSION['SESS_LOGGEDIN']))
{
	require("dbConfig.php");
$custsql = $db->query("SELECT id, status,registered from orders WHERE customer_id = ". $_SESSION['SESS_USERID'] . " AND status < 2");
//$custres = mysql_query($custsql)or die(mysql_error());;
//mysqli_query($db,$custsql);
//echo $custsql;
$custrow = $custsql->fetch_assoc();


$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.PID AND orderitems.customer_id = ". $_SESSION['SESS_USERID']. "  AND orderitems.session_id = '" . session_id(). "' AND orderitems.payment_type = 0 GROUP BY orderitems.product_id");
  //mysqli_query($db,$itemssql);
  //echo $itemssql;
$itemnumrows = $itemssql->num_rows;
}
else
{
	require("dbConfig.php");
	
$custsql = $db->query("SELECT id, status, registered from orders WHERE session = '" . session_id(). "' AND registered = 0 AND status < 2;");

$custrow = $custsql->fetch_assoc();

$itemssql = $db->query("SELECT products.*, orderitems.*, orderitems.id AS itemid, sum(orderitems.quantity) as pro_count FROM products, orderitems WHERE orderitems.product_id = products.PID AND orderitems.session_id = '" . session_id(). "' AND orderitems.order_id = " . $custrow['id'] . " GROUP BY orderitems.product_id");

//$itemssql = $db->query("Select Product_Name, Sum(Quantity), Amount, ( Sum(Quantity) * Amount ) As Total_Amount From Orderitems Group By Product_Name Order By Product_Name AND order_id = " . $custrow['id']);
$itemnumrows = $itemssql->num_rows;

}
}
else
{
	require("dbConfig.php");
$itemnumrows = 0;
}

if($itemnumrows == 0)
{
//echo "<h3>You cannot shop cart Because yet to Confirm Your Last order. (OR)  <a href='#' data-toggle='modal' data-target='.bs-example-modal-md' data-whatever='@mdo'><i class='fa fa-user'></i> Sign In</a></h3><br>";
?>
                
                                            <a href="cart.php" class="minicart-btn">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span class="notification">0</span>
                                            </a>
                                           

<?php
}

else
{
	require("dbConfig.php");
//echo "<table cellpadding='10'>";
/*echo "<tr>";
echo "<td></td>";
echo "<td><strong>Item</strong></td>";
echo "<td><strong>Quantity</strong></td>";
echo "<td><strong>Unit Price</strong></td>";
echo "<td><strong>Total Price</strong></td>";
echo "<td></td>";
echo "</tr>";*/

?>
<li class="mini-cart-wrap">
                                            <a href="cart.php" class="minicart-btn">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span class="notification"><?php echo $itemnumrows;?></span>
                                            </a>	
    						<?php } }?>
