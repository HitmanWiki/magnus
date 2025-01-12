<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('inc/head.php');?>
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










				<!-- CONTACTS-4
				============================================= -->
				<section id="contacts-4" class="bg-lightgrey wide-100 contacts-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
								<h3 class="h3-xs">Have Questions? Get in Touch</h3>

								<!-- Text -->	
								<p class="p-md">Still, Have Any Queries then Don't Worry. We are here to help you
24*7. Leave your queries if you any and we will try to respond as soon as possible for better assistance.
								</p> 

							</div>
						</div>	 <!-- END SECTION TITLE -->	


					 	<div class="row">


					 		<div class="col-lg-5">
					 			<div class="contact-boxes">


						 			<!-- LOCATION -->
									<div class="contact-box icon-xs clearfix mb-25">

										<!-- Icon -->	
										<div class="contact-box-icon"><span class="flaticon-240-placeholder"></span></div>

										<!-- Text -->
										<div class="contact-box-txt">
											<h5 class="h5-sm deepblue-color" style="font-size:16px !important; font-weight:700;">1st Floor , Malhan Building,<br> Near Makkar Sweets,</h5>
											<h5 class="h5-xs deepblue-color" style="font-size:16px !important;font-weight:700;"> Barnala Road , Sirsa<br>125055 ( Haryana)</h5>												
											<p class="grey-color">Our Location</p>
										</div>

									</div>


									<!-- PHONES -->
									<div class="contact-box icon-xs clearfix mb-25">

										<!-- Icon -->	
										<div class="contact-box-icon"><span class="flaticon-172-telephone-1"></span></div>

										<!-- Text -->
										<div class="contact-box-txt">
											<h5 class="h5-sm deepblue-color" style="font-size:16px !important;font-weight:700;">P: +91-99963 79332</h5>	
											<h5 class="h5-xs deepblue-color" style="font-size:16px !important;font-weight:700;">F: +91-98130 20422</h5>	
											<p class="grey-color">Let's Talk</p>
										</div>

									</div>


									<!-- EMAIL -->
									<div class="contact-box icon-xs clearfix">

										<!-- Icon -->	
										<div class="contact-box-icon"><span class="flaticon-235-mail"></span></div>

										<!-- Text -->
										<div class="contact-box-txt">
											<h5 class="h5-xs deepblue-color" style="font-size:16px !important;font-weight:700;"><a href="#">info@magnusimmigration.com</a></h5>	
											<p class="grey-color">Drop a Line</p>
										</div>

									</div>


								</div>
							</div>


							<!-- CONTACT FORM -->	
					 		<div class="col-lg-7">
					 			<div class="form-holder">
					 				<form name="contactForm" class="row contact-form">

					 					<!-- Contact Form Input -->
						                <div id="input-name" class="col-lg-12">
						                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
						                </div>
						                 
						                <!-- Contact Form Input -->        
						                <div id="input-phone" class="col-lg-12">
						                	<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required> 
						                </div>	
                                         
						                <!-- Contact Form Input -->        
						                <div id="input-email" class="col-lg-12">
						                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
						                </div>	

						                <!-- Contact Form Select -->
						                <div id="input-subject" class="col-lg-12 input-subject">
						                    <select id="inlineFormCustomSelect2" name="subject" class="custom-select subject" required>
						                        <option value="">Your Question About..</option>  
						                      	<option>Student Visa</option>
						                      	<option>Travel visa</option>
						                      	<option>Working Visa</option>
						                      	<option>Business Visa</option>
						                      	<option>Visitor Visa</option>
						                      	<option>Other...</option>
						                    </select>
						                </div>			                          
						                 
						                 <!-- Contact Form Mesaage -->        
						                <div id="input-message" class="col-lg-12 input-message">
						                	<textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..." required></textarea>
						                </div> 
						                                            
						                <!-- Contact Form Button -->
						                <div class="col-lg-12 mt-15 form-btn"> 
						                	<button type="submit" class="btn btn-primary tra-black-hover">Send Your Message</button> 
						                </div>
						                                                              
						                <!-- Contact Form Message -->
						                <div class="col-lg-12 contact-form-msg text-center">
						                	<div class="sending-msg"><span class="loading"></span></div>
						                </div>				                                           
					                                              
					                </form> 
					 			</div>	
					 		</div>	 <!-- END CONTACT FORM -->	 	


					 	</div>    <!-- End row -->
					</div>	   <!-- End container -->
				</section>	<!-- END CONTACTS-4 -->




				<!-- GOOGLE MAP
				============================================= -->
				<div class="map bg-lightgrey division">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div id="gmap" class="gmap"></div>
							</div>
						</div>
					</div>
				</div>

</div></div>


		<?php $this->load->view('inc/footer.php');?>


	</body>


</html>	