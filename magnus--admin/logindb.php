<?php
include_once("includes/db.php");

$user_email=mysqli_real_escape_string($mysqli,$_REQUEST['reservation_email']);

if (filter_var($user_email, FILTER_VALIDATE_EMAIL))
{

$user_password=mysqli_real_escape_string($mysqli,$_REQUEST['reservation_password']);

$check=$mysqli->query("select * from  tbl_adminlogin where username='$user_email' and password='$user_password' and status='1'");
if(mysqli_num_rows($check)>0)
{
	$_SESSION['python_admin_login']=$user_email;
	header("location:index.php");
}
else
{
	$_SESSION['error']="Wrong username or password!";
	$_SESSION['login_error']="error";
	header("location:login.php");
}
}
else
{
	$_SESSION['error']="Wrong username or password!";
	$_SESSION['login_error']="error";
	header("location:login.php");
}
?>