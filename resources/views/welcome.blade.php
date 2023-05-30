<!DOCTYPE html><html><head>
<meta charset="utf-8">
<title>BeMarketForex</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">
    	
		<!-- Header Top -->
		<div class="header-top_two">
			<div class="auto-container">
				<div class="d-flex justify-content-center align-items-center flex-wrap">
					
					<!-- Info List -->
					<ul class="info-list">
						<li><a href="#"><span class="icon fa-solid fa-phone fa-fw"></span>(xx) xxxx-xxxx</a></li>
						<li><a href="#"><span class="icon fa-solid fa-envelope fa-fw"></span>email@mail.com</a></li>
						<li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>Endereço, Se quiser</a></li>
					</ul>
					
					<!-- Social Box -->
					<ul class="header-social_box">
						<li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
						<li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
						<li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
						<li><a href="https://instagram.com/" class="fa-solid fa-instagram fa-fw"></a></li>
					</ul>
					
				</div>
                
			</div>
		</div>
		<!-- End Header Top -->
		
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
				<div class="inner-container d-flex">
					<!-- Logo Box -->
					<div class="logo"><a href="index.html"><img src="images/logo1.png" alt title></a></div>
					
					<!-- Upper Right -->
					<div class="upper-right">
						<div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">
						
							<!-- Main Menu -->
							<nav class="main-menu show navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="dropdown current"><a href="#">Dashboard</a>
											<ul>
												<li><a href="index.html">Link</a></li>
												<li><a href="index-2.html">Link</a></li>
												<li><a href="index-3.html">Link</a></li>
												<li><a href="index-4.html">Link</a></li>
												<li class="dropdown"><a href="#">Link ></a>
													<ul>
														<li><a href="index.html">Link</a></li>
														<li><a href="index-2.html">Link</a></li>
														<li><a href="index-3.html">Link</a></li>
														<li><a href="index-4.html">Link</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="about.html">About Us</a></li>
										<li class="dropdown"><a href="#">Services</a>
											<ul>
												<li><a href="services.html">Services</a></li>
												<li><a href="service-detail.html">Service Detail</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#">Project</a>
											<ul>
												<li><a href="project.html">project</a></li>
												<li><a href="project-detail.html">project Detail</a></li>
											</ul>
										</li>
										<!-- <li class="dropdown"><a href="#">Blog</a>
											<ul>
												<li><a href="blog.html">Our Blog</a></li>
												<li><a href="blog-detail.html">Blog Detail</a></li>
												<li><a href="not-found.html">Not Found</a></li>
											</ul>
										</li> -->
										<li><a href="contact.html">Contact</a></li>
                                        <li>
                                        @if (Route::has('login'))
                    @auth
                    <li> <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                        @endauth
                        @endif
