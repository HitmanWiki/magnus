<?php
if($_REQUEST['sno'])
{
$fetch=mysqli_fetch_assoc($mysqli->query("select * from tbl_aboutus where sno='$_REQUEST[sno]'"));
$imags=explode(",",$fetch['thumb_img']);
foreach($imags as $img)
{
	$path="../allimages/aboutus/".$img;
}
?>


<!-- BEGIN Main Content -->
<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-bars"></i> Company Information</h3>
<div class="box-tool">
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<form action="<?php if($_REQUEST['sno']) { ?> queries/update.php <?php } else { ?> # <?php  } ?>" class="form-horizontal" id="validation-form" method="post" enctype="multipart/form-data">



<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label" for="username">Youtube Link:</label>
<div class="col-sm-6 col-lg-4 controls">
<input type="text" name="title" id="title" value="<?php echo $fetch['youtube_link']; ?>" class="form-control" data-rule-minlength="3" />
</div>
<span style="color:#F00">Example (https://www.youtube.com/watch?v=2ZOS-GIohOY) <br> Put content after v= (2ZOS-GIohOY)
</span>

</div>


<div class="form-group">

<label class="col-sm-3 col-lg-2 control-label" for="username">Image:</label>
<div class="col-sm-6 col-lg-4 controls">
<img src="<?php echo $path; ?>" width="100">
<input type="file" name="blogimg[]" accept="image/jpeg" >
</div>

</div>



          <div class="form-group">
            <label class="col-sm-3 col-lg-2 control-label" for="username">CONTENT (Home Page):</label>
  <div class="col-sm-8 col-lg-10 controls">
 <textarea class="form-control col-md-12 wysihtml5" rows="10" name="home_content" data-rule-required="true"><?php echo $fetch['about_home'];?></textarea>
  </div>
          </div>



          <div class="form-group">
            <label class="col-sm-3 col-lg-2 control-label" for="username">CONTENT (About Page):</label>
  <div class="col-sm-8 col-lg-10 controls">
 <textarea class="form-control col-md-12 wysihtml5" rows="10" name="content" data-rule-required="true"><?php echo $fetch['about_us'];?></textarea>
  </div>
          </div>

<?php /*?>          <div class="form-group">
            <label class="col-sm-3 col-lg-2 control-label" for="username">Font Color:</label>
  <div class="col-sm-8 col-lg-10 controls">
 <input type="color" name="chcolor" value="<?php echo $fetch['chcolor']; ?>" />
 
  </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-3 col-lg-2 control-label" for="username">Background Color:</label>
  <div class="col-sm-8 col-lg-10 controls">
 <input type="color" name="bgcolor" value="<?php echo $fetch['bgcolor']; ?>" />
 
  </div>
          </div>
          
<?php */?>          
          

<input type="hidden" name="query" value="about_us">
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
<?php
}
?>