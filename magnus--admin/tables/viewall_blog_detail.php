<?php

$str=mysqli_fetch_assoc($mysqli->query("select tbl_blog.*,tbl_blog_category.*,tbl_blog.sno as csno from tbl_blog JOIN tbl_blog_category ON tbl_blog.category=tbl_blog_category.sno where tbl_blog.sno='$_REQUEST[sno]'"));

?>

<!-- BEGIN Main Content -->
      





<!-- BEGIN Main Content -->
<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-file"></i> Blog Details</h3>
<div class="box-tool">
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<div class="row">
<div class="col-md-4 user-profile-info" style="font-size:14px;">
<p><span><strong>Name:</strong></span> <?php echo $str['bname']; ?></p>

<p><span><strong>Title:</strong></span> <?php echo $str['blog_title']; ?></p>
<p><span><strong>Category:</strong></span> <?php echo $str['category']; ?></p>

</div>

<div class="col-md-4">
<?php
$imags=explode(",",$str['thumb_img']);
foreach($imags as $img)
{
		$path="../allimages/blogimag/".$img;

?>
<img class="img-responsive img-thumbnail" src="<?php echo $path; ?>" alt="Course picture" width="150" />
<?php
}
?>
<br/><br/>
</div>

<div class="col-md-3">
<a href="index.php?id=view_blog" class="btn btn-success">BACK</a>
</div>


<div class="col-md-9 user-profile-info">
<p><div style="background-color:#E9F0F9; padding:5px; font-size:18px; font-weight:bold"><center>Content:</center></div> 
<br><?php echo $str['blog_content']; ?></p>
<br><br>
</div>

<?php
if($str['quiz_url'])
{
?>
<div class="col-md-9 user-profile-info">
<p><div style="background-color:#E9F0F9; padding:5px; font-size:18px; font-weight:bold;"><center>Quiz:</center></div> 
<br><?php echo $str['quiz_url']; ?></p>
<br><br>
</div>
<?php
}
?>

<?php
if($str['puzzle_url'])
{
	?>
<div class="col-md-9 user-profile-info">
<p><div style="background-color:#E9F0F9; padding:5px; font-size:18px; font-weight:bold;"><center>Puzzle:</center></div> 
<br><?php echo $str['puzzle_url']; ?></p>
<br><br>
</div>
<?php } ?>

</div>
</div>
</div>
</div>
</div>


