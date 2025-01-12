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
        
			<!-- HERO-8
			============================================= -->	
			<section id="hero-8" class="hero-section division">
				<!-- SLIDER -->
				<div class="slider">
			    	<ul class="slides">
                    
                    <?php
					foreach($get_slider as $sliderdata)
					{
					?>
                    
				     	<!-- SLIDE #1 -->
				      	<li id="slide-1">

					        <!-- Background Image -->
				        	<img src="<?php echo base_url();?>allimages/slider_img/<?php echo $sliderdata['slider_img']; ?>" alt="slide-background">

							<!-- Image Caption -->
		       				<div class="caption left-align d-flex align-items-center">
		       					<div class="container">
		       						<div class="row">
		       							<div class="col-md-8 col-lg-6">
		       								<div class="caption-txt">

						       					<!-- Title -->
								         	 	<h2 class="primary-color"><?php echo $sliderdata['title1']; ?></h2>



								         	 	<!-- Text -->
												<h4 class="h4-md darkblue-color">
													<?php echo $sliderdata['heading_below']; ?>
												</h4>

											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

					    </li>	<!-- END SLIDE #1 -->

					<?php
                    }
                    ?>
                        
                        
                        
                        

				    </ul>
			  	</div>	<!-- END SLIDER -->


			  	<!-- SLIDER NAV -->
			  	<div class="hero-slider-nav icon-xs white-color">
			  		<div class="slider-btn">
						<a class="slide-prev"><span class="flaticon-442-left-arrow"></span></a>
						<a class="slide-next"><span class="flaticon-441-right-arrow"></span></a>
					</div>
				</div>


			</section>	<!-- END HERO-8 -->




			<!-- CALL TO ACTION-3
			============================================= -->
			<section id="cta-3" class="bg-darkblue cta-section division">
				<div class="container white-color">
					<div class="row d-flex align-items-center">


						<!-- CALL TO ACTION TEXT -->
						<div class="col-lg-12">
							<div class="cta-txt text-center">
								<h4 class="h4-xs txt-400">Need immigration & visa consultation? <a href="#">Send a request</a> for free consultation</h4>
							</div>
						</div>


					</div>	  <!-- End row -->
				</div>	   <!-- End container -->	
			</section>	<!-- END CALL TO ACTION-3 -->	





<?php // $this->load->view('inc/select-country.php');?>

<?php  $this->load->view('inc/about.php');?>


			<!-- SERVICES-4
			============================================= -->
			<section id="services-4" class="bg-tra-map bg-lightgrey wide-60 services-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">	
						<div class="col-md-12 section-title center">		

			 				<!-- Title -->
							<h2 class="h2-xs darkblue-color">Our Educational Services</h2>

						</div>
					</div>


					<div class="row">


						<!-- SERVICE BOX #1 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-4 icon-sm">
								<a href="">
								
									<!-- Icon -->
									<div class="sbox-4-icon primary-color"><span class="flaticon-431-bank"></span></div>
							
									<!-- Text -->
									<div class="sbox-4-txt">
										<h5 class="h5-md darkblue-color">University Selection</h5>
										<p>We help students get inductions into Universities that best suit their own, scholastic, monetary and different parameters.</p>
									</div>

								</a>
							</div>							
						</div>


						<!-- SERVICE BOX #2 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-4 icon-sm">
								<a href="">

									<!-- Icon -->
									<div class="sbox-4-icon primary-color"><span class="flaticon-141-invoice"></span></div>
							
									<!-- Text -->
									<div class="sbox-4-txt">
										<h5 class="h5-md darkblue-color">Visa Assistance</h5>
										<p>We at Magnus Immigration keep ourselves side by side of visa guidelines of various nations bringing about a fast result.</p>
									</div>

								</a>
							</div>							
						</div>


						<!-- SERVICE BOX #3 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-4 icon-sm">
								<a href="">
								
									<!-- Icon -->
									<div class="sbox-4-icon primary-color"><span class="flaticon-408-notebook"></span></div>
							
									<!-- Text -->
									<div class="sbox-4-txt">
										<h5 class="h5-md darkblue-color">Coaching Centers</h5>
										<p>Visitors can now apply for all types of visas and visa extensions directly at our Immigration Services Centre, located in Sirsa (Haryana). </p>
									</div>

								</a>
							</div>							
						</div>


						<!-- SERVICE BOX #4 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-4 icon-sm">
								<a href="">

									<!-- Icon -->
									<div class="sbox-4-icon primary-color"><span class="flaticon-285-internet-2"></span></div>
							
									<!-- Text -->
									<div class="sbox-4-txt">
										<h5 class="h5-md darkblue-color">Overseas Internship</h5>
										<p>We likewise help and aid abroad occupations and help them with a total settlement in their ideal nation. </p>
									</div>

								</a>
							</div>							
						</div>


						<!-- SERVICE BOX #5 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-4 icon-sm">
								<a href="">
								
									<!-- Icon -->
									<div class="sbox-4-icon primary-color"><span class="flaticon-229-hospital-1"></span></div>
							
									<!-- Text -->
									<div class="sbox-4-txt">
										<h5 class="h5-md darkblue-color">Health Insurance</h5>
										<p>You will discover data about whether the migration specialists will expect you to have medicinal protection.</p>
									</div>

								</a>
							</div>							
						</div>


						<!-- SERVICE BOX #6 -->
						<div class="col-md-6 col-lg-4">
							<div class="sbox-4 icon-sm">
								<a href="">

									<!-- Icon -->
									<div class="sbox-4-icon primary-color"><span class="flaticon-232-map-1"></span></div>
							
									<!-- Text -->
									<div class="sbox-4-txt">
										<h5 class="h5-md darkblue-color">Travel Assistance</h5>
										<p>We have for all intents and purposes composed travel offices for our customers regarding the assignment for drop and visit.</p>
									</div>

								</a>
							</div>							
						</div>


					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END SERVICES-4 -->






			<!-- STATISTIC-1
			============================================= -->
	



			<!-- TESTIMONIALS-1
			============================================= -->
			<section id="reviews-1" class="wide-40 reviews-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">	
						<div class="col-md-12 section-title center">			

			 				<!-- Title -->
							<h2 class="h2-xs darkblue-color">What Our Clients Say</h2>

						</div>
					</div>	 <!-- END SECTION TITLE -->	


