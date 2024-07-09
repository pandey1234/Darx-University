<?php
include("include/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Service</title>
	<meta name="author" content="themexriver">
	<meta name="description" content="iTsource - IT Solutions & Services Website Design HTML Template">
	<meta name="keywords"
		content="	agency, business, corporate, creative, it, IT services, IT solutions, modern, multipurpose, portfolio, seo, services, software, solutions">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/video.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>

	<!-- Start of header section
	============================================= -->
	<header id="it-header" class="it-header-area header-style-three">
		<div class="brand-logo relative-position float-left">
			<a href="!#"><img src="assets/img/logo/white_Logo.png" alt=""></a>
		</div>
		<div class="it-menu-itemlist float-right">
			<nav class="main-navigation d-inline-block ul-li">
				<ul>
					<li><a href="index-3.html">Discover</a></li>
					<li><a href="about.html">Our Capabilities</a></li>

					<li class="dropdown"><a href="#">Contact With Us</a>
						<ul class="dropdown-menu ul-li-block clearfix">
							<li><a href="faq.html">Faq</a></li>
							<li><a href="team.html">Team</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="team-single.html">Team Details</a></li>
						</ul>
					</li>


					<li class="dropdown">
						<a href="#">Service</a>
						<ul class="dropdown-menu ul-li-block clearfix">
							<li><a href="service.html">Service</a></li>
							<li><a href="service-single.html">Service Details</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="case.html">Case Study</a>
						<ul class="dropdown-menu ul-li-block clearfix">
							<li><a href="case.html">Case</a></li>
							<li><a href="portfolio-single.html">Case Details</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="blog.html">Careers</a>
						<ul class="dropdown-menu ul-li-block clearfix">
							<li><a href="blog.html">blog</a></li>
							<li><a href="blog-single.html">blog Details</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<div class="header-main-option float-right">
				<div class="main-option-list d-inline-block search-option">
					<a class="option-btn search-btn" href="javascript:void(0)"><i class="fas fa-search"></i></a>
				</div>
				<div class="main-option-list d-inline-block sidebar-option">
					<a class="option-btn open_side_area" href="javascript:void(0)"><i class="fas fa-bars"></i></a>
				</div>
				<div class="head-f-quot d-inline-block">

					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">
						<a href="javascript:void(0)">Get A Quote</a>
					</button>



				</div>
			</div>
		</div>
		<div class="mobile_menu relative-position">
			<div class="mobile_menu_button open_mobile_menu">
				<i class="fas fa-bars"></i>
			</div>
			<div class="mobile_menu_wrap">
				<div class="mobile_menu_overlay open_mobile_menu"></div>
				<div class="mobile_menu_content">
					<div class="mobile_menu_close open_mobile_menu">
						<i class="far fa-times-circle"></i>
					</div>
					<div class="m-brand-logo text-center">
						<img src="assets/img/logo/white_Logo 1.png" alt="">
					</div>
					<div class="mobile-search-area">
						<form action="#">
							<input type="text" name="search" placeholder="Search Here...">
							<div class="search-sub-btn">
								<button><i class="fas fa-search"></i></button>
							</div>
						</form>
					</div>
					<nav class="main-navigation mobile_menu-dropdown  clearfix ul-li">
						<ul id="main-nav" class="navbar-nav text-capitalize clearfix">

							<li><a href="index-3.html">Discover</a></li>
							<li><a href="about.html">Our Capabilities</a></li>

							<li class="dropdown"><a href="#">Contact With Us</a>
								<ul class="dropdown-menu ul-li-block clearfix">
									<li><a href="faq.html">Faq</a></li>
									<li><a href="team.html">Team</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="team-single.html">Team Details</a></li>
								</ul>
							</li>


							<li class="dropdown">
								<a href="#">Service</a>
								<ul class="dropdown-menu ul-li-block clearfix">
									<li><a href="service.html">Service</a></li>
									<li><a href="service-single.html">Service Details</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="case.html">Case Study</a>
								<ul class="dropdown-menu ul-li-block clearfix">
									<li><a href="case.html">Case</a></li>
									<li><a href="portfolio-single.html">Case Details</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="blog.html">Careers</a>
								<ul class="dropdown-menu ul-li-block clearfix">
									<li><a href="blog.html">blog</a></li>
									<li><a href="blog-single.html">blog Details</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<div class="mobile-menu-contact-info ul-li-block">
						<ul>
							<li><i class="far fa-envelope"></i>info@webmail.com</li>
							<li><i class="fas fa-phone"></i>+987 876 765 65 5</li>
							<li><i class="fas fa-map-marker-alt"></i>14/A, Brown City, NYC</li>
						</ul>
					</div>
					<div class="mobile-cart">
						<a class="cart-count" href="#"><i class="fas fa-shopping-cart"></i> (3 Items)</a>
						<span>$150.00</span>
						<a class="m-cart-btn d-block" href="#">View Cart</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Modal -->
	<div class="modal " id="mymodal">
		<div class="modal-dialog modal-dialog-centered ">
			<div class="modal-content ">
				<div class="modal-header ">
					<input type="name" class="form-control mr-2" id="InputName" aria-describedby="nameHelp"
						placeholder="Name">
					<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp"
						placeholder="Email">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span>&times;</span>
					</button>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">submit</button>
				</div>
			</div>
		</div>
	</div>

	<!-- End of header section
	============================================= -->

	<!-- Start of breadcurmb section
	============================================= -->
	<section id="breadcurmb" class="breadcurmb-section position-relative" data-background="assets/img/banner/qbg.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="breadcurmb-content headline-2">
				<h2>Our Services</h2>
			</div>
		</div>
	</section>
	<!-- End of breadcurmb section
	============================================= -->

	<!-- Start of skill set section
	============================================= -->
	<section id="skill-set" class="skill-set-section service-page-skill">
		<div class="container">
			<div class="skill-set-section">
				<div class="row">
					<div class="col-lg-6">
						<div class="skill-set-text">
							<div class="section-title title-style-two headline-2">
								<span class="site-tag">Our Skillset</span>
								<h2>We Have Amaing
									Team Mates</h2>
								<h3 class="sub-text">Our vertical solutions expertise allows your business
									to streamline workflow.</h3>
							</div>
							<div class="skill-set-text">
								Our vertical solutions expertise allows your business to streamline
								workflow, and increase productivity. No matter the business, pure as
								has you covered with industry compliant solutions.
							</div>
							<div class="skill-set-progress">
								<div class="single_experties">
									<div class="progress_text">
										<div class="skill-title float-left text-capitalize">Quality check</div>
										<div class="skill-percent float-right">70%</div>
									</div>
									<div class="progress">
										<div class="progress-bar wow Rx-width-70 animated" role="progressbar"
											data-wow-duration="1.5s" data-wow-delay=".5s" aria-valuenow="0"
											aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>
								</div>
								<div class="single_experties">
									<div class="progress_text">
										<div class="skill-title float-left text-capitalize">UIX Design</div>
										<div class="skill-percent float-right">42%</div>
									</div>
									<div class="progress">
										<div class="progress-bar wow Rx-width-42 animated" role="progressbar"
											data-wow-duration="1.5s" data-wow-delay=".5s" aria-valuenow="0"
											aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>
								</div>
								<div class="single_experties">
									<div class="progress_text">
										<div class="skill-title float-left text-capitalize">Software Design</div>
										<div class="skill-percent float-right">91%</div>
									</div>
									<div class="progress">
										<div class="progress-bar wow Rx-width-91 animated" role="progressbar"
											data-wow-duration="1.5s" data-wow-delay=".5s" aria-valuenow="0"
											aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="skill-set-img position-relative">
							<div class="skill-main-img">
								<img src="assets/img/feature/sk1.jpg" alt="">
							</div>
							<div class="skill-updown-img1">
								<img src="assets/img/feature/sks1.jpg" alt="">
							</div>
							<div class="skill-updown-img2">
								<img src="assets/img/feature/sks2.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of skill set section
	============================================= -->

	<!-- Start of service page service section
	============================================= -->
	<section id="service-2" class="service-section-2 service-page-service">
		<div class="container">
			<div class="section-title title-style-two headline-2 text-center">
				<span class="site-tag">Services</span>
				<h2>What We Do Here</h2>
			</div>
			<!-- /section title -->
			<div class="service-content-2">
				<div class="row">

					<?php
					$i = 1;
					$sql = $obj->query("select * from $tbl_services where status='1' LIMIT 6", $debug = -1);
					while ($line = $obj->fetchNextObject($sql)) { ?>

						<div class="col-lg-4">
							<div class="service-icon-text">
								<div class="service-icon float-left">
									<i class="flaticon-lamp"></i>
								</div>
								<div class="service-text pera-content headline-2">
									<h3><?php echo ($line->title); ?></h3>
									<p><?php echo ($line->decs); ?>.</p>
									<a href="!#">Read More <i class="fas fa-plus"></i></a>
								</div>
							</div>
						</div>
						<!-- <div class="col-lg-4">
							<div class="service-icon-text">
								<div class="service-icon float-left">
									<i class="flaticon-lamp-1"></i>
								</div>
								<div class="service-text pera-content headline-2">
									<h3>Digital UX Product
										Development</h3>
									<p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore.</p>
									<a href="!#">Read More <i class="fas fa-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="service-icon-text">
								<div class="service-icon float-left">
									<i class="flaticon-box-1"></i>
								</div>
								<div class="service-text pera-content headline-2">
									<h3>Digital UX Product
										Development</h3>
									<p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore.</p>
									<a href="!#">Read More <i class="fas fa-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="service-icon-text">
								<div class="service-icon float-left">
									<i class="flaticon-hosting"></i>
								</div>
								<div class="service-text pera-content headline-2">
									<h3>Digital UX Product
										Development</h3>
									<p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore.</p>
									<a href="!#">Read More <i class="fas fa-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="service-icon-text">
								<div class="service-icon float-left">
									<i class="flaticon-compass"></i>
								</div>
								<div class="service-text pera-content headline-2">
									<h3>Digital UX Product
										Development</h3>
									<p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore.</p>
									<a href="!#">Read More <i class="fas fa-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="service-icon-text">
								<div class="service-icon float-left">
									<i class="flaticon-botanic"></i>
								</div>
								<div class="service-text pera-content headline-2">
									<h3>Digital UX Product
										Development</h3>
									<p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore.</p>
									<a href="!#">Read More <i class="fas fa-plus"></i></a>
								</div>
							</div>
						</div> -->

						<?php $i++;
					} ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End of service page service section
	============================================= -->

	<!-- Start of service page call action section
	============================================= -->
	<section id="service-call-action" class="service-call-action-section position-relative">
		<div class="container">
			<div class="service-cta-content text-center">
				<div class="section-title title-style-two headline-2 text-center">
					<span class="site-tag">Anything On Mind</span>
					<h2>Don’t Hassitate To
						Wrote Here.</h2>
				</div>
				<div class="service-cta-btn">
					<a href="!#">Contact Us Now</a>
				</div>
			</div>
		</div>
		<div class="s-cta-shape1">
			<img src="assets/img/feature/sct1.png" alt="">
		</div>
		<div class="s-cta-shape2">
			<img src="assets/img/feature/sct2.png" alt="">
		</div>
	</section>
	<!-- End of service page call action section
	============================================= -->

	<!-- Start of footer section
	============================================= -->
	<footer class="footer-2 relative-position">
		<div class="container">
			<div class="footer-content  relative-position">
				<div class="footer-widget">
					<div class="footer-about headline-2 pera-content">
						<h3 class="widget-title">Our Capabilities</h3>
						<p>The ‘Lighthouse Projects’ are in the clinical with
							disciplines of the chronic diseases Epilepsy,
							Haemophilia and Bipolar Disorder. The epilepsy
							Lighthouse between a
							number of organisations – RSCI, HSE, eHealth
							Ireland, Epilepsy Ireland, beaumont.</p>
						<a href="!#">Get In Touch <i class="flaticon-right-arrow"></i></a>
					</div>
				</div>
				<div class="footer-widget">
					<div class="footer-menu text-center headline-2 ul-li-block">
						<h3 class="widget-title">IT Services</h3>
						<ul>
							<li><a href="#">Managed IT</a></li>
							<li><a href="#">IT Support</a></li>
							<li><a href="#">IT Consultancy</a></li>
							<li><a href="#">Cloud Computing</a></li>
							<li><a href="#">Cyber Security</a></li>
							<li><a href="#">Custom Software</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-widget">
					<div class="footer-menu text-center headline-2 ul-li-block">
						<h3 class="widget-title">Industries</h3>
						<ul>
							<li><a href="#">Banking</a></li>
							<li><a href="#">Capital Markets</a></li>
							<li><a href="#">Enterprise Technology</a></li>
							<li><a href="#">Manufacturing</a></li>
							<li><a href="#">Healthcare</a></li>
							<li><a href="#">Higher Education</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-widget">
					<div class="footer-menu text-center headline-2 ul-li-block">
						<h3 class="widget-title">Company</h3>
						<ul>
							<li><a href="#">About</a></li>
							<li><a href="#">Leadership Team</a></li>
							<li><a href="#">Case Studies</a></li>
							<li><a href="#">Locations</a></li>
							<li><a href="#">Cyber Security</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End of footer section
	============================================= -->


	<!-- For Js Library -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/parallax-scroll.js"></script>
	<script src="assets/js/circle-progress.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/masonry.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/jquery.easeScroll.min.js"></script>
	<script src="assets/js/typer-new.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/gmap3.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>
</body>

</html>