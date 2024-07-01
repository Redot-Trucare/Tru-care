<?php
require("dbConfig.php");
//require('header.php');
$itemsql = $db->query("SELECT * FROM orderitems WHERE id = ". $_GET['id'] . ";");
//$itemres = mysql_query($itemsql) or die(mysql_error());
$numrows = $itemsql->num_rows;
if($numrows == 0) {
header("Location: cart");
}
$itemrow = $itemsql->fetch_assoc();
$prodsql = $db->query("SELECT * FROM products WHERE id = " . $itemrow['product_id'] . ";");
//$prodres = mysql_query($prodsql)or die(mysql_error());;
$prodrow = $prodsql->fetch_assoc(); 
$sql = $db->query("DELETE FROM orderitems WHERE id = " . $_GET['id']);
//$sql = $db->query("DELETE FROM orders WHERE id = " . $_GET['id']);
//$del=mysql_query($sql)or die(mysql_error());;
if($sql){
	header("Location: cart.php");
}
//require('footer.php');
?>
