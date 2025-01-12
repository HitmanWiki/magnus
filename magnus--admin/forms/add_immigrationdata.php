<?php
$fetch=mysqli_fetch_assoc($mysqli->query("select * from  tb_immigration_data where immigrationID='$_REQUEST[sno]'"));
?>

<!-- BEGIN Main Content -->



<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-title">
        <h3><i class="fa fa-bars"></i> Add Immigration Details</h3>
        <div class="box-tool"> <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a> <a data-action="close" href="#"><i class="fa fa-times"></i></a> </div>
      </div>
      <div class="box-content">
        <form action="<?php if($_REQUEST['sno']) { ?> queries/update.php <?php } else { ?> queries/insert.php <?php  } ?>" class="form-horizontal" id="validation-form" method="post" enctype="multipart/form-data">
        
        

<div class="form-group">
<label for="select" class="col-sm-3 col-lg-2 control-label">Select Country</label>
<div class="col-sm-6 col-lg-4 controls">
<select class="form-control" name="country" id="country" data-rule-required="true">
<option value="">-- Please select --</option>
<?php
$coutry=$mysqli->query("select * from tbl_country where cstatus='1'");
while($coutry_f=mysqli_fetch_assoc($coutry))
{
?>
<option value="<?php echo $coutry_f['countryID']; ?>" <?php if($coutry_f['countryID']==$fetch['countryID']) { ?> selected="selected" <?php } ?>><?php echo $coutry_f['country']; ?></option>
<?php
}
?>
</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-5 col-lg-2 control-label" for="username">Heading:</label>
<div class="col-sm-5 col-lg-5 controls">

<textarea class="form-control" name="immigrationHeading"  data-rule-required="true"><?php echo $fetch['immigrationHeading']; ?></textarea>
</div>
</div>



       
       
<div class="form-group">
<label class="col-sm-5 col-lg-2 control-label" for="username">TITLE:</label>
<div class="col-sm-5 col-lg-5 controls">

<textarea class="form-control" name="immigrationTITLE"  data-rule-required="true"><?php echo $fetch['immigrationTITLE']; ?></textarea>
</div>
</div>
          
          
          
          
          <div class="form-group">
            <label class="col-sm-3 col-lg-2 control-label" for="username">CONTENT:</label>
  <div class="col-sm-8 col-lg-10 controls">
 <textarea class="form-control col-md-12 wysihtml5" rows="10" name="immigrationContent" data-rule-required="true"><?php echo $fetch['immigrationContent'];?></textarea>
  </div>
          </div>
          
          


<?php /*?><div class="form-group">
<label class="col-sm-3 col-lg-2 control-label" for="username">Image:</label>
<div class="col-sm-6 col-lg-4 controls">
<input type="file" name="blogimg[]" id="blogimg" class="form-control" accept="image/jpeg"  />
<span style="color:#F00;">Only jpg images</span>
</div>

<div class="col-sm-6">
<?php
if(!empty($fetch['immigration_img']))
{
?>

<?php
$imags=explode(",",$fetch['immigration_img']);
foreach($imags as $img)
{
		$path="../allimages/immigration/".$img;

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
<?php */?>
          
          <input type="hidden" name="query" value="immigration_data">
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
