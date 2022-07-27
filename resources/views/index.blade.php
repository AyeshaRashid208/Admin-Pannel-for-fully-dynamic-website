<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Interact Tech Solution</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="icon" href="images/fivi.png" type="image/x-icon">

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

		<!-- Main Header-->
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

										<li class="current "><a href="{{url('home')}}">Home</a>

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
						<a href="index.html" class="img-responsive"><img src="images/logo.png" alt="" title=""></a>
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
	
	<!-- Banner Section Two -->
	<section class="banner-section-two">
		<div class="image-layer" style="background-image:url(images/background/5.png)"></div>
		<div class="auto-container">
			<div class="clearfix">
			
				<div class="content">
					<h1>{{ $users->title}}</h1>
					<div class="text">{{substr($users->description, 0,  58)}}<br>{{substr($users->description, 58,  100)}}</div>
					<a href="#" class="theme-btn btn-style-three">Hire us today <span class="fa fa-arrow-right"></span></a>
				</div>
			
			</div>
			<div class="image-box">
				<figure class="image">
					<img src="{{ asset('images/resource/'.$users->image) }}" alt="">
				</figure>
			</div>
		</div>
	</section>
	<!-- End Banner Section Two -->
	
	<!-- Services Carousel Section -->
	<section class="services-carousel-section">
		<div class="outer-container">
			<div class="big-title">Services</div>
			<div class="five-item-carousel owl-carousel owl-theme">
			@foreach ($second as $second)
				<!-- Services Block Three -->
				<div class="services-block-three">
					<div class="inner-box">
						<div class="icon-box">
							<span class="{{$second->icon}}"></span>
						</div>
						<h5><a href="{{url('services')}}">{{$second->title}}</a></h5>
						<div class="text">{{$second->description}}</div>
					</div>
				</div>
				
			@endforeach	
				
				
			</div>
		</div>
	</section>
	<!-- End Services Carousel Section -->
	
	<!-- Devoted Section -->
	<section class="devoted-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<!-- div class="big-title">About us</div> -->
				
				<div class="title">We Help You</div>
				<h2>Most prominent side is <br> our devoted services <span>features</span></h2>
			</div>
			
			
			<div class="devoted-info-tabs">
				<!-- Devoted Tabs -->
				<div class="devoted-tabs tabs-box">
				<div class="devoted-tabs tabs-box">

					<!--Tab Btns-->
					<div class="btns-outer">
						<ul class="tab-btns tab-buttons clearfix">
							
							@foreach($third as $i)
							<li data-tab="#{{$i->hidden_id}}" class="tab-btn @if($i->hidden_id=='prod-turnaround') active-btn @endif">{{$i->name}}</li>
							@endforeach
						</ul>
					</div>
					
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						@foreach($third as $i)
						<div class="tab @if($i->hidden_id=='prod-turnaround') active-tab @endif" id="{{$i->hidden_id}}">
							<div class="content">
								<div class="row clearfix">

									<!-- Content Column -->
									<div class="content-column col-lg-6 col-md-12 col-sm-12">
										<div class="inner-column">
											<h5>{{$i->description}}</h5>
											<div class="text">{{$i->detail}}</div>
											
											<!--Accordian Box-->
											<ul class="accordion-box style-two">

												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>{{$i->title_one}}</div>
													<div class="acc-content">
														<div class="content">
															<div class="text">
																<p>{{$i->desc_one}}</p>
															</div>
														</div>
													</div>
												</li>

												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>{{$i->title_two}}</div>
													<div class="acc-content current">
														<div class="content">
															<div class="text">
																<p>{{$i->desc_two}}</p>
															</div>
														</div>
													</div>
												</li>
												
												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>{{$i->title_thr}}</div>
													<div class="acc-content">
														<div class="content">
															<div class="text">
																<p>{{$i->desc_thr}}</p>
															</div>
														</div>
													</div>
												</li>

											</ul>
											
											<a href="{{url('about')}}" class="theme-btn btn-style-four">about us</a>
											
										</div>
									</div>
									
									<!-- Image Column -->
									<div class="image-column col-lg-6 col-md-12 col-sm-12">
										<div class="inner-column">
											<div class="image">
												<img src="{{ asset('images/resource/'.$i->image) }}" alt="" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						
	                </div>
				</div>
				
			</div>
			<!-- End Devoted Info Tabs -->
			
		</div>
	</section>
	<!-- End Devoted Section -->
	
	<!-- Steps Section -->
	<section class="steps-section-two">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="big-title">process</div>
				<div class="title">Steps for done</div>
				<h2>Easy steps to do <br> consult with <span>us</span></h2>
			</div>
			
			<!-- Outer Container -->
			<div class="outer-container">
				<div class="row clearfix">
				@foreach ($fourth as $fourth)
					<!-- Step Block -->
					<div class="step-block col-lg-3 col-md-6 col-sm-12">
					
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon-outer">
							
								<div class="service-number">1</div>
								<div class="icon-box">
									<span class="{{$fourth->icon}}"></span>
								</div>
							</div>
							<div class="lower-box">
								<h5><a href="{{url('contact')}}">{{$fourth->title}}</a></h5>
								<div class="text">{{$fourth->description}}</div>
								<a class="contact" href="{{url('contact')}}">Contact us <span class="arrow fa fa-angle-right"></span></a>
							
							</div>
						</div>
					
					</div>
				@endforeach	
		
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Steps Section -->
	
	<!-- Portfolio Section -->
	<section class="portfolio-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="big-title">wORK</div>
				<div class="title">our portfolio</div>
				<h2>We are popular for <br> our recent <span>works</span></h2>
				<div class="text">Lorem ipsum, or lipsum as it is sometimes known, is dummy <br> text used in laying out. The passage is attributed. </div>
			</div>
			
		</div>
		
		<!-- Outer Container -->
		<div class="outer-container">
			<div class="clearfix">

				<!-- Carousel Column -->
				<div class="carousel-column">
					<div class="inner-column">
						<div class="screenshot-carousel owl-carousel owl-theme">
						@foreach ($fifth as $fifth)
							<div class="image">
								<img src= "{{ asset('images/resource/'.$fifth->image) }}" alt="" />
							</div>
							
							
						@endforeach	
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column">
					<div class="image-layer" style="background-image:url(images/background/6.png)"></div>
					<div class="inner-column">
						<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-button"><span class="flaticon-play-button"><i class="ripple"></i></span></a>
						<h2>Check our recent <br> video <span>inspiration</span></h2>
						<div class="image">
							<img src="images/resource/video-image.png" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
	</section>
	<!-- End Portfolio Section -->
	
	<!-- Testimonial Section Two -->
	<section class="testimonial-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title text-center">
				<div class="big-title">Review</div>
				<div class="title">Testimonils</div>
				<h2>Learn something <br> from our <span>clients</span></h2>
			</div>
			
			<div class="row clearfix">
			@foreach ($sixth as $sixth)
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="circle-box"></div>
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="image-outer">
							<a href="#" class="social-icon dribble fa fa-dribbble"></a>
							<div class="image">
								<img src="{{ asset('images/resource/'.$sixth->image) }}" alt="" />
							</div>
						</div>
						<div class="text">{{$sixth->reviews}}</div>
						<h5>{{$sixth->name}}</h5>
						<div class="designation">{{$sixth->designation}}</div>
					</div>
				</div>
				
				
			@endforeach	
				
				
			</div>
			
		</div>
	</section>
	<!-- End Testimonial Section Two -->
	
	<!--Sponsors Section-->
	<section class="sponsors-section alternate">
		<div class="auto-container">
		
			<div class="carousel-outer">
				<!--Sponsors Slider-->
					
				<ul class="sponsors-carousel owl-carousel owl-theme">
				@foreach ($eight as $eight)
					<li><div class="image-box"><a href="#"><img src="{{ asset('images/clients/'.$eight->image) }}" alt=""></a></div></li>
					@endforeach	
				</ul>
				
			</div>
		
		</div>
	</section>
	<!--End Sponsors Section-->
	
	<!-- News Section -->
	<section class="news-section style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Our expert team</div>
				<h2>We are dedicated <br> our devoted service <span>features</span></h2>
			</div>
			
			<div class="row clearfix">
			@foreach ($seven as $seven)
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image" >
							<a href="{{url('blog/'.$seven['id'])}}"><img src="{{ asset('images/resource/'.$seven->fimage) }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h6 style="height:80px"><a href="{{url('blog/'.$seven['id'])}}">{{$seven->title}}</a></h6>
							<div class="clearfix">
								<div class="pull-left">
									<div class="author" >
										{{$seven->name}}
									</div>
								</div>
								<div class="pull-right">
									<div class="post-time">{{$seven->time}}</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<!-- News Block -->
				
				
			</div>
		</div>
	</section>
	<!-- End News Section -->
	
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