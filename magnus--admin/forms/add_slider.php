<?php
$fetch=mysqli_fetch_assoc($mysqli->query("select * from tbl_slider where sno='$_REQUEST[sno]'"));

	$path="../allimages/slider_img/".$fetch['slider_img'];

?>

<!-- BEGIN Main Content -->

<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-title">
        <h3><i class="fa fa-bars"></i> Add Slider</h3>
        <div class="box-tool"> <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a> <a data-action="close" href="#"><i class="fa fa-times"></i></a> </div>
      </div>
      <div class="box-content">
        <form action="<?php if($_REQUEST['sno']) { ?> queries/update.php <?php } else { ?> queries/insert.php <?php  } ?>" class="form-horizontal" id="validation-form" method="post" enctype="multipart/form-data">
        
        
        
        
          <div class="form-group">
            <label class="col-sm-3 col-lg-2 control-label" for="username">Title1:</label>
            <div class="col-sm-6 col-lg-4 controls">
              <input type="text" name="title_1" id="title_1" value="<?php echo $fetch['title1']; ?>" class="form-control" data-rule-required="true" data-rule-minlength="3" />
            </div>
          </div>
          
          
          
          
          <div class="form-group">
            <label class="col-sm-3 col-lg-2 control-label" for="username">Heading Below:</label>
  <div class="col-sm-6 col-lg-6 controls">
 <textarea class="form-control col-md-12 wysihtml5" rows="4" name="heading_below" data-rule-required="true"><?php echo $fetch['heading_below'];?></textarea>
  </div>
          </div>
          
          
   <div class="form-group">
  <label class="col-sm-3 col-lg-2 control-label">Image Upload</label>
  <div class="col-sm-9 col-lg-10 controls">
 <div class="fileupload fileupload-new" data-provides="fileupload">
<div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
   <img src="<?php if($_REQUEST['sno']) { echo $path; } else {?>http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image <?php } ?>" alt="" />
</div>
<div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
<div>
   <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span>
   <span class="fileupload-exists">Change</span>
   <input type="file" class="file-input" <?php if($_REQUEST['sno']) { } else {?>  <?php } ?> name="photo[]" /></span>
   <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
</div>
 </div>
 <span class="label label-important">NOTE!</span>
 <span> Image size should be 1920*900</span>
  </div>
   </div>
          
          
          
          <input type="hidden" name="query" value="slider">
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
