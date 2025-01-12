<?php
include_once("../includes/db.php");
$query=$_REQUEST['query'];
include_once("ak_php_img_lib_1.0.php");



if($query=="country")
{
	$country=ucwords($_REQUEST['country']);
	$countryimg=$_FILES['countryimg']['name'];
	$wb_slug=friendly_seo_string($country);
	$chk_data=$mysqli->query("select * from  tbl_country where country='$country'");
	if(mysqli_num_rows($chk_data)>0)
	{
		$_SESSION['error']="Already existed.";
	}
	else
	{
		
	if(count(array_filter($countryimg))>0)
	{
	
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
	}
	else
	{
					$img2="";
					$img4="";
	}
		
		
		
		$mysqli->query("insert into tbl_country values('','$country','$img2','$wb_slug','1')");

		$_SESSION['error']="Record has been inserted.";
	}
	header("location:".$_SERVER['HTTP_REFERER']);
}




if($query=="slider")
{
	$category=$_REQUEST['category'];
	$title_1=ucwords($_REQUEST['title_1']);
	$title_2=$mysqli->real_escape_string($_REQUEST['title_2']);
	$heading_below=$_REQUEST['heading_below'];
	$photo=$_FILES['photo']['name'];
		
		
	if($photo[0]=="")
	{
		$mysqli->query("insert into tbl_slider values('','$category','$title_1','$title_2','$heading_below','','1')");
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
		
		
		$mysqli->query("insert into tbl_slider values('','$category','$title_1','$title_2','$heading_below','$img2','1')");
	}

		$_SESSION['error']="Record has been inserted.";
	header("location:".$_SERVER['HTTP_REFERER']);

	
	
}






if($query=="blogdetails")
{
	$category=ucwords($_REQUEST['category']);
	$bname=$_REQUEST['bname'];
	$blogdate=$_REQUEST['blogdate'];
	$blogimg=$_FILES['blogimg']['name'];
	$videourl=$mysqli->real_escape_string($_REQUEST['videourl']);
	$content=$mysqli->real_escape_string($_REQUEST['content']);
	$title=$mysqli->real_escape_string($_REQUEST['title']);
	$imageurl=$mysqli->real_escape_string($_REQUEST['imageurl']);
	$convert_date = date("Y-m-d", strtotime($blogdate));
	$wb_slug=friendly_seo_string($title);
	$tags=$_REQUEST['tags'];
	if(count(array_filter($blogimg))>0)
	{
	
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
	}
	else
	{
					$img2="";
					$img4="";
	}
	
	
	
	if(!empty($pdf))
	{
		 $expbanner=explode('.',$pdf);
		 $bannerexptype=$expbanner[1];
		 $date = date('m/d/Yh:i:sa', time());
		 $rand=rand(10000,99999);
		 $encname=$date.$rand;
		 $bannername=md5($encname).'.'.$bannerexptype;
		 $bannerpath="../../allimages/pdf/".$bannername;
		 move_uploaded_file($_FILES["pdf"]["tmp_name"],$bannerpath);	

	}
	else
	{
		$bannername="";
	}
	
	
	
			$mysqli->query("insert into tbl_blog values('','$category','$bname','$title','$content','$videourl','$img2','$img4','$imageurl','$convert_date','$tody1','$wb_slug','1')");
			
			
$_SESSION['error']="Record has been inserted.";
header("location:".$_SERVER['HTTP_REFERER']);
}




if($query=="category")
{
	$category=ucwords($_REQUEST['category']);
	$wb_slug=friendly_seo_string($category);
	$chk_data=$mysqli->query("select * from  tbl_blog_category where category='$category'");
	if(mysqli_num_rows($chk_data)<=0)
	{
		$mysqli->query("insert into tbl_blog_category values('','$category','$wb_slug','$tody1','1')");

		$_SESSION['error']="Record has been inserted.";
	}
	else
	{
		$_SESSION['error']="Already existed.";
	}
	header("location:".$_SERVER['HTTP_REFERER']);
}



if($query=="about_us")
{
	$blogimg=$_FILES['blogimg']['name'];
	$content=$mysqli->real_escape_string($_REQUEST['content']);
	$title=$mysqli->real_escape_string($_REQUEST['title']);
	if(count(array_filter($blogimg))>0)
	{
	
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
	}
	else
	{
					$img2="";
					$img4="";
	}
	
	
	
			$mysqli->query("insert into tbl_aboutus values('','$title','$content','$img2','$img4','$tody1')");
			
			
$_SESSION['error']="Record has been inserted.";
header("location:".$_SERVER['HTTP_REFERER']);
}


if($query=="immigration_data")
{
	$blogimg=$_FILES['blogimg']['name'];
	$content=$mysqli->real_escape_string($_REQUEST['immigrationContent']);
	$title=$mysqli->real_escape_string($_REQUEST['immigrationTITLE']);
	$immigrationHeading=$mysqli->real_escape_string($_REQUEST['immigrationHeading']);
	
	$country=$_REQUEST['country'];
	
	if(count(array_filter($blogimg))>0)
	{
	
		foreach ($_FILES['blogimg']['name'] as $name => $value)
		{
		$kaboom = explode(".", $name); 
		$fileExt = end($kaboom); 
		$img=time().".jpg";
		$path="../../allimages/immigration/".$img;
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
	}
	else
	{
					$img2="";
					$img4="";
	}
	
	
	
			$mysqli->query("insert into tb_immigration_data values('','$country','$immigrationHeading','$title','$content','$img2','$tody1','1')");
			
			
$_SESSION['error']="Record has been inserted.";
header("location:".$_SERVER['HTTP_REFERER']);
}




if($query=="service_query")
{
	$service=$mysqli->real_escape_string(ucwords($_REQUEST['service']));
	$title=$mysqli->real_escape_string($_REQUEST['title']);
	$content=$mysqli->real_escape_string($_REQUEST['content']);
	
	
	$wb_slug=friendly_seo_string($service);
	$chk_data=$mysqli->query("select * from  tb_services where serviceName='$service'");
	if(mysqli_num_rows($chk_data)<=0)
	{
		$mysqli->query("insert into tb_services values('','$service','$title','$content','$wb_slug','$tody1','1')");

		$_SESSION['error']="Record has been inserted.";
	}
	else
	{
		$_SESSION['error']="Already existed.";
	}
	header("location:".$_SERVER['HTTP_REFERER']);
}

if($query=="testimonial_data")
{
		$testimonial=$mysqli->real_escape_string($_REQUEST['testimonial']);
		$testimonialName=$mysqli->real_escape_string($_REQUEST['testimonialName']);
		$testimonialFor=$mysqli->real_escape_string($_REQUEST['testimonialFor']);
		
		$mysqli->query("insert into tb_testimonial values('','$testimonial','$testimonialName','$testimonialFor','$tody1')");
		$_SESSION['error']="Record has been inserted.";
		header("location:".$_SERVER['HTTP_REFERER']);
}


if($query=="story")
{
	$photo=$_FILES['story']['name'];
	
		
		$kaboom = explode(".", $photo); 
		$fileExt = end($kaboom); 
		$img=time().".jpg";
		$path="../../allimages/stories/".$img;
		$moveResult = move_uploaded_file($_FILES['story']["tmp_name"], $path);
		
		
		$mysqli->query("insert into tbl_stories values('','$img','1')");
	   //echo $path;
		$_SESSION['error']="Record has been inserted.";
	header("location:".$_SERVER['HTTP_REFERER']);

	
	
}



?>