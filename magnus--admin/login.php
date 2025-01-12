<?php
session_start();
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from shamsoft.net/flaty/extra_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2016 08:16:53 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Magnusimmigration</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!--base css styles-->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

<!--page specific css styles-->

<!--flaty css styles-->
<link rel="stylesheet" href="css/flaty.css">
<link rel="stylesheet" href="css/flaty-responsive.css">

<link rel="shortcut icon" href="img/favicon.html">
</head>
<body class="login-page">

<!-- BEGIN Main Content -->
<div class="login-wrapper">
<!-- BEGIN Login Form -->
<form id="form-login" action="logindb.php" method="post">
<h3>Login to your account</h3>
<hr/>
<div class="form-group">
<div class="controls">
<input type="text" placeholder="Email" name="reservation_email" class="form-control" />
</div>
</div>
<div class="form-group">
<div class="controls">
<input type="password" placeholder="Password" name="reservation_password" class="form-control" />
</div>
</div>
<div class="form-group">
<div class="controls">
<button type="submit" class="btn btn-primary form-control">Sign In</button>
</div>
</div>
<hr/>
<p class="clearfix">
<a href="#" class="goto-register pull-right">Change Password</a>
</p>
</form>
<!-- END Login Form -->

<!-- BEGIN Forgot Password Form -->
<form id="form-forgot" action="http://shamsoft.net/flaty/index.html" method="get" style="display:none">
<h3>Get back your password</h3>
<hr/>
<div class="form-group">
<div class="controls">
<input type="text" placeholder="Email" class="form-control" />
</div>
</div>
<div class="form-group">
<div class="controls">
<button type="submit" class="btn btn-primary form-control">Recover</button>
</div>
</div>
<hr/>
<p class="clearfix">
<a href="#" class="goto-login pull-left">← Back to login form</a>
</p>
</form>
<!-- END Forgot Password Form -->

<!-- BEGIN Register Form -->
<form id="form-register" action="changepassword.php" method="get" style="display:none">
<h3>Change Password</h3>
<hr/>
<div class="form-group">
<div class="controls">
<input type="password" placeholder="Enter your Old Password" name="old_password" class="form-control" />
</div>
</div>
<div class="form-group">
<div class="controls">
<input type="password" placeholder="Enter A New Password" class="form-control" name="new_password" />
</div>
</div>
<div class="form-group">
<div class="controls">
<button type="submit" class="btn btn-primary form-control">Change</button>
</div>
</div>
<hr/>
<p class="clearfix">
<a href="#" class="goto-login pull-left">← Back to login form</a>
</p>
</form>
<!-- END Register Form -->
</div>
<!-- END Main Content -->


<!--basic scripts-->
<script src="../../ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
function goToForm(form)
{
$('.login-wrapper > form:visible').fadeOut(500, function(){
$('#form-' + form).fadeIn(500);
});
}
$(function() {
$('.goto-login').click(function(){
goToForm('login');
});
$('.goto-forgot').click(function(){
goToForm('forgot');
});
$('.goto-register').click(function(){
goToForm('register');
});
});
</script>
</body>

<!-- Mirrored from shamsoft.net/flaty/extra_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2016 08:16:53 GMT -->
</html>
<script>
<?php
if($_SESSION['error'])
{
	?>
	alert("<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>");
	<?php
}
?>
</script>