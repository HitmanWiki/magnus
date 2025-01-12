<?php

$str=$mysqli->query("select * from tbl_aboutus");



?>
<!-- BEGIN Main Content -->
<div class="row demo-icon">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i> View Company Information</h3>
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
<th>Youtube Link</th>
<th>Information</th>
<!--<th style="width:100px;">Colors</th>
-->

<th>Images</th>
<th width="100">Action</th>
</tr>
</thead>

<tbody>
<?php
$i=1;
while($row=mysqli_fetch_assoc($str))
{
	
	
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row['youtube_link']; ?></td>
<td><?php echo $row['about_us']; ?></td>

<?php /*?><td><div style="width:10px; height:10px; border-radius:50%; float:left;line-height:3; background:<?php echo $row['chcolor']; ?>;">Font</div>  <div style="width:10px;float:right; line-height:3; height:10px; border-radius:50%; background:<?php echo $row['bgcolor']; ?>;">BG</div></td>
<?php */?>
<td>
<?php
$imags=explode(",",$row['thumb_img']);
foreach($imags as $img)
{
	$path="../allimages/aboutus/".$img;
?>
<img src="<?php echo $path; ?>" width="50" />
<?php
}
?>
</td>
<td>

<a href="index.php?id=add_company_infor&sno=<?php echo $row['sno']; ?>" title="Edit" onClick="return confirm('Do you want to Edit it!');"><i class="fa fa-edit" style="font-size:15px;"></i></a>
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
