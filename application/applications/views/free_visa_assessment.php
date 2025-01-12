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

				<!-- CONTACTS-4
				============================================= -->
				<section id="contacts-4" class="bg-lightgrey  contacts-section division" style="padding-top:50px !important;">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 text-center">
                                <h3>Free Assessment Form</h3>
								<!-- Text -->	

							</div>
						</div>	 <!-- END SECTION TITLE -->	
					 	<div class="row">
							<!-- CONTACT FORM -->	
					 		<div class="col-lg-10 offset-lg-1">
					 			<div class="form-holder">
					 				<form name="agentForm" id="agentForm" class="row comment-form" method="post">
									<div class="col-lg-6">
					 					<!-- Contact Form Input -->
						                <div id="input-name" class="col-lg-12">
						                	<input type="text" name="f_name" class="form-control f_name" placeholder="Full Name*" required> 
						                </div>
						                <div id="input-dob" class="col-lg-12">
						                	<input type="date" name="dob" class="form-control dob" placeholder="Date of Birth*" required> 
						                </div>
						                <!-- Contact Form Input --> 
						                <div id="input-country" class="col-lg-12">
						                	<input type="text" name="live_country" class="form-control live_country" placeholder="In which country you live"> 
						                </div> 

						                <div id="input-country" class="col-lg-12">
						                	<input type="text" name="country" class="form-control country" placeholder="Where you want to go"> 
						                </div> 

						                <!-- Contact Form Input -->  
						            </div> 
						            <div class="col-lg-6 ">  
						                  <!-- Contact Form Input -->
										<div id="input-phone" class="col-lg-12">
						                	<input type="tel" name="number" class="form-control number" placeholder="Phone Number*" required> 
						                </div>
						           
						                <!-- Contact Form Input -->        
						                <div id="input-email" class="col-lg-12">
						                	<input type="email" name="email" class="form-control email" placeholder="Email Address*" required> 
						                </div>	
						                <div id="input-city" class="col-lg-12">
						                	<input type="text" name="city" class="form-control city" placeholder="City*" required> 
						                </div>
						                <div id="input-select" class="col-lg-12">
						                    <select name="visa_type" class="custom-select visa_type" required style="height: 54px;">
						                        <option value="">Select Visa Type..</option>  
						                      	<option>Permanent Residency</option>
						                      	<option>Resume Advertisement</option>
						                      	<option>Saskatchewan</option>
						                      	<option>Permanent Residency</option>
						                      	<option>Student Visa</option>
						                    </select>
						                </div>

						                <!-- Contact Form Input -->  	
						            </div> 
						            <div class="col-lg-12"> 
						             	<div id="input-pincode" class="col-lg-12">
						                	<input type="text" name="pincode" class="form-control pincode" placeholder="Pin Code*" required> 
						                </div> 
						            </div>
						            <div class="col-lg-6">    
						                <div id="input-message" class="col-lg-12 input-message">
						                	<textarea class="form-control address" name="address" rows="3" placeholder="Your Address ..." required></textarea>
						                </div> 
						           </div>
						                 <!-- Contact Form Mesaage -->  
						            <div class="col-lg-6">     
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