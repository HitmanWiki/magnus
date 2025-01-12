
			<!-- FOOTER-2
			============================================= -->
			<footer id="footer-2" class="footer division" style="padding-top:70px;">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">	


						<!-- FOOTER INFO -->
						<div class="col-lg-5 col-xl-4">
							<div class="footer-info mb-40">

								<!-- Footer Logo -->
								<img src="<?php echo base_url();?>assets/images/magnus/magnus-immigration.png" width="125" alt="footer-logo">

								<!-- Text -->	
								<p class="mt-25">Magnus is a full-service immigration consultancy firm based in Mississauga, Ontario offering a complete range of immigration services for clients in Canada and abroad.
								</p>

							</div>	
						</div>


						<!-- FOOTER CONTACTS -->
						<div class="col-lg-5 col-xl-5">
							<div class="footer-box mb-40">
							
								<!-- Title -->
								<h5 class="h5-md darkblue-color">Head Office</h5>

								<!-- Address -->
								<p>1st Floor , Malhan Building, Near Makkar Sweets,</p> 
								<p>Barnala Road , Sirsa <br> 125055 ( Haryana)</p>
                                
								<!-- Phone -->
								<p class="mt-20">Phone: +91-99963 79332</p>
								<!-- Phone -->
								<p class="mt-20">Phone: +91-98130 20422</p>
								
								<!-- Email -->
								<p class="foo-email">Email: <a href="#">info@magnusimmigration.com</a></p>

								<!-- Phone -->
								<p>Opening Hours: 9AM - 6PM</p>

							</div>
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-lg-3 col-xl-3">
							<div class="footer-links mb-40">
							
								<!-- Title -->
								<h5 class="h5-md darkblue-color">Countries</h5>

								<!-- Footer Links -->
								<ul class="foo-links clearfix">
                                
                                    
                                        <?php //print_r($get_countries);
										foreach($get_countries as $countries)
										{
											
											$checkdata=$this->db->query("select * from tb_immigration_data where countryID='$countries[countryID]'");
											if($checkdata->num_rows()>0)
											{
											
										 ?>
						           			<li ><a href="<?php echo base_url('country/'.$countries['web_cslug']);?>"><?php echo $countries['country']; ?></a></li>
                                        <?php
											}
										}
										?>
                                    
                                    
                                    
								</ul>

								<h5 class="h5-md darkblue-color mt-30">Quick Links</h5>

								<!-- Footer Links -->
								<ul class="foo-links clearfix">
                                	<li><a href="<?php echo base_url('become-an-agent');?>">Become an Agent</a></li>
									<li><a href="<?php echo base_url('about-us');?>">About us</a></li>
									<li><a href="<?php echo base_url('contact-us');?>">Contact</a></li>
								</ul>
                                
                                
							</div>
						</div>




					</div>	<!-- END FOOTER CONTENT -->


					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer" style="margin-top:0px !important; padding-top:0px !important;">
						<div class="row d-flex align-items-center">


							<!-- FOOTER COPYRIGHT -->
							<div class="col-lg-6">
								<p class="footer-copyright">&copy; Copyright <span>Magnus Immigration & Visa Services</span>. All Rights Reserved</p>
							</div>


							<!-- FOOTER SOCIALS LINKS -->
							<div class="col-lg-6 text-right">
								<ul class="foo-socials text-center clearfix">

									<li><a href="https://www.facebook.com/magnusimmigration" target="_blank" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://instagram.com/magnusimmigration?igshid=f5s8axwgotj5" target="_blank" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	
									<!--
									<li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>	
									<li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>									
									<li><a href="https://instagram.com/magnusimmigration?igshid=f5s8axwgotj5" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	
									<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>								
									<li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>										
									<li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
									<li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
									<li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
								    -->	

								</ul>
							</div>


						</div>
					</div>	<!-- END BOTTOM FOOTER -->


				</div>	   <!-- End container -->										
			</footer>	<!-- END FOOTER-2 -->






		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>	
		<script src="<?php echo base_url();?>assets/js/modernizr.custom.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.easing.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>

		<script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>	
		<script src="<?php echo base_url();?>assets/js/menu.js"></script>
		<script src="<?php echo base_url();?>assets/js/materialize.js"></script>	
		<script src="<?php echo base_url();?>assets/js/jquery.scrollto.js"></script>
		<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>	
		<script src="<?php echo base_url();?>assets/js/hero-request-form.js"></script>
		<script src="<?php echo base_url();?>assets/js/hero-register-form.js"></script>
		<script src="<?php echo base_url();?>assets/js/request-form.js"></script>	
		<script src="<?php echo base_url();?>assets/js/contact-form.js"></script>
		<script src="<?php echo base_url();?>assets/js/comment-form.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ajaxchimp.min.js"></script>	
		<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>

		<!-- Custom Script -->		
		<script src="<?php echo base_url();?>assets/js/custom.js"></script>


		<!-- Google Map -->
	    <script src="<?php echo base_url();?>assets/js/google-map.js"></script>	

		<!-- To use this code on your website, get a free API key from Google. Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3VridlI2w6LmX_55OQQ4airseVZo-uVI&amp;callback=initMap" async defer></script>





		<script src="<?php echo base_url();?>assets/js/changer.js"></script>
		<script defer src="<?php echo base_url();?>assets/js/styleswitch.js"></script>	

