<?php
session_start();
ob_start();
unset($_SESSION['python_admin_login']);
header("location:login.php");
?>