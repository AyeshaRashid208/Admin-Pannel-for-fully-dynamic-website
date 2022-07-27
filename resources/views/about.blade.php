<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Interact Tech Solution | About</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/fivi.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
   <header class="main-header">

			<!--Header-Upper-->
			<div class="header-upper">
				<div class="auto-container">
					<div class="clearfix">

						<div class="pull-left logo-box">
							<div class="logo"><a href="{{url('/')}}"><img src="images/logo.png" alt="" title=""></a></div>
						</div>

						<div class="nav-outer clearfix">

							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class=" "><a href="{{url('home')}}">Home</a>

										</li>
										<li class=" current dropdown"><a href="#">About Us</a>
											<ul>
												<li><a href="{{url('about')}}">About Us</a></li>
												<li><a href="{{url('team')}}">Our Team</a></li>
												<li><a href="{{url('testimonial')}}">Testimonial</a></li>
											</ul>
										</li>
										<li><a href="{{url('services')}}">Services</a></li>
										<li><a href="{{url('portfolio')}}">Portfolio </a></li>

										
										<li><a href="{{url('blog-list')}}">Blog</a></li>

										<li><a href="{{url('contact')}}">Contact us</a></li>
									</ul>
								</div>

							</nav>

						</div>

					</div>
				</div>
			</div>
			<!--End Header Upper-->

			<!--Sticky Header-->
			<div class="sticky-header">
				<div class="auto-container clearfix">
					<!--Logo-->
					<div class="logo pull-left">
						<a href="{{url('/')}}" class="img-responsive"><img src="images/logo.png" alt="" title=""></a>
					</div>

					<!--Right Col-->
					<div class="right-col pull-right">
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
							<ul class="navigation clearfix">
										<li ><a href="{{url('home')}}">Home</a>

										</li>
										<li class="dropdown"><a href="#">About Us</a>
											<ul>
												<li><a href="{{url('about')}}">About Us</a></li>
												<li><a href="{{url('team')}}">Our Team</a></li>
												<li><a href="{{url('testimonial')}}">Testimonial</a></li>
											</ul>
										</li>
										<li><a href="{{url('services')}}">Services</a></li>
										<li><a href="{{url('portfolio')}}">Portfolio </a></li>

										
										<li><a href="{{url('blog-list')}}">Blog</a></li>

										<li class="current "><a href="{{url('contact')}}">Contact us</a></li>
									</ul>
						</div>
					</nav><!-- Main Menu End-->
				</div>

			</div>
		</div>
		<!--End Sticky Header-->
		
	</header>
	<!--End Main Header -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.png)">
    	<div class="auto-container">
			<div class="content">
				<h1>{{$banner->title}}</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{url('home')}}">Home</a></li>
					<li>About us</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Services Section -->
    <section class="services-section-two">
		<div class="auto-container">
			<div class="row clearfix">
				@foreach($second as $second)
				<!-- Services Block -->
				<div class="services-block-four col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="{{$second->image}}"></span>
						</div>
						<h6><a href="#">{{$second->title}}</a></h6>
						<div class="text">{{$second->description}}</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</section>
	<!-- End Services Section -->
	
	<!-- About Section -->
	<section class="about-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image-1"><img src="images/resource/about-1.jpg" alt=""></div>
						<div class="image-2"><img src="images/resource/about-2.jpg" alt=""></div>
					</div>
				</div>
				
				<!--Content Column-->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="title">we are pixer </div>
							<h2>we are happy to assist <br> you all time <span>moment</span></h2>
						</div>
						<div class="bold-text">The purpose of lorem ipsum is to create</div>
						<div class="text">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed.</div>
						<!--Skills-->
						<div class="skills">
							
							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">HTML</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="50">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="50"></div></div>
								</div>
							</div>
							
							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">php</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="80"></div></div>
								</div>
							</div>
							
							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Css</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="70">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="70"></div></div>
								</div>
							</div>
							
						</div>
						
						<!-- Author Box -->
						<div class="author-box">
							<div class="box-inner">
								<div class="image"><img src="images/resource/author-1.png" alt="" /></div>
								<h3>Dntuli Frek</h3>
								<div class="designation">Founden & CEO</div>
								<div class="signature"><img src="images/icons/signature.png" alt="" /></div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section -->
	
	
	<!--Fun Facts Section-->
    <div class="fact-counter-section">
        <div class="fact-counter">
            <div class="auto-container">
                <div class="row clearfix">
                
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        	<div class="count-outer count-box">
                            	<span class="count-text" data-speed="3000" data-stop="2100">0</span>+
                                <h6 class="counter-title">Works done</h6>
                            </div>
                        </div>
                    </div>
            
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        	<div class="count-outer count-box">
                            	<span class="count-text" data-speed="2000" data-stop="75">0</span>+
                                <h6 class="counter-title">Works done</h6>
                            </div>
                        </div>
                    </div>
            
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        	<div class="count-outer count-box">
                            	<span class="count-text" data-speed="3000" data-stop="15">0</span>+
                                <h6 class="counter-title">Years Experience</h6>
                            </div>
                        </div>
                    </div>
            
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                        	<div class="count-outer count-box">
                            	<span class="count-text" data-speed="2000" data-stop="1600">0</span>+
                                <h6 class="counter-title">Happy clients</h6>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--End Fun Facts Section-->
	
	<!-- Video Section Two -->
	<section class="video-section-two" style="background-image:url(images/background/8.jpg)">
		<div class="auto-container">
			<div class="title">Video</div>
			<h2>See how we work with <br> touch of <span>experience</span></h2>
			<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button" aria-hidden="true"></i><span class="ripple"></span></a>
		</div>
	</section>
	<!-- End Video Section Two -->
	
	<!-- Feature Section -->
	<section class="feature-section">
		<div class="auto-container">
		
			<!-- Sec Title Three -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Why choose us</div>
						<h2>There are many companies <br> but why <span>choose us</span></h2>
					</div>
					<div class="pull-right">
						<div class="text">Cookies are set through this site to recognise your repeat visits and prefe rences, serve more relevant ads, facilitate social sharing, and to  violanal yse traffic. </div>
					</div>
				</div>
			</div>
			
			<!--Feature Tabs-->
            <div class="feature-tabs tabs-box style-two">
                <div class="row clearfix">
                	<!--Column-->
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
						@foreach($fourth as $i)
                            <li data-tab="#{{$i->hidden_id}}" class="tab-btn @if($i->hidden_id=='feature-brand') active-btn @endif">{{$i->name}} <span>{{$i->description}}</span></li>
						@endforeach
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-7 col-md-12 col-sm-12">
                    	<!--Tabs Container-->
                        <div class="tabs-content">
                        
                        @foreach($fourth as $i)
                            <!-- Tab -->
                            <div class="tab @if($i->hidden_id=='feature-brand') active-tab @endif" id="{{$i->hidden_id}}">
                            	<div class="content">
									<div class="image">
										<img src="{{ asset('images/resource/'.$i->image) }}" alt="">
									</div>
								</div>
							</div>
							
						@endforeach	

						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Feature Section -->
	
	<!--Main Footer-->
	<footer class="main-footer style-two">
		<div class="auto-container">
			<!--Widgets Section-->
			<div class="widgets-section">
				<div class="row clearfix">

					<!--Column-->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!--Footer Column-->
							<div class="footer-column col-lg-7 col-md-6 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="logo">
										<a href="{{url('home')}}"><img src="images/footer-logo.png" alt="" /></a>
									</div>
									<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
									<ul class="list-style-one">
										<li><span class="icon fa fa-phone"></span> +123 (4567) 890</li>
										<li><span class="icon fa fa-envelope"></span> info@its.com </li>
										<li><span class="icon fa fa-home"></span>380 St Dummy Road, lahore <br> VIC 3004, Pakistan</li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
							<div class="footer-column col-lg-5 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h4>Links</h4>
									<ul class="list-link">
										<li><a href="{{url('home')}}">Home</a></li>
										<li><a href="{{url('services')}}">Services</a></li>
										<li><a href="{{url('about')}}">About us</a></li>
										<li><a href="{{url('testimonial')}}">Testimonials</a></li>
										<li><a href="#">News</a></li>
										<li><a href="{{url('contact')}}">Contact</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					
					<!--Column-->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h4>Support</h4>
									<ul class="list-link">
										<li><a href="{{url('contact')}}">Contact Us</a></li>
										<li><a href="#">Submit a Ticket</a></li>
										<li><a href="#">Visit Knowledge Base</a></li>
										<li><a href="#">Support System</a></li>
										<li><a href="#">Refund Policy</a></li>
										<li><a href="#">Professional Services</a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget gallery-widget">
									<h4>Gallery</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-1.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-2.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-3.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-4.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-5.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-6.jpg" alt=""></a></figure>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container">
					<div class="row clearfix">
						<!-- Copyright Column -->
						<div class="copyright-column col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">2020 &copy; All rights reserved by <a href="#">ITS</a></div>
						</div>
						
						<!-- Social Column -->
						<div class="social-column col-lg-6 col-md-6 col-sm-12">
							<ul>
								<li class="follow">Follow us: </li>
								<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
								<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
								<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
								<li><a href="#"><span class="fa fa-google-plus-square"></span></a></li>
								<li><a href="#"><span class="fa fa-rss-square"></span></a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>


</html>