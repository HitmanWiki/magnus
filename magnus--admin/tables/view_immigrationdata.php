<?php

$str=$mysqli->query("select tb_immigration_data.*,tbl_country.* from tb_immigration_data JOIN tbl_country ON tb_immigration_data.countryID=tbl_country.countryID ");



?>
<!-- BEGIN Main Content -->
<div class="row demo-icon">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i> View Immigration Details</h3>
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
<th>Country</th>
<th>Heading</th>
<th>Page Title</th>
<!--<th>Image</th>
-->

<th width="100">Action</th>
</tr>
</thead>

<tbody>
<?php
$i=1;
while($row=mysqli_fetch_assoc($str))
{
	$country=mysqli_fetch_assoc($mysqli->query("select * from  tbl_country where countryID='$row[countryID]'"));
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $country['country']; ?></td>
<td><?php echo $row['immigrationHeading']; ?></td>
<td><?php echo $row['immigrationTITLE']; ?></td>

<?php /*?><td>
<?php
$imags=explode(",",$row['immigration_img']);
foreach($imags as $img)
{
	$path="../allimages/immigration/".$img;
?>
<img src="<?php echo $path; ?>" width="100" />
<?php
}
?>
</td>
<?php */?>


<td>

<a href="index.php?id=add_immigrationdata&sno=<?php echo $row['immigrationID']; ?>" title="Edit" onClick="return confirm('Do you want to Edit it!');"><i class="fa fa-edit" style="font-size:15px;"></i></a>
&nbsp;&nbsp;
<a href="queries/delete.php?id=del_immigration&sno=<?php echo $row['immigrationID']; ?>" title="Delete" onClick="return confirm('Do you want to detete it!');"><i class="fa fa-times" style="font-size:15px; color:#F00"></i></a>
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
