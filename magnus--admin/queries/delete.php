<?php
include_once("../includes/db.php");


if($_REQUEST['id']=="del_blog_details")
{
	$sno=$_REQUEST['sno'];
	$mysqli->query("delete from tbl_post_tag where related_post='$sno'");
	$image=mysqli_fetch_assoc($mysqli->query("select * from tbl_blog where sno='$sno'"));
	$imags=explode(",",$image['thumb_img']);
	$imgor=explode(",",$image['image']);
	foreach($imags as $keys=>$img)
	{
			$path="../../allimages/blogimag/".$img;
			$path1="../../allimages/blogimag/".$imgor[$keys];

		unlink($path);
		unlink($path1);
	}

	$mysqli->query("delete from tbl_blog where sno='$sno'");
		$_SESSION['error']="Record has been deleted.";
	header("location:".$_SERVER['HTTP_REFERER']);

}

if($_REQUEST['id']=="del_immigration")
{
	$sno=$_REQUEST['sno'];
	$logof=mysqli_fetch_assoc($mysqli->query("select * from  tb_immigration_data where immigrationID='$sno'"));
	
	$path="../../allimages/immigration/".$logof['immigration_img'];
	$path="../../allimages/immigration/"."resized_".$logof['immigration_img'];
	
	unlink($path);
	
	$mysqli->query("delete from tb_immigration_data where immigrationID='$sno'");
	
	$_SESSION['error']="Record has been deleted.";
	header("location:".$_SERVER['HTTP_REFERER']);
}



if($_REQUEST['id']=="del_logo")
{
	$sno=$_REQUEST['sno'];
	$logof=mysqli_fetch_assoc($mysqli->query("select * from tbl_logo where sno='$sno'"));
	
	$path="../../allimages//logo/".$logof['logo_img'];
	
	unlink($path);
	
	$mysqli->query("delete from tbl_logo where sno='$sno'");
	
	$_SESSION['error']="Record has been deleted.";
	header("location:".$_SERVER['HTTP_REFERER']);
}

if($_REQUEST['id']=="del_fevicon")
{
	$sno=$_REQUEST['sno'];
	$logof=mysqli_fetch_assoc($mysqli->query("select * from tbl_fevicon where sno='$sno'"));
	
	$path="../../allimages/fevicon/".$logof['fevicon_img'];
	
	unlink($path);
	
	$mysqli->query("delete from tbl_fevicon where sno='$sno'");
	
	$_SESSION['error']="Record has been deleted.";
	header("location:".$_SERVER['HTTP_REFERER']);
}

if($_REQUEST['id']=="del_address")
{
	$sno=$_REQUEST['sno'];
	
	$mysqli->query("delete from tbl_address where sno='$sno'");
	
	$_SESSION['error']="Record has been deleted.";
	header("location:".$_SERVER['HTTP_REFERER']);

}
if($_REQUEST['id']=="del_category")
{
	$sno=$_REQUEST['sno'];
	
	$mysqli->query("delete from tbl_blog_category where sno='$sno'");
	
	$_SESSION['error']="Record has been deleted.";
	header("location:".$_SERVER['HTTP_REFERER']);

}

if($_REQUEST['id']=="del_slider")
{
	$sno=$_REQUEST['sno'];
	
	$imgdel=mysqli_fetch_assoc($mysqli->query("select * from tbl_slider where sno='$sno'"));
		$resizepaths="../../allimages/slider_img/"."resized_".$imgdel['slider_img'];
		$pathss="../../allimages/slider_img/".$imgdel['slider_img'];
		unlink($pathss);
		unlink($resizepaths);
	
	
	$mysqli->query("delete from tbl_slider where sno='$sno'");
	$_SESSION['error']="Record has been deleted.";
	header("location:".$_SERVER['HTTP_REFERER']);
}


if($_REQUEST['id']=="del_service")
{
	$sno=$_REQUEST['sno'];
	$mysqli->query("delete from tb_services where serviceID='$sno'");
	$_SESSION['error']="Record has been deleted.";
	header("location:".$_SERVER['HTTP_REFERER']);
}

if($_REQUEST['id']=="del_testimonials")
{
	$sno=$_REQUEST['sno'];
	$mysqli->query("delete from tb_testimonial where testimonialID='$sno'");
	$_SESSION['error']="Record has been deleted.";
	header("location:".$_SERVER['HTTP_REFERER']);
}

if($_REQUEST['id']=="del_country")
{
	$sno=$_REQUEST['sno'];
	$mysqli->query("update tbl_country set cstatus='0' where countryID='$sno'");
	$_SESSION['error']="Record has been deleted.";
	header("location:".$_SERVER['HTTP_REFERER']);
}

if($_REQUEST['id']=="del_story")
{
	$sno=$_REQUEST['sno'];
	$mysqli->query("update tbl_stories set status='0' where sno='$sno'");
	$_SESSION['error']="Record has been deleted.";
	header("location:".$_SERVER['HTTP_REFERER']);
}

?>