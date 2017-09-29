<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="simpledesignco" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400italic,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/style.css" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/swiper.css" type="text/css" />

	<!-- Business Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ $assetsPath }}/css/business.css" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/fonts.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ $assetsPath }}/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="{{ $assetsPath }}/css/et-line.css" type="text/css" />

	<link rel="stylesheet" href="{{ $assetsPath }}/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Theme Color
	============================================= -->
	<link rel="stylesheet" href="{{ $assetsPath }}/css/colors.css" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Simple Design Co.</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark" data-responsive-class="not-dark" data-sticky-offset="full">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="{{ $assetsPath }}/images/logo-dark.png"><img src="{{ $assetsPath }}/images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="{{ $assetsPath }}/images/logo-dark@2x.png"><img src="{{ $assetsPath }}/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="not-dark">

						<ul>
							<li class="active"><a href="#"><div>Home</div></a></li>
							<li><a href="#"><div>Explore</div></a>
								<ul>
									<li><a href="#"><div>NextGen Framework</div></a></li>
									<li><a href="#"><div>Stunning Graphics</div></a></li>
									<li><a href="#"><div>Secured Solutions</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Pricing</div></a></li>
							<li><a href="#"><div>FAQs</div></a></li>
							<li><a href="#"><div>Gallery</div></a></li>
						</ul>

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix" data-loop="true">

			<div class="slider-parallax-inner">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('{{ $assetsPath }}/images/slider/1.jpg'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 class="font-primary nott">We redesign websites.</h2>
									<p class="t300 font-primary">And make it unbelievably easy to upgrade.</p>
									<a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('{{ $assetsPath }}/images/slider/2.jpg'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 class="font-primary">Amazing Prospects.</h2>
									<p class="t300 font-primary">Seamlessly engineer effective synergy after e-business experiences.</p>
									<a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('{{ $assetsPath }}/images/slider/3.jpg'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 class="font-primary">Flexible Works.</h2>
									<p class="t300 font-primary">Completely incubate worldwide users before imperatives.</p>
									<a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Slider Arrows
					============================================= -->
					<div id="slider-arrow-left" class="nobg"><i class="icon-line-arrow-left"></i></div>
					<div id="slider-arrow-right" class="nobg"><i class="icon-line-arrow-right"></i></div>
				</div>

				<!-- Slider Mouse Icon
				============================================= -->
				<a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow"><img class="infinite animated fadeInDown" src="{{ $assetsPath }}/images/mouse.svg" alt="" ></a>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nobottompadding" style="z-index: 1;">

				<div class="container topmargin clearfix">

					<!-- What We Do
					============================================= -->
					<div class="heading-block center noborder" data-heading="W">
						<h3>What We Do</h3>
					</div>
					<div class="row clearfix">
						<div class="center col-md-8 col-md-offset-2 bottommargin">
							<h3 class="text-rotater font-secondary" data-separator="," data-rotate="fadeInRight" data-speed="3500">Canvas is a Powerful, Responsive &amp; Raw Multi-Purpose Multi-Page &amp; One-Page HTML5 Template. Build whatever you like with this Template. Be it <span class="t-rotate color">Business,Corporate,Medical,Travel,Construction,Real Estate,Media Agency,Portfolio,Restaurant,Magazine,Wedding,Christmas,Blog,App Showcase</span><br> just everything is possible with Canvas.</h3>
						</div>

						<div class="clear"></div>

						<!-- Features colomns
						============================================= -->
						<div class="row clearfix">
							<div class="col-md-4 bottommargin-sm">
								<div class="feature-box media-box fbox-bg">
									<div class="fbox-media">
										<a href="#"><img class="image_fade" src="{{ $assetsPath }}/images/featured/1.jpg" alt="Featured Box Image"></a>
									</div>
									<div class="fbox-desc">
										<h3 class="nott ls0 t600">Retina Ready Display<span class="subtitle font-secondary t300 ls0">Globally parallel task premium infomediaries</span></h3>
										<a href="#" class="button-link noborder color">Read More</a>
									</div>
								</div>
							</div>

							<div class="col-md-4 bottommargin-sm">
								<div class="feature-box media-box fbox-bg">
									<div class="fbox-media">
										<a href="#"><img class="image_fade" src="{{ $assetsPath }}/images/featured/2.jpg" alt="Featured Box Image"></a>
									</div>
									<div class="fbox-desc">
										<h3 class="nott ls0 t600">Ultra Responsive Design<span class="subtitle font-secondary t300 ls0">Energistically visualize market-driven.</span></h3>
										<a href="#" class="button-link noborder color">Read More</a>
									</div>
								</div>
							</div>

							<div class="col-md-4 bottommargin-sm">
								<div class="feature-box media-box fbox-bg">
									<div class="fbox-media">
										<a href="#"><img class="image_fade" src="{{ $assetsPath }}/images/featured/3.jpg" alt="Featured Box Image"></a>
									</div>
									<div class="fbox-desc">
										<h3 class="nott ls0 t600">1000+ HTML Pages Included<span class="subtitle font-secondary t300 ls0">Enthusiastically iterate enabled portals after.</span></h3>
										<a href="#" class="button-link noborder color">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- How We Work
				============================================= -->
				<div class="section nobg clearfix">
					<div class="container clearfix">
						<div class="heading-block bottommargin-lg center noborder" data-heading="W">
							<h3 class="nott ls0">How We Work</h3>
						</div>
					</div>

					<!-- How We Work - Carousel
					============================================= -->
					<div id="oc-features" class="owl-carousel owl-carousel-full image-carousel carousel-widget">
						<div class="oc-item">
							<div class="row cleafix">
								<div class="col-lg-8">
									<img src="{{ $assetsPath }}/images/carousel/1.jpg" alt="">
								</div>
								<div class="col-lg-4" style="padding: 20px 0 0 20px;">
									<h3>Great Team Work.</h3>
									<p>Uniquely plagiarize dynamic convergence after equity invested experiences. Holisticly repurpose installed base infomediaries before web-enabled methods of empowerment.</p>
									<a href="#" class="button-link">Read More</a>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="row cleafix">
								<div class="col-lg-8">
									<img src="{{ $assetsPath }}/images/carousel/2.jpg" alt="">
								</div>
								<div class="col-lg-4" style="padding: 20px 0 0 20px;">
									<h3>Amazing Career Prospects.</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor mollitia dignissimos, assumenda consequuntur consectetur! Laborum reiciendis, accusamus possimus et similique nisi obcaecati ex doloremque ea odio.</p>
									<a href="#" class="button-link">Read More</a>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="row cleafix">
								<div class="col-lg-8">
									<img src="{{ $assetsPath }}/images/carousel/3.jpg" alt="">
								</div>
								<div class="col-lg-4" style="padding: 20px 0 0 20px;">
									<h3>Beautiful Workspace.</h3>
									<p>Dolor mollitia dignissimos, assumenda consequuntur consectetur! Laborum reiciendis, error explicabo consectetur adipisci, accusamus possimus et similique nisi obcaecati ex doloremque ea odio.</p>
									<a href="#" class="button-link">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- About Us
				============================================= -->
				<div class="section nopadding notopmargin nobg clearfix" style="border-top: 1px solid #EEE; border-bottom: 1px solid #EEE;">
					<div class="row common-height clearfix">
						<div class="col-md-6 center col-padding" style="background: url('{{ $assetsPath }}/images/sections/1.jpg') center center no-repeat; background-size: cover;">
							<div>&nbsp;</div>
						</div>

						<div class="col-md-6 col-padding">
							<div>
								<div style="position: relative;">
									<div class="heading-block noborder" data-heading="A">
										<h3 class="nott ls0">About Us</h3>
									</div>
								</div>

								<!-- About Us Featured Boxes
								============================================= -->
								<div class="row clearfix">
									<div class="col-md-10 col-sm-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-globe"></i></a>
											</div>
											<h3>All over the World</h3>
											<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
										</div>
									</div>
									<div class="col-md-10 col-sm-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-gears"></i></a>
											</div>
											<h3>Fully Customisable</h3>
											<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
										</div>
									</div>
									<div class="col-md-10 col-sm-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-document"></i></a>
											</div>
											<h3>Helpfull Documentation</h3>
											<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Our Works
				============================================= -->
				<div class="section nobg nobottommargin clearfix">
					<div class="container clearfix">
						<div class="heading-block center noborder" data-heading="O">
							<h3 class="nott ls0">Our Works</h3>
						</div>

						<!-- Portfolio Filter
						============================================= -->
						<ul class="portfolio-filter style-2 center clearfix" data-container="#portfolio">

							<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
							<li><a href="#" data-filter=".pf-icons">Icons</a></li>
							<li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
							<li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
							<li><a href="#" data-filter=".pf-media">Media</a></li>
							<li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

						</ul><!-- #portfolio-filter end -->
					</div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ $assetsPath }}/images/portfolio/1.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Open Imagination</a></h3>
										<span><a href="#">Media</a>, <a href="#">Icons</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ $assetsPath }}/images/portfolio/2.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Locked Steel Gate</a></h3>
										<span><a href="#">Illustrations</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-uielements">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ $assetsPath }}/images/portfolio/3.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Mac Sunglasses</a></h3>
										<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-icons pf-illustrations">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="#"><img src="{{ $assetsPath }}/images/portfolio/4.jpg" alt="Open Imagination"></a></div>
											<div class="slide"><a href="#"><img src="{{ $assetsPath }}/images/portfolio/4-2.jpg" alt="Open Imagination"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<div class="portfolio-desc">
										<h3><a href="#">Morning Dew</a></h3>
										<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-illustrations">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="#"><img src="{{ $assetsPath }}/images/portfolio/5.jpg" alt="Open Imagination"></a></div>
											<div class="slide"><a href="#"><img src="{{ $assetsPath }}/images/portfolio/5-2.jpg" alt="Open Imagination"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<div class="portfolio-desc">
										<h3><a href="#">Shake It!</a></h3>
										<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-uielements pf-icons">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ $assetsPath }}/images/portfolio/6.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Backpack Contents</a></h3>
										<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-uielements pf-media">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ $assetsPath }}/images/portfolio/7.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Console Activity</a></h3>
										<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-graphics">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ $assetsPath }}/images/portfolio/8.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Sunset Bulb Glow</a></h3>
										<span><a href="#">Graphics</a></span>
									</div>
								</div>
							</div>
						</article>

					</div><!-- #portfolio end -->
				</div>

				<!-- Video Sections
				============================================= -->
				<div class="section nobg notopmargin clearfix">
					<div class="container clearfix">

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ $assetsPath }}/images/icons/24help.svg" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Responsive Layout</h3>
								<p>Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ $assetsPath }}/images/icons/barcode.svg" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Retina Ready Graphics</h3>
								<p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp; Images.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ $assetsPath }}/images/icons/buy.svg" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Powerful Performance</h3>
								<p>Optimized code that are completely customizable and deliver unmatched fast performance.</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ $assetsPath }}/images/icons/card.svg" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">HTML5 Video</h3>
								<p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width Background.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ $assetsPath }}/images/icons/doc.svg" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Parallax Support</h3>
								<p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ $assetsPath }}/images/icons/dropbox.svg" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Endless Possibilities</h3>
								<p>Complete control on each &amp; every element that provides endless customization possibilities.</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third bottommargin">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ $assetsPath }}/images/icons/piggy-bank.svg" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Light &amp; Dark Color Schemes</h3>
								<p>Change your Website's Primary Scheme instantly by simply adding the dark class to the body.</p>
							</div>
						</div>

						<div class="col_one_third bottommargin">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ $assetsPath }}/images/icons/home.svg" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Boxed &amp; Wide Layouts</h3>
								<p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
							</div>
						</div>

						<div class="col_one_third bottommargin col_last">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ $assetsPath }}/images/icons/offers.svg" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Extensive Documentation</h3>
								<p>We have covered each &amp; everything in our Documentation including Videos &amp; Screenshots.</p>
							</div>
						</div>

						<div class="clear line"></div>

						<div class="row topmargin-lg clearfix">
							<div class="col-md-6 nopadding">
								<!-- Youtube Video Link
								============================================= -->
								<a href="https://www.youtube.com/watch?v=NS0txu_Kzl8" data-lightbox="iframe">
									<img src="{{ $assetsPath }}/images/sections/video.jpg" alt="Youtube Video" class="image_fade" style="box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.15); border-radius: 6px;">
									<i class="icon-play" style="position: absolute; top: 50%; left: 50%; font-size: 60px; color: #FFF; margin-top: -45px; margin-left: -23px"></i>
								</a>
							</div>
							<!-- Video Texts
							============================================= -->
							<div class="col-md-6" style="padding-left: 60px;">
								<div class="heading-block topmargin-sm bottommargin-sm noborder">
									<h3 class="nott" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">A small Video from Our Customers.</h3>
								</div>
								<p class="t400">Interactively facilitate.<br>Tactical systems with compelling materials. Objectively re-engineer diverse relationships long-term impact methodologies.</p>
								<h5 class="nobottommargin t600">&middot; SemiColonWeb - Author, Themeforest Market. <a href="#"><img src="{{ $assetsPath }}/images/tf-logo.png" height="18" alt="" style="margin-left: 4px"></a></h5>
								<a href="#" class="button-link bottommargin">Read More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Parallax Area
				============================================= -->
				<div class="section parallax topmargin-lg nobottommargin notopborder clearfix" style="background: url('{{ $assetsPath }}/images/sections/2.jpg') no-repeat center center / cover;" data-stellar-background-ratio="0.8">
					<div class="container clearfix">

						<div class="row cleafix">
							<div class="col-sm-6 dark" style="padding-left: 60px;">
								<div class="heading-block bottommargin-sm noborder">
									<h3 class="nott" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">Collections from Our Customers.</h3>
								</div>
								<p>Appropriately implement user friendly e-markets and backend processes. Competently expedite competitive vortals rather than client-based testing procedures. Professionally matrix exceptional schemas vis-a-vis leveraged paradigms. Authoritatively coordinate just in time networks with strategic potentialities.</p>
								<a href="#" class="button-link noleftmargin">Read More</a>
							</div>

							<div class="topmargin hidden-lg hidden-md"></div>

							<!-- Testimonials slider
							============================================= -->
							<div class="col-sm-5 col-sm-offset-1">
								<h4 class="dark">Testimonials Scroller</h4>
								<div class="fslider testimonial" data-animation="slide" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide">
												<div class="testimonial noborder noshadow">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">Great support, great documentation and you guys done a fantastic job in commenting everything, makes it very easy to customize, so thank you.</p>
														<div class="testi-meta">
															SmileyDot
															<span>ThemeForest user</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testimonial noborder noshadow">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">I wish that I could choose more than one reason for my 5-star rating! The Design is great, the features are fantastic, the documentation top-notch.</p>
														<div class="testi-meta">
															georgewhoffman
															<span>ThemeForest user</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testimonial noborder noshadow">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">Excellent Template really versatile and well documented. Makes anyone look like a design professional.</p>
														<div class="testi-meta">
															georgeuser077
															<span>ThemeForest user</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testimonial noborder noshadow">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">This is the most robust template I've ever worked with. So much can be done with this multi-purpose package. Regular updates and enhancements add tremendous value.</p>
														<div class="testi-meta">
															rmandaro
															<span>ThemeForest user</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testimonial noborder noshadow">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">I've been using Canvas for months now and it has exceeded my expectations. Their support has been great too.</p>
														<div class="testi-meta">
															kwelch2
															<span>ThemeForest user</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
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

					</div>
				</div>

				<!-- Team Work
				============================================= -->
				<div class="section nobg nobottompadding nobottommargin clearfix">
					<div class="container clearfix">
						<div class="row clearfix">

							<div class="col-md-5 col-md-push-7">
								<div class="device-lg device-sm topmargin-lg"></div>
								<h3 class="nobottommargin" style="font-size: 40px;">Great Team Work.</h3>
								<h3 class="t300 ls4 lowercase" style="font-size: 15px; color: #999;">Designed by Semicolonweb</h3>
								<p>Uniquely plagiarize dynamic convergence after equity invested experiences. Holisticly repurpose installed base infomediaries before web-enabled methods of empowerment.</p>
								<a href="#" class="button-link bottommargin">Read More</a>
							</div>

							<div class="col-md-7 col-md-pull-5">
								<div style="position: relative; margin-bottom: 0;" class="ohidden" data-height-lg="520" data-height-md="520" data-height-sm="520" data-height-xs="500" data-height-xxs="300">
									<img class="man" src="{{ $assetsPath }}/images/sections/man.jpg" style="position: absolute; top: 0; left: auto;" alt="Chrome">
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Brands Carousel
				============================================= -->
				<div class="section nomargin clearfix" style="padding: 80px 0">
					<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="0" data-nav="false" data-pagi="false" data-loop="true" data-autoplay="3000" data-items-xxs="2" data-items-xs="3" data-items-sm="5" data-items-md="5" data-items-lg="5">

						<div class="oc-item"><a href="#"><img src="{{ $assetsPath }}/images/clients/linkedin.svg" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ $assetsPath }}/images/clients/nat-geo.svg" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ $assetsPath }}/images/clients/jetblue.svg" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ $assetsPath }}/images/clients/zillow.svg" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ $assetsPath }}/images/clients/amazon.svg" style="height: 24px" alt="Brands"></a></div>

					</div>
				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="noborder" style="padding: 30px 0; background-color: #FFF">

			<div class="container clearfix">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="col_one_fourth">
						<img src="{{ $assetsPath }}/images/logo@2x.png" alt="" height="100" style="margin-top: -30px">
					</div>
					<div class="col_three_fourth col_last">
						<div class="col_one_fourth">
							<div class="widget widget_links clearfix">
								<h4>Hire</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
									<li><a href="#">Support Forums</a></li>
									<li><a href="#">Themes</a></li>
								</ul>
							</div>
						</div>
						<div class="col_one_fourth">
							<div class="widget widget_links clearfix">
								<h4>Community</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
									<li><a href="#">Support Forums</a></li>
									<li><a href="#">Themes</a></li>
								</ul>
							</div>
						</div>
						<div class="col_one_fourth">
							<div class="widget widget_links clearfix">
								<h4>Learn</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
									<li><a href="#">Support Forums</a></li>
									<li><a href="#">Themes</a></li>
								</ul>
							</div>
						</div>
						<div class="col_one_fourth col_last">
							<div class="widget widget_links clearfix">
								<h4>About</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
									<li><a href="#">Support Forums</a></li>
									<li><a href="#">Themes</a></li>
								</ul>
							</div>
						</div>
						<div class="clear"></div>
						<div class="line line-sm"></div>
						<div class="col_two_third">
							<small class="t300" style="color: #AAA">Copyrights &copy; 2017 All Rights Reserved by Canvas Inc.</small>
						</div>
						<div class="col_one_third col_last">
							<div class="fright clearfix">
								<a href="#" class="social-icon si-mini si-rounded si-colored si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-mini si-rounded si-colored si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-mini si-rounded si-colored si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-mini si-rounded si-colored si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-mini si-rounded si-colored si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-mini si-rounded si-colored si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="{{ $assetsPath }}/js/jquery.js"></script>
	<script type="text/javascript" src="{{ $assetsPath }}/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{{ $assetsPath }}/js/functions.js"></script>

	<script>
		// Owl Carousel Scripts
		$('#oc-features').owlCarousel({
			items: 1,
			margin: 60,
		    nav: true,
		    navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
		    dots: false,
		    stagePadding: 30,
		    responsive:{
				768: { items: 2 },
				1200: { stagePadding: 200 }
			},
		});
	</script>

</body>
</html>