<?php //print_r($get_testimonial); ?>


					
					<!-- TESTIMONIALS CONTENT -->
					<div class="row">
						<div class="col-md-12">					
							<div class="owl-carousel owl-theme reviews-holder">

						
                <?php
				foreach($get_testimonial as $get_testdata)
				{
				?>        
                        
								<!-- TESTIMONIAL #1 -->
								<div class="review-1" style="height:370px;">
															
									<!-- Testimonial Text -->
									<p><?php echo $get_testdata['testimonialDesc']; ?></p>

									<!-- Testimonial Author -->
									<div class="author-data clearfix">
									

										<!-- Author Data -->
										<div class="review-author">
                                            <?php
											if(!empty($get_testdata['testimonialName']))
											{
											?>
											<h5 class="h5-xs darkblue-color"><?php echo $get_testdata['testimonialName']; ?></h5>	
                                            <?php
											}
											?>
                                            
                                            <?php
											if(!empty($get_testdata['testimonialFor']))
											{
											?>
											<span>(<?php echo $get_testdata['testimonialFor']; ?>)</span>
                                            <?php
											}
											?>
										</div>

									</div>	<!-- End Testimonial Author -->															
															
								</div>
						
				<?php	
				}
				?>









							
							</div>
						</div>									
					</div>	<!-- END TESTIMONIALS CONTENT --> 
							
						
				</div>	   <!-- End container -->
			</section>	 <!-- END TESTIMONIALS-1 -->






		<?php $this->load->view('inc/universities.php');?>








			<!-- TESTIMONIALS-1
			============================================= -->
			<section id="reviews-1" class="wide-40 reviews-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">	
						<div class="col-md-12 section-title center">			

			 				<!-- Title -->
							<h2 class="h2-xs darkblue-color">Success Stories</h2>

						</div>
					</div>	 <!-- END SECTION TITLE -->	

					
					<!-- TESTIMONIALS CONTENT -->
					<div class="row">
						<div class="col-md-12">					


<div class="container-fluid">
    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active">
                <div class="col-3 float-left"><img class="img-fluid" src="<?php echo base_url();?>assets/images/success-stories/image-not-available.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="<?php echo base_url();?>assets/images/success-stories/image-not-available.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="<?php echo base_url();?>assets/images/success-stories/image-not-available.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="<?php echo base_url();?>assets/images/success-stories/image-not-available.jpg"></div>
            </div>
            <div class="carousel-item row no-gutters">
                <div class="col-3 float-left"><img class="img-fluid" src="<?php echo base_url();?>assets/images/success-stories/image-not-available.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="<?php echo base_url();?>assets/images/success-stories/image-not-available.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="<?php echo base_url();?>assets/images/success-stories/image-not-available.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="<?php echo base_url();?>assets/images/success-stories/image-not-available.jpg"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

							
						</div>									
					</div>	<!-- END TESTIMONIALS CONTENT --> 
							
						
				</div>	   <!-- End container -->
			</section>	 <!-- END TESTIMONIALS-1 -->














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
</div>

		<?php $this->load->view('inc/footer.php');?>

	</body>

</html>	