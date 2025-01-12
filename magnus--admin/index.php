<?php 
include_once("includes/db.php");
if($_SESSION['python_admin_login'])
{
include_once("includes/header.html"); ?>
<body>
<?php include_once("includes/menu.php"); ?>
<!-- BEGIN Sidebar Collapse Button -->
<div id="sidebar-collapse" class="visible-lg">
<i class="fa fa-angle-double-left"></i>
</div>
<!-- END Sidebar Collapse Button -->
</div>
<!-- END Sidebar -->


<!-- BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
<div>
<h1><i class="fa fa-file-o"></i> Dashboard</h1>
</div>
</div>
<!-- END Page Title -->

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
<ul class="breadcrumb">
<li class="active"><i class="fa fa-home"></i> Home</li>
</ul>
</div>
<!-- END Breadcrumb -->


<?php
$id=$_REQUEST['id'];
if($id=="add_blog")
{
	include_once("forms/add_blog.php");
}
elseif($id=="add_category")
{
	include_once("forms/add_category.php");
	include_once("tables/view_category.php");
}
elseif($id=="view_blog")
{
	include_once("tables/view_blog.php");
}
elseif($id=="viewall_blog_detail")
{
	include_once("tables/viewall_blog_detail.php");
}
elseif($id=="add_slider")
{
	include_once("forms/add_slider.php");
}
elseif($id=="view_slider")
{
	include_once("tables/view_slider.php");
}
elseif($id=="add_company_infor")
{
	include_once("forms/add_aboutus.php");
	include_once("tables/view_aboutus.php");
}
elseif($id=="add_country")
{
	include_once("forms/add_country.php");
	include_once("tables/view_country.php");
}
elseif($id=="add_immigrationdata")
{
	include_once("forms/add_immigrationdata.php");
}
elseif($id=="view_immigrationdata")
{
	include_once("tables/view_immigrationdata.php");
}
elseif($id=="add_service")
{
	include_once("forms/add_service.php");
	include_once("tables/view_service.php");
}
elseif($id=="add_testimonials")
{
	include_once("forms/add_testimonial.php");
	include_once("tables/view_testimonial.php");
}
elseif($id=="add_stories")
{
	include_once("forms/add_story.php");
	include_once("tables/view_stories.php");
}
else
{
?>


<!-- END Main Content -->
<?php
}
?>
<footer>
<p>2019 © Magnus Immigration.</p>
</footer>

<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END Content -->
</div>
<!-- END Container -->


<!--basic scripts-->
<script src="../../ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/jquery-cookie/jquery.cookie.js"></script>

<!--page specific plugin scripts-->
<script src="assets/flot/jquery.flot.js"></script>
<script src="assets/flot/jquery.flot.resize.js"></script>
<script src="assets/flot/jquery.flot.pie.js"></script>
<script src="assets/flot/jquery.flot.stack.js"></script>
<script src="assets/flot/jquery.flot.crosshair.js"></script>
<script src="assets/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/sparkline/jquery.sparkline.min.js"></script>


<!--page specific plugin scripts-->
<script type="text/javascript" src="assets/chosen-bootstrap/chosen.jquery.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="assets/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.js"></script>
<script type="text/javascript" src="assets/dropzone/downloads/dropzone.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
<script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>
<script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
<script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script> 

<!--page specific plugin scripts-->
<script type="text/javascript" src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/jquery-validation/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="assets/chosen-bootstrap/chosen.jquery.min.js"></script>


<!--page specific plugin scripts-->
<script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>


<!--flaty scripts-->
<script src="js/flaty.js"></script>
<script src="js/flaty-demo-codes.js"></script>

</body>

<!-- Mirrored from shamsoft.net/flaty/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2016 08:15:27 GMT -->
</html>
<script>
<?php
if($_SESSION['error'])
{
?>
alert("<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>")
<?php
}
?>
</script>
<?php
}
else
{
	header("location:login.php");
}
?>
