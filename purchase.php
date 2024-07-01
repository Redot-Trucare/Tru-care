<?php	
session_start();

require("dbConfig.php");
require("functions.php");
//require("show.php");				
								
							    
if(isset($_POST['submit']))
{
if(isset($_SESSION['SESS_LOGGEDIN']))
{
$itemsql = $db->query("INSERT INTO orderitems(order_id, product_id, sku, quantity, session_id, customer_id, currency, primary_color, size) VALUES('". $_SESSION['SESS_ORDERNUM']. "','" . $_POST['product_id'] . "','". $_POST['sku'] . "','". $_POST['amountBox'] . "', '" . session_id() . "', '". $_SESSION['SESS_USERID'] . "','". $_POST['currency'] . "','". $_POST['color'] . "','". $_POST['size'] . "')");
}
if(isset($_SESSION['SESS_ORDERNUM']))
{
$itemsql = $db->query("INSERT INTO orderitems(order_id,product_id, sku, quantity, session_id, customer_id, currency, primary_color, size) VALUES('". $_SESSION['SESS_ORDERNUM'] . "', '". $_POST['product_id'] . "','". $_POST['sku'] . "', '". $_POST['amountBox'] . " ', '" . session_id() . "', '0' ,'". $_POST['currency'] . "','". $_POST['color'] . "','". $_POST['size'] . "')");

 //mysqli_query($db, $itemsql);
//echo $itemsql;

}
else
{
if(isset($_SESSION['SESS_LOGGEDIN']))
{
$sql = $db->query("INSERT INTO orders(customer_id, session, registered, date) VALUES(". $_SESSION['SESS_USERID'] . ", '" . session_id() . "', 1, NOW())");
//$check2 = mysqli_query($db, $sql);
//echo $sql;

$_SESSION['SESS_ORDERNUM'] = $db -> insert_id;
//$sql2 = $db->query("INSERT INTO courier(order_id,customer_id,registered, date) VALUES(". $_SESSION['SESS_ORDERNUM'] . ",". $_SESSION['SESS_USERID'] . ", 1, NOW())");
$itemsql = "INSERT INTO orderitems(order_id, product_id, sku, quantity, session_id, customer_id, currency, primary_color, size) VALUES(". $_SESSION['SESS_ORDERNUM']. ",'" . $_POST['product_id'] . "','". $_POST['sku'] . "', ". $_POST['amountBox'] . ", '" . session_id() . "', ". $_SESSION['SESS_USERID'] . ",'". $_POST['currency'] . "','". $_POST['color'] . "','". $_POST['size'] . "')";

$check3 = mysqli_query($db, $itemsql);
//echo $itemsql;

}
else
{
	
$sql = $db->query("INSERT INTO orders(registered,date, session) VALUES(0, NOW(), '" . session_id() . "')");
//mysqli_query($db, $sql);
//echo $sql;

$_SESSION['SESS_ORDERNUM'] = $db -> insert_id;
//$sql2 = $db->query("INSERT INTO courier(order_id,registered,date, session) VALUES(". $_SESSION['SESS_ORDERNUM'] . ",0, NOW(), '" . session_id() . "')");
$itemsql = "INSERT INTO orderitems(order_id, product_id, sku, quantity, session_id, customer_id, currency, primary_color, size) VALUES(". $_SESSION['SESS_ORDERNUM'] . ", '" . $_POST['product_id'] . "','". $_POST['sku'] . "', ". $_POST['amountBox'] . ", '" . session_id() . "','0','". $_POST['currency'] . "','". $_POST['color'] . "','". $_POST['size'] . "')";
mysqli_query($db, $itemsql);
echo $itemsql;
}
}

$totalprice = $_POST['price'] * $_POST['amountBox'] ;
$updsql = $db->query("UPDATE orders SET total = total + ". $totalprice . " WHERE id = ". $_SESSION['SESS_ORDERNUM'] . ";");

//$updsql2 = $db->query("UPDATE courier SET total = total + ". $totalprice . " WHERE order_id = ". $_SESSION['SESS_ORDERNUM'] . ";");
$p_id = $_POST['product_id'];
//header("Location: product-details.php?id={$p_id}");
header("Location: cart.php");
//echo "success";
}

