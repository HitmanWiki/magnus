<?php
$str=$mysqli->query("select * from tbl_country where cstatus='1'");

?>
<!-- BEGIN Main Content -->
<div class="row demo-icon">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i> All Blog Category</h3>
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
<th>Image</th>
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
<td><?php echo $row['country']; ?></td>
<td><?php
$path="../allimages/country/".$row['countryIMG'];?>
<img src="<?php echo $path; ?>" width="50">
</td>
<td>

<a href="index.php?id=add_country&sno=<?php echo $row['countryID']; ?>" title="Edit" onClick="return confirm('Do you want to Edit it!');"><i class="fa fa-edit" style="font-size:15px;"></i></a>
&nbsp;&nbsp;
<a href="queries/delete.php?id=del_country&sno=<?php echo $row['countryID']; ?>" title="Delete" onClick="return confirm('Do you want to detete it!');"><i class="fa fa-times" style="font-size:15px; color:#F00"></i></a>
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
