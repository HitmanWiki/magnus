<?php

$str=$mysqli->query("select tbl_blog.*,tbl_blog_category.*,tbl_blog.id as cid from tbl_blog JOIN tbl_blog_category ON tbl_blog.category=tbl_blog_category.id order by tbl_blog.id DESC");



?>
<!-- BEGIN Main Content -->
<div class="row demo-icon">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i> View Blog Details</h3>
<div class="box-tool">
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<div class="btn-toolbar pull-right clearfix">
</div>
<br/><br/>
<div class="clearfix"></div>
<div class="table-responsive" style="border:0">
<table class="table table-advance" id="table1">
<thead>
<tr>
<th>id</th>
<th>Category</th>
<th>Title</th>
<th>Images</th>
<th width="100">Action</th>
</tr>
</thead>

<tbody>
<?php
$i=1;
while($row=mysqli_fetch_assoc($str))
{
	$mode=mysqli_fetch_assoc($mysqli->query("select * from tbl_blog where id='$row[mode]'"));
	
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['blog_title']; ?></td>
<td>
<?php
$imags=explode(",",$row['thumb_img']);
foreach($imags as $img)
{
	$path="../allimages/blogimag/".$img;
?>
<img src="<?php echo $path; ?>" width="50" />
<?php
}
?>
</td>
<td>
<a href="index.php?id=viewall_blog_detail&id=<?php echo $row['cid']; ?>" title="View"><i class="fa fa-eye" style="font-size:15px;"></i></a>
&nbsp;&nbsp;

<a href="index.php?id=add_blog&id=<?php echo $row['cid']; ?>" title="Edit" onClick="return confirm('Do you want to Edit it!');"><i class="fa fa-edit" style="font-size:15px;"></i></a>
&nbsp;&nbsp;
<a href="queries/delete.php?id=del_blog_details&id=<?php echo $row['cid']; ?>" title="Delete" onClick="return confirm('Do you want to detete it!');"><i class="fa fa-times" style="font-size:15px; color:#F00"></i></a>
</td>
</tr>
<?php
$i++;
}
?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- END Main Content -->
