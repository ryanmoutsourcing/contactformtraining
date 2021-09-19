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

        <x-header--contact/>

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


		<x-footer/>

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
