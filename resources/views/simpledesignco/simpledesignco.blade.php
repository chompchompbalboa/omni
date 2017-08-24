<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Simple Design Co." />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400italic,600,700|Montserrat:400,700|Merriweather|Cookie" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/style.css" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/dark.css" type="text/css" />

	<!-- Media Agency Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ $assetsPath }}/css/app-landing.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ $assetsPath }}/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="{{ $assetsPath }}/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="{{ $assetsPath }}/css/fonts.css" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{ $assetsPath }}/css/bs-switches.css" type="text/css" />

	<link rel="stylesheet" href="{{ $assetsPath }}/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

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
		<header id="header" class="split-menu transparent-header dark" data-sticky-class="not-dark" data-responsive-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="{{ $assetsPath }}/images/logo_white.png"><img src="{{ $assetsPath }}/images/logo_black.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="{{ $assetsPath }}/images/logo_white.png"><img src="{{ $assetsPath }}/images/logo_black.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="with-arrows clearfix not-dark">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="160">
							<li><a href="#" data-href="#wrapper"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-nextgen"><div>Explore</div></a>
								<ul>
									<li><a href="#" data-href="#section-nextgen"><div>NextGen Framework</div></a></li>
									<li><a href="#" data-href="#section-stunning-graphics"><div>Stunning Graphics</div></a></li>
									<li><a href="#" data-href="#section-secured-solutions"><div>Secured Solutions</div></a></li>
								</ul>
							</li>
							<li><a href="#" data-href="#section-pricing"><div>Pricing</div></a></li>
						</ul>

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="160">
							<li><a href="#" data-href="#section-faqs"><div>FAQs</div></a></li>
							<li><a href="#" data-href="#section-gallery"><div>Gallery</div></a></li>
							<li class="menu-item-emphasis"><a href="#modal-login" data-lightbox="inline"><div>Login</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="full-screen slider-parallax">
			<div class="slider-parallax-inner" style="background: url('{{ $assetsPath }}/images/hero/hero.jpg') center center no-repeat; background-size: cover;">
				<div class="vertical-middle" style="z-index: 2;">
					<div class="container dark clearfix">
						<div class="row clearfix">
							<div class="col-md-6 col-sm-8">
								<div class="emphasis-title">
									<h1 class="font-body">Everything online.<br>Simplified.</h1>
									<p class="hero-action-link">We take care of everything so you can<br />  focus on running your business</p>
								</div>
								<a id="landing-button" href="#" data-scrollto="#section-nextgen" data-easing="easeInOutExpo" data-speed="1250" data-offset="160" class="button button-large button-white button-light capitalize" style="border-radius: 23px;">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<!-- Modal -->
				<div class="modal1 mfp-hide" id="modal-login">
					<div class="block divcenter" style="background-color: #FFF; max-width: 400px;">
						<div style="padding: 50px;">
							<h3 class="font-body">Login to your Account</h3>
							<form action="#" method="post" class="nobottommargin">
								<div class="col_full">
									<label class="font-body capitalize" for="login-form-modal-username">Username:</label>
									<input type="text" id="login-form-modal-username" name="login-form-modal-username" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label class="font-body capitalize" for="login-form-modal-password">Password:</label>
									<input type="password" id="login-form-modal-password" name="login-form-modal-password" value="" class="form-control" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-rounded nomargin" id="login-form-modal-submit" name="login-form-modal-submit" value="login">Login</button>
									<a href="#" class="fright">Forgot Password?</a>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="container clearfix">

					<div id="section-nextgen" class="page-section bottommargin-lg">
						<div class="row clearfix">

							<div class="col-md-7 center">
								<img src="{{ $assetsPath }}/images/section/iphone-watch.png" alt="NextGen Framework" data-animate="fadeInLeft">
							</div>

							<div class="col-md-5">
								<div class="topmargin-lg hidden-xs hidden-sm"></div>
								<img src="{{ $assetsPath }}/images/section/section-1-icon.png" alt="" style="display: block;" class="bottommargin-sm">
								<div class="emphasis-title bottommargin-sm">
									<span class="before-heading">It's really simple</span>
									<h2 style="font-size: 42px;" class="font-body ls1 t400">We do it all for you.</h2>
								</div>
								<p style="color: #777;" class="lead">Your website, social media, online advertising - you name it. We'll take care of it.</p>
								<a href="#" class="section-more-link">Read about our award-winning service<i class="icon-angle-right"></i></a>
							</div>

						</div>
					</div>

					<div class="line"></div><div class="clear"></div>

					<div id="section-stunning-graphics" class="page-section topmargin bottommargin-lg">
						<div class="row clearfix">

							<div class="col-md-5">
								<div class="topmargin-lg hidden-xs hidden-sm"></div>
								<img src="{{ $assetsPath }}/images/section/section-2-icon.png" alt="" style="display: block;" class="bottommargin-sm">
								<div class="emphasis-title bottommargin-sm">
									<span class="before-heading">Name your price</span>
									<h2 style="font-size: 42px;" class="font-body ls1 t400">On your budget</h2>
								</div>
								<p style="color: #777;" class="lead">We're here to help your business. That's why we let you name your price for the services you want.</p>
								<a href="#" class="section-more-link">Learn More <i class="icon-angle-right"></i></a>
							</div>

							<div class="col-md-7 center">
								<img src="{{ $assetsPath }}/images/section/iphone-nexus.png" alt="Stunning Graphics" data-animate="fadeInRight">
							</div>

						</div>
					</div>

					<div class="line"></div><div class="clear"></div>

				</div>

				<div id="section-secured-solutions" class="page-section section nopadding topmargin-sm" style="background: url('{{ $assetsPath }}/images/section/iphone-3d-bg.png') no-repeat left bottom; background-size: 100% auto;" data-height-lg="700" data-height-md="700" data-height-sm="450" data-height-xs="450" data-height-xxs="450">
					<div class="container clearfix">
						<div class="row clearfix">
							<div class="col-md-5 col-md-offset-6">
								<div class="topmargin-lg hidden-xs hidden-sm"></div>
								<div class="topmargin-lg hidden-xs hidden-sm"></div>
								<img src="{{ $assetsPath }}/images/section/section-3-icon.png" alt="" style="display: block;" class="bottommargin-sm">
								<div class="emphasis-title bottommargin-sm">
									<span class="before-heading">Best-in-class advice</span>
									<h2 style="font-size: 42px;" class="font-body ls1 t400">To the highest standard</h2>
								</div>
								<p style="color: #777;" class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel! Eius pariatur nemo expedita.</p>
								<a href="#" class="section-more-link">Learn More <i class="icon-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="video-wrap" style="position: absolute; height: 100%; z-index: 1;">
						<div class="video-overlay hidden-xs hidden-sm" style="background: url('{{ $assetsPath }}/images/section/iphone-3d.png') no-repeat left top; background-size: auto 100%;" data-animate="fadeInLeft"></div>
					</div>
				</div>

				<div class="clear bottommargin"></div>

				<div class="container clearfix">

					<div id="section-pricing" class="page-section nopadding nomargin">

						<div class="pricing-tenure-switcher center bottommargin-sm" data-container="#pricing-switch">
							<span class="pts-left">Monthly</span>
							<div class="pts-switcher">
								<div class="switch">
									<input id="switch-toggle-pricing-tenure" class="switch-toggle switch-toggle-round" type="checkbox">
									<label for="switch-toggle-pricing-tenure"></label>
								</div>
							</div>
							<span class="pts-right">Yearly</span>
						</div>

						<div id="pricing-switch" class="pricing row bottommargin-lg clearfix">

							<div class="col-md-4 col-sm-6">

								<div class="pricing-box">
									<div class="pricing-title">
										<h3>Starter</h3>
									</div>
									<div class="pricing-price">
										FREE<span class="price-tenure">Limited Access</span>
									</div>
									<div class="pricing-features">
										<ul>
											<li><strong>Full</strong> Access</li>
											<li><i class="icon-code"></i> Source Files</li>
											<li><strong>100</strong> User Accounts</li>
											<li><strong>1 Year</strong> License</li>
											<li>Phone &amp; Email Support</li>
										</ul>
									</div>
									<div class="pricing-action">
										<a href="#modal-get-started" data-lightbox="inline" data-pricing-plan="Starter Plan" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">Get Started</a>
									</div>
								</div>

							</div>

							<div class="col-md-4 col-sm-6">

								<div class="pricing-box">
									<div class="pricing-title">
										<h3>Professional</h3>
									</div>
									<div class="pricing-price">
										<div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>12<span class="price-tenure">Monthly</span></div>
										<div class="pts-switch-content-right"><span class="price-unit">&dollar;</span>99<span class="price-tenure">Yearly</span></div>
									</div>
									<div class="pricing-features">
										<ul>
											<li><strong>Full</strong> Access</li>
											<li><i class="icon-code"></i> Source Files</li>
											<li><strong>1000</strong> User Accounts</li>
											<li><strong>2 Years</strong> License</li>
											<li><i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i></li>
										</ul>
									</div>
									<div class="pricing-action">
										<div class="pts-switch-content-left"><a href="#modal-get-started" data-lightbox="inline" data-pricing-plan="Professional Monthly Plan" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
										<div class="pts-switch-content-right"><a href="#modal-get-started" data-lightbox="inline" data-pricing-plan="Professional Yearly Plan" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
									</div>
								</div>

							</div>

							<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">

								<div class="pricing-box">
									<div class="pricing-title">
										<h3>Business</h3>
									</div>
									<div class="pricing-price">
										<div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>19<span class="price-tenure">Monthly</span></div>
										<div class="pts-switch-content-right"><span class="price-unit">&dollar;</span>149<span class="price-tenure">Yearly</span></div>
									</div>
									<div class="pricing-features">
										<ul>
											<li><strong>Full</strong> Access</li>
											<li><i class="icon-code"></i> Source Files</li>
											<li><strong>500</strong> User Accounts</li>
											<li><strong>3 Years</strong> License</li>
											<li>Phone &amp; Email Support</li>
										</ul>
									</div>
									<div class="pricing-action">
										<div class="pts-switch-content-left"><a href="#modal-get-started" data-lightbox="inline" data-pricing-plan="Business Monthly Plan" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
										<div class="pts-switch-content-right"><a href="#modal-get-started" data-lightbox="inline" data-pricing-plan="Business Yearly Plan" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
									</div>
								</div>

							</div>

						</div>

						<!-- Modal -->
						<div class="modal1 mfp-hide" id="modal-get-started">
							<div class="block divcenter" style="background-color: #FFF; max-width: 800px;">
								<div style="padding: 50px;">
									<form action="#" id="get-started-form" method="post" class="nobottommargin">

										<div class="row clearfix">
											<div class="col-sm-8">
												<h3 class="font-body">Register for an Account</h3>
											</div>
											<div class="col-sm-4">
												<div id="modal-get-started-package"></div>
											</div>
										</div>

										<div class="col_half">
											<label class="font-body capitalize" for="get-started-form-username">Choose Username:</label>
											<input type="text" id="get-started-form-username" name="get-started-form-username" value="" class="form-control required no-error-msg" />
										</div>

										<div class="col_half col_last">
											<label class="font-body capitalize" for="get-started-form-email">Your Email:</label>
											<input type="email" id="get-started-form-email" name="get-started-form-email" value="" class="form-control required email no-error-msg" />
										</div>

										<div class="clear"></div>

										<div class="col_half">
											<label class="font-body capitalize" for="get-started-form-password">Choose Password:</label>
											<input type="password" id="get-started-form-password" name="get-started-form-password" value="" class="form-control required no-error-msg" />
										</div>

										<div class="col_half col_last">
											<label class="font-body capitalize" for="get-started-form-password">Retype Password:</label>
											<input type="password" id="get-started-form-repassword" name="get-started-form-repassword" value="" class="form-control required no-error-msg" />
										</div>

										<!-- Package Selector Hidden Input Value Setter -->
										<input type="hidden" id="get-started-form-package" name="get-started-form-package" value="Free">

										<div class="col_full">
											<label>
												<input type="checkbox" id="get-started-form-agree" name="get-started-form-agree" value="1" style="position: relative; top: 2px; margin-right: 5px;"> I Agree to the Terms &amp; Conditions
											</label>
										</div>

										<div class="col_full nobottommargin">
											<button class="button button-rounded nomargin" id="get-started-form-submit" name="get-started-form-submit" value="login">Get Started</button>
											<a href="#" data-scrollto="#section-pricing" data-easing="easeInOutExpo" data-speed="1250" data-offset="160" class="fright" onClick="$.magnificPopup.close();">Change Plan?</a>
										</div>

									</form>
								</div>
							</div>
						</div>

					</div>

					<div class="clear"></div>

					<div id="section-faqs" class="page-section nopadding nomargin">

						<div class="row topmargin-sm clearfix">

							<h2 class="center font-body bottommargin-lg">Frequently Asked Questions</h2>

							<div class="col-md-5 col-md-offset-1 col-sm-6 bottommargin-sm">
								<h4 class="font-body" style="margin-bottom:15px;">How do I become an author?</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi.</p>
							</div>
							<div class="col-md-5 col-sm-6 bottommargin-sm">
								<h4 class="font-body" style="margin-bottom:15px;">Helpful Resources for Authors</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.</p>
							</div>
							<div class="col-md-5 col-md-offset-1 col-sm-6 bottommargin-sm">
								<h4 class="font-body" style="margin-bottom:15px;">How much money can I make?</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae.</p>
							</div>
							<div class="col-md-5 col-sm-6 bottommargin-sm">
								<h4 class="font-body" style="margin-bottom:15px;">Can I offer my items for free on a promotional basis?</h4>
								<p>Laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</p>
							</div>
							<div class="col-md-5 col-md-offset-1 col-sm-6 bottommargin-sm">
								<h4 class="font-body" style="margin-bottom:15px;">An Introduction to the Marketplaces for Authors</h4>
								<p>Quisquam atque vero delectus corrupti! Quo, maiores, dolorem, hic commodi nulla ratione accusamus doloribus fuga magnam id temporibus dignissimos deleniti quidem ipsam corporis sapiente nam expedita saepe quas ab? Vero, assumenda.</p>
							</div>
							<div class="col-md-5 col-sm-6">
								<h4 class="font-body" style="margin-bottom:15px;">How does the Tuts+ Premium affiliate program work?</h4>
								<p class="nobottommargin">Reprehenderit similique nemo voluptate ullam natus illum magnam alias nobis doloremque delectus ipsa dicta repellat maxime dignissimos eveniet quae debitis ratione assumenda tempore officiis fugiat dolor.</p>
							</div>

						</div>

					</div>

				</div>

				<div class="section bottommargin-lg" style="background-color: #F8FAFB; border-top: 1px solid #E5E5E5; border-bottom: 1px solid #E5E5E5;">

					<div class="fslider testimonial testimonial-full nobg noborder noshadow" data-animation="fade" style="max-width: none;">
						<div class="flexslider">
							<div class="slider-wrap divcenter" style="max-width: 650px;">
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="{{ $assetsPath }}/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Similique fugit repellendus expedita excepturi iure provident quia eaque. Repellendus, vero numquam?</p>
										<div class="testi-meta">
											Steve Jobs
											<span>Apple Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="{{ $assetsPath }}/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="{{ $assetsPath }}/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
										<div class="testi-meta">
											John Doe
											<span>XYZ Inc.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="clear"></div>

				<div id="section-gallery" class="page-section nopadding nomargin">

					<div class="container topmargin bottommargin-lg center clearfix">

						<h3 class="ls1 t400" style="font-size: 32px; margin-bottom: 10px;">App Screenshots</h3>
						<p class="lead divcenter" style="max-width: 600px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, repellendus quae fuga ad, beatae odit.</p>
						<a href="#" class="button button-circle capitalize">Check All</a>

					</div>

					<div class="owl-carousel owl-carousel-full image-carousel carousel-widget bottommargin" data-margin="20" data-center="true" data-loop="true" data-nav="false" data-pagi="true" data-items-xxs="2" data-items-xs="2" data-items-sm="4" data-items-md="4" data-items-lg="6" data-stage-padding="30" data-lightbox="gallery">

						<div class="oc-item">
							<a data-lightbox="gallery-item" href="{{ $assetsPath }}/images/gallery/img-1.jpg"><img src="{{ $assetsPath }}/images/gallery/img-1.jpg" alt="Image 1"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="{{ $assetsPath }}/images/gallery/img-2.jpg"><img src="{{ $assetsPath }}/images/gallery/img-2.jpg" alt="Image 2"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="{{ $assetsPath }}/images/gallery/img-3.jpg"><img src="{{ $assetsPath }}/images/gallery/img-3.jpg" alt="Image 3"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="{{ $assetsPath }}/images/gallery/img-4.jpg"><img src="{{ $assetsPath }}/images/gallery/img-4.jpg" alt="Image 4"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="{{ $assetsPath }}/images/gallery/img-5.jpg"><img src="{{ $assetsPath }}/images/gallery/img-5.jpg" alt="Image 5"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="{{ $assetsPath }}/images/gallery/img-6.jpg"><img src="{{ $assetsPath }}/images/gallery/img-6.jpg" alt="Image 5"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="{{ $assetsPath }}/images/gallery/img-7.jpg"><img src="{{ $assetsPath }}/images/gallery/img-7.jpg" alt="Image 5"></a>
						</div>

					</div>

				</div>

				<div class="clear"></div>

				<!-- <div class="section nomargin">
					<div class="container clearfix">

						<h2></h2>

					</div>
				</div> -->

				<div class="section" style="padding: 30px 0; color: #999; background-color: #F8FAFB; border-top: 1px solid #E5E5E5; border-bottom: 1px solid #E5E5E5;">
					<div class="container clearfix">
						<div class="row topmargin-lg clearfix">

							<div class="col-md-4 bottommargin">
								<i class="i-plain i-large icon-et-browser inline-block" style="margin-bottom: 30px; color: #999;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4 style="font-size: 16px;">Cross Browser</h4>
								</div>
								<p class="" style="line-height: 26px;">Canvas 4 Loads Faster &amp; Smoother than the Previous Versions providing an Optimal Experience for your Users.</p>
							</div>

							<div class="col-md-4 bottommargin">
								<i class="i-plain i-large icon-et-adjustments inline-block" style="margin-bottom: 30px; color: #999;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4 style="font-size: 16px;">Flexible Options</h4>
								</div>
								<p class="" style="line-height: 26px;">Unleash the Power of Mega Menus by adding Widgets &amp; Mixed Columns powered by the Bootstrap Grid.</p>
							</div>

							<div class="col-md-4 bottommargin">
								<i class="i-plain i-large icon-et-calendar inline-block" style="margin-bottom: 30px; color: #999;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4 style="font-size: 16px;">Scheduled Backups</h4>
								</div>
								<p class="" style="line-height: 26px;">Amazing set of New Components giving you Opportunity to Create an Interactive Website for your Business.</p>
							</div>

							<div class="col-md-4 bottommargin">
								<i class="i-plain i-large icon-et-desktop inline-block" style="margin-bottom: 30px; color: #999;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4 style="font-size: 16px;">Responsive Ready</h4>
								</div>
								<p class="" style="line-height: 26px;">Convert any Grid to an Isotope Grid easily with Filterable Options making it extremely flexible and powerful.</p>
							</div>

							<div class="col-md-4 bottommargin">
								<i class="i-plain i-large icon-et-bargraph inline-block" style="margin-bottom: 30px; color: #999;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4 style="font-size: 16px;">Increased Conversions</h4>
								</div>
								<p class="" style="line-height: 26px;">Display an Alternate Lighter Menu on Responsive Devices with the same Markup Code as before. Awesomely Useful.</p>
							</div>

							<div class="col-md-4 bottommargin">
								<i class="i-plain i-large icon-et-cloud inline-block" style="margin-bottom: 30px; color: #999;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4 style="font-size: 16px;">Cloud Sharing</h4>
								</div>
								<p class="" style="line-height: 26px;">Added SPAM Protection for your Precious Forms so that you receive Emails only from Authentic Real Users.</p>
							</div>

						</div>
					</div>
				</div>

				<div class="section center nobottommargin nobg">
					<div class="container clearfix">

						<h3 class="ls1 t400" style="font-size: 32px;">Experienced &amp; Trusted by <span>16,000+</span> People worldwide</h3>
						<a href="#modal-login" data-lightbox="inline" class="button button-large button-black capitalize" style="border-radius: 23px;">Login Now</a>
						<a href="#" data-scrollto="#section-pricing" data-easing="easeInOutExpo" data-speed="1250" data-offset="160" class="button button-large capitalize" style="border-radius: 23px;">Try it Free</a>

						<div class="clear bottommargin"></div>

					</div>
				</div>

				<div class="section notopmargin footer-stick" style="padding: 10px 0; background-color: #F8FAFB; border-top: 1px solid #E5E5E5;">
					<div class="container clearfix">

						<div class="row clearfix">
							<div class="col-md-4">
								<div class="app-footer-features"><i class="icon-line2-globe-alt"></i><h5 class="font-body"><a href="#">Free Taining</a><span> &amp; 24-hour coverage</span></h5></div>
							</div>
							<div class="col-md-4">
								<div class="app-footer-features"><i class="icon-line2-notebook"></i><h5 class="font-body"><a href="#">99.99% Uptime</a><span> the last 12 months</span></h5></div>
							</div>
							<div class="col-md-4">
								<div class="app-footer-features"><i class="icon-line2-lock"></i><h5 class="font-body"><span>Serious about</span> <a href="#">Security</a> <span>&amp;</span> <a href="#">Privacy</a></h5></div>
							</div>
						</div>

					</div>
				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" style="background-color: #FFF;">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="row clearfix">

						<div class="col-md-5">

							<div class="widget clearfix">
								<div class="row clearfix">
									<div class="col-md-8 bottommargin-sm clearfix" style="color:#888;">
										<img src="{{ $assetsPath }}/images/logo_footer.png" alt="Canvas Logo" style="display: block;" class="bottommargin-sm">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, consequatur facere molestiae iusto atque.</p>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-pinterest">
											<i class="icon-pinterest"></i>
											<i class="icon-pinterest"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-vimeo">
											<i class="icon-vimeo"></i>
											<i class="icon-vimeo"></i>
										</a>

									</div>
								</div>
							</div>

						</div>

						<div class="col-md-7">
							<div class="row clearfix">

								<div class="col-md-4 bottommargin-sm">
									<div class="widget widget_links app_landing_widget_link clearfix">
										<h4>In News</h4>

										<ul>
											<li><a href="http://codex.wordpress.org/">Documentation</a></li>
											<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="http://wordpress.org/support/">Support Forums</a></li>
											<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 bottommargin-sm">
									<div class="widget widget_links app_landing_widget_link clearfix">
										<h4>About Us</h4>

										<ul>
											<li><a href="http://codex.wordpress.org/">Documentation</a></li>
											<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="http://wordpress.org/support/">Support Forums</a></li>
											<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 bottommargin-sm">
									<div class="widget widget_links app_landing_widget_link clearfix">
										<h4>Support</h4>

										<ul>
											<li><a href="http://codex.wordpress.org/">Documentation</a></li>
											<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="http://wordpress.org/support/">Support Forums</a></li>
											<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="nobg notoppadding">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

				</div>

			</div><!-- #copyrights end -->

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
		jQuery(document).ready( function($){

			function pricingSwitcher( elementCheck, elementParent, elementPricing ) {
				elementParent.find('.pts-left,.pts-right').removeClass('pts-switch-active');
				elementPricing.find('.pts-switch-content-left,.pts-switch-content-right').addClass('hidden');

				if( elementCheck.filter(':checked').length > 0 ) {
					elementParent.find('.pts-right').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-right').removeClass('hidden');
				} else {
					elementParent.find('.pts-left').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-left').removeClass('hidden');
				}
			}

			$('.pts-switcher').each( function(){
				var element = $(this),
					elementCheck = element.find(':checkbox'),
					elementParent = $(this).parents('.pricing-tenure-switcher'),
					elementPricing = $( elementParent.attr('data-container') );

				pricingSwitcher( elementCheck, elementParent, elementPricing );

				elementCheck.on( 'change', function(){
					pricingSwitcher( elementCheck, elementParent, elementPricing );
				});
			});

			// Get Started From Validation
			var getStartedForm = $('#get-started-form'),
				getStartedFormAlert = getStartedForm.attr('data-alert-type'),
				getStartedFormLoader = getStartedForm.attr('data-loader'),
				getStartedFormResult = getStartedForm.find('.contact-form-result'),
				getStartedFormRedirect = getStartedForm.attr('data-redirect');

			getStartedForm.validate({
				submitHandler: function(form) {

					getStartedFormResult.hide();

					if( getStartedFormLoader == 'button' ) {
						var defButton = $(form).find('button'),
							defButtonText = defButton.html();

						defButton.html('<i class="icon-line-loader icon-spin nomargin"></i>');
					} else {
						$(form).find('.form-process').fadeIn();
					}

					$(form).ajaxSubmit({
						target: getStartedFormResult,
						dataType: 'json',
						resetForm: true,
						success: function( data ) {
							if( getStartedFormLoader == 'button' ) {
								defButton.html( defButtonText );
							} else {
								$(form).find('.form-process').fadeOut();
							}
							if( data.alert != 'error' && getStartedFormRedirect ){
								window.location.replace( getStartedFormRedirect );
								return true;
							}
							if( getStartedFormAlert == 'inline' ) {
								if( data.alert == 'error' ) {
									var alertType = 'alert-danger';
								} else {
									var alertType = 'alert-success';
								}

								getStartedFormResult.addClass( 'alert ' + alertType ).html( data.message ).slideDown( 400 );
							} else {
								getStartedFormResult.attr( 'data-notify-type', data.alert ).attr( 'data-notify-msg', data.message ).html('');
								SEMICOLON.widget.notifications( getStartedFormResult );
							}
						}
					});
				}
			});

			$('[data-pricing-plan]').click( function(){
				getStartedForm.find('#get-started-form-package').val( $(this).attr('data-pricing-plan') );
				getStartedForm.find('#modal-get-started-package').html( $(this).attr('data-pricing-plan') );
			});

		});
	</script>

</body>
</html>