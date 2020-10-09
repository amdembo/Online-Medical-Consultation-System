<?php  include('head.inc'); ?>
</div>
 </div>
	<div class="banner">
		<div class="container">
<div class="banner-bottom">
	<div class="banner-bottom-left">
		<h2>&nbsp;&nbsp;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;</h2>
	</div> 
	<div class="banner-bottom-right">
		<div  class="callbacks_container">
					<ul class="rslides" id="slider4">
					<li>
								<div class="banner-info">
									<h3> Online Medical Care</h3>
									<p></p>
								</div>
							</li>
							<li>
								<div class="banner-info">
								   <h3>The Best HealthCare @ Your fingertips</h3>
									<p></p>
								</div>
							</li>
							<li>
								<div class="banner-info">
								  <h3> Qualified specialist Doctors</h3>
									<p></p>
								</div>								
							</li>
						</ul>
                        
                        
					</div>
					<!--banner-->
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	</div>
	<div class="clearfix"> </div>
</div>
	<div class="shop">
		<marquee behavior="scroll"> <a href="">ABUBAKAR TAFAWA BALEWA UNIVERSITY TEACHING HOSPITAL BAUCHI</a></marquee>
	</div>
	</div>
		</div>
		<!-- content-section-starts-here -->
		<div class="container">
			<div class="main-content">
				<div class="online-strip">
					<div class="col-md-4 follow-us">
						<h3>follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
					</div>
					<div class="col-md-4 shipping-grid">
						<div class="shipping">
							<img src="images/h2.png" alt="" />
						</div>
						<div class="shipping-text">
							<h3>MEDICAL CARE</h3>
							<p></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 online-order">
						<p>HOTLINE</p>
						<h3>Tel:+234 000 0000</h3>
					</div>
					<div class="clearfix"></div>
						</div>
		<div class="other-products">
		<div class="container">
			<h3 class="like text-center">WHAT WE OFFER:</h3>        			
				     <ul id="flexiselDemo3">
						<li><a href=""><img src="images/s1.jpg" class="img-responsive" alt="" /></a>
							<div class="">
							<a class="like_name" href="">TEAM OF RESEACHERS</a>
							<p><a class="" href="#"><i></i> <span class=" "></span></a></p>
							</div>
						</li>
						<li><a href=""><img src="images/s2.jpg" class="img-responsive" alt="" /></a>						
							<div class="">
							<a class="like_name" href="">PEDIATRICS</a>
							<p><a class="" href="#"><i></i> <span class=" "></span></a></p>
							</div>
						</li>
						<li><a href=""><img src="images/s3.jpg" class="img-responsive" alt="" /></a>
							<div class="">
							<a class="like_name" href="">AVAILABLE DOCTORS</a>
							<p><a class="" href="#"><i></i> <span class=" "></span></a></p>
							</div>
						</li>
						<li><a href=""><img src="images/s4.jpg" class="img-responsive" alt="" /></a>
							<div class="">
							<a class="like_name" href="">GYNAECOLOGIST</a>
							<p><a class="" href="#"><i></i> <span class=" item_price"></span></a></p>
							</div>
						</li>
						<li><a href=""><img src="images/s6.jpg" class="img-responsive" alt="" /></a>
							<div class="">
							<a class="like_name" href="">BLOOD TRANSFUSION</a>
							<p><a class="" href="#"><i></i> <span class=""></span></a></p>
							</div>
						</li>
                        <li><a href=""><img src="images/s5.jpg" class="img-responsive" alt="" /></a>
							<div>
							<a class="like_name" href="#">THEATRE</a>
							<p><a class="" href="#"><i></i> <span class=""></span></a></p>
							</div>
						</li>
				     </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
				   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				   </div>
				   </div>
		<!-- content-section-ends-here -->
		<?php include('foot.inc'); ?>
</body>
</html>
