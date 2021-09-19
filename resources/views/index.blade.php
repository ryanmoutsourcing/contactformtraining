<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
	<link rel="stylesheet" href="{{ asset('css/dark.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Ryan Freelance Agency</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

        <x-header/>

		<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-100 include-header">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">Welcome to Ryan Freelance Agency</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">2 Month Warranty For Any Feature (example: contact form) We Are Contracted To Build.</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('images/slider/swiper/1.jpg');"></div>
						</div>
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">
										TUTORIAL CHANNEL</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">If you prefer to do it yourself, check out our tutorial channel on YouTube. This is to show you that we know our profession well, and to help others.
									</p>
								</div>
							</div>
							<div class="video-wrap">
								<video poster="images/videos/explore-poster.jpg" preload="auto" loop autoplay muted>
									<source src='images/videos/explore.mp4' type='video/mp4' />
									<source src='images/videos/explore.webm' type='video/webm' />
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="container">
								<div class="slider-caption">
									<h2 data-animate="fadeInUp">Heroku Hosting</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Don't have money for hosting? We will host your website on Heroku, for free, and you just have to pay for the domain which is around $7-20/year. Heroku is a free platform where developers can upload apps and websites for testing.</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;"></div>
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
				</div>

			</div>
		</section>

        <x-footer/>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.min.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>
</body>
</html>
