<?php
$fetch=mysqli_fetch_assoc($mysqli->query("select * from  tbl_blog where sno='$_REQUEST[sno]'"));
?>

<!-- BEGIN Main Content -->



<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-title">
        <h3><i class="fa fa-bars"></i> Add Blog</h3>
        <div class="box-tool"> <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a> <a data-action="close" href="#"><i class="fa fa-times"></i></a> </div>
      </div>
      <div class="box-content">
        <form action="<?php if($_REQUEST['sno']) { ?> queries/update.php <?php } else { ?> queries/insert.php <?php  } ?>" class="form-horizontal" id="validation-form" method="post" enctype="multipart/form-data">
        
        

<div class="form-group">
<label for="select" class="col-sm-3 col-lg-2 control-label">Select Category</label>
<div class="col-sm-6 col-lg-4 controls">
              <select class="form-control" name="category" id="category" data-rule-required="true">
<option value="">-- Please select --</option>
<?php
$course=$mysqli->query("select * from tbl_blog_category where status='1'");
while($course_f=mysqli_fetch_assoc($course))
{
?>
<option value="<?php echo $course_f['sno']; ?>" <?php if($course_f['sno']==$fetch['category']) { ?> selected="selected" <?php } ?>><?php echo $course_f['category']; ?></option>
<?php
}
?>
</select>
</div>
</div>
       
       
          <div class="form-group">
            <label class="col-sm-5 col-lg-2 control-label" for="username">TITLE:</label>
<div class="col-sm-5 col-lg-5 controls">
 
 <textarea class="form-control" name="title"  data-rule-required="true"><?php echo $fetch['blog_title']; ?></textarea>
  </div>
          </div>
          
          
          
          
          <div class="form-group">
            <label class="col-sm-3 col-lg-2 control-label" for="username">CONTENT:</label>
  <div class="col-sm-8 col-lg-10 controls">
 <textarea class="form-control col-md-12 wysihtml5" rows="10" name="content" data-rule-required="true"><?php echo $fetch['blog_content'];?></textarea>
  </div>
          </div>
          
          


<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label" for="username">Image:</label>
<div class="col-sm-6 col-lg-4 controls">
<input type="file" name="blogimg[]" id="blogimg" class="form-control" accept="image/jpeg"  />
</div>

<div class="col-sm-6">
<?php
if(!empty($fetch['thumb_img']))
{
?>

<?php
$imags=explode(",",$fetch['thumb_img']);
foreach($imags as $img)
{
		$path="../allimages/blogimag/".$img;

?>
<img class="img-responsive img-thumbnail" src="<?php echo $path; ?>" alt="Blog picture" width="80" />
<?php
}
?>
<br/><br/>
<?php
}
?>
</div>
  </div>

    
  
          
<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label" for="username">Video Url:</label>
<div class="col-sm-6 col-lg-4 controls">
<input type="text" name="videourl" id="videourl" value="<?php echo $fetch['videourl']; ?>" class="form-control" />


</div>
<span style="color:#F00">Example (https://www.youtube.com/watch?v=f6BM2uHbg3w) <br> Put content after v= (f6BM2uHbg3w)
</span>
</div>
          
          
          
          
   <div class="form-group">
  <label class="col-sm-3 col-lg-2 control-label">Blog Date</label>
  <div class="col-sm-5 col-lg-3 controls">
 <div class="input-group date date-picker" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
<input class="form-control date-picker" size="16" type="text" name="blogdate" value="<?php  if($_REQUEST['sno']) { echo $fetch['blog_date']; } else {echo $tody1; } ?>">
 </div>
  </div>
   </div>
        
          <input type="hidden" name="query" value="blogdetails">
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
</div></div>
<!-- END Main Content --> 
