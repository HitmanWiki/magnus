<?php
$str=$mysqli->query("select * from tbl_slider where status='1' order by sno ASC");
?>
<!-- BEGIN Main Content -->
<div class="row demo-icon">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i> View Slider</h3>
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
<th>Sno</th>
<th>Title 1</th>
<th>Heading Below</th>
<th>Image</th>
<th>Action</th>
</tr>
</thead>

<tbody>
<?php
$i=1;
while($row=mysqli_fetch_assoc($str))
{
	$category=$row['category'];
	$path="../allimages/slider_img/".$row['slider_img'];
	if(is_numeric($row[category]))
	{
	$categ=mysqli_fetch_assoc($mysqli->query("select * from tbl_blog_category where sno='$row[category]'"));
	$category=$categ['category'];
	}
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row['title1']; ?></td>
<td><?php echo $row['heading_below']; ?></td>
<td><img src="<?php echo $path; ?>" width="100"></td>
<td>
<a href="index.php?id=add_slider&sno=<?php echo $row['sno']; ?>" title="Edit" onClick="return confirm('Do you want to Edit it!');"><i class="fa fa-edit" style="font-size:20px;"></i></a>
&nbsp;&nbsp;
<a href="queries/delete.php?id=del_slider&sno=<?php echo $row['sno']; ?>" title="Delete" onClick="return confirm('Do you want to detete it!');"><i class="fa fa-times" style="font-size:20px; color:#F00"></i></a>
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
