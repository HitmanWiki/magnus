<?php
include_once("../includes/db.php");
include_once("ak_php_img_lib_1.0.php");
$query=$_REQUEST['query'];



if($query=="country")
{
	$sno=$_REQUEST['sno'];
	$country=ucwords($_REQUEST['country']);
	$countryimg=$_FILES['countryimg']['name'];
	$wb_slug=friendly_seo_string($country);
	$chk_data=$mysqli->query("select * from  tbl_country where country='$country' and countryID!='$sno'");
	if(mysqli_num_rows($chk_data)>0)
	{
		$_SESSION['error']="Already existed.";
	}
	else
	{
		
	if(count(array_filter($countryimg))>0)
	{
		$fetchcuimg=mysqli_fetch_assoc($mysqli->query("select * from tbl_country where countryID='$sno'"));
	
				$path="../../allimages/country/".$fetchcuimg['countryIMG'];
				$path2="../../allimages/country/"."resized_".$fetchcuimg['countryIMG'];				
				unlink($path);
				unlink($path2);
	
		foreach ($_FILES['countryimg']['name'] as $name => $value)
		{
		$kaboom = explode(".", $name); 
		$fileExt = end($kaboom); 
		$img=time().".jpg";
		$path="../../allimages/country/".$img;
		$moveResult = move_uploaded_file($_FILES['countryimg']["tmp_name"][$name], $path);
		$target_file = "../../allimages/country/$img";
		$resized_file = "../../allimages/country/resized_$img";
		$wmax = 500;
		$hmax = 400;
		ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
					$img1.=$img.=",";
					$img3.="resized_".$img;
					
		}
					$img2=rtrim($img1,",");
					$img4=rtrim($img3,",");
					
		$mysqli->query("update tbl_country set country='$country',countryIMG='$img2' where countryID='$sno'");
	}
	else
	{
					//$img2="";
					//$img4="";
		$mysqli->query("update tbl_country set country='$country' where countryID='$sno'");
	}
		
}
	
		$_SESSION['error']="Record has been inserted.";
	
	header("location:../index.php?id=add_country");
}





if($query=="slider")
{
	$category=$_REQUEST['category'];
	$title_1=ucwords($_REQUEST['title_1']);
	$title_2=$mysqli->real_escape_string($_REQUEST['title_2']);
	$photo=$_FILES['photo']['name'];
	$sno=$_REQUEST['sno'];
	$heading_below=$_REQUEST['heading_below'];
	
	if($photo[0]=="")
	{
	//	$mysqli->query("insert into tbl_slider values('','$title_1','$title_2','','1')");
		
		$mysqli->query("update tbl_slider set category='$category',title1='$title_1',title2='$title_2',heading_below='$heading_below' where sno='$sno'");
	}
	else
	{
		foreach ($_FILES['photo']['name'] as $name => $value)
		{
		$kaboom = explode(".", $name); 
		$fileExt = end($kaboom); 
		$img=time().".jpg";
		$path="../../allimages/slider_img/".$img;
		$moveResult = move_uploaded_file($_FILES['photo']["tmp_name"][$name], $path);
		$target_file = "../../allimages/slider_img/$img";
		$resized_file = "../../allimages/slider_img/resized_$img";
		$wmax = 500;
		$hmax = 400;
		ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
					$img1.=$img.=",";
					$img3.="resized_".$img;
					
		}
					$img2=rtrim($img1,",");
					$img4=rtrim($img3,",");
		
		
		$check=mysqli_fetch_assoc($mysqli->query("select * from tbl_slider where sno='$sno'"));
		
		$resizepaths="../../allimages/slider_img/"."resized_".$check['slider_img'];
		$pathss="../../allimages/slider_img/".$check['slider_img'];
		unlink($pathss);
		unlink($resizepaths);
		
		
		$mysqli->query("update tbl_slider set category='$category',title1='$title_1',title2='$title_2',heading_below='$heading_below',slider_img='$img2' where sno='$sno'");
	}

		$_SESSION['error']="Record has been updated.";
	header("location:../index.php?id=add_slider");

	
	
}


if($query=="category")
{
	$sno=$_REQUEST['sno'];
	$category=ucwords($_REQUEST['category']);
	$wb_slug=friendly_seo_string($category);
	$chk_data=$mysqli->query("select * from  tbl_blog_category where category='$category' and sno!='$sno'");
	if(mysqli_num_rows($chk_data)>0)
	{
		$_SESSION['error']="Already existed.";
	}
	else
	{
		$_SESSION['error']="Record has been updated.";
		$mysqli->query("update tbl_blog_category set category='$category',web_slug='$wb_slug' where sno='$sno'");
	}
	header("location:../index.php?id=add_category");
}