</li>
                    
									</ul>
								</div>
								
							</nav>
							<!-- Main Menu End-->
							
							<div class="outer-box d-flex align-items-center">
								
								<!-- Search Box -->
								<!--<div class="search-box">
									<form method="post" action="contact.html">
										<div class="form-group">
											<input type="search" name="search-field" value placeholder="Search..." required>
											<button type="submit"><span class="icon fa fa-search"></span></button>
										</div>
									</form>
								</div>-->
								
								<!-- Language -->
								<div class="language dropdown">
									<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe fa-fw"></i>English  <span class="fa fa-angle-down"></span></button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Português BR</a></li>
										<!--<li><a href="#">German Branch</a></li>
										<li><a href="#">UAE Branch</a></li>
										<li><a href="#">Qatar Branch</a></li>-->
									</ul>
								</div>
								
								<!--<div class="button-box">
									<a class="btn-style-three theme-btn btn-item" href="#">
										<div class="btn-wrap">
											<span class="text-one">Tell Us<i class="fa-solid fa-arrow-right fa-fw"></i></span>
											<span class="text-two">Tell Us<i class="fa-solid fa-arrow-right fa-fw"></i></span>
										</div>
									</a>
								</div>-->
								
								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html" title><img src="images/logo1.png" alt title></a>
					</div>
					
					<!-- Right Col -->
					<div class="right-box d-flex align-items-center flex-wrap">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
						
						<div class="outer-box d-flex align-items-center">
								
							<!-- Search Box -->
							<!--<div class="search-box">
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="search" name="search-field" value placeholder="Search..." required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>-->
							
							<!-- Language -->
							<div class="language dropdown">
								<button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe fa-fw"></i>English  <span class="fa fa-angle-down"></span></button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
									<li><a href="#">Português BR</a></li>
									<!--<li><a href="#">German Branch</a></li>
									<li><a href="#">UAE Branch</a></li>
									<li><a href="#">Qatar Branch</a></li>-->
								</ul>
							</div>
							
							<!--<div class="button-box">
								<a class="btn-style-three theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Tell Us<i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Tell Us<i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>-->
							
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
							
						</div>
						
					</div>
					
				</div>
            </div>
        </div>
		<!-- End Sticky Menu -->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-020-x-mark"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo1.png" alt title></a></div>
				<!-- Search -->
				<!--<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value placeholder="SEARCH HERE" required>
							<button type="submit"><span class="icon flaticon-001-loupe"></span></button>
						</div>
					</form>
				</div>-->
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Main Slider -->
	<section class="slider-two">
		<div class="single-item-carousel owl-carousel owl-theme">
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(images/robotrader.jpg)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(images/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">Yes, It's Possible.</div>
							<h1 class="slider-two_heading">BeMarket helps you to achieve your financial goals. <br> Copy the best traders NOW and Start profiting today!</h1>
							<div class="slider-two_text">See how you can have your own online business with great earnings,<br>working from the comfort of your home or wherever you are.<br>All you need is a laptop or cell phone with internet access!</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(images/inteligencia.jpg)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(images/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">Yes, It's Possible.</div>
							<h1 class="slider-two_heading">BeMarket helps you to achieve your financial goals. <br> Copy the best traders NOW and Start profiting today!</h1>
							<div class="slider-two_text">See how you can have your own online business with great earnings,<br>working from the comfort of your home or wherever you are.<br>All you need is a laptop or cell phone with internet access!</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(images/roboIA.jpg)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(images/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">Yes, It's Possible.</div>
							<h1 class="slider-two_heading">BeMarket helps you to achieve your financial goals. <br> Copy the best traders NOW and Start profiting today!</h1>
							<div class="slider-two_text">See how you can have your own online business with great earnings,<br>working from the comfort of your home or wherever you are.<br>All you need is a laptop or cell phone with internet access!</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Main Slider -->
	
	<!-- Featured One -->
	<section class="featured-one">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<a class="overlay-link" href="service-detail.html"></a>
						<span class="color-layer"></span>
						<span class="feature-block_one-icon">
							<img src="images/feature-1.png" alt>
						</span>
						<h5 class="feature-block_one-title">Copy<br>Trade</h5>
					</div>
				</div>
				
				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<a class="overlay-link" href="service-detail.html"></a>
						<span class="color-layer"></span>
						<span class="feature-block_one-icon">
							<img src="images/feature-2.png" alt>
						</span>
						<h5 class="feature-block_one-title">Coding Your Strategy</h5>
					</div>
				</div>
				
				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<a class="overlay-link" href="service-detail.html"></a>
						<span class="color-layer"></span>
						<span class="feature-block_one-icon">
							<img src="images/feature-3.png" alt>
						</span>
						<h5 class="feature-block_one-title">Technical Informations</h5>
					</div>
				</div>
				
				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<a class="overlay-link" href="service-detail.html"></a>
						<span class="color-layer"></span>
						<span class="feature-block_one-icon">
							<img src="images/feature-4.png" alt>
						</span>
						<h5 class="feature-block_one-title">Support Management</h5>
					</div>
				</div>
				
				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<a class="overlay-link" href="service-detail.html"></a>
						<span class="color-layer"></span>
						<span class="feature-block_one-icon">
							<img src="images/feature-5.png" alt>
						</span>
						<h5 class="feature-block_one-title">Market Research</h5>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Featured One -->
	
	<!-- Clients One -->
	<section class="clients-one">
		<div class="clients-one_pattern" style="background-image:url(images/futuristic.jpg)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="clients-one_title-column col-lg-4 col-md-12 col-sm-12">
					<div class="client-one_title">Join over 200 happy clients!</div>
				</div>
				<!-- Carousel Column -->
				<div class="clients-one_carousel-column col-lg-8 col-md-12 col-sm-12">
					<!-- Sponsors Carousel -->
					<ul class="sponsors-carousel-two owl-carousel owl-theme">
						<li class="slide-item"><figure class="client-one_image-box"><a href="https://www.metatrader5.com/" target = "_blank"><img src="images/5.png" alt></a></figure></li>
						<li class="slide-item"><figure class="client-one_image-box"><a href="#"><img src="images/6.png" alt></a></figure></li>
						<li class="slide-item"><figure class="client-one_image-box"><a href="#"><img src="images/7.png" alt></a></figure></li>
						<li class="slide-item"><figure class="client-one_image-box"><a href="#"><img src="images/8.png" alt></a></figure></li>
						<li class="slide-item"><figure class="client-one_image-box"><a href="#"><img src="images/5.png" alt></a></figure></li>
						<li class="slide-item"><figure class="client-one_image-box"><a href="#"><img src="images/6.png" alt></a></figure></li>
						<li class="slide-item"><figure class="client-one_image-box"><a href="#"><img src="images/7.png" alt></a></figure></li>
						<li class="slide-item"><figure class="client-one_image-box"><a href="#"><img src="images/8.png" alt></a></figure></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Clients One -->
	
	<!-- About Two -->
	<section class="about-two">
		<div class="about-two_pattern-two" style="background-image:url(images/pattern-13.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="about-two_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_pattern-one" style="background-image:url(images/pattern-12.png)"></div>
					<div class="about-two_image">
						<img src="images/atendimento.jpg" alt>
						<!-- About One Detail -->
						<a class="about-two_play lightbox-video fa-solid fa-play fa-fw" href="https://www.youtube.com/watch?v=2cY2SRUFfU8">
							<i class="ripple"></i>
						</a>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="about-two_content col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_content-inner">
						<div class="sec-title_two">
							<div class="sec-title_two-title">About Our Company</div>
							<h2 class="sec-title_two-heading">Let The <span>Professionals </span> <br>Handle Your Trading.</h2>
						</div>
						<div class="about-two_text">With our copytrade service, you can follow the trades of experienced and successful traders, with no knowledge or experience required. What's more, if you act now, you can take advantage of a special offer and start earning today. Don't let this opportunity slip away, try it now!</div>
						<div class="about-two_feature">
							<div class="row clearfix">
							
								<!-- About Two Block -->
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="images/about-1.png" alt>
										</span>
										<h6 class="about-two_block-heading">Start<br>NOW</h6>
									</div>
								</div>
								
								<!-- About Two Block -->
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="images/atendimento.png" alt>
										</span>
										<h6 class="about-two_block-heading">Technical <br> Support</h6>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="d-flex flex-wrap">
							<a class="btn-style-three theme-btn btn-item" href="#">
								<div class="btn-wrap">
									<span class="text-one">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									<span class="text-two">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
								</div>
							</a>
							
							<!-- About Phone Box -->
							<div class="about-phone_box">
								<span class="about-phone_icon fa-solid fa-phone fa-fw"></span>
								Call for help <br>
								<a class="about-two_phone-number" href="tel:+91-124-3467-2345">12 345 6787</a>
							</div>
							
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Two -->
	
	<!-- Services One -->
	<section class="services-one">
		<div class="services-one_pattern-layer" style="background-image:url(images/pattern-14.png)"></div>
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title_two centered">
				<div class="sec-title_two-title">~ Our Awesome Services ~</div>
				<h2 class="sec-title_two-heading">Choose <span>The Best</span><br>Strategies</h2>
			</div>
			
			<div class="services-one_inner-coontainer">
				<div class="four-item-carousel owl-carousel owl-theme">
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-8.png" alt></span>
							<h5 class="service-block_three-heading">Support the Resistance</h5>
							<div class="service-block_three-text">######.</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-8-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Learn More</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-9.png" alt></span>
							<h5 class="service-block_three-heading">Strategy 1</h5>
							<div class="service-block_three-text">#####.</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-9-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Strategy 1</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-10.png" alt></span>
							<h5 class="service-block_three-heading">Strategy 2</h5>
							<div class="service-block_three-text">#####</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-10-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Strategy 2</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-11.png" alt></span>
							<h5 class="service-block_three-heading">Strategy 3</h5>
							<div class="service-block_three-text">#####</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-11-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Strategy 3</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-8.png" alt></span>
							<h5 class="service-block_three-heading">Strategy 4</h5>
							<div class="service-block_three-text">#####.</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-8-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Strategy 4</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-9.png" alt></span>
							<h5 class="service-block_three-heading">Strategy 5</h5>
							<div class="service-block_three-text">#####</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-9-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Strategy 5</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-10.png" alt></span>
							<h5 class="service-block_three-heading">Strategy 6</h5>
							<div class="service-block_three-text">#####</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-10-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Strategy 6</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-11.png" alt></span>
							<h5 class="service-block_three-heading">Strategy 7</h5>
							<div class="service-block_three-text">#####</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-11-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Strategy 7</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-8.png" alt></span>
							<h5 class="service-block_three-heading">Strategy 8</h5>
							<div class="service-block_three-text">#####</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-8-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Strategy 8</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-9.png" alt></span>
							<h5 class="service-block_three-heading">Strategy 9</h5>
							<div class="service-block_three-text">#####</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-9-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Strategy 9</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-10.png" alt></span>
							<h5 class="service-block_three-heading">Strategy 10</h5>
							<div class="service-block_three-text">#####</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-10-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Strategy 10</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="images/service-11.png" alt></span>
							<h5 class="service-block_three-heading">Strategy 11</h5>
							<div class="service-block_three-text">#####</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="images/service-11-1.png" alt></span>
								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Strategy 11</a></h5>
								<!--<a class="service-block_three-learn" href="service-detail.html">Learn More</a>-->
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Services One -->
	
	<!-- Case One -->
	<section class="case-one">
		<div class="case-one_pattern-layer" style="background-image:url(images/pattern-16.png)"></div>
		<div class="case-one_pattern-layer-two" data-parallax="{" y" : -100}" style="background-image:url(images/pattern-17.png)"></div>
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title_two">
				<div class="sec-title_two-title">Sub Topico ~</div>
				<h2 class="sec-title_two-heading">estratégias <span>TOP 5</span> <br> Veja mais detalhes</h2>
			</div>
			
			<div class="case-one_inner-container">
				<div class="case-carousel owl-carousel owl-theme">
					
					<!-- Case Block -->
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="images/case.jpg" alt>
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="images/resource/case.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="service-detail.html">Estrategia Destaque 1</a></h5>
								<div class="fa-solid fa-arrow-right fa-fw">MT5</div>
								<div class="case-block_text">descriçao da estrategia 1. </div>
							</div>
						</div>
					</div>
					
					<!-- Case Block -->
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="images/case.jpg" alt>
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="images/resource/case.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="service-detail.html">Estrategia Destaque 2</a></h5>
								<div class="fa-solid fa-arrow-right fa-fw">MT5</div>
								<div class="case-block_text">descriçao da estrategia 2. </div>
							</div>
						</div>
					</div>
					
					<!-- Case Block -->
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="images/case.jpg" alt>
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="images/resource/case.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="service-detail.html">Estrategia Destaque 3</a></h5>
								<div class="fa-solid fa-arrow-right fa-fw">MT5</div>
								<div class="case-block_text">descriçao da estrategia 3. </div>
							</div>
						</div>
					</div>
					
					<!-- Case Block -->
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="images/case.jpg" alt>
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="images/resource/case.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="service-detail.html">Estrategia Destaque 4</a></h5>
								<div class="fa-solid fa-arrow-right fa-fw">MT5</div>
								<div class="case-block_text">descriçao da estrategia 4. </div>
							</div>
						</div>
					</div>
					
					<!-- Case Block -->
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="images/case.jpg" alt>
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="images/resource/case.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="service-detail.html">Estrategia Destaque 5</a></h5>
								<div class="fa-solid fa-arrow-right fa-fw">MT5</div>
								<div class="case-block_text">descriçao da estrategia 5. </div>
							</div>
						</div>
					</div>
					
					<!-- Case Block -->
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="images/case.jpg" alt>
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="images/resource/case.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="service-detail.html">Estrategia Destaque 6</a></h5>
								<div class="fa-solid fa-arrow-right fa-fw">MT5</div>
								<div class="case-block_text">descriçao da estrategia 6. </div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Case One -->
	
	<!-- Choose One -->
	
	<!-- <section class="choose-one">
		<div class="choose-one_pattern-layer" style="background-image:url(images/pattern-19.png)"></div>
		<div class="auto-container"> -->
			
			<!-- Sec Title -->
			<!-- <div class="sec-title_two centered">
				<div class="sec-title_two-title">~ Why choose Us? ~</div>
				<h2 class="sec-title_two-heading">We serve a wide <span>variety</span> <br> of industries</h2>
			</div> -->
			
			<!-- Choose Info Tabs -->
			<!-- <div class="choose-info-tabs"> -->
				<!-- Choose Tabs -->
				<!-- <div class="choose-tabs tabs-box"> -->
				
					<!-- Tab Btns -->
					<!-- <ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#prod-mission" class="tab-btn active-btn">Company Mission</li>
						<li data-tab="#prod-winner" class="tab-btn">Awards Winner</li>
						<li data-tab="#prod-software" class="tab-btn">Using Softwares</li>
					</ul> -->
					
					<!-- Tabs Container -->
					<!-- <div class="tabs-content"> -->
						
						<!-- Tab / Active Tab -->
						<!-- <div class="tab active-tab" id="prod-mission">
							<div class="row clearfix"> -->
								<!-- Image Column -->
								<!-- <div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_image-inner">
										<div class="choose-one_dotted-layer" style="background-image:url(images/pattern-18.png)"></div>
										<div class="choose-one_color-layer"></div>
										<div class="choose-one_image">
											<img src="images/choose.jpg" alt>
										</div>
									</div>
								</div> -->
								<!-- Content Column -->
								<!-- <div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_content-inner">
										<div class="choose-one_title">Touching Lives Through Technology</div>
										<h2 class="choose-one_heading">Fingent's Four Pillars of Influence</h2>
										<div class="choose-one_text">We believe in four pillars of influence that drive our growth. This is ingrained in everything we do We use technology to create a better and smarter environment.</div>
										<div class="choose-one_button">
											<a class="btn-style-three theme-btn btn-item" href="#">
												<div class="btn-wrap">
													<span class="text-one">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
													<span class="text-two">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
												</div>
											</a>
										</div>
									</div>
								</div> 
							</div>
						</div>-->
						
						<!-- Tab -->
						<!-- <div class="tab" id="prod-winner"> -->
							<!-- <div class="row clearfix"> -->
								<!-- Image Column -->
								<!-- <div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_image-inner">
										<div class="choose-one_dotted-layer" style="background-image:url(images/pattern-18.png)"></div>
										<div class="choose-one_color-layer"></div>
										<div class="choose-one_image">
											<img src="images/choose.jpg" alt>
										</div>
									</div>
								</div> -->
								<!-- Content Column -->
								<!-- <div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12"> 
									<div class="choose-one_content-inner">
										<div class="choose-one_title">Touching Lives Through Technology</div>
										<h2 class="choose-one_heading">Fingent's Four Pillars of Influence</h2>
										<div class="choose-one_text">We believe in four pillars of influence that drive our growth. This is ingrained in everything we do We use technology to create a better and smarter environment.</div>
										<div class="choose-one_button">
											<a class="btn-style-three theme-btn btn-item" href="#">
												<div class="btn-wrap">
													<span class="text-one">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
													<span class="text-two">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>-->
						
						<!-- Tab -->
						<!-- <div class="tab" id="prod-software"> 
							<div class="row clearfix">-->
								<!-- Image Column -->
								<!-- <div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_image-inner">
										<div class="choose-one_dotted-layer" style="background-image:url(images/pattern-18.png)"></div>
										<div class="choose-one_color-layer"></div>
										<div class="choose-one_image">
											<img src="images/choose.jpg" alt>
										</div>
									</div>
								</div> -->
								<!-- Content Column -->
								<!-- <div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_content-inner">
										<div class="choose-one_title">Touching Lives Through Technology</div>
										<h2 class="choose-one_heading">Fingent's Four Pillars of Influence</h2>
										<div class="choose-one_text">We believe in four pillars of influence that drive our growth. This is ingrained in everything we do We use technology to create a better and smarter environment.</div>
										<div class="choose-one_button">
											<a class="btn-style-three theme-btn btn-item" href="#">
												<div class="btn-wrap">
													<span class="text-one">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
													<span class="text-two">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
												</div>
											</a>
										</div>
									</div>
								</div> 
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			
		</div>
	</section>-->
	<!-- End Choose One -->
	
	<!-- Counter Two -->
	<section class="counter-two">
		<div class="auto-container">
			<div class="counter-two_inner-container">
				<div class="counter-two_pattern-one" style="background-image:url(images/pattern-20.png)"></div>
				<div class="counter-two_pattern-two" style="background-image:url(images/pattern-21.png)"></div>
				<div class="counter-two_pattern-three" style="background-image:url(images/pattern-22.png)"></div>
				<div class="counter-two_image-layer" style="background-image:url(images/4.jpg)"></div>
				<h2 class="counter-two_heading">We develops strategic software solutions for you.</h2>
				
				<div class="row clearfix">
					
					<!-- Counter Column -->
					<div class="counter-two_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-two_counter"><span class="odometer" data-count="2003"></span></div>
						<div class="counter-two_text">Year of establishment</div>
					</div>
					
					<!-- Counter Column -->
					<div class="counter-two_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-two_counter"><span class="odometer" data-count="25"></span>k+</div>
						<div class="counter-two_text">of customers worldwide</div>
					</div>
					
					<!-- Counter Column -->
					<div class="counter-two_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-two_counter"><span class="odometer" data-count="14"></span>+</div>
						<div class="counter-two_text">Countries with active client base</div>
					</div>
					
					<!-- Counter Column -->
					<div class="counter-two_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-two_counter"><span class="odometer" data-count="5"></span></div>
						<div class="counter-two_text">Customer <br> rating</div>
					</div>
					
				</div>
				
				<div class="counter-two_text">You have better things to do than worry about your manual operations.<a href="#">Let’s Discuss about Project.</a></div>
				
			</div>
		</div>
	</section>
	<!-- End Counter Two -->
	
	<!-- Pricing One -->
	<!-- <section class="pricing-one">
		<div class="pricing-one_pattern-layer" style="background-image:url(images/pattern-23.png)"></div>
		<div class="pricing-one_pattern-two" data-parallax="{" y" : -80}" style="background-image:url(images/pattern-24.png)"></div>
		<div class="auto-container"> -->
			
			<!-- Sec Title -->
			<!-- <div class="sec-title_two centered">
				<div class="sec-title_two-title">~ Pricing Plan ~</div>
				<h2 class="sec-title_two-heading">Our <span>Awesome</span> Pricing Plans</h2>
			</div> -->
			
			<!-- Pricing Info Tabs -->
			<!-- <div class="pricing-info-tabs"> -->
				<!--Pricing Tabs-->
				<!-- <div class="pricing-tabs tabs-box"> -->
				
					<!--Tab Btns-->
					<!-- <ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#package-monthly" class="tab-btn active-btn"><span class="circle"></span> Monthly</li>
						<li data-tab="#package-yearly" class="tab-btn"><span class="circle"></span> Yearly <span class="save">Save 20%</span></li>
					</ul> -->
					
					<!--Tabs Container-->
					<!-- <div class="tabs-content"> -->
						
						<!--Tab / Active Tab-->
						<!-- <div class="tab active-tab" id="package-monthly"> 
							<div class="content">
								<div class="row clearfix">-->
									
									<!-- Price Block -->
									<!-- <div class="price-block col-lg-4 col-md-6 col-sm-12"> 
										<div class="inner-box">-->
											<!-- Title Box -->
											<!-- <div class="title-box">
												<h5>Basic Plan</h5>
												<div class="text">The argument in favor of using to <br> filler text goes something.</div>
											</div>
											<div class="price">$29 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>24/7 system monitoring</li>
													<li class="style-two">Security management</li>
													<li>Secure finance backup</li>
													<li>Remote support</li>
												</ul>
												<a href="#" class="theme-btn trial-btn">Get a free trial</a>
											</div> 
										</div>
									</div>-->
									
									<!-- Price Block -->
									<!-- <div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<div class="recomend">Recommended</div>-->
											<!-- Title Box -->
											<!-- <div class="title-box">
												<h5>Standard Plan</h5>
												<div class="text">The argument in favor of using to <br> filler text goes something.</div>
											</div>
											<div class="price">$49 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>24/7 system monitoring</li>
													<li class="style-two">Security management</li>
													<li>Secure finance backup</li>
													<li class="style-two">Remote support</li>
												</ul>
												<a href="#" class="theme-btn trial-btn">Get a free trial</a>
											</div>
										</div>
									</div>  -->
									
									<!-- Price Block -->
									<!-- <div class="price-block col-lg-4 col-md-12 col-sm-12">
										<div class="inner-box"> -->
											<!-- Title Box -->
											<!-- <div class="title-box">
												<h5>Extended Plan</h5>
												<div class="text">The argument in favor of using to <br> filler text goes something.</div>
											</div>
											<div class="price">$59 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li class="style-two">24/7 system monitoring</li>
													<li>Security management</li>
													<li>Secure finance backup</li>
													<li class="style-two">Remote support</li>
												</ul>
												<a href="#" class="theme-btn trial-btn">Get a free trial</a>
											</div> 
										</div>
									</div>
									
								</div>
							</div>
						</div>-->
						
						<!-- Tab -->
						<!-- <div class="tab" id="package-yearly">
							<div class="content"> -->
								
								<!-- <div class="row clearfix"> -->
									
									<!-- Price Block -->
									<!-- <div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">-->
											<!-- Title Box -->
											<!-- <div class="title-box">
												<h5>Basic Plan</h5>
												<div class="text">The argument in favor of using to <br> filler text goes something.</div>
											</div>
											<div class="price">$79 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>24/7 system monitoring</li>
													<li>Security management</li>
													<li>Secure finance backup</li>
													<li class="style-two">Remote support</li>
												</ul>
												<a href="#" class="theme-btn trial-btn">Get a free trial</a>
											</div>
										</div>
									</div> --> 
									
									<!-- Price Block -->
									<!-- <div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<div class="recomend">Recommended</div> -->
											<!-- Title Box -->
											<!-- <div class="title-box">
												<h5>Standard Plan</h5>
												<div class="text">The argument in favor of using to <br> filler text goes something.</div>
											</div>
											<div class="price">$89 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>24/7 system monitoring</li>
													<li class="style-two">Security management</li>
													<li>Secure finance backup</li>
													<li>Remote support</li>
												</ul>
												<a href="#" class="theme-btn trial-btn">Get a free trial</a>
											</div>
										</div>
									</div> -->
									
									<!-- Price Block -->
									<!-- <div class="price-block col-lg-4 col-md-12 col-sm-12">
										<div class="inner-box"> -->
											<!-- Title Box -->
											<!-- <div class="title-box">
												<h5>Extended Plan</h5>
												<div class="text">The argument in favor of using to <br> filler text goes something.</div>
											</div>
											<div class="price">$99 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li class="style-two">24/7 system monitoring</li>
													<li>Security management</li>
													<li class="style-two">Secure finance backup</li>
													<li>Remote support</li>
												</ul>
												<a href="#" class="theme-btn trial-btn">Get a free trial</a>
											</div>
										</div>
									</div>
									
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</section> -->
	<!-- End Pricing One -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section" style="background-image: url(images/inteligencia.jpg)">
		<div class="pattern-layer-one" style="background-image: url(images/pattern-25.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Title Column -->
				<div class="title-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- Sec Title -->
						<div class="sec-title_two">
							<div class="sec-title_two-title">Testimonials ~</div>
							<h2 class="sec-title_two-heading">Here's what our <br> <span>customers</span> have said.</h2>
							<div class="text;font-size:10px">***Attention: the financial results presented here are not typical and are the result of an investment system that performs operations of several professional investors in market variables and involve financial risks. Past returns are no guarantee of future returns. Investments in variable income can bring financial losses to any investor. Results may vary from person to person depending on your investment.</div>
						</div>
						<!-- Button Box -->
						<div class="button-box">
							<a class="btn-style-three theme-btn btn-item" href="#">
								<div class="btn-wrap">
									<span class="text-one">View More <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									<span class="text-two">View More <i class="fa-solid fa-arrow-right fa-fw"></i></span>
								</div>
							</a>
						</div>
					</div>
				</div>
				
				<!-- Carousel Column -->
				<div class="carousel-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column" style="background-image: url(images/pattern-26.png)">
						<div class="authors-outer">
							<div class="author-one">
								<img src="images/author2.jpg" alt>
							</div>
							<!-- <div class="author-two">
								<img src="images/author2.jpg" alt>
							</div>
							<div class="author-three">
								<img src="images/author2.jpg" alt>
							</div>
							<div class="author-four">
								<img src="images/author2.jpg" alt>
							</div> -->
						</div>
						<div class="single-item-carousel owl-carousel owl-theme">
						
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="rating">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
									<div class="text">I don't even have words to describe how amazing it is to make an investment and feel safe, I have many long-term plans that I want to accomplish and I will be able to thanks to Bemarket."</div>
								</div>
								<div class="author-box">
									<div class="box-inner">
										<span class="author-image">
											<img src="images/author-1.jpg" alt>
										</span>
										<h5>Paula Spinola</h5>
										<div class="designation">Client B3</div>
									</div>
								</div>
							</div>
							
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="rating">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
									<div class="text">"I was already working in the market and trying to trade in my own way, but now I have time to study more about the market to trade in the future."</div>
								</div>
								<div class="author-box">
									<div class="box-inner">
										<span class="author-image">
											<img src="images/author-4.jpg" alt>
										</span>
										<h5>Fransisnei Jesus</h5>
										<div class="designation">Client Forex</div>
									</div>
								</div>
							</div>
							
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="rating">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
									<div class="text">"Very cool to see the dollars being earned in my account, I simply connected to the system and I'm already earning a lot of money with them and great support."</div>
								</div>
								<div class="author-box">
									<div class="box-inner">
										<span class="author-image">
											<img src="images/author-5.jpg" alt>
										</span>
										<h5>Thiago Guilhermino</h5>
										<div class="designation">Client Forex</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- News One -->
	<!-- <section class="news-two">
		<div class="auto-container"> -->
			
			<!-- Sec Title -->
			<!-- <div class="sec-title_two">
				<div class="sec-title_two-title">Blog ~</div>
				<h2 class="sec-title_two-heading">Our Latest <span>Blog</span></h2>
			</div> -->
			
			<!-- <div class="news-carousel owl-carousel owl-theme"> -->
				
				<!-- News Block -->
				<!-- <div class="news-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/news-4.jpg" alt></a>
						</div>
						<div class="lower-content">
							<div class="post-date">June 10, 2021</div>
							<h5><a href="#">Top Technology Used to Develop Mobile App.</a></h5>
							<div class="text">The time for sustainability is now while everyone is looking for companies ...</div>
							<div class="lower-box">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="author">
										<span class="author-image"><img src="images/news-icon.png" alt></span>
										Rayan Colins
									</div>
									<a href="#" class="detail">More Details</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block -->
				<!-- <div class="news-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/news-5.jpg" alt></a>
						</div>
						<div class="lower-content">
							<div class="post-date">June 10, 2021</div>
							<h5><a href="#">Five Takes on the Sustainability Revolution in business.</a></h5>
							<div class="text">The time for sustainability is now while everyone is looking for companies ...</div>
							<div class="lower-box">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="author">
										<span class="author-image"><img src="images/news-icon.png" alt></span>
										Rayan Colins
									</div>
									<a href="#" class="detail">More Details</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block -->
				<!-- <div class="news-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/news-6.jpg" alt></a>
						</div>
						<div class="lower-content">
							<div class="post-date">June 10, 2021</div>
							<h5><a href="#">Top 6 Tech Stacks That Reign Software Development.</a></h5>
							<div class="text">The time for sustainability is now while everyone is looking for companies ...</div>
							<div class="lower-box">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="author">
										<span class="author-image"><img src="images/news-icon.png" alt></span>
										Rayan Colins
									</div>
									<a href="#" class="detail">More Details</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block -->
				<!-- <div class="news-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/news-4.jpg" alt></a>
						</div>
						<div class="lower-content">
							<div class="post-date">June 10, 2021</div>
							<h5><a href="#">Top Technology Used to Develop Mobile App.</a></h5>
							<div class="text">The time for sustainability is now while everyone is looking for companies ...</div>
							<div class="lower-box">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="author">
										<span class="author-image"><img src="images/news-icon.png" alt></span>
										Rayan Colins
									</div>
									<a href="#" class="detail">More Details</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block -->
				<!-- <div class="news-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/news-5.jpg" alt></a>
						</div>
						<div class="lower-content">
							<div class="post-date">June 10, 2021</div>
							<h5><a href="#">Five Takes on the Sustainability Revolution in business.</a></h5>
							<div class="text">The time for sustainability is now while everyone is looking for companies ...</div>
							<div class="lower-box">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="author">
										<span class="author-image"><img src="images/news-icon.png" alt></span>
										Rayan Colins
									</div>
									<a href="#" class="detail">More Details</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block -->
				<!-- <div class="news-block">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="images/news-6.jpg" alt></a>
						</div>
						<div class="lower-content">
							<div class="post-date">June 10, 2021</div>
							<h5><a href="#">Top 6 Tech Stacks That Reign Software Development.</a></h5>
							<div class="text">The time for sustainability is now while everyone is looking for companies ...</div>
							<div class="lower-box">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="author">
										<span class="author-image"><img src="images/news-icon.png" alt></span>
										Rayan Colins
									</div>
									<a href="#" class="detail">More Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section> -->
	<!-- End News One -->
	
	<!-- CTA One -->
	<section class="cta-one">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<h3 class="cta-one_heading">Looking for the best automated business solutions?</h3>
					<div class="cta-one_text">Join our investment fund.</div>
				</div>
				<div class="right-box">
					<a class="cta-one_btn theme-btn" href="contact.html">get a quote</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->
	
	<!-- Footer -->
	<footer class="main-footer" style="background-image:url(images/pattern-11.png)">
		<div class="auto-container">
			<!-- Widgets Section -->
			<div class="widgets-section">
				<div class="row clearfix">
					
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div>
									<div class="logo">
										<a href="index.html"><img src="images/logo1.png" alt></a>
									</div>
									<div class="text">We work with a passion of taking challenges and creating new ones in advertising sector.</div>
									<a href="#" class="theme-btn about-btn">About us</a>
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget newsletter-widget">
									<h4>Newsletter</h4>
									<div class="text">Subscribe to our social networks to learn more</div>
									
									<!-- Email Box -->
									<!-- <div class="email-box">
										<form method="post" action="contact.html">
											<div class="form-group">
												<input type="email" name="search-field" value placeholder="Your mail address" required>
												<button type="submit"><span class="icon fa-solid fa-paper-plane fa-fw"></span></button>
											</div>
										</form>
									</div> -->
									
									<!-- Social Box -->
									<ul class="social-box">
										<li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
										<li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
										<li><a href="https://dribbble.com/" class="fa-solid fa-dribbble fa-fw"></a></li>
										<li><a href="https://behance.com/" class="fa-solid fa-behance fa-fw"></a></li>
									</ul>
									<!-- End Social Box -->
									
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h4>Official info:</h4>
									<ul class="contact-list">
										<li><span class="icon fa fa-phone"></span> 30 Commercial Road <br> Fratton, Australia</li>
										<li><span class="icon fa fa-envelope"></span> 1-888-452-1505</li>
									</ul>
									<div class="timing">
										<strong>Open Hours: </strong>
										Mon - Fri, <br> Sat - Sun: CLOSED
									</div>
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget instagram-widget">
									<h4>Gallery</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href=""><img src="images/footer-g-thumb.png" alt></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href=""><img src="images/footer-g-thumb.png" alt></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href=""><img src="images/footer-g-thumb.png" alt></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href=""><img src="images/footer-g-thumb.png" alt></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href=""><img src="images/footer-g-thumb.png" alt></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href=""><img src="images/footer-g-thumb.png" alt></a></figure>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="footer-bottom">
				<div class="copyright">2023 © All rights reserved by <a href="#">David Neto</a></div>
			</div>
			
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa-solid fa-power-off fa-fw"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value placeholder="Search Here" required>
				<button class="fa-solid fa-paper-plane fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->
		
</div>
<!-- End PageWrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/odometer.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/parallax-scroll.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/magnific-popup.min.js"></script>

<script src="js/script.js"></script>
    
</body></html>