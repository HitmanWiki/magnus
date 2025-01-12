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
				<section id="about-9" class="wide-60 about-section division">
					<div class="container">	
						<div class="row">


							<!-- ABOUT TEXT -->
							<div class="col-lg-8">
								<div class="about-9-txt mb-40 pr-15">


									<!-- Title -->
									<h3 class="h3-md">About Us</h3>

									<!-- Text -->

									<?php echo $get_aboutdata['about_us']; ?>

								</div>
							</div>	<!-- END ABOUT TEXT -->


							<!-- SIDEBAR -->
							<aside id="sidebar" class="col-lg-4">


								<!-- SIDEBAR FORM -->
								<div id="request-form" class="mb-40">
									<form name="requestForm" class="row request-form bg-darkblue">

										<!-- Request Form Text -->      
	                                    <div class="col-md-12 white-color">
	                                        <h5 class="h5-lg">Free Consultation</h5>	
	                                    </div> 

	                                    <!-- Request Form Input -->
						                <div id="input-name" class="col-md-12">
						                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
						                </div>
						                     
						                <!-- Request Form Input -->       
						                <div id="input-email" class="col-md-12">
						                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
						                </div>

										<!-- Request Form Input -->
						                <div id="input-phone" class="col-md-12">
						                	<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required> 
						                </div>	

						                <!-- Request Form Select -->
						                <div id="input-visa" class="col-md-12 input-visa">
						                    <select id="inlineFormCustomSelect1" name="visa" class="custom-select visa" required>
						                        <option value="">Select Visa</option>  
						                      	<option>Student Visa</option>
						                      	<option>Travel visa</option>
						                      	<option>Working Visa</option>
						                      	<option>Business Visa</option>
						                      	<option>Visitor Visa</option>
						                      	<option>PR Visa</option>
						                    </select>
						                </div>

						                <!-- Request Form Select -->
						                <div id="input-country" class="col-md-12 input-country">
						                    <select id="inlineFormCustomSelect2" name="country" class="custom-select country" required>
						                        <option value="">Visa For</option>  
						                      	<option>Australia</option>
						                      	<option>Canada</option>
						                      	<option>United Kingdom</option>
						                      	<option>USA</option>
						                      	<option>Singapore</option>
						                      	<option>Netherlands</option>
						                    </select>
						                </div>
							                                            
						                <!-- Request Form Button -->
						                <div class="col-md-12 form-btn">  
						                	<button type="submit" class="btn btn-primary tra-black-hover submit">Send Request</button> 
						                </div>
						                                                              
						                <!-- Request Form Message -->
						                <div class="col-md-12 request-form-msg text-center">
						                	<div class="sending-msg"><span class="loading"></span></div>
						                </div>  
						                                              
						            </form>
								</div>	<!-- END SIDEBAR FORM -->




							

							</aside>	<!-- END SIDEBAR -->


						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END ABOUT-9 -->




				<!-- HORIZONTAL GREY LINE -->
				<div class="section-divider"><div class="container"><div class="row"><div class="grey-border"></div></div></div></div>




				<!-- SERVICES-4
				============================================= -->
				<section id="services-4" class="wide-60 services-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
								<h3 class="h3-lg">Visas Categories:</h3>

								<!-- Text -->	

							</div>
						</div>


						<div class="row">


							<!-- SERVICE BOX #1 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-4 icon-sm">
									<a href="#">
									
										<!-- Icon -->
										<div class="sbox-4-icon deepblue-color"><span class="flaticon-431-bank"></span></div>
								
										<!-- Text -->
										<div class="sbox-4-txt">
											<h5 class="h5-md">Education Visa</h5>
											<p>An education visa is a limited understanding, you will even now should have the option to exhibit you have the way to pay your own particular manner once you arrive.</p>
										</div>

									</a>
								</div>							
							</div>


							<!-- SERVICE BOX #2 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-4 icon-sm" style="min-height:240px;">
									<a href="#">

										<!-- Icon -->
										<div class="sbox-4-icon deepblue-color"><span class="flaticon-033-user-2"></span></div>
								
										<!-- Text -->
										<div class="sbox-4-txt">
											<h5 class="h5-md">Job Seeker Visa</h5>
											<p>Job Seeker Visa is a Temporary living arrangement license for qualified gifted specialists looking for work.</p>
										</div>

									</a>
								</div>							
							</div>


							<!-- SERVICE BOX #3 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-4 icon-sm">
									<a href="#">
									
										<!-- Icon -->
										<div class="sbox-4-icon deepblue-color"><span class="flaticon-397-briefcase"></span></div>
								
										<!-- Text -->
										<div class="sbox-4-txt">
											<h5 class="h5-md">Business Visa</h5>
											<p>On the off chance that one needs to head out to a nation for a transitory timeframe for work purposes a Business Visa is the most prudent intends to do as such.</p>
										</div>

									</a>
								</div>							
							</div>


							<!-- SERVICE BOX #4 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-4 icon-sm">
									<a href="#">

										<!-- Icon -->
										<div class="sbox-4-icon deepblue-color"><span class="flaticon-102-sign"></span>	</div>
								
										<!-- Text -->
										<div class="sbox-4-txt">
											<h5 class="h5-md">PR Visa</h5>
											<p>Permanent Residency visa, as referenced by the name, concedes an individual the status of a lasting occupant of the nation. This makes the individual qualified for the different advantages conceded by the nation to perpetual natives.</p>
										</div>

									</a>
								</div>							
							</div>


							<!-- SERVICE BOX #5 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-4 icon-sm">
									<a href="#">
									
										<!-- Icon -->
										<div class="sbox-4-icon deepblue-color"><span class="flaticon-285-internet-2"></span></div>
								
										<!-- Text -->
										<div class="sbox-4-txt">
											<h5 class="h5-md">Tourist & Visitor Visa</h5>
											<p>The experience of visiting another spot can leave you with recollections that can keep going for a lifetime. Regardless of whether it is an excursion to the Canada, Australia.</p>
										</div>

									</a>
								</div>							
							</div>


							<!-- SERVICE BOX #6 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-4 icon-sm">
									<a href="#">

										<!-- Icon -->
										<div class="sbox-4-icon"><span class="flaticon-265-question"></span></div>
								
										<!-- Text -->
										<div class="sbox-4-txt">
											<h5 class="h5-md">Immigration Consult</h5>
											<p>Magnus Immigration is a prominent registered and one of the Best Immigration in India. It has been guiding and assisting the skilled and talented people in visa processes.</p>
										</div>

									</a>
								</div>							
							</div>


						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END SERVICES-4 -->




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