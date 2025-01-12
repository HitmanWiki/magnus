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
						<h2 class="h2-xs darkblue-color"><span style="color:#F12A02;">Provincial </span>Nominee Program</h2>
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
								
<p>

Provincial Nomination Program offers a great way to the candidates applying for Canadian Permanent Residence. In this program, the Canadian provinces & territories have the option of nominating individuals who wish to immigrate to Canada and are willing to settle down in a particular province of Canada. Except for Nunavut and Quebec, each Canadian province and territory has their nomination program. Each Provincial Nomination Program has at least one immigration stream that is aligned with the federal Express Entry immigration selection system</p>
 <div class="text-center">
         <a  href="<?php echo base_url('assessment-form');?>" class="btn btn-primary tra-black-hover submit">Fill Out the General Assessment Form</a> </div>  
         <h5 class="pt-5">ENHANCED NOMINATIONS</h5>                
<p>Enhanced Nominations are the provincial nominations issued under the Express Entry-aligned streams, and they award the Express Entry candidates an additional 600 Comprehensive Ranking System (CRS) points. You can visit one of the websites below for the most current information.</p>

	<ul class="txt-list ">
<li>Alberta Immigrant Nominee Program (AINP) Stream, Category and Initiative</li>
<li>British Columbia</li>
<li>Manitoba</li>
<li>New Brunswick</li>
<li>Newfoundland and Labrador</li>
<li>Northwest Territories</li>
<li>Nova Scotia</li>
<li>Ontario</li>
<li>Prince Edward Island</li>
<li>Saskatchewan</li>
	</ul>
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