if($query=="blogdetails")
{
	$sno=$_REQUEST['sno'];
	$category=ucwords($_REQUEST['category']);
	$bname=$_REQUEST['title'];
	$blogdate=$_REQUEST['blogdate'];
	$blogimg=$_FILES['blogimg']['name'];
	$videourl=$mysqli->real_escape_string($_REQUEST['videourl']);
	$content=$mysqli->real_escape_string($_REQUEST['content']);
	$title=$mysqli->real_escape_string($_REQUEST['title']);
	$imageurl=$mysqli->real_escape_string($_REQUEST['imageurl']);
	$convert_date = date("Y-m-d", strtotime($blogdate));
	$wb_slug=friendly_seo_string($bname);
	$tags=$_REQUEST['tags'];
	
	
	if(count(array_filter($blogimg))>0)
	{
		
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
		
	
		foreach ($_FILES['blogimg']['name'] as $name => $value)
		{
		$kaboom = explode(".", $name); 
		$fileExt = end($kaboom); 
		$img=time().".jpg";
		$path="../../allimages/blogimag/".$img;
		$moveResult = move_uploaded_file($_FILES['blogimg']["tmp_name"][$name], $path);
		$target_file = "../../allimages/blogimag/$img";
		$resized_file = "../../allimages/blogimag/resized_$img";
		$wmax = 500;
		$hmax = 400;
		ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
					$img1.=$img.=",";
					$img3.="resized_".$img;
					
		}
					$img2=rtrim($img1,",");
					$img4=rtrim($img3,",");
					
			
		$mysqli->query("update tbl_blog set category='$category',bname='$bname',blog_title='$title',blog_content='$content',videourl='$videourl',videourl='$videourl',image='$img2',thumb_img='$img4',imageurl='$imageurl',blog_date='$blogdate',blog_slug='$wb_slug' where sno='$sno'");		
	
					
	}
	else
	{
		$mysqli->query("update tbl_blog set category='$category',bname='$bname',blog_title='$title',blog_content='$content',videourl='$videourl',imageurl='$imageurl',blog_date='$blogdate',blog_slug='$wb_slug' where sno='$sno'");			
	}
	
	
	if(!empty($pdf))
	{
		$remove=mysqli_fetch_assoc($mysqli->query("select * from tbl_blog where sno='$sno'"));
		$pdfpath="../../allimages/pdf/".$remove['pdfs'];
		unlink($pdfpath);
		
		 $expbanner=explode('.',$pdf);
		 $bannerexptype=$expbanner[1];
		 $date = date('m/d/Yh:i:sa', time());
		 $rand=rand(10000,99999);
		 $encname=$date.$rand;
		 $bannername=md5($encname).'.'.$bannerexptype;
		 $bannerpath="../../allimages/pdf/".$bannername;
		 move_uploaded_file($_FILES["pdf"]["tmp_name"],$bannerpath);	
		 
		$mysqli->query("update tbl_blog set pdfs='$bannername' where sno='$sno'");			

	}
	
			
$_SESSION['error']="Record has been updated.";
	header("location:../index.php?id=add_blog");
}



if($query=="about_us")
{
	$sno=$_REQUEST['sno'];
	$blogimg=$_FILES['blogimg']['name'];
	$content=$mysqli->real_escape_string($_REQUEST['content']);
	$title=$mysqli->real_escape_string($_REQUEST['title']);
	$chcolor=$mysqli->real_escape_string($_REQUEST['chcolor']);
	$bgcolor=$mysqli->real_escape_string($_REQUEST['bgcolor']);
	 
	$home_content=$mysqli->real_escape_string($_REQUEST['home_content']); 
	 
	 
	if(count(array_filter($blogimg))>0)
	{
		
	$image=mysqli_fetch_assoc($mysqli->query("select * from tbl_aboutus where sno='$sno'"));
	$imags=explode(",",$image['thumb_img']);
	$imgor=explode(",",$image['image']);
		foreach($imags as $keys=>$img)
		{
				$path="../../allimages/aboutus/".$img;
				$path1="../../allimages/aboutus/".$imgor[$keys];
	
			unlink($path);
			unlink($path1);
		}
		
	
		foreach ($_FILES['blogimg']['name'] as $name => $value)
		{
		$kaboom = explode(".", $name); 
		$fileExt = end($kaboom); 
		$img=time().".jpg";
		$path="../../allimages/aboutus/".$img;
		$moveResult = move_uploaded_file($_FILES['blogimg']["tmp_name"][$name], $path);
		$target_file = "../../allimages/aboutus/$img";
		$resized_file = "../../allimages/aboutus/resized_$img";
		$wmax = 500;
		$hmax = 400;
		ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
					$img1.=$img.=",";
					$img3.="resized_".$img;
					
		}
					$img2=rtrim($img1,",");
					$img4=rtrim($img3,",");
					
			
		$mysqli->query("update tbl_aboutus set youtube_link='$title',about_home='$home_content',about_us='$content',image='$img2',thumb_img='$img4',chcolor='$chcolor',bgcolor='$bgcolor' where sno='$sno'");			
					
	}
	else
	{
		$mysqli->query("update tbl_aboutus set youtube_link='$title',about_home='$home_content',about_us='$content',chcolor='$chcolor',bgcolor='$bgcolor' where sno='$sno'");			
	}
	
$_SESSION['error']="Record has been updated.";
header("location:../index.php?id=add_company_infor");
}




