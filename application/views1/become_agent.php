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
				<section id="contacts-4" class="bg-lightgrey  contacts-section division" style="padding-top:50px !important;">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">
                                <h3>Become An Agent</h3>
								<!-- Text -->	
								<p class="p-md">Recommend Magnus Immigration, become an agent, let us work together, and achieve more success stories. Let us join together to make the client's dream to make Canada a new home come true. Let us spread the smile of achievement, shower the opportunity of knowledge to every enlivened, and inspired People.
								</p> 

							</div>
						</div>	 <!-- END SECTION TITLE -->	
					 	<div class="row">
							<!-- CONTACT FORM -->	
					 		<div class="col-lg-10 offset-lg-1">
					 			<div class="form-holder">
					 				<form name="agentForm" id="agentForm" class="row comment-form">
									<div class="col-lg-6">
					 					<!-- Contact Form Input -->
						                <div id="input-name" class="col-lg-12">
						                	<input type="text" name="fname" class="form-control name" placeholder="First Name*" required> 
						                </div>
						                 
						                <!-- Contact Form Input -->        
						                <div id="input-email" class="col-lg-12">
						                	<input type="email" name="email" class="form-control email" placeholder="Email Address*" required> 
						                </div>	
						                <div id="input-phone" class="col-lg-12">
						                	<input type="tel" name="number" class="form-control number" placeholder="Phone Number*" required> 
						                </div>

						                <!-- Contact Form Input -->        
						                <div id="input-company" class="col-lg-12">
						                	<input type="text" name="cname" class="form-control cname" placeholder="Company Name*" required> 
						                </div>  
						            </div> 
						            <div class="col-lg-6 ">  
						                  <!-- Contact Form Input -->
						                <div id="input-name" class="col-lg-12">
						                	<input type="text" name="lname" class="form-control lname" placeholder="Last Name*" required> 
						                </div>
						                 
						                <!-- Contact Form Input -->        
						                <div id="input-email" class="col-lg-12">
						                	<input type="email" name="email1" class="form-control email1" placeholder="Email Address*"> 
						                </div>	
						                <div id="input-phone" class="col-lg-12">
						                	<input type="tel" name="number1" class="form-control" placeholder="Phone Number*"> 
						                </div>

						                <!-- Contact Form Input -->        
						                <div class="col-lg-12">
						                	<input type="text" name="skypeid" class="form-control skypeid" placeholder="Skype Id*" required> 
						                </div>	
						            </div> 
						            <div class="col-lg-12">     
						                <div id="input-message" class="col-lg-12 input-message">
						                	<textarea class="form-control address" name="address" rows="3" placeholder="Your Address ..." required></textarea>
						                </div> 
						           </div>
						                 <!-- Contact Form Mesaage --> 
						            <div class="col-lg-4">
					 					<!-- Contact Form Input -->
						                <div id="input-name" class="col-lg-12">
						                	<input type="text" name="country" class="form-control country" placeholder="Country*" required> 
						                </div>            
						            </div> 
						            <div class="col-lg-4 ">  
						                <!-- Contact Form Input -->
						                <div id="input-name" class="col-lg-12">
						                	<input type="text" name="province" class="form-control province" placeholder="Province/State*" required> 
						                </div> 
						            </div>  
						            <div class="col-lg-4 ">  
						                  <!-- Contact Form Input -->
						                <div id="input-name" class="col-lg-12">
						                	<input type="text" name="postalcode" class="form-control name" placeholder="Postal Code*" required> 
						                </div> 
						            </div> 
						            <div class="col-lg-12">     
						                <div id="input-message" class="col-lg-12 input-message">
						                	<textarea class="form-control message1" name="message1" rows="3" placeholder="Message ..." required></textarea>
						                </div> 
						           </div>
						                <!-- Contact Form Button -->
						                <div class="col-lg-12 mt-15 form-btn text-center"> 
						                	<button type="submit" class="btn btn-primary tra-black-hover">Submit</button> 
						                </div>
						                                                          
						                <!-- Contact Form Message -->
						                <div class="col-lg-12 contact-form-msg text-center">
						                	<div class="sending-msg"><span class="loading"></span></div>
						                </div>				              
					 			</div>	
					 		</div>	 <!-- END CONTACT FORM -->	
                         
					 	</div>    <!-- End row -->
					</div>	   <!-- End container -->
				</section>	<!-- END CONTACTS-4 -->
</div></div>
		<?php $this->load->view('inc/footer.php');?>
	</body>
</html>	