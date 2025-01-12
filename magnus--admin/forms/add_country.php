<?php
$fetch=mysqli_fetch_assoc($mysqli->query("select * from tbl_country where countryID='$_REQUEST[sno]'"));
?>

<!-- BEGIN Main Content -->
<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-bars"></i> Add Country</h3>
<div class="box-tool">
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<form action="<?php if($_REQUEST['sno']) { ?> queries/update.php <?php } else { ?> queries/insert.php <?php  } ?>" class="form-horizontal" id="validation-form" method="post" enctype="multipart/form-data">



<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label" for="username">Country:</label>
<div class="col-sm-6 col-lg-4 controls">
<input type="text" name="country" id="country" value="<?php echo $fetch['country']; ?>" class="form-control" data-rule-required="true" data-rule-minlength="3" />
</div>
</div>


<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label" for="username">Image:</label>
<div class="col-sm-6 col-lg-4 controls">
<input type="file" name="countryimg[]" id="countryimg" class="form-control" accept="image/jpeg"  />
<span style="color:#F00;">Only jpg images</span>
</div>

<div class="col-sm-6">
<?php
if(!empty($fetch['countryIMG']))
{
?>

<?php
$imags=explode(",",$fetch['countryIMG']);
foreach($imags as $img)
{
		$path="../allimages/country/".$img;

?>
<img class="img-responsive img-thumbnail" src="<?php echo $path; ?>" alt="Immigration picture" width="150" />
<?php
}
?>
<br/><br/>
<?php
}
?>
</div>
  </div>




<input type="hidden" name="query" value="country">
<input type="hidden" name="sno" value="<?php echo $_REQUEST['sno'] ?>">
<div class="form-group">
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
<input type="submit" class="btn btn-primary" value="Submit">
<button type="button" class="btn">Cancel</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- END Main Content -->