if($query=="immigration_data")
{
	$sno=$_REQUEST['sno'];
	$blogimg=$_FILES['blogimg']['name'];
	$content=$mysqli->real_escape_string($_REQUEST['immigrationContent']);
	$title=$mysqli->real_escape_string($_REQUEST['immigrationTITLE']);
	$immigrationHeading=$mysqli->real_escape_string($_REQUEST['immigrationHeading']);
	$country=$_REQUEST['country'];
	
	
	if(count(array_filter($blogimg))>0)
	{
		
	$image=mysqli_fetch_assoc($mysqli->query("select * from tb_immigration_data where immigrationID='$sno'"));
	$imags=explode(",",$image['immigration_img']);
	$imgor=explode(",",$image['immigration_img']);
		foreach($imags as $keys=>$img)
		{
				$path="../../allimages/immigration/".$img;
				$path1="../../allimages/immigration/".$imgor[$keys];
	
			unlink($path);
			unlink($path1);
		}
		
	
		foreach ($_FILES['blogimg']['name'] as $name => $value)
		{
		$kaboom = explode(".", $name); 
		$fileExt = end($kaboom); 
		$img=time().".jpg";
		$path="../../immigration/aboutus/".$img;
		$moveResult = move_uploaded_file($_FILES['blogimg']["tmp_name"][$name], $path);
		$target_file = "../../allimages/immigration/$img";
		$resized_file = "../../allimages/immigration/resized_$img";
		$wmax = 500;
		$hmax = 400;
		ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
					$img1.=$img.=",";
					$img3.="resized_".$img;
					
		}
					$img2=rtrim($img1,",");
					$img4=rtrim($img3,",");
					
			
		$mysqli->query("update tb_immigration_data set countryID='$country',immigrationHeading='$immigrationHeading',immigrationTITLE='$title',immigrationContent='$content',immigration_img='$img2' where immigrationIDo='$sno'");			
					
	}
	else
	{
		$mysqli->query("update tb_immigration_data set countryID='$country',immigrationHeading='$immigrationHeading',immigrationTITLE='$title',immigrationContent='$content' where immigrationID='$sno'");			
	}
	
$_SESSION['error']="Record has been updated.";
header("location:../index.php?id=add_immigrationdata");
}


if($query=="service_query")
{
	$sno=$_REQUEST['sno'];
	$service=ucwords($_REQUEST['service']);
	$title=$mysqli->real_escape_string($_REQUEST['title']);
	$content=$mysqli->real_escape_string($_REQUEST['content']);
	
	$wb_slug=friendly_seo_string($service);
	$chk_data=$mysqli->query("select * from  tb_services where serviceName='$service' and serviceID!='$sno'");
	if(mysqli_num_rows($chk_data)>0)
	{
		$_SESSION['error']="Already existed.";
	}
	else
	{
		$_SESSION['error']="Record has been updated.";
		$mysqli->query("update tb_services set serviceName='$service',serviceTitle='$title',serviceContent='$content',serviceSlug='$wb_slug' where serviceID='$sno'");
	}
	header("location:../index.php?id=add_service");
}


if($query=="testimonial_data")
{
		$sno=$_REQUEST['sno'];
		$testimonial=$mysqli->real_escape_string($_REQUEST['testimonial']);
		$testimonialName=$mysqli->real_escape_string($_REQUEST['testimonialName']);
		$testimonialFor=$mysqli->real_escape_string($_REQUEST['testimonialFor']);
		
		$mysqli->query("update tb_testimonial set testimonialDesc='$testimonial',testimonialName='$testimonialName',testimonialFor='$testimonialFor' where testimonialID='$sno'");
		$_SESSION['error']="Record has been inserted.";
	    header("location:../index.php?id=add_testimonials");
}


?>