<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('inc/head.php');

$countryslug=$this->uri->segment(2);
$countryimg=$this->db->query("select * from tbl_country where web_cslug='$countryslug'");
$countryimg_fetch=$countryimg->row_array();
?>
<style type="text/css">
	
	.tabs-2 li {
    margin: 0 5px;
     background-color: #f0f1f3;
         color: #999;
         font-size: 1rem;
     }
     #about-page.page-hero-section {
    background-image: url('<?php  echo base_url();?>allimages/country/<?php echo $countryimg_fetch['countryIMG']; ?>');

}
.wide-60
{
	padding-top: 60px;
}
 p
{
	text-align: justify;
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
.country_detail ul {
    list-style: disc;
    margin-left: 15px;
}
.country_detail ul li {
    font-size: 1.05rem;
    margin-bottom: 7px;
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


							<!-- PAGE HERO TEXT -->
							<div class="col-md-7">
								<div class="hero-txt white-color">
									<h2 class="h2-xs"> </h2>
								</div>
							</div>	<!-- END PAGE HERO TEXT -->


						</div>    <!-- End row --> 
					</div>	   <!-- End container --> 
				</section>	<!-- END ABOUT PAGE HERO -->	




				<!-- BREADCRUMB
				============================================= -->
			

  
				<!-- ABOUT-9
				============================================= -->
				<section id="about-9" class="wide-60 about-section division">
					<div class="container">	
						<div class="row">


							<!-- ABOUT TEXT -->
							<div class="col-lg-12">
								<div class="about-9-txt mb-40 pr-15">


<section id="tabs-2" class=" tabs-section division">
				<div class="container">
				 	<div class="row  d-none d-md-block">


						<!-- TABS NAVIGATION -->
						<div class="col-md-12">
							<div class=" clearfix">
						 		<ul class="tabs-2 primary-tabs">
<?php
$x=1;
$categoryhead=$this->db->query("select * from tb_immigration_data where countryID=$countryimg_fetch[countryID]");
foreach($categoryhead->result_array() as $categoryhead_fetch)
{
?> 
						 			<!-- TAB-1 LINK -->
									<li class="tab-link <?php if($x==1) { ?>displayed <?php } ?>" data-tab="tab-<?php echo $x; ?>">
						<span><?php echo $categoryhead_fetch['immigrationHeading']; ?></span>
                                    </li>
<?php
$x++;
}
?>


								</ul>
							</div>
						</div>	<!-- END TABS NAVIGATION -->


						<!-- TABS CONTENT -->
				 		<div class="col-md-12" >
							<div class="tabs-content">



<?php
$j=1;
$immigration=$this->db->query("select * from tb_immigration_data where countryID=$countryimg_fetch[countryID]");
foreach($immigration->result_array() as $immigration_fetch)
{
?> 

								<!-- TAB-1 CONTENT -->
								<div id="tab-<?php echo $j; ?>" class="tab-content <?php if($j==1) { ?>displayed <?php } ?>">
									<div class="row d-flex align-items-center">
										<!-- TAB-1 TEXT -->
										<div class="col-md-12 country_detail">
											<div class="txt-block pc-20 mb-40">	

							<?php echo $immigration_fetch['immigrationContent'] ?>				

											</div>
										</div>				
						

									</div>  <!-- End row -->
								</div>	<!-- END TAB-1 CONTENT -->

<?php
$j++;
}?>
                  



							</div>
						</div>	<!-- END TABS CONTENT -->


					</div>    <!-- End row -->
                    
                    
                     <div class="row d-block d-md-none">
                     <div id="accordion">
                     <?php
$t=1;
$categoryhead=$this->db->query("select * from tb_immigration_data where countryID='$countryimg_fetch[countryID]'");
foreach($categoryhead->result_array() as $categoryhead_fetch)
{
	$heading_data=$this->db->query("select * from tb_immigration_data where countryID='$categoryhead_fetch[countryID]' and immigrationHeading='$categoryhead_fetch[immigrationHeading]'");
	$heading_fetch=$heading_data->row_array();
?> 
                              <div class="card">

				 						<!-- Card Title -->
									    <div class="card-header" role="tab" id="heading1<?php echo $t;?>">
									      	<h5 class="h5-xs">
									      <a data-toggle="collapse" href="#collapse1<?php echo $t;?>" role="button" aria-expanded="true" aria-controls="collapse1<?php echo $t;?>">
									        <?php echo $categoryhead_fetch['immigrationHeading']; ?>
									       </a>
									    	 </h5>
									    </div>

									    <!-- Card Content -->
									    <div id="collapse1<?php echo $t;?>" class="collapse <?php if($t==1){echo 'show';}?> " role="tabpanel" aria-labelledby="heading1<?php echo $t;?>" data-parent="#accordion">
									     	<div class="card-body">
		                       <?php echo $heading_fetch['immigrationContent'] ?>	
												<!-- Text -->	
												

									     	</div>
									   	</div>

									</div>	<!-- END ACCORDION CARD #1 -->
                                 <?php $t++;} ?>   
                                    
</div>
                     
                     </div>
                    
				</div>     <!-- End container -->
			</section>	<!-- END TABS-2 -->


     
                                   

								</div>
							</div>	<!-- END ABOUT TEXT -->


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