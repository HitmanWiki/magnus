			<!-- ABOUT-2
			============================================= -->
			<section id="about-2" class="wide-40 about-section division">
				<div class="container">	
			 		<div class="row d-flex align-items-center">


			 			<!-- ABOUT IMAGE -->
			 			<div class="col-md-6">
			 				<div class="about-img text-center mt-20">

<?php 
if(!empty($get_aboutdata['youtube_link']))
{
?>
<iframe width="100%" height="320" src="https://www.youtube.com/embed/<?php echo $get_aboutdata['youtube_link']; ?>?autoplay=1&amp;rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<?php 
}
else
{?>
<img src="<?php echo base_url();?>allimages/aboutus/<?php echo $get_aboutdata['image']; ?>" class="img-responsive" width="570px;" />
<?php
}
?>


							</div>
			 			</div>


			 			<!-- ABOUT TEXT	-->
			 			<div class="col-md-6">
			 				<div class="about-2-txt pc-20 mb-40">



			 					<!-- Title -->
								<h3 class="h3-lg darkblue-color">About Us</h3>

								<!-- Text #1 -->
								<div class="box-list">							
									
                                    
								<p><?php echo $get_aboutdata['about_home']; ?><p>
                                    						
								</div>


									
							</div>
			 			</div>	<!-- END ABOUT TEXT	-->


					</div>	  <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-2 -->

