
<?php
include("include/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Team</title>
	<link rel="shortcut icon" href="assets/img/logo/ficon.png" type="image/x-icon">
	<meta name="author" content="themexriver">
	<meta name="description" content="iTsource - IT Solutions & Services Website Design HTML Template">
	<meta name="keywords" content="	agency, business, corporate, creative, it, IT services, IT solutions, modern, multipurpose, portfolio, seo, services, software, solutions">
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
	<a  href="javascript:void(0)">Get A Quote</a>
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
						<a  class="m-cart-btn d-block" href="#">View Cart</a>
					</div>
				</div>
			</div>
		</div>
	</header>
		<!-- Modal -->
		<div class="modal " id="mymodal" >
			<div class="modal-dialog modal-dialog-centered ">
			<div class="modal-content ">
				<div class="modal-header ">
					<input type="name" class="form-control mr-2" id="InputName" aria-describedby="nameHelp" placeholder="Name">
					<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email">
				
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span >&times;</span>
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
				<h2>Our Team</h2>
			</div>
		</div>
	</section>
<!-- End of breadcurmb section
	============================================= -->

<!-- Start of team page member section
	============================================= -->
	<section id="team-page-member" class="member-section-3 team-page-member-section">
		<div class="container">
			<div class="team-page-member-content team-member-3">
				<div class="row">
					<?php
				$i=1;
				$sql=$obj->query("select * from $tbl_member where  status='1'",$debug=-1);
				while($line=$obj->fetchNextObject($sql)){?>
					<div class="col-lg-4">
						<div class="team-img-text">
							<div class="team-img">
								<img src="upload_images/banner/<?php echo  $line->photo;?>" alt="">
							</div>
							<div class="team-text headline-2 ul-li">
								<span class="t-degi"><?php  echo $line->occupation; ?></span>
								<h3><?php echo $line->name; ?> </h3>
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
									<li><a href="#"><i class="fab fa-behance"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<div class="team-icon text-center">
									<i class="flaticon-compass"></i>
								</div>
							</div>
						</div>
					</div>
					<?php $i++; }?>

					<!-- <div class="col-lg-4">
						<div class="team-img-text">
							<div class="team-img">
								<img src="assets/img/team/tpm2.jpg" alt="">
							</div>
							<div class="team-text headline-2 ul-li">
								<span class="t-degi">CEO</span>
								<h3>Dambole  Yankee</h3>
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
									<li><a href="#"><i class="fab fa-behance"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<div class="team-icon text-center">
									<i class="flaticon-compass"></i>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="col-lg-4">
						<div class="team-img-text">
							<div class="team-img">
								<img src="assets/img/team/tpm3.jpg" alt="">
							</div>
							<div class="team-text headline-2 ul-li">
								<span class="t-degi">Developer</span>
								<h3>Keliam K. Kilixer</h3>
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
									<li><a href="#"><i class="fab fa-behance"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<div class="team-icon text-center">
									<i class="flaticon-compass"></i>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="col-lg-4">
						<div class="team-img-text">
							<div class="team-img">
								<img src="assets/img/team/tpm4.jpg" alt="">
							</div>
							<div class="team-text headline-2 ul-li">
								<span class="t-degi">Monitor</span>
								<h3>Limbo Lemborgin</h3>
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
									<li><a href="#"><i class="fab fa-behance"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<div class="team-icon text-center">
									<i class="flaticon-compass"></i>
								</div>
							</div>
						</div> -->
					<!-- </div> -->
					<!-- <div class="col-lg-4">
						<div class="team-img-text">
							<div class="team-img">
								<img src="assets/img/team/tpm1.jpg" alt="">
							</div>
							<div class="team-text headline-2 ul-li">
								<span class="t-degi">Developer</span>
								<h3>Martuk K. Khimil</h3>
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
									<li><a href="#"><i class="fab fa-behance"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<div class="team-icon text-center">
									<i class="flaticon-compass"></i>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="col-lg-4">
						<div class="team-img-text">
							<div class="team-img">
								<img src="assets/img/team/tpm1.jpg" alt="">
							</div>
							<div class="team-text headline-2 ul-li">
								<span class="t-degi">Founder</span>
								<h3>Miranda. H. Halim</h3>
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
									<li><a href="#"><i class="fab fa-behance"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<div class="team-icon text-center">
									<i class="flaticon-compass"></i>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
<!-- End of team page member section
	============================================= -->

<!-- Start of get in touch section
	============================================= -->
	<section id="get-touch" class="get-touch-section team-page-get-touch">
		<div class="container">
			<div class="get-touch-content position-relative">
				<div class="get-touch-part get-touch-one text-center headline-2">
					<span>Get In Touch</span>
					<h2>Web Developers Looking
					For Web Projects?</h2>
				</div>
				<div class="get-touch-part get-touch-two text-center headline-2">
					<span>Estimate Planning</span>
					<h2>If You Have Project
					Let Us Know.</h2>
				</div>
				<div class="get-touch-icon1"><img src="assets/img/shape/gt2.png" alt=""></div>
				<div class="get-touch-icon2"><img src="assets/img/shape/gt1.png" alt=""></div>
				<div class="icon-bg2 position-absolute"><i class="flaticon-lamp"></i></div>
			</div>
		</div>
	</section>
<!-- End of Get in touch section
	============================================= -->

<!-- Start of portfolio section
	============================================= -->
	<section id="portfolio-2" class="portfolio-section-2">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="section-title title-style-two headline-2">
						<span class="site-tag">Portfolio</span>
						<h2>Great Case Study</h2>
					</div>
				</div>
				<div class="col-md-6">
					<div class="section-title-text">
						Our vertical solutions expertise allows your business to streamline
						workflow, and increase productivity. No matter the business, pure as
						has you covered with industry compliant solutions.
					</div>
				</div>
			</div>
		</div>
		<div id="portfolio-slide" class="portfolio-slide-area owl-carousel">
			<div class="portfolio-img-text">
				<div class="portfolio-img relative-position">
					<img src="assets/img/portfolio/pbr1.jpg" alt="">
					<div class="p-shape portfolio-pattern1"><img src="assets/img/portfolio/pbshape1.png" alt=""></div>
					<div class="p-shape portfolio-pattern2"><img src="assets/img/portfolio/pbshape2.png" alt=""></div>
				</div>
				<div class="portfolio-text relative-position headline-2">
					<div class="portfolio-favicon text-center">
						<img src="assets/img/portfolio/fvi1.png" alt="">
					</div>
					<span class="portfolio-tag">UXI Design</span>
					<h3><a href="!#">Power Secutiry Panel</a></h3>
				</div>
			</div>
			<div class="portfolio-img-text">
				<div class="portfolio-img relative-position">
					<img src="assets/img/portfolio/pbr2.jpg" alt="">
					<div class="p-shape portfolio-pattern1"><img src="assets/img/portfolio/pbshape1.png" alt=""></div>
					<div class="p-shape portfolio-pattern2"><img src="assets/img/portfolio/pbshape2.png" alt=""></div>
				</div>
				<div class="portfolio-text relative-position headline-2">
					<div class="portfolio-favicon text-center">
						<img src="assets/img/portfolio/fvi1.png" alt="">
					</div>
					<span class="portfolio-tag">UXI Design</span>
					<h3><a href="!#">Power Secutiry Panel</a></h3>
				</div>
			</div>
			<div class="portfolio-img-text">
				<div class="portfolio-img relative-position">
					<img src="assets/img/portfolio/pbr3.jpg" alt="">
					<div class="p-shape portfolio-pattern1"><img src="assets/img/portfolio/pbshape1.png" alt=""></div>
					<div class="p-shape portfolio-pattern2"><img src="assets/img/portfolio/pbshape2.png" alt=""></div>
				</div>
				<div class="portfolio-text relative-position headline-2">
					<div class="portfolio-favicon text-center">
						<img src="assets/img/portfolio/fvi1.png" alt="">
					</div>
					<span class="portfolio-tag">UXI Design</span>
					<h3><a href="!#">Power Secutiry Panel</a></h3>
				</div>
			</div>
			<div class="portfolio-img-text">
				<div class="portfolio-img relative-position">
					<img src="assets/img/portfolio/pbr4.jpg" alt="">
					<div class="p-shape portfolio-pattern1"><img src="assets/img/portfolio/pbshape1.png" alt=""></div>
					<div class="p-shape portfolio-pattern2"><img src="assets/img/portfolio/pbshape2.png" alt=""></div>
				</div>
				<div class="portfolio-text relative-position headline-2">
					<div class="portfolio-favicon text-center">
						<img src="assets/img/portfolio/fvi1.png" alt="">
					</div>
					<span class="portfolio-tag">UXI Design</span>
					<h3><a href="!#">Power Secutiry Panel</a></h3>
				</div>
			</div>
			<div class="portfolio-img-text">
				<div class="portfolio-img relative-position">
					<img src="assets/img/portfolio/pbr5.jpg" alt="">
					<div class="p-shape portfolio-pattern1"><img src="assets/img/portfolio/pbshape1.png" alt=""></div>
					<div class="p-shape portfolio-pattern2"><img src="assets/img/portfolio/pbshape2.png" alt=""></div>
				</div>
				<div class="portfolio-text relative-position headline-2">
					<div class="portfolio-favicon text-center">
						<img src="assets/img/portfolio/fvi1.png" alt="">
					</div>
					<span class="portfolio-tag">UXI Design</span>
					<h3><a href="!#">Power Secutiry Panel</a></h3>
				</div>
			</div>
			<div class="portfolio-img-text">
				<div class="portfolio-img relative-position">
					<img src="assets/img/portfolio/pbr1.jpg" alt="">
					<div class="p-shape portfolio-pattern1"><img src="assets/img/portfolio/pbshape1.png" alt=""></div>
					<div class="p-shape portfolio-pattern2"><img src="assets/img/portfolio/pbshape2.png" alt=""></div>
				</div>
				<div class="portfolio-text relative-position headline-2">
					<div class="portfolio-favicon text-center">
						<img src="assets/img/portfolio/fvi1.png" alt="">
					</div>
					<span class="portfolio-tag">UXI Design</span>
					<h3><a href="!#">Power Secutiry Panel</a></h3>
				</div>
			</div>
			<div class="portfolio-img-text">
				<div class="portfolio-img relative-position">
					<img src="assets/img/portfolio/pbr2.jpg" alt="">
					<div class="p-shape portfolio-pattern1"><img src="assets/img/portfolio/pbshape1.png" alt=""></div>
					<div class="p-shape portfolio-pattern2"><img src="assets/img/portfolio/pbshape2.png" alt=""></div>
				</div>
				<div class="portfolio-text relative-position headline-2">
					<div class="portfolio-favicon text-center">
						<img src="assets/img/portfolio/fvi1.png" alt="">
					</div>
					<span class="portfolio-tag">UXI Design</span>
					<h3><a href="!#">Power Secutiry Panel</a></h3>
				</div>
			</div>
			<div class="portfolio-img-text">
				<div class="portfolio-img relative-position">
					<img src="assets/img/portfolio/pbr3.jpg" alt="">
					<div class="p-shape portfolio-pattern1"><img src="assets/img/portfolio/pbshape1.png" alt=""></div>
					<div class="p-shape portfolio-pattern2"><img src="assets/img/portfolio/pbshape2.png" alt=""></div>
				</div>
				<div class="portfolio-text relative-position headline-1">
					<div class="portfolio-favicon text-center">
						<img src="assets/img/portfolio/fvi1.png" alt="">
					</div>
					<span class="portfolio-tag">UXI Design</span>
					<h3><a href="!#">Power Secutiry Panel</a></h3>
				</div>
			</div>
			<div class="portfolio-img-text">
				<div class="portfolio-img relative-position">
					<img src="assets/img/portfolio/pbr4.jpg" alt="">
					<div class="p-shape portfolio-pattern1"><img src="assets/img/portfolio/pbshape1.png" alt=""></div>
					<div class="p-shape portfolio-pattern2"><img src="assets/img/portfolio/pbshape2.png" alt=""></div>
				</div>
				<div class="portfolio-text relative-position headline-1">
					<div class="portfolio-favicon text-center">
						<img src="assets/img/portfolio/fvi1.png" alt="">
					</div>
					<span class="portfolio-tag">UXI Design</span>
					<h3><a href="!#">Power Secutiry Panel</a></h3>
				</div>
			</div>
			<div class="portfolio-img-text">
				<div class="portfolio-img relative-position">
					<img src="assets/img/portfolio/pbr5.jpg" alt="">
					<div class="p-shape portfolio-pattern1"><img src="assets/img/portfolio/pbshape1.png" alt=""></div>
					<div class="p-shape portfolio-pattern2"><img src="assets/img/portfolio/pbshape2.png" alt=""></div>
				</div>
				<div class="portfolio-text relative-position headline-1">
					<div class="portfolio-favicon text-center">
						<img src="assets/img/portfolio/fvi1.png" alt="">
					</div>
					<span class="portfolio-tag">UXI Design</span>
					<h3><a href="!#">Power Secutiry Panel</a></h3>
				</div>
			</div>
		</div>
	</section>
<!-- End of Platform section
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
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/masonry.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/parallax-scroll.js"></script>
	<script src="assets/js/jquery.easeScroll.min.js"></script>
	<script src="assets/js/typer-new.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/gmap3.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>
</body>
</html>		