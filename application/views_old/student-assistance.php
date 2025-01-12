<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('inc/head.php');?>
<style type="text/css">
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

				<!-- ABOUT-9
				============================================= -->
				<section id="about-12" class="wide-20 about-section division" style="padding-top:50px;">
					<div class="container">	
						<div class="row">


							<!-- ABOUT TEXT -->
							<div class="col-lg-12">
								<div class="about-12-txt mb-40 pr-15">


									<!-- Title -->
									<h3 class="h3-md">Student Assistance</h3>

									<h4 class="h4-xs mt-30">Assistance with application forms for admission</h4>
                                    
                                    <p>A good application makes a positive impact on the institution; the student has applied to, thereby increasing the possibility of securing admission. We assist all our student with documentation required to be submitted along with the application forms.</p>
                                    
									<h4 class="h4-xs mt-30">Liaising with universities for offer letters</h4>
                                    
                                    <p>Our counsellors keep in regular contact with the universities regarding the status and progress of student's application. Therefore our students are relieved of the follow up activity.</p>
                                    

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