if(isset($_POST['buy_now']))
{
if(isset($_SESSION['SESS_LOGGEDIN']))
{
$itemsql = $db->query("INSERT INTO orderitems(order_id, product_id, sku, quantity, session_id, customer_id, currency, primary_color, size) VALUES(". $_SESSION['SESS_ORDERNUM']. ", " . $_POST['product_id'] . ",'". $_POST['sku'] . "', ". $_POST['amountBox'] . ", '" . session_id() . "', ". $_SESSION['SESS_USERID'] . ",'". $_POST['currency'] . "','". $_POST['color'] . "','". $_POST['size'] . "')");
}
if(isset($_SESSION['SESS_ORDERNUM']))
{
$itemsql = $db->query("INSERT INTO orderitems(order_id,product_id, sku, quantity, session_id, customer_id, currency, primary_color, size) VALUES(". $_SESSION['SESS_ORDERNUM'] . ", ". $_POST['product_id'] . ",'". $_POST['sku'] . "', ". $_POST['amountBox'] . " , '" . session_id() . "', '0' ,'". $_POST['currency'] . "','". $_POST['color'] . "','". $_POST['size'] . "')");

 //mysqli_query($db, $itemsql);
//echo $itemsql;

}
else
{
if(isset($_SESSION['SESS_LOGGEDIN']))
{
$sql = $db->query("INSERT INTO orders(customer_id, session, registered, date) VALUES(". $_SESSION['SESS_USERID'] . ", '" . session_id() . "', 1, NOW())");
//$check2 = mysqli_query($db, $sql);
//echo $sql;

$_SESSION['SESS_ORDERNUM'] = $db -> insert_id;
//$sql2 = $db->query("INSERT INTO courier(order_id,customer_id,registered, date) VALUES(". $_SESSION['SESS_ORDERNUM'] . ",". $_SESSION['SESS_USERID'] . ", 1, NOW())");
$itemsql = "INSERT INTO orderitems(order_id, product_id, sku, quantity, session_id, customer_id, currency, primary_color, size) VALUES(". $_SESSION['SESS_ORDERNUM']. ",'" . $_POST['product_id'] . "','". $_POST['sku'] . "', ". $_POST['amountBox'] . ", '" . session_id() . "', ". $_SESSION['SESS_USERID'] . ",'". $_POST['currency'] . "','". $_POST['color'] . "','". $_POST['size'] . "')";

$check3 = mysqli_query($db, $itemsql);
//echo $itemsql;

}
else
{
	
$sql = "INSERT INTO orders(registered,date, session) VALUES(0, NOW(), '" . session_id() . "')";
mysqli_query($db, $sql);
echo $sql;

$_SESSION['SESS_ORDERNUM'] = $db -> insert_id;
//$sql2 = $db->query("INSERT INTO courier(order_id,registered,date, session) VALUES(". $_SESSION['SESS_ORDERNUM'] . ",0, NOW(), '" . session_id() . "')");
$itemsql = "INSERT INTO orderitems(order_id, product_id, sku, quantity, session_id, customer_id, currency, primary_color, size) VALUES(". $_SESSION['SESS_ORDERNUM'] . ",'" . $_POST['product_id'] . "','". $_POST['sku'] . "', ". $_POST['amountBox'] . ", '" . session_id() . "','0','". $_POST['currency'] . "','". $_POST['color'] . "','". $_POST['size'] . "')";
mysqli_query($db, $itemsql);
echo $itemsql;
}
}

$totalprice = $_POST['price'] * $_POST['amountBox'] ;
$updsql = $db->query("UPDATE orders SET total = total + ". $totalprice . " WHERE id = ". $_SESSION['SESS_ORDERNUM'] . ";");

//$updsql2 = $db->query("UPDATE courier SET total = total + ". $totalprice . " WHERE order_id = ". $_SESSION['SESS_ORDERNUM'] . ";");
$p_id = $_POST['product_id'];
//header("Location: product-details.php?id={$p_id}");
//header("Location: cart.php");
//echo "success";
}
?>
