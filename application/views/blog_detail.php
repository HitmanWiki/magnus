<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('inc/head.php');
$blogslug=$this->uri->segment(2);
$blog=$this->db->query("select * from tbl_blog where blog_slug='$blogslug'");
$blog_category=$blog->row_array();?>
<style type="text/css">
 #about-page.page-hero-section {
    background-image: url('<?php  echo base_url();?>assets/images/banner5.jpg');
}
.wide-60
{
	padding-top: 60px;
}
 p
{
	text-align: justify;
}
.page-hero-section {
    padding-top: 80px;
    padding-bottom: 80px;
}
.foo-links {
    display: inline-block;
    padding-left: 0;
    margin: 0 auto 0;
}
.foo-links {
    display: inline-block;
    padding-left: 0;
    margin: 0 auto 0;
}
.foo-links li {
    width: auto !important;
    display: inline-block !important;
    vertical-align: top;
    clear: none !important;
    margin: 0 0 8px 0;
    padding: 0;
}
.foo-links a {
    display: block;
    background-color: transparent;
    width: 150px;
    height: 38px;
    color: #999;
    font-size: 17px;
}
</style>
</head>

<body>
		<!-- PRELOADER SPINNER
		============================================= -->		
<?php /*?>		<div id="loader-wrapper">
			<div id="loader"><div class="cssload-box-loading"></div></div>
		</div>
<?php */?>
		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">

		<?php $this->load->view('inc/header.php');?>




			<!-- INNER PAGE WRAPPER
			============================================= -->	
			<div class="inner-page-wrapper">

  
				<!-- ABOUT PAGE HERO
				============================================= -->	
				<section id="about-page" class="page-hero-section division">
					<div class="container">	
						<div class="row">	
<?php $category=$this->db->query("select * from tbl_blog_category where id='$blog_category[category]'");
$data_cat=$category->row_array();?>

							<!-- PAGE HERO TEXT -->
				<div class="col-md-12">
				<div class="hero-txt white-color">
						<h2 class="h2-xs darkblue-color"><span style="color:#F12A02;"><?php echo $data_cat['category'];?>/</span><?php echo $blog_category['blog_title'];?></h2>
								</div>
							</div>	<!-- END PAGE HERO TEXT -->


						</div>    <!-- End row --> 
					</div>	   <!-- End container --> 
				</section>	<!-- END ABOUT PAGE HERO -->	
  
				<!-- ABOUT-9
				============================================= -->
				<!-- BLOG PAGE CONTENT
				============================================= -->
			<section id="blog-page" class="wide-100 blog-page-section division">
					<div class="container">
					 	<div class="row">

					 		<!-- BLOG POSTS HOLDER -->
					 		<div class="col-lg-8">
					 			<div class="posts-holder pr-15">


									<!-- BLOG POST #1 -->
									<div class="blog-post">

			 			
							 			<!-- BLOG POST IMAGE -->
							 			<div class="blog-post-img mb-30">
											<img class="img-fluid" src="<?php  echo base_url();?>allimages/blogimag/<?php echo $blog_category['image']; ?>" alt="blog-post-image" style="height:350px; width:100%;"/>	
										</div>

										<!-- BLOG POST TEXT -->
										<div class="blog-post-txt icon-xs">
											<p ><?php echo date('d-F-Y',strtotime($blog_category['blog_date']));?>
											</p>
											<!-- Post Data -->
											<!-- Title -->
											<h4 class="h4-xs deepblue-color"></h4>

											<!-- Text -->
											<p ><?php echo $blog_category['blog_content'];?>
											</p>

											<?php if(!empty($blog_category['videourl']))
											{
												?>
											 <iframe width="710" height="330" src="https://www.youtube.com/embed/<?php echo $blog_category['videourl'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><?php
											}
											?>
										</div>


									</div>	<!-- END BLOG POST #1 -->

								
									

								</div>
							</div>	<!-- END BLOG POSTS HOLDER -->


							<!-- SIDEBAR -->
							<aside id="sidebar" class="col-lg-4">

								<!-- BLOG CATEGORIES --> 
								<div class="blog-categories sidebar-div mb-50">
										
									<!-- Title -->
									<h5 class="h5-lg">Categories</h5>

									<ul class="blog-category-list clearfix">
										<?php foreach($get_detail as $data)
										{
											$checkdata=$this->db->query("select * from tbl_blog where 	category='$data[sno]'");
											if($checkdata->num_rows()>0)
											{?>
										<li><a href="<?php echo base_url('blog/'.$data['web_slug']);?>"><i class="fas fa-angle-double-right primary-color"></i> <?php echo $data['category']; ?></a></li>
										<?php }
										} ?>
									</ul>

								</div>

								</div>

							</aside>	<!-- END SIDEBAR -->


						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END ABOUT-9 -->




			<!-- CALL TO ACTION-1
			============================================= -->
			<section id="cta-1" class="bg-scroll bg-image cta-section division">
				<div class="container white-color">
					<div class="row d-flex align-items-center">


						<!-- CALL TO ACTION TEXT -->
						<div class="col-lg-8 col-xl-8">
							<div class="cta-txt">
								
								<!-- Title  -->
								<h3 class="h3-md txt-400">Free Immigration & Visa Consultation</h3>

								<!-- Text -->
								<p class="p-md">Magnus Immigration is a full-service immigration consultant. Our expert consultants provide immigration services for the various categories for your career and growth.
								</p>

							</div>
						</div>


						<!-- CALL TO ACTION BUTTON -->
						<div class="col-lg-4 col-xl-3 offset-xl-1">
							<div class="cta-btn text-center">

								<!-- Phone Number -->
					<p class="p-md">Call : <span>+91-99963 79332</span></p>
								<!-- Button  -->
			      <a href="<?php echo base_url('contact-us');?>" class="btn btn-md btn-primary tra-white-hover btn-arrow">
					<span>Get Consultation <i class="fas fa-arrow-right"></i></span>
								</a>
							</div>
						</div>
					</div>	  <!-- End row -->
				</div>	   <!-- End container -->	
			</section>	<!-- END CALL TO ACTION-1 -->	
</div></div>
		<?php $this->load->view('inc/footer.php');?>

	</body>

</html>	