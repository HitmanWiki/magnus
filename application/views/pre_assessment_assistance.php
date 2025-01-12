<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('inc/head.php');?>
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


							<!-- PAGE HERO TEXT -->
			<div class="col-md-12">
					<div class="hero-txt white-color">
				<h2 class="h2-xs darkblue-color"><span style="color:#F12A02;">Pre-Assessment</span> Assistance </h2>
					</div>
			</div>	<!-- END PAGE HERO TEXT -->


						</div>    <!-- End row --> 
					</div>	   <!-- End container --> 
				</section>	<!-- END ABOUT PAGE HERO -->	




				<!-- BREADCRUMB
				============================================= -->
			

  
				<!-- ABOUT-9
				============================================= -->
				<section id="single-post" class="wide-60 about-section division">
					<div class="container">	
						<div class="row">
							<!-- ABOUT TEXT -->
							<div class="col-lg-12">
								<div class="sblog-post-txt">
                             <p>Every visa process goes through the eligibility requirements. You are eligible to apply for any visa program, if you meet all the basic requirements for the same. If you don’t meet the eligibility requirements, you are likely to get rejected by the Immigration Department. The eligibility requirements include factors like age, education qualification, work experience, financial status, important documents, etc. We at Magnus offer cost-free Pre-Assessment to know whether you are eligible to apply for the particular visa program. After analyzing your profile, we come to the conclusion that, whether you are eligible for the visa program in your chosen country or are there any better options in other advanced countries that suit your profile. Our Immigration experts deal with best and advanced countries like – Australia, Canada. You can take assistance from our experts who are always right in their assessment. Pre-Assessment is necessary to save your time and money. Contact us for Pre-Assessment evaluation of your profile.</p>

                           	<p>Our Immigration Services for Countries:</p>
<ul class="txt-list">
	<li><a href="<?php echo base_url('country/');?>">Australian Immigration</a></li>
	<li><a href="<?php echo base_url('country/canada');?>">Canada Immigration</a></li>
</ul>  
						</div>    <!-- End row -->
						<div>
							<h5 class="pt-3 pb-4">Related :</h5>
							<div class="row">
								<div class="col-lg-3">
									<a href="<?php echo base_url('documentation-assistance');?>" style="text-decoration:underline; font-weight:500;">Documentation Assistance</a>
								</div>
								<div class="col-lg-3">
									<a href="<?php echo base_url('pre-landing-and-post-landing-services');?>" style="text-decoration:underline; font-weight:500;">Pre Landing and Post Landing</a>
								</div>
							
								<div class="col-lg-3">
									<a href="<?php echo base_url('language-coaching');?>" style="text-decoration:underline; font-weight:500;">Language Coaching</a>
								</div> 
								<div class="col-lg-3">
									<a href="<?php echo base_url('consultation');?>" style="text-decoration:underline; font-weight:500;">Consultation</a>
								</div>
							</div>
						</div>
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