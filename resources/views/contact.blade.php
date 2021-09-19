<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/dark.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Ryan Freelance Agency | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index" class="standard-logo" data-dark-logo="images/bmw.png"><img src="images/bmw.png" alt="Canvas Logo"></a>
							<a href="index" class="retina-logo" data-dark-logo="images/bmw.png"><img src="images/bmw.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->


						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->

						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="index"><div>Home</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="contact"><div>Contact</div></a>
								</li>


						</nav><!-- #primary-menu end -->

						<!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Contact</h1>
				<span>Get in Touch with Us</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contact</li>
				</ol>
			</div>

		</section><!-- #page-title end -->



		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu">
			<div id="page-menu-wrap">
				<div class="container">
					<div class="page-menu-row">

						<div class="page-menu-title">Contact <span>Options</span></div>



						<div id="page-menu-trigger"><i class="icon-reorder"></i></div>

					</div>
				</div>
			</div>
		</div><!-- #page-menu end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">
						<!-- Postcontent
						============================================= -->
						<div class="postcontent col-lg-9">

							<h3>Send us an Email</h3>

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="col-md-4 form-group">
										<label for="template-contactform-name">Name <small>*</small></label>
										<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
									</div>

									<div class="col-md-4 form-group">
										<label for="template-contactform-email">Email <small>*</small></label>
										<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
									</div>

									<div class="col-md-4 form-group">
										<label for="template-contactform-phone">Phone</label>
										<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
									</div>

									<div class="w-100"></div>

									<div class="col-md-8 form-group">
										<label for="template-contactform-subject">Subject <small>*</small></label>
										<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
									</div>

									<div class="col-md-4 form-group">
										<label for="template-contactform-service">Services</label>
										<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
											<option value="">-- Select One --</option>
											<option value="Wordpress">Wordpress</option>
											<option value="PHP / MySQL">PHP / MySQL</option>
											<option value="HTML5 / CSS3">HTML5 / CSS3</option>
											<option value="Graphic Design">Graphic Design</option>
										</select>
									</div>

									<div class="w-100"></div>

									<div class="col-12 form-group">
										<label for="template-contactform-message">Message <small>*</small></label>
										<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
									</div>

									<div class="col-12 form-group d-none">
										<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
									</div>

									<div class="col-12 form-group">

										<script src="https://www.google.com/recaptcha/api.js" async defer></script>
										<div class="g-recaptcha" data-sitekey="6LfijgUTAAAAACPt-XfRbQszAKAJY0yZDjjhMUQT"></div>

									</div>

									<div class="col-12 form-group">
										<button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>

							</div>

						</div><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">

							<address>
								<strong>Headquarters:</strong><br>
								795 Folsom Ave, Suite 600<br>
								San Francisco, CA 94107<br>
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
							<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com

							<div class="widget border-0 pt-0">

								<div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="3" data-animation="fade" data-arrows="false">
									<i class="i-plain i-small color icon-twitter mb-0" style="margin-right: 15px;"></i>
									<div class="flexslider" style="width: auto;">
										<div class="slider-wrap">
											<div class="slide"></div>
										</div>
									</div>
								</div>

							</div>

							<div class="widget border-0 pt-0">

								<a href="#" class="social-icon si-small si-dark si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-dribbble">
									<i class="icon-dribbble"></i>
									<i class="icon-dribbble"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-forrst">
									<i class="icon-forrst"></i>
									<i class="icon-forrst"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

							</div>

						</div><!-- .sidebar end -->
					</div>

				</div>
			</div>
		</section><!-- #content end -->


		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-left">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-right">
							<div class="d-flex justify-content-center justify-content-md-end">
								<a href="#" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>

							<div class="clear"></div>

							<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>


	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.min.js') }}"></script>

	<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>

</body>
</html>
