 <?php
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);
session_start();
include 'dbConfig.php';
if(isset($_POST['reg_submit'])){

$forename = mysqli_real_escape_string($db, $_POST['first_name']);
$lastname = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  //$Address_1 = mysqli_real_escape_string($db, $_POST['add1Box']);
  //$Address_2 = mysqli_real_escape_string($db, $_POST['add2Box']);
  //$Address_3 = mysqli_real_escape_string($db, $_POST['add3Box']);
  //$pin_code = mysqli_real_escape_string($db, $_POST['postcodeBox']);
  //$state = mysqli_real_escape_string($db, $_POST['state']);
  //$country = mysqli_real_escape_string($db, $_POST['country']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = $db->query("SELECT * FROM customers WHERE email= '$email'");
  $user = $user_check_query->num_rows;
  if ($user == 1) { // if user exists
    

    
		//header("Location: " . $config_basedir . "checkout-address.php");
     echo '<script language="javascript">';
echo 'alert("Email already exists")';
echo '</script>';
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    //header("Location: index.php");
  }

 else{ 	
	
  	$sql = "INSERT INTO customers (forename, surname, phone, email) VALUES ('$forename', '$lastname', '$phone', '$email')";
      $insert = mysqli_query($db,$sql);
      
     if($insert){
    //echo 'Register Information Successfully';
    //$lastid = mysqli_insert_id(); 
     $customsql = "SELECT customer_id FROM customers WHERE email = '$email' And phone = '$phone' ";
     $result = $db->query($customsql);
    //echo $customsql;
$row = $result->fetch_assoc();
     
    
    //$rows = $cust->num_rows;
    $customer_id = $row['customer_id']; 
    //echo $customer_id;   
    $digit_code = mt_rand(1000,9999);
    $sql1 = "INSERT INTO logins (verification_code, customer_id, username, password) 
  			  VALUES('$digit_code','$customer_id','$email', '$password')";
    mysqli_query($db,$sql1);
  //echo $sql1;
  
    $loginsql = $db->query("SELECT * FROM logins WHERE username = '$email' AND password = '$password'");

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
    
     header("Location: index.php");
     
  }
}	
}
}   

if (isset($_POST['register_user'])) {
	
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['user_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  
  //$fore_name = mysqli_real_escape_string($db, $_POST['fore_name']);
  //$sur_name = mysqli_real_escape_string($db, $_POST['sur_name']);
  //$Address_1 = mysqli_real_escape_string($db, $_POST['address_1']);
  //$Address_2 = mysqli_real_escape_string($db, $_POST['address_2']);
  //$Address_3 = mysqli_real_escape_string($db, $_POST['address_3']);
  //$pin_code = mysqli_real_escape_string($db, $_POST['pincode']);
  //$district = mysqli_real_escape_string($db, $_POST['district']);
  //$state = mysqli_real_escape_string($db, $_POST['state']);
  //$country = mysqli_real_escape_string($db, $_POST['country']);
  
  //$phone = mysqli_real_escape_string($db, $_POST['phone']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = $db->query("SELECT * FROM customers WHERE email= '$email'");
  $user = $user_check_query->num_rows;
  if ($user == 1) { // if user exists
    

    
		//header("Location: " . $config_basedir . "checkout-address.php");
     echo '<script language="javascript">';
echo 'alert("Email already exists")';
echo '</script>';
    echo "<script type='text/javascript'>window.location.href = 'checkout.php';</script>";
    //header("Location: index.php");
  }

 else{ 	
	
  	$sql = "INSERT INTO customers (forename, surname, phone, email) VALUES ('$username', '$last_name', '$phone', '$email')";
      $insert = mysqli_query($db,$sql);
      
     if($insert){
    //echo 'Register Information Successfully';
    //$lastid = mysqli_insert_id(); 
     $customsql = "SELECT customer_id FROM customers WHERE email = '$email' And phone = '$phone' ";
     $result = $db->query($customsql);
    //echo $customsql;
$row = $result->fetch_assoc();
     
    
    //$rows = $cust->num_rows;
    $customer_id = $row['customer_id']; 
    //echo $customer_id;   
    $digit_code = mt_rand(1000,9999);
    $sql1 = "INSERT INTO logins (verification_code, customer_id, username, password) 
  			  VALUES('$digit_code','$customer_id','$email', '$password')";
    mysqli_query($db,$sql1);
  //echo $sql1;
  
    $loginsql = $db->query("SELECT * FROM logins WHERE username = '$email' AND password = '$password'");

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
    
     header("Location: checkout.php");
     
  }
}	
}
}            
             
?>				   
