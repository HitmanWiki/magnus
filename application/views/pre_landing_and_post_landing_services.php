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
				<h2 class="h2-xs darkblue-color"><span style="color:#F12A02;">Pre Landing</span> and Post Landing Services </h2>
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
                             <p>Migrating to a new country is a difficult task, especially when you don’t have any relatives or acquaintances there. Therefore, Magnus offer Pre-Landing and Post-Landing Services to its clients so that their Immigration process goes simply smooth. We believe in building long-term relationships with our clients.</p>

<h4 class="darkblue-color pb-2">Pre Landing Services:</h4>
    <p>Well-versed experts of Magnus help the clients in every possible way:</p>
	<ul class="txt-list">
		<li>Provide detailed information about the destination country.</li>
		<li>Help them in preparing the best resume as per the International configuration</li>
		<li>Help them in getting education assessment from the accessing authority of the Immigrating country.</li>
		<li>Brief them about their profession and job description.</li>
	</ul>
<h4 class="darkblue-color pt-4 pb-2">Post Landing Services:</h4>
<p>Do you ever wonder what you going to do after landing in your dream destination? Where are you going to stay? Who is going to update you on the basic necessities of your dream country? All such questions should never cross your path if you start your visa process with Magnus. We value our customers and make sure that their new journey starts in the proper flawless way. Therefore, we have introduced Post-landing services for our valuable clients. We provide services to our clients whether a student, skilled worker, businessman, investor, tourist or an entrepreneur. </p> 

<p><strong>Below-given are some of the services that we provide for our clients:</strong></p>
<ul class="txt-list">
	<li>We provide airport pick-up service to our clients</li>
	<li>We help clients in opening a bank account, locker or credit card.</li>
	<li>We give brief assistance about the basic information like taxation, housing, education, business, health, jobs etc.</li>
	<li>We make sure that you get the access to facilities like social security, driving license, health care and other basic requirements of a specific country.</li>
</ul>
						</div>    <!-- End row -->
						<div>
							<h5 class="pt-3 pb-4">Related :</h5>
							<div class="row">
								<div class="col-lg-3">
									<a href="<?php echo base_url('pre-assessment-assistance');?>" style="text-decoration:underline; font-weight:500;">Pre-Assessment Assistance</a>
								</div>
								<div class="col-lg-3">
									<a href="<?php echo base_url('documentation-assistance');?>" style="text-decoration:underline; font-weight:500;">Documentation Assistance</a>
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