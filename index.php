<?php
include "conn.php"; // Using database connection file here
 ?>
	<!DOCTYPE html>
	<html lang="en">

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Janemon - Personal Portfolio Template">
		<meta name="keywords" content="themes_mountain,personal, portfolio new, html, one page, bootstrap, new html template, design, creative, onepage, clean, modern">
		<meta name="author" content="Asad Ali">
		<!-- SITE TITLE -->
		<title>Asad Ali Portfolio</title>
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<link rel="stylesheet" href="assets/css/materialdesignicons-min.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
		<!-- venobox CSS -->
		<link rel="stylesheet" href="assets/css/venobox.css">
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/magic-mouse.css" />
		<link rel="stylesheet" href="assets/css/style-light.css" />
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
		<!-- END PRELOADER -->

		<!-- START NAVBAR -->
		<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
			<div class="container">
				<a class="navbar-brand" href="index.html"><img src="assets/img/logo5.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="mdi mdi-menu"></span>
				</button>
				<!--END BUTTON-->
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul id="navbar-navlist" class="navbar-nav ms-auto">
						<li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
						<li class="nav-item"> <a class="nav-link" href="#service">Services</a></li>
						<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
						<li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
						<li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
						<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="https://www.fiverr.com/computerwork364"><button class="btn btn-grad">Hire Me</button></a></li>
					</ul>
					<!--END NAVBAR NAV-->
				</div>
				<!--END COLLAPSE-->
			</div>
			<!--END CONTAINER -->
		</nav>
		<!-- END NAVBAR-->

		<!-- START HOME -->
		<section data-stellar-background-ratio="0.3" id="home" class="home_bg" style="background-image: url(assets/img/bg1.png);  background-size:cover; background-position: center center;">
			<div id="particles-js"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-sm-12 col-xs-12">
						<div class="about_me_content">
							<span> - I Am Asad Ali</span>
							<h1 class="typewrite" data-period="2000" data-type='[ "Web Developer", "DESIGNER", "FREELANCER", "Blogger"]'>
								<span class="wrap"></span>
							</h1>
						</div>
						<div class="basic-info">
							<div class="single-basic-info">
								<p>Email: <br /><span>www.asadali.worked<br>.area@gmail.com</span></p>
							</div>
							<div class="single-basic-info">
								<p>Phone: <br /><span>+92313-7736010</span></p>
							</div>
							<!-- <div class="single-basic-info">
							<p>Address: <br /><span>New Winchester</span></p>
						</div> -->
							<div class="single-basic-info">
								<p>Nationality: <br /><span>PAKISTAN</span></p>
							</div>
						</div>
					</div><!-- END COL-->
				</div>
				<!--- END ROW -->
			</div>
			<!--- END CONTAINER -->
		</section>
		<!-- END  HOME -->

		<!-- START ABOUT -->
		<section id="about" class="about_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h1>Profile</h1>
					<p>Web Developer And Designer</p>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="about_img">
							<img src="assets/img/profile-pic2.png" class="img-fluid" alt="profile-picture" />
						</div>
					</div><!-- / END COL -->
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="about_info">
							<h4>Intro</h4>
							<h3>Hi, my name is Asad Ali.</h3>
							<?php
							$qry = mysqli_query($db, "select * from intro"); // select query
							$data = mysqli_fetch_array($qry);
							?>
							<p><?php echo $data['my_intro']; ?></p>
						</div>
						<div class="skills_info">
							<h4>Skills</h4>
							<div class="progress-bar-linear">
								<p class="progress-bar-text">Web Development
									<span>85%</span>
								</p>
								<div class="progress-bar">
									<span data-percent="85"></span>
								</div>
							</div>
							<div class="progress-bar-linear">
								<p class="progress-bar-text">Graphic Design
									<span>80%</span>
								</p>
								<div class="progress-bar">
									<span data-percent="80"></span>
								</div>
							</div>
							<div class="progress-bar-linear">
								<p class="progress-bar-text">Blogger
									<span>80%</span>
								</p>
								<div class="progress-bar">
									<span data-percent="80"></span>
								</div>
							</div>
						</div>
					</div><!-- / END COL -->
				</div><!-- / END ROW -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END ABOUT -->

		<!-- START SERVICE -->
		<section id="service" class="service_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h1>What I'm Doing</h1>
					<p></p>
				</div>
				<div class="row text-center">
					<div class="col-lg-6 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="serviceBox sbbr">
							<div class="service-icon"><span class="ti-cup"></span></div>
							<h3 class="title">Graphic Design</h3>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin pharetra tortor.</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-6 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="serviceBox sbbr">
							<div class="service-icon"><span class="ti-medall-alt"></span></div>
							<h3 class="title">Web Development</h3>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin pharetra tortor.</p>
						</div>
					</div><!-- END COL -->
					<!-- <div class="col-lg-4 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<div class="serviceBox sbbr sbbrnone">
						<div class="service-icon"><span class="ti-image"></span></div>
						<h3 class="title">Social Media</h3>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin pharetra tortor.</p>
					</div>
				</div>END COL			 -->
					<div class="col-lg-6 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="serviceBox">
							<div class="service-icon"><span class="ti-crown"></span></div>
							<h3 class="title">Blogging</h3>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin pharetra tortor.</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-6 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="serviceBox sblr">
							<div class="service-icon"><span class="ti-key"></span></div>
							<h3 class="title">Strategy</h3>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin pharetra tortor.</p>
						</div>
					</div><!-- END COL -->
					<!-- <div class="col-lg-4 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
					<div class="serviceBox">
						<div class="service-icon"><span class="ti-hand-open"></span></div>
						<h3 class="title">Consulting</h3>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin pharetra tortor.</p>
					</div>
				</div>END COL				 -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END SERVICE -->

		<!-- START FUNFACT -->
		<section data-stellar-background-ratio="0.3" id="funfact" class="funfact_area counter_feature section-padding" style="background-image: url(assets/img/counter-bg2.jpg);  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="sp sp-one">
							<h2 class="counter-num">191</h2>
							<h3>Happy Client</h3>
						</div>
					</div><!-- END COL-->
					<div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="sp sp-two">
							<h2 class="counter-num">221</h2>
							<h3>Successful Project</h3>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="sp sp-three">
							<h2 class="counter-num">89</h2>
							<h3>ui / ux projects</h3>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="sp sp-four">
							<h2 class="counter-num">33</h2>
							<h3>Team Members</h3>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW  -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END FUNFACT -->

		<!-- START PORTFOLIOS -->
		<section id="portfolio" class="portfolio_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h1>The projects</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="row portfolio_item">
					<div class="col-lg-12 text-center">
						<div class="portfolio_filter">
							<ul>
								<li class="active filter" data-filter="all">All</li>
								<li class="filter" data-filter=".design">Design</li>
								<li class="filter" data-filter=".print">print</li>
								<li class="filter" data-filter=".logo">logo</li>
								<li class="filter" data-filter=".marketing">Marketing</li>
								<li class="filter" data-filter=".media">Social media</li>
								<li class="filter" data-filter=".web">Web Details</li>
								<li class="filter" data-filter=".video">Video</li>
							</ul>
						</div>
					</div>
					<!--END COL -->
					<div class="col-xs-12 col-sm-6 col-lg-4 mix print marketing">
						<div class="box">
							<img src="assets/img/portfolio/1.jpg" alt="">
							<div class="box-content">
								<h3 class="title">Design Landing Page</h3>
								<span class="post">Branding , Design</span>
							</div>
							<ul class="icon">
								<li><a href="assets/img/portfolio/1.jpg" class="port-icon lightbox" data-gall="gall-work"><i class="fa fa-eye"></i></a></li>
								<li><a href="single_project_light.html" target="_blank"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
					<!--- END COL -->
					<div class="col-xs-12 col-sm-6 col-lg-4 mix web">
						<div class="box">
							<img src="assets/img/portfolio/2.jpg" alt="">
							<div class="box-content">
								<h3 class="title">Web Project</h3>
								<span class="post">Website, logo</span>
							</div>
							<ul class="icon">
								<li><a href="assets/img/portfolio/2.jpg" class="port-icon lightbox" data-gall="gall-work"><i class="fa fa-eye"></i></a></li>
								<li><a href="single_project_light.html" target="_blank"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
					<!--- END COL -->
					<div class="col-xs-12 col-sm-6 col-lg-4 mix logo">
						<div class="box">
							<img src="assets/img/portfolio/3.jpg" alt="">
							<div class="box-content">
								<h3 class="title">logo company</h3>
								<span class="post">logo,graphics</span>
							</div>
							<ul class="icon">
								<li><a href="assets/img/portfolio/3.jpg" class="port-icon lightbox" data-gall="gall-work"><i class="fa fa-eye"></i></a></li>
								<li><a href="single_project_light.html" target="_blank"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
					<!--- END COL -->
					<div class="col-xs-12 col-sm-6 col-lg-4 mix design web">
						<div class="box">
							<img src="assets/img/portfolio/4.jpg" alt="">
							<div class="box-content">
								<h3 class="title">Digital Marketing</h3>
								<span class="post">Design, Web</span>
							</div>
							<ul class="icon">
								<li><a href="assets/img/portfolio/4.jpg" class="port-icon lightbox" data-gall="gall-work"><i class="fa fa-eye"></i></a></li>
								<li><a href="single_project_light.html" target="_blank"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
					<!--- END COL -->
					<div class="col-xs-12 col-sm-6 col-lg-4 mix print video">
						<div class="box">
							<img src="assets/img/portfolio/5.jpg" alt="">
							<div class="box-content">
								<h3 class="title">Print media</h3>
								<span class="post">Video, print</span>
							</div>
							<ul class="icon">
								<li><a href="assets/img/portfolio/5.jpg" class="port-icon lightbox" data-gall="gall-work"><i class="fa fa-eye"></i></a></li>
								<li><a href="single_project_light.html" target="_blank"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
					<!--- END COL -->
					<div class="col-xs-12 col-sm-6 col-lg-4 mix logo marketing">
						<div class="box">
							<img src="assets/img/portfolio/6.jpg" alt="">
							<div class="box-content">
								<h3 class="title">Logo Marketing</h3>
								<span class="post">social, media</span>
							</div>
							<ul class="icon">
								<li><a href="assets/img/portfolio/6.jpg" class="port-icon lightbox" data-gall="gall-work"><i class="fa fa-eye"></i></a></li>
								<li><a href="single_project_light.html" target="_blank"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
					<!--- END COL -->
					<div class="col-xs-12 col-sm-6 col-lg-4 mix design media">
						<div class="box">
							<img src="assets/img/portfolio/7.jpg" alt="">
							<div class="box-content">
								<h3 class="title">design agency work</h3>
								<span class="post">logo, graphics</span>
							</div>
							<ul class="icon">
								<li><a href="assets/img/portfolio/7.jpg" class="port-icon lightbox" data-gall="gall-work"><i class="fa fa-eye"></i></a></li>
								<li><a href="single_project_light.html" target="_blank"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
					<!--- END COL -->
					<div class="col-xs-12 col-sm-6 col-lg-4 mix video">
						<div class="box">
							<img src="assets/img/portfolio/8.jpg" alt="">
							<div class="box-content">
								<h3 class="title">Video marketing</h3>
								<span class="post">Portfolio, Personal</span>
							</div>
							<ul class="icon">
								<li><a href="assets/img/portfolio/8.jpg" class="port-icon lightbox" data-gall="gall-work"><i class="fa fa-eye"></i></a></li>
								<li><a href="single_project_light.html" target="_blank"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
					<!--- END COL -->
					<div class="col-xs-12 col-sm-6 col-lg-4 mix logo media">
						<div class="box">
							<img src="assets/img/portfolio/9.jpg" alt="">
							<div class="box-content">
								<h3 class="title">Social media</h3>
								<span class="post">logo, design</span>
							</div>
							<ul class="icon">
								<li><a href="assets/img/portfolio/9.jpg" class="port-icon lightbox" data-gall="gall-work"><i class="fa fa-eye"></i></a></li>
								<li><a href="single_project_light.html" target="_blank"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
					<!--- END COL -->
				</div><!-- / END ROW -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END PORTFOLIOS -->

		<!-- START RESUME -->
		<section id="resume" class="resume_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h1>Resume</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<?php
				$records = mysqli_query($db, "select * from resume where category='education'"); // fetch data from database
				$records2 = mysqli_query($db, "select * from resume where category='experience'");
				?>
				<div class="row">
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<h4 class="timeline_title">Education</h4>
						<?php
						while ($data = mysqli_fetch_array($records)) { ?>
							<div class="single_timeline">
								<h4> <?php echo $data['u_name']; ?></h4>
								<span class="active_year"> <?php echo $data['year']; ?></span>
								<span class="active_company">- <?php echo $data['d_name']; ?></span>
								<p> <?php echo $data['d_description']; ?></p>
							</div>
						<?php }  ?>
					</div>
					<!--END COL -->
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h4 class="timeline_title">Experience</h4>
						<?php
						while ($data2 = mysqli_fetch_array($records2)) { ?>
							<div class="single_timeline">
								<h4><?php echo $data2['u_name']; ?></h4>
								<span class="active_year"><?php echo $data2['year']; ?></span>
								<span class="active_company">- <?php echo $data2['d_name']; ?></span>
								<p><?php echo $data2['d_description']; ?></p>
							</div>
						<?php }  ?>
					</div>
					<!--END COL -->
				</div><!-- / END ROW -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END RESUME -->

		<!-- START TEAM -->
		<section id="team" class="our_team section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h1>Team Showcase</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single-team">
							<div class="img"><img src="assets/img/team/team1.jpg" class="img-fluid" alt=""></div>
							<div class="team-content">
								<h3>Marina Mojo</h3>
								<p>Developer</p>
								<ul class="social">
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single-team">
							<div class="img"><img src="assets/img/team/team2.jpg" class="img-fluid" alt=""></div>
							<div class="team-content">
								<h3>Ayoub Fennouni</h3>
								<p>Logo Expert</p>
								<ul class="social">
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single-team">
							<div class="img"><img src="assets/img/team/team3.jpg" class="img-fluid" alt=""></div>
							<div class="team-content">
								<h3>Mark Linomi</h3>
								<p>Marketer</p>
								<ul class="social">
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="single-team">
							<div class="img"><img src="assets/img/team/team4.jpg" class="img-fluid" alt=""></div>
							<div class="team-content">
								<h3>Amira Yerden</h3>
								<p>UI/UX Designer</p>
								<ul class="social">
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END TEAM -->

		<!-- START BLOG -->
		<section id="blog" class="blog_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h1>Latest blogs</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_blog">
							<div class="blog-img">
								<img src="assets/img/blog/1.jpg" class="img-fluid" alt="image" />
								<a href="single_blog.html">Dec 05, 2021</a>
							</div>
							<div class="blog_content">
								<h2><a href="single_blog.html">Autumn is a second spring when every leaf is a flower</a></h2>
								<p>Lorem ipsum dolor amet consectetur adipiscing elit justo neque aliquet sit amet elementum vel vehicula.</p>
								<a href="single_blog.html">Continue Reading -</a>
							</div>
						</div>
					</div><!-- END COL-->
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_blog">
							<div class="blog-img">
								<img src="assets/img/blog/2.jpg" class="img-fluid" alt="image" />
								<a href="single_blog.html">Dec 06, 2021</a>
							</div>
							<div class="blog_content">
								<h2><a href="single_blog.html">Never let your memories be greater than your dreams</a></h2>
								<p>Lorem ipsum dolor amet consectetur adipiscing elit justo neque aliquet sit amet elementum vel vehicula.</p>
								<a href="single_blog.html">Continue Reading -</a>
							</div>
						</div>
					</div><!-- END COL-->
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_blog">
							<div class="blog-img">
								<img src="assets/img/blog/3.jpg" class="img-fluid" alt="image" />
								<a href="single_blog.html">Dec 07, 2021</a>
							</div>
							<div class="blog_content">
								<h2><a href="single_blog.html">Self-observation is the first step of inner unfolding</a></h2>
								<p>Lorem ipsum dolor amet consectetur adipiscing elit justo neque aliquet sit amet elementum vel vehicula.</p>
								<a href="single_blog.html">Continue Reading -</a>
							</div>
						</div>
					</div><!-- END COL-->
				</div><!-- / END ROW -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END BLOG -->

		<!-- START CONTACT -->
		<section id="contact" class="contact_us section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h1>Write Your Message</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="row">
					<div class="col-lg-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact">
							<form class="form" name="enq" method="post" action="https://cheaphostings.net/html/tf/janemon-demo/janemon/contact.php" onsubmit="return validation();">
								<div class="row">
									<div class="form-group col-md-6">
										<input type="text" name="name" class="form-control" placeholder="Name" required="required">
									</div>
									<div class="form-group col-md-6">
										<input type="email" name="email" class="form-control" placeholder="Email" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
									</div>
									<div class="form-group col-md-12">
										<textarea rows="6" name="message" class="form-control" placeholder="Your Message" required="required"></textarea>
									</div>
									<div class="col-md-12 text-center">
										<button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-grad" title="Submit Your Message!">Click here to send</button>
									</div>
								</div>
							</form>
						</div>
					</div><!-- END COL  -->
					<div class="col-lg-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="address_bg">
							<div class="single_address">
								<div class="address_br"><span class="ti-location-pin"></span></div>
								<h4>Address</h4>
								<p>3481 Melrose Place, <br />Beverly Hills</p>
							</div>
							<div class="single_address">
								<div class="address_br"><span class="ti-mobile"></span></div>
								<h4>Phone</h4>
								<p>+512 513 96324</p>
							</div>
							<div class="single_address">
								<div class="address_br"><span class="ti-email"></span></div>
								<h4>Email</h4>
								<p>example@example.com</p>
							</div>
							<div class="single_address">
								<div class="address_br"><span class="ti-location-pin"></span></div>
								<h4>Working Hours</h4>
								<p>Mon to Sat 9:00am to 5:00pm</p>
							</div>
						</div>
					</div><!-- END COL  -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END CONTACT -->

		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_footer">
							<div class="footer_social_profile">
								<ul>
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Instagram</a></li>
									<li><a href="#">Pinterest</a></li>
									<li><a href="#">Tumblr</a></li>
								</ul>
							</div>
							<!--- END SOCIAL PROFILE -->
							<p class="copyright">Copyright &copy; 2021 | All Rights Reserved.</p>
						</div>
					</div>
					<!--- END COL -->
				</div>
				<!--- END ROW -->
			</div>
			<!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->

		<!-- Latest jQuery -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- owl-carousel min js  -->
		<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
		<!-- jquery nav -->
		<script src="assets/js/jquery.nav.js"></script>
		<!-- jquery.smooth-scroll -->
		<script src="assets/js/smooth-scroll.js"></script>
		<!-- countTo js -->
		<script src="assets/js/jquery.inview.min.js"></script>
		<!-- jquery appear js -->
		<script src="assets/js/jquery.appear.js"></script>
		<!-- jquery mixitup min js -->
		<script src="assets/js/jquery.mixitup.js"></script>
		<!-- jquery venobox min js -->
		<script src="assets/js/venobox.min.js"></script>
		<!-- stellar js -->
		<script src="assets/js/jquery.stellar.min.js"></script>
		<!-- particles -->
		<script src="assets/js/particles.min.js"></script>
		<script src="assets/js/app.js"></script>
		<!-- jquery animated-text js -->
		<script src="assets/js/animated-text.js"></script>
		<script src="assets/js/animated-text-dark.js"></script>
		<!-- WOW - Reveal Animations When You Scroll -->
		<script src="assets/js/wow.min.js"></script>
		<!-- scrolltopcontrol js -->
		<script src="assets/js/scrolltopcontrol.js"></script>
		<!-- scripts js -->
		<script src="assets/js/magic_mouse.js"></script>
		<script src="assets/js/scripts.js"></script>
		<script type="text/javascript">
			options = {
				"cursorOuter": "circle-basic",
				"hoverEffect": "circle-move",
				"hoverItemMove": false,
				"defaultCursor": false,
				"outerWidth": 30,
				"outerHeight": 30
			}
			magicMouse(options);
		</script>

	</body>

	<!-- Mirrored from cheaphostings.net/html/tf/janemon-demo/janemon/index-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 12:32:05 GMT -->

	</html>