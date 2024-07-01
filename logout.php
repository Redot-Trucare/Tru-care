<?php
session_start();
//require("header.php");
require("dbConfig.php");
//unset($_SESSION['SESS_ADMINLOGGEDIN']);
unset($_SESSION['SESS_LOGGEDIN']);
unset($_SESSION['SESS_USERNAME']);
unset($_SESSION['SESS_USERID']);
session_destroy();
//header("Location: " . $config_basedir);
echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
require("footer.php");
?>
