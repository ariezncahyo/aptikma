<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<?php $seo=$seo_homepage->row(); $label=$label_homepage->row(); $services=$services_homepage->row(); ?>
	<meta name="author" content="Aptikma Studio" />
	<meta name="description" content="<?php echo $seo->meta_desc_id; ?>" />
	<meta name="keyword" content="<?php echo $seo->meta_keyword_id; ?>"/>
	<meta name="tag" content="<?php echo $seo->meta_tag_id; ?>"/>
	
	<!-- Don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $label->label_id; ?></title>
	<!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-152x152.png" />
	
	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/settings.css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mediaelementplayer.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css" type="text/css" media="all" />
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icon-fonts.css" type="text/css" media="all" />

	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		
</head>

<!-- Class ( site_boxed - dark - preloader1 - preloader2 - preloader3 - light_header - dark_sup_menu - menu_button_mode - transparent_header - header_on_side ) -->
<body class="preloader3 light_header">
<div id="preloader">
	<div class="spinner">
		<div class="sk-dot1"></div><div class="sk-dot2"></div>
		<div class="rect3"></div><div class="rect4"></div>
		<div class="rect5"></div>
	</div>
</div>

<div id="main_wrapper">
	<header id="site_header">	
	<div class="topbar"><!-- class ( topbar_colored  ) -->
			<div class="content clearfix">
			
				<div class="top_details clearfix f_left">
					<div class="languages-select languages-drop">
						<span><i class="ico-globe4"></i><span>English</span></span>
						<div class="languages-panel">
							<ul class="languages-panel-con">
								<li class="active"><a href="#">English <i class="ico-check lang_checked"></i></a></li>
								<li><a href="#">RTL</a></li>
							</ul>
						</div>
					</div>
					<span class="top_login">
						<i class="icon ico-key3"></i><a class="popup-with-move-anim" href="#login-popup">Login</a>
					</span>
					<div class="zoom-anim-dialog small-dialog mfp-hide login_popup" id="login-popup">
						<form class="login_form_colored">
							<div class="lfc_user_row">
								<span class="lfc_header">Login to your Account</span>
							</div>
							<div class="lfc_user_row">
								<label for="login_user_name">
									<span class="lfc_alert"></span>
									<i class="lfc_icon ico-user5"></i>
									<input type="text" name="login_user_name" id="login_user_name">
								</label>
							</div>
							<div class="lfc_user_row">
								<label for="login_password">
									<span class="lfc_alert"></span>
									<i class="lfc_icon ico-key3"></i>
									<input type="password" name="login_password" id="login_password">
								</label>	
							</div>
							<div class="lfc_user_row clearfix">
								<div class="my_col_half">
									<label for="rememberme">
										<span class="remember-box">
											<input type="checkbox" id="rememberme" name="rememberme">
											<span>Remember me</span>
										</span>
									</label>
								</div>
								<div class="my_col_half clearfix">
									<button type="submit" name="login" class="send_button f_right upper">
										Sign in
									</button>
								</div>
							</div>
							<a class="lfc_forget_pass" href="#">Forgot Your Password?</a>
						</form>
					</div>
					<span><i class="icon ico-phone5"></i><span class="title">Call Us :</span> (123) 456 - 7890</span>
					<span><i class="icon ico-comment2"></i><span class="title">Support :</span> (123) 456 - 7890</span>
				</div>
			        
				<div class="top-socials box_socials f_right">
					<a href="#" target="_blank">
						<span class="soc_name">Facebook</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-facebook4"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Twitter</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-twitter4"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Google+</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-google-plus"></i>
					</a>     
					<a href="skype:#?call">
						<span class="soc_name">Skype</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-skype"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Picassa</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-picassa"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Vimeo</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-vimeo"></i>
					</a>
				 </div>
			</div>
			<!-- End content -->
			<span class="top_expande not_expanded">
				<i class="no_exp ico-angle-double-down"></i>
				<i class="exp ico-angle-double-up"></i>
			</span>
		</div>		
		<div id="navigation_bar">
			<div class="content">
				<div id="logo">
					<a href="index.php">
						<img class="logo_dark" src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="Enar Logo">
						<img class="logo_light" src="<?php echo base_url(); ?>assets/images/logo-light.png" alt="Enar Logo">
					</a>
				</div>
				
				<!-- Top Search -->
				<!--form class="top_search clearfix small_top_search">
					<div class="top_search_con">
						<input type="text" class="s" placeholder="Search Here ...">
						<span class="top_search_icon"><i class="ico-search4"></i></span>
						<input type="submit" class="top_search_submit" >
					</div>
				</form>
				<!-- End Top Search -->
				<nav id="main_nav">
					<div id="nav_menu">
						<span class="mobile_menu_trigger">
						    <a href="#" class="nav_trigger"><span></span></a>
						</span>		
						<ul id="navy" class="clearfix">
							<li class="normal_menu mobile_menu_toggle current_page_item">
								<a href="index.php"><span>Home</span></a>
								<!--ul>
									<li class="normal_menu"><a href="index.html">Home Page V1</a></li>
									<li class="normal_menu"><a href="index2.html">Home Page V2</a></li>
									<li class="normal_menu"><a href="index3.html">Home Page V3</a></li>
									<li class="normal_menu"><a href="index4.html">Home Page V4</a></li>
									<li class="normal_menu"><a href="index5.html">Home Page V5</a></li>
									<li class="normal_menu"><a href="index-one-page1.html">Home One Page </a>
										<ul>
											<li class="normal_menu"><a href="index-one-page1.html">Home One Page V1</a></li>
											<li class="normal_menu"><a href="index-one-page2.html">Home One Page V2</a></li>
										</ul>
									</li>
									<li class="normal_menu"><a href="index-blog-timeline.html">Home Blog </a>
										<ul>
											<li class="normal_menu"><a href="index-blog-timeline.html">Home Blog Timeline</a></li>
											<li class="normal_menu"><a href="index-blog-masonry.html">Home Blog Masonry</a></li>
											<li class="normal_menu"><a href="index-blog-list.html">Home Blog List</a></li>
											<li class="normal_menu"><a href="index-blog-standard.html">Home Blog Standard</a></li>
										</ul>
									</li>
									
									<li class="normal_menu"><a href="index-header-side.html">Home With Side Menu</a>
										<ul>
											<li class="normal_menu"><a href="index-header-side-boxed.html">Home Boxed With Side Menu</a></li>
											<li class="normal_menu"><a href="index-header-side.html">Home Full With Side Menu</a></li>
										</ul>
									</li>
									
									<li class="normal_menu"><a href="index-header-transparent-dark.html">Home Transparent Header</a>
										<ul>
											<li class="normal_menu"><a href="index-header-transparent-dark.html">Home Transparent Dark</a></li>
											<li class="normal_menu"><a href="index-header-transparent-light.html">Home Transparent Light</a></li>
										</ul>
									</li>
									<li class="normal_menu"><a href="index-menu-button-mode.html">Home Menu Button Mode</a></li>
								</ul-->
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="#"><span>Tentang Kami</span></a>
								<!--ul>
									<li class="normal_menu"><a href="page-about-us.html">About Us</a></li>
									<li class="normal_menu"><a href="page-about-me.html">About Me</a></li>
									<li class="normal_menu"><a href="page-team-members.html">Team Members</a></li>
									<li class="normal_menu"><a href="page-services.html">Services</a></li>
									<li class="normal_menu"><a href="#">Portfolio</a>
										<ul>
											<li class="normal_menu"><a href="#">Portfolio Filter</a>
												<ul>
													<li class="normal_menu"><a href="#">Filter Style 1</a>
														<ul>
															<li class="normal_menu"><a href="portfolio-style1-3column-boxed.html">Three Columns Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-style1-3column-boxed-nospaces.html">Three Columns Boxed2</a></li>
															<li class="normal_menu"><a href="portfolio-style1-3column-fullwidth.html">Three Columns Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-style1-3column-fullwidth-nospaces.html">Three Columns Fullwidth2</a></li>
															
															<li class="normal_menu"><a href="portfolio-style1-4column-boxed.html">Four Columns Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-style1-4column-boxed-nospaces.html">Four Columns Boxed2</a></li>
															<li class="normal_menu"><a href="portfolio-style1-4column-fullwidth.html">Four Columns Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-style1-4column-fullwidth-nospaces.html">Four Columns Fullwidth2</a></li>
															
															<li class="normal_menu"><a href="portfolio-style1-2column-boxed.html">Two Columns Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-style1-2column-boxed-nospaces.html">Two Columns Boxed2</a></li>
															<li class="normal_menu"><a href="portfolio-style1-2column-fullwidth.html">Two Columns Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-style1-2column-fullwidth-nospaces.html">Two Columns Fullwidth2</a></li>
														</ul>
													</li>
													<li class="normal_menu"><a href="#">Filter Style 2</a>
														<ul>
															<li class="normal_menu"><a href="portfolio-style2-3column-boxed.html">Three Columns Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-style2-3column-boxed-nospaces.html">Three Columns Boxed2</a></li>
															<li class="normal_menu"><a href="portfolio-style2-3column-fullwidth.html">Three Columns Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-style2-3column-fullwidth-nospaces.html">Three Columns Fullwidth2</a></li>
															
															<li class="normal_menu"><a href="portfolio-style2-4column-boxed.html">Four Columns Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-style2-4column-boxed-nospaces.html">Four Columns Boxed2</a></li>
															<li class="normal_menu"><a href="portfolio-style2-4column-fullwidth.html">Four Columns Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-style2-4column-fullwidth-nospaces.html">Four Columns Fullwidth2</a></li>
															
															<li class="normal_menu"><a href="portfolio-style2-2column-boxed.html">Two Columns Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-style2-2column-boxed-nospaces.html">Two Columns Boxed2</a></li>
															<li class="normal_menu"><a href="portfolio-style2-2column-fullwidth.html">Two Columns Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-style2-2column-fullwidth-nospaces.html">Two Columns Fullwidth2</a></li>
														</ul>
													</li>
													<li class="normal_menu"><a href="#">Filter Style 3</a>
														<ul>
															<li class="normal_menu"><a href="portfolio-style3-3column-boxed.html">Three Columns Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-style3-3column-boxed-nospaces.html">Three Columns Boxed2</a></li>
															<li class="normal_menu"><a href="portfolio-style3-3column-fullwidth.html">Three Columns Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-style3-3column-fullwidth-nospaces.html">Three Columns Fullwidth2</a></li>
															
															<li class="normal_menu"><a href="portfolio-style3-4column-boxed.html">Four Columns Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-style3-4column-boxed-nospaces.html">Four Columns Boxed2</a></li>
															<li class="normal_menu"><a href="portfolio-style3-4column-fullwidth.html">Four Columns Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-style3-4column-fullwidth-nospaces.html">Four Columns Fullwidth2</a></li>
															
															<li class="normal_menu"><a href="portfolio-style3-2column-boxed.html">Two Columns Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-style3-2column-boxed-nospaces.html">Two Columns Boxed2</a></li>
															<li class="normal_menu"><a href="portfolio-style3-2column-fullwidth.html">Two Columns Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-style3-2column-fullwidth-nospaces.html">Two Columns Fullwidth2</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="normal_menu"><a href="#">Portfolio Masonry</a>
												<ul>
													<li class="normal_menu"><a href="#">Masonry Style 1</a>
														<ul>
															<li class="normal_menu"><a href="portfolio-masonry-style1-fullwidth.html">Masonry Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-masonry-style1-boxed.html">Masonry Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-masonry-style1-columns.html">Masonry Columns</a></li>
														</ul>
													</li>
											    
													<li class="normal_menu"><a href="#">Masonry Style 2</a>
														<ul>
															<li class="normal_menu"><a href="portfolio-masonry-style2-fullwidth.html">Masonry Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-masonry-style2-boxed.html">Masonry Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-masonry-style2-columns.html">Masonry Columns</a></li>
														</ul>
													</li>
													<li class="normal_menu"><a href="#">Masonry Style 3</a>
														<ul>
															<li class="normal_menu"><a href="portfolio-masonry-style3-fullwidth.html">Masonry Fullwidth</a></li>
															<li class="normal_menu"><a href="portfolio-masonry-style3-boxed.html">Masonry Boxed</a></li>
															<li class="normal_menu"><a href="portfolio-masonry-style3-columns.html">Masonry Columns</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="normal_menu"><a href="#">Portfolio Single</a>
												<ul>
													<li class="normal_menu"><a href="portfolio-single-gallery.html">Photo Gallery</a></li>
													<li class="normal_menu"><a href="portfolio-single-video.html">Video Project</a></li>
													<li class="normal_menu"><a href="portfolio-single-image.html">Image Project</a></li>
													<li class="normal_menu"><a href="portfolio-single-sound.html">Audio Project</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="normal_menu"><a href="page-contact-us.html">Contact Us</a></li>
									<li class="normal_menu"><a href="page-faq.html">FAQ</a></li>
									<li class="normal_menu"><a href="page-careers.html">Careers</a></li>
									<li class="normal_menu"><a href="page-404.html">404</a></li>
									<li class="normal_menu"><a href="page-coming-soon.html">Coming Soon</a></li>
									<li class="normal_menu"><a href="page-under-construction.html">Under Structure</a></li>
									<li class="normal_menu"><a href="page-sitemap.html">sitemap</a></li>
									<li class="normal_menu">
										<a href="page-login-register.html">Register/Login</a>
										<ul>
											<li class="normal_menu">
												<a href="page-login-register.html">Register/Login Style 1</a>
											</li>
											<li class="normal_menu">
												<a href="page-login-register2.html">Register/Login Style 2</a>
											</li>
										</ul>
									</li>
									<li class="normal_menu"><a href="portfolio-single-gallery.html">Project Details</a></li>
									<li class="normal_menu"><a href="#"><span class="menu_special_color">More Pages Soon ...</span></a></li>
								</ul-->
							</li>
							<li class="normal_menu mobile_menu_toggle">
							    <a href="#"><span>Layanan</span></a>
								<!--ul>
									<li class="normal_menu"><a href="slider-revolution-fullwidth.html"><i class="menu_icon ico-heart4"></i>Revolution Slider</a>
										<ul>
											<li class="normal_menu"><a href="slider-revolution-fullscreen.html">Fullscreen</a></li>
											<li class="normal_menu"><a href="slider-revolution-fullwidth.html">Full Width</a></li>
											<li class="normal_menu"><a href="slider-revolution-boxed-fullwidth.html">Boxed FullWidth</a></li>
											<li class="normal_menu"><a href="slider-revolution-boxed-fullscreen.html">Boxed FullScreen</a></li>
											<li class="normal_menu"><a href="slider-revolution-panzoom-fullscreen.html">Panzoom FullScreen</a></li>
											<li class="normal_menu"><a href="slider-revolution-panzoom-fullwidth.html">Panzoom FullWidth</a></li>
											<li class="normal_menu"><a href="slider-revolution-html-video-fullwidth.html">HTML5 Video FullWidth</a></li>
											<li class="normal_menu"><a href="slider-revolution-html-video-fullscreen.html">HTML5 Video FullScreen</a></li>
										</ul>
									</li>
									<li class="normal_menu"><a href="slider-flex-fullwidth.html"><i class="menu_icon  ico-image4"></i>Flex slider</a>
										<ul>
											<li class="normal_menu"><a href="slider-flex-fullwidth.html">Full Width</a></li>
											<li class="normal_menu"><a href="slider-flex-boxed.html">Boxed Width</a></li>
											<li class="normal_menu"><a href="slider-flex-fullwidth-without-thumbs.html">Full Width No Thumbs</a></li>
											<li class="normal_menu"><a href="slider-flex-boxed-without-thumbs.html">Boxed Width No Thumbs</a></li>
										</ul>
									</li>
									<li class="normal_menu"><a href="slider-owl-default.html"><i class="menu_icon ico-eye4"></i>Owl slider</a>
										<ul>
											<li class="normal_menu"><a href="slider-owl-default.html">Defailt Slider</a></li>
											<li class="normal_menu"><a href="slider-owl-portfolio.html">Portfolio Slider</a></li>
											<li class="normal_menu"><a href="slider-owl-features.html">Features Slider</a></li>
											<li class="normal_menu"><a href="slider-owl-text.html">Text Slider</a></li>
											<li class="normal_menu"><a href="slider-owl-products.html">Products Slider</a></li>
											<li class="normal_menu"><a href="slider-owl-gallery.html">Gallery Slider</a></li>    
										</ul>
									</li>
									<li class="normal_menu"><a href="slider-camera-fullwidth.html"><i class="menu_icon ico-camera4"></i>Camera Slider</a>
										<ul>
											<li class="normal_menu"><a href="slider-camera-fullwidth.html">Full Width</a></li>
											<li class="normal_menu"><a href="slider-camera-fullwidth-with-thums.html">Full Width Thumbs</a></li>
										</ul>
									</li>
									<li class="normal_menu"><a href="slider-scattered.html"><i class="menu_icon ico-monitor2"></i>Scattered Slider</a></li>
									<li class="normal_menu"><a href="slider-wobbly.html"><i class="menu_icon ico-trophy3"></i>Wobbly Slider</a></li>
									<li class="normal_menu">
										<a href="#"><i class="menu_icon ico-store"></i>Four Boxes Slider</a>
										<ul>
											<li class="normal_menu"><a href="slider-four-boxes-effect-1.html">Effect 1</a></li>
											<li class="normal_menu"><a href="slider-four-boxes-effect-2.html">Effect 2</a></li>
											<li class="normal_menu"><a href="slider-four-boxes-effect-3.html">Effect 3</a></li>
										</ul>
									</li>
									<li class="normal_menu"><a href="#"><span class="menu_special_color">More Sliders Soon ...</span></a></li>
								</ul-->
							</li>
							<!--li class="has_mega_menu mobile_menu_toggle">
							    <a href="#"><span>Shortcodes</span></a>
							    <ul class="mega_menu">
								<li>
									<a href="#">Sliders</a>
									<ul class="mega_menu_in clearfix">
										<li>
											<a href="#">Revolution slider</a>
											<ul class="clearfix">
												<li>
													<a href="#">Default</a>
													<ul class="clearfix">
														<li><a href="slider-revolution-fullscreen.html">Default Fullscreen</a></li>
														<li><a href="slider-revolution-fullwidth.html">Default Full Width</a></li>
													</ul>
												</li>
												<li>
													<a href="#">Boxed</a>
													<ul class="clearfix">
														<li><a href="slider-revolution-boxed-fullwidth.html">Boxed FullWidth</a></li>
														<li><a href="slider-revolution-boxed-fullscreen.html">Boxed FullScreen</a></li>
													</ul>
												</li>
												<li>
													<a href="#">Panzoom</a>
													<ul class="clearfix">
														<li><a href="slider-revolution-panzoom-fullscreen.html">Panzoom FullScreen</a></li>
														<li><a href="slider-revolution-panzoom-fullwidth.html">Panzoom FullWidth</a></li>
													</ul>
												</li>
												<li>
													<a href="#">HTML5 Video</a>
													<ul class="clearfix">
														<li><a href="slider-revolution-html-video-fullwidth.html">HTML5 Video FullWidth</a></li>
														<li><a href="slider-revolution-html-video-fullscreen.html">HTML5 Video FullScreen</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Flex slider</a>
											<ul class="clearfix">
												<li>
													<a href="slider-flex-fullwidth.html">Full Width</a>
												</li>
												<li>
													<a href="slider-flex-boxed.html ">Boxed Width</a>
												</li>
												<li>
													<a href="slider-flex-fullwidth-without-thumbs.html">Full Width No Thumbs</a>
												</li>
												<li>
													<a href="slider-flex-boxed-without-thumbs.html">Boxed Width No Thumbs</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Owl slider</a>
											<ul class="clearfix">
												<li>
													<a href="slider-owl-default.html">Defailt Slider</a>
												</li>
												<li>
													<a href="slider-owl-portfolio.html">Portfolio Slider</a>
												</li>
												<li>
													<a href="slider-owl-features.html">Features Slider</a>
												</li>
												<li>
													<a href="slider-owl-text.html">Text Slider</a>
												</li>
												<li>
													<a href="slider-owl-products.html">Products Slider</a>
												</li>
												<li>
													<a href="slider-owl-gallery.html">Gallery Slider</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="slider-scattered.html">Scattered Slider</a>
										</li>
										<li>
											<a href="#">Four Boxes Slider</a>
											<ul class="clearfix">
												<li>
													<a href="slider-four-boxes-effect-1.html">Effect 1</a>
												</li>
												<li>
													<a href="slider-four-boxes-effect-2.html">Effect 2</a>
												</li>
												<li>
													<a href="slider-four-boxes-effect-3.html">Effect 3</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="slider-wobbly.html">Wobbly Slider</a>
										</li>
										<li>
											<a href="#">Camera Slider</a>
											<ul class="clearfix">
												<li>
													<a href="slider-camera-fullwidth.html">Full Width</a>
												</li>
												<li>
													<a href="slider-camera-fullwidth-with-thums.html">Full Width Thumbs</a>
												</li>
											</ul>
										</li>
									</ul>
								    
								</li>
								<li>
									<a href="#">Shortcodes Group 1</a>
									<ul class="mega_menu_in clearfix">
										<li><a href="elements-background-video.html">video Background</a></li>
										<li><a href="elements-accordion.html">Accordion</a></li>
										<li><a href="elements-tabs.html">Tabs</a></li>
										<li><a href="elements-banner-text.html">Banner Text</a></li>
										<li><a href="elements-titles-and-headings.html">Titles and Headings</a></li>
										<li><a href="elements-pies-and-skills.html">Pies & Skills</a></li>
										<li><a href="elements-team.html">Team</a></li>
									</ul>
								</li>
					    
								<li>
									<a href="#">Shortcodes Group 2</a>
									<ul class="mega_menu_in clearfix">
										<li><a href="elements-testimonials.html">Testimonials</a></li>
										<li><a href="elements-clients.html">Clients</a></li>
										<li><a href="elements-counters.html">Counters</a></li>
										<li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
										<li><a href="elements-carousel.html">Carousel</a></li>
										<li><a href="elements-buttons.html">Buttons</a></li>
										<li><a href="elements-maps.html">Google Maps</a></li>
									</ul>
								</li>
					    
								<li>
									<a href="#">Shortcodes Group 3</a>
									<ul class="mega_menu_in clearfix">
										<li><a href="elements-galleries.html">Galleries</a></li>
										<li><a href="elements-tooltip.html">Tooltip</a></li>
										<li><a href="elements-tables.html">Tables</a></li>
										<li><a href="elements-charts.html">Charts</a></li>
										<li><a href="elements-lightbox.html">Lightbox</a></li>
										<li><a href="elements-pricing-tables.html">Pricing Tables</a></li>
										<li><a href="elements-features.html">Features</a></li>
									</ul>
								</li>
							    </ul>	
							</li-->
							<li class="has_tab_menu mobile_menu_toggle">
								<a href="#"><span>Portfolio</span></a>
								<!--ul class="tab_menu clearfix">
									<li class="tab_menu_con">
										<ul class="tab_menu_list">
											<li class="tab_menu_item active">
												<a href="#"><i class="menu_icon ico-image4"></i>Filter 2 Columns</a>
												<ul class="mega_menu">
													<li><a href="#">Style 1</a>
														<ul>
															<li><a href="portfolio-style1-2column-boxed.html">Two Columns Boxed</a></li>
															<li><a href="portfolio-style1-2column-boxed-nospaces.html">Two Columns Boxed2</a></li>
															<li><a href="portfolio-style1-2column-fullwidth.html">Two Columns Fullwidth</a></li>
															<li><a href="portfolio-style1-2column-fullwidth-nospaces.html">Two Columns Fullwidth2</a></li>
														</ul>
													</li>
													<li><a href="#">Style 2</a>
														<ul>
															<li><a href="portfolio-style2-2column-boxed.html">Two Columns Boxed</a></li>
															<li><a href="portfolio-style2-2column-boxed-nospaces.html">Two Columns Boxed2</a></li>
															<li><a href="portfolio-style2-2column-fullwidth.html">Two Columns Fullwidth</a></li>
															<li><a href="portfolio-style2-2column-fullwidth-nospaces.html">Two Columns Fullwidth2</a></li>														
														</ul>
													</li>
													<li><a href="#">Style 3</a>
														<ul>
															<li><a href="portfolio-style3-2column-boxed.html">Two Columns Boxed</a></li>
															<li><a href="portfolio-style3-2column-boxed-nospaces.html">Two Columns Boxed2</a></li>
															<li><a href="portfolio-style3-2column-fullwidth.html">Two Columns Fullwidth</a></li>
															<li><a href="portfolio-style3-2column-fullwidth-nospaces.html">Two Columns Fullwidth2</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="tab_menu_item">
												<a href="#"><i class="menu_icon ico-portfolio"></i>Filter 3 Columns</a>
												<ul class="mega_menu">
													<li><a href="#">Style 1</a>
														<ul>
															<li><a href="portfolio-style1-3column-boxed.html">Three Columns Boxed</a></li>
															<li><a href="portfolio-style1-3column-boxed-nospaces.html">Three Columns Boxed2</a></li>
															<li><a href="portfolio-style1-3column-fullwidth.html">Three Columns Fullwidth</a></li>
															<li><a href="portfolio-style1-3column-fullwidth-nospaces.html">Three Columns Fullwidth2</a></li>
														</ul>
													</li>
													<li><a href="#">Style 2</a>
														<ul>
															<li><a href="portfolio-style2-3column-boxed.html">Three Columns Boxed</a></li>
															<li><a href="portfolio-style2-3column-boxed-nospaces.html">Three Columns Boxed2</a></li>
															<li><a href="portfolio-style2-3column-fullwidth.html">Three Columns Fullwidth</a></li>
															<li><a href="portfolio-style2-3column-fullwidth-nospaces.html">Three Columns Fullwidth2</a></li>														
														</ul>
													</li>
													<li><a href="#">Style 3</a>
														<ul>
															<li><a href="portfolio-style3-3column-boxed.html">Three Columns Boxed</a></li>
															<li><a href="portfolio-style3-3column-boxed-nospaces.html">Three Columns Boxed2</a></li>
															<li><a href="portfolio-style3-3column-fullwidth.html">Three Columns Fullwidth</a></li>
															<li><a href="portfolio-style3-3column-fullwidth-nospaces.html">Three Columns Fullwidth2</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="tab_menu_item">
												<a href="#"><i class="menu_icon ico-grid3"></i>Filter 4 Columns</a>
												<ul class="mega_menu">
													<li><a href="#">Style 1</a>
														<ul>
															<li><a href="portfolio-style1-4column-boxed.html">Four Columns Boxed</a></li>
															<li><a href="portfolio-style1-4column-boxed-nospaces.html">Four Columns Boxed2</a></li>
															<li><a href="portfolio-style1-4column-fullwidth.html">Four Columns Fullwidth</a></li>
															<li><a href="portfolio-style1-4column-fullwidth-nospaces.html">Four Columns Fullwidth2</a></li>
														</ul>
													</li>
													<li><a href="#">Style 2</a>
														<ul>
															<li><a href="portfolio-style2-4column-boxed.html">Four Columns Boxed</a></li>
															<li><a href="portfolio-style2-4column-boxed-nospaces.html">Four Columns Boxed2</a></li>
															<li><a href="portfolio-style2-4column-fullwidth.html">Four Columns Fullwidth</a></li>
															<li><a href="portfolio-style2-4column-fullwidth-nospaces.html">Four Columns Fullwidth2</a></li>
														</ul>
													</li>
													<li><a href="#">Style 3</a>
														<ul> 
															<li><a href="portfolio-style3-4column-boxed.html">Four Columns Boxed</a></li>
															<li><a href="portfolio-style3-4column-boxed-nospaces.html">Four Columns Boxed2</a></li>
															<li><a href="portfolio-style3-4column-fullwidth.html">Four Columns Fullwidth</a></li>
															<li><a href="portfolio-style3-4column-fullwidth-nospaces.html">Four Columns Fullwidth2</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="tab_menu_item">
												<a href="#"><i class="menu_icon ico-screen"></i>Portfolio Masonry</a>
												<ul class="mega_menu">
													<li><a href="#">Masonry Style 1</a>
														<ul>
															<li><a href="portfolio-masonry-style1-fullwidth.html">Masonry Fullwidth</a></li>
															<li><a href="portfolio-masonry-style1-boxed.html">Masonry Boxed</a></li>
															<li><a href="portfolio-masonry-style1-columns.html">Masonry Columns</a></li>
														</ul>
													</li>
			                   
													<li><a href="#">Masonry Style 2</a>
														<ul>
															<li><a href="portfolio-masonry-style2-fullwidth.html">Masonry Fullwidth</a></li>
															<li><a href="portfolio-masonry-style2-boxed.html">Masonry Boxed</a></li>
															<li><a href="portfolio-masonry-style2-columns.html">Masonry Columns</a></li>														</ul>
													</li>
													<li><a href="#">Masonry Style 3</a>
														<ul>
															<li><a href="portfolio-masonry-style3-fullwidth.html">Masonry Fullwidth</a></li>
															<li><a href="portfolio-masonry-style3-boxed.html">Masonry Boxed</a></li>
															<li><a href="portfolio-masonry-style3-columns.html">Masonry Columns</a></li>														</ul>
													</li>
												</ul>
											</li>
											<li class="tab_menu_item">
												<a href="#"><i class="menu_icon ico-task"></i>Portfolio Single</a>
												<ul class="mega_menu">
													<li><a href="#">Single Pages</a>
														<ul>
															<li><a href="portfolio-single-gallery.html">Photo Gallery</a></li>
															<li><a href="portfolio-single-video.html">Video Project</a></li>
															<li><a href="portfolio-single-image.html">Image Project</a></li>
															<li><a href="portfolio-single-sound.html">Audio Project</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="tab_menu_item">
											    <a href="#"><i class="menu_icon ico-gallery"></i>Portfolio Carousel</a>
												<ul class="image_menu">													<li class="image_menu_slide">
														<div class="img_menu_i">
															<a href="#">
																<img src="images/portfolio/porto1.jpg" alt="Project Name" >
																<span>Project Name</span>
															</a>
														</div>
														<div class="img_menu_i">
															<a href="#">
																<img src="images/portfolio/porto2.jpg" alt="Project Name" >
																<span>Project Name</span>
															</a>
														</div>
														<div class="img_menu_i">
															<a href="#">
																<img src="images/portfolio/porto3.jpg" alt="Project Name" >
																<span>Project Name</span>
															</a>
														</div>
														<div class="img_menu_i">
															<a href="#">
																<img src="images/portfolio/porto4.jpg" alt="Project Name" >
																<span>Project Name</span>
															</a>
														</div>
														<div class="img_menu_i">
															<a href="#">
																<img src="images/portfolio/porto5.jpg" alt="Project Name" >
																<span>Project Name</span>
															</a>
														</div>
														<div class="img_menu_i">
															<a href="#">
																<img src="images/portfolio/porto6.jpg" alt="Project Name" >
																<span>Project Name</span>
															</a>
														</div>
													</li>
												</ul>
											</li>
											
											<li class="tab_menu_item">
												<a href="#"><i class="menu_icon ico-menu2"></i>About Our Portfolio</a>
												<ul class="html_content_menu">
													<li>
														<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour of this randomised words which don't look even slightly believable If you are going to use a passage of Lorem Ipsum passages of Lorem Ipsum available, but the majority have suffered.</p>
														<p>passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour of this randomised words which don't look even slightly believable If you are going to use a passage of Lorem Ipsum you are going to use a passage of Lorem Ipsum.</p>
													</li>
												</ul>
											</li> 
										</ul>
									</li>
								</ul-->
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="#"><span>Kontak</span></a>
								<!--ul>
									<li class="normal_menu">
										<a href="blog-single-gallery.html">Blog Single Post</a>
										<ul>
											<li class="normal_menu"><a href="blog-single-image.html">Standard Post</a></li>
											<li class="normal_menu"><a href="blog-single-gallery.html">Gallery Post</a></li>
											<li class="normal_menu"><a href="blog-single-vimeo-video.html">Vimeo Video Post</a></li>
											<li class="normal_menu"><a href="blog-single-youtube-video.html">Youtube Video Post</a></li>
											<li class="normal_menu"><a href="blog-single-self-hosted-video.html">Self Hosted Video Post</a></li>
											<li class="normal_menu"><a href="blog-single-soundcloud-audio.html">SoundCloud Audio Post</a></li>
											<li class="normal_menu"><a href="blog-single-self-hosted-audio.html">Self Hosted Audio Post</a></li>
											<li class="normal_menu"><a href="blog-single-quote.html">Blockquote post</a></li>
											<li class="normal_menu"><a href="blog-single-sidebar-right.html">Sidebar Right</a></li>
											<li class="normal_menu"><a href="blog-single-sidebar-left.html">Sidebar Left</a></li>
											<li class="normal_menu"><a href="blog-single-fullwidth.html">Full Width</a></li>
										</ul>
									</li>
									<li class="normal_menu">
										<a href="blog-masonry-colored.html">Blog Masonry</a>
										<ul>
											<li class="normal_menu"><a href="blog-masonry-colored.html">colored columns</a></li>
											<li class="normal_menu"><a href="blog-masonry-simple.html">simple columns</a></li>
											<li class="normal_menu"><a href="blog-masonry-colored-fullwidth-three-columns.html">full three columns</a></li>
											<li class="normal_menu"><a href="blog-masonry-colored-fullwidth-four-columns.html">full four columns</a></li>
											<li class="normal_menu"><a href="blog-masonry-colored-boxed-three-columns.html">boxed three columns</a></li>
											<li class="normal_menu"><a href="blog-masonry-colored-boxed-four-columns.html">boxed four columns</a></li>
											<li class="normal_menu"><a href="blog-masonry-colored-boxed-two-columns.html">boxed two columns</a></li>
											<li class="normal_menu"><a href="blog-masonry-colored-boxed-sidebar-right.html">boxed sidebar right</a></li>
											<li class="normal_menu"><a href="blog-masonry-colored-boxed-sidebar-left.html">boxed sidebar left</a></li>
											
										</ul>
									</li>
									<li class="normal_menu">
										<a href="blog-list.html">Blog List </a>
										<ul>
											<li class="normal_menu"><a href="blog-list.html"> full width</a></li>
											<li class="normal_menu"><a href="blog-list-sidebar-right.html">sidebar right</a></li>
											<li class="normal_menu"><a href="blog-list-sidebar-left.html">sidebar left</a></li>
										</ul>
									</li>
									<li class="normal_menu"><a href="blog-timeline.html">Blog Timeline</a></li>
									<li class="normal_menu">
										<a href="blog-standard-sidebar-right.html">Blog Standard</a>
										<ul>
											<li class="normal_menu"><a href="blog-standard-fullwidth.html">full width</a></li>
											<li class="normal_menu"><a href="blog-standard-sidebar-left.html">sidebar left</a></li>
											<li class="normal_menu"><a href="blog-standard-sidebar-right.html">sidebar right</a></li>
										</ul>
									</li>
									<li class="normal_menu"><a href="blog-carousel.html">Blog Carousel</a></li>
									<li class="normal_menu"><a href="blog-grid.html">Blog Grids</a></li>
								</ul-->
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="#"><span>Blog</span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="#"><span>Karir</span></a>
							</li>
						</ul>
					</div>
				</nav>
				<!-- End Nav -->	
				
				<div class="clear"></div>
			</div>
		</div>
 	</header>
        <!-- End Main Header -->	
	
	<!-- Slider Revolution -->
	<div class="tp-banner-container">
		<div class="tp-banner-panzoom-fullscreen" >
			<ul>
				<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo base_url(); ?>assets/images/sliders/homeslider_thum1.jpg" data-delay="13000"  data-saveperformance="off"  data-title="Slide Title">
					<!-- MAIN IMAGE -->
					<img src="<?php echo base_url(); ?>assets/images/sliders/rev_bg1.jpg"  alt="kenburns1"  data-bgposition="top right" data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="150" data-bgpositionend="bottom left">
					<!-- LAYERS -->
					
					<div class="tp-caption oswald_font ren_num_a sfb fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="-150"
						data-speed="1000"
						data-start="1400"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
						1
					</div>
					<!-- LAYER NR. 1 -->
					<div class="tp-caption oswald_font upper reddishbg_heavy_80 lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="-55"
						data-speed="1000"
						data-start="800"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						Enar
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption oswald_font upper reddishbg_heavy_70 lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="30"
						data-speed="1000"
						data-start="1000"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						100% Responsive
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption reddishbg_heavy_30 italic lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="105"
						data-speed="1000"
						data-start="1200"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						Full Responsive Multipurpose HTML5 Template
					</div>
				</li>
				
				<!-- SLIDE  -->
				<li data-transition="slideleft" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo base_url(); ?>assets/images/sliders/homeslider_thum3.jpg" data-delay="15000"  data-saveperformance="off"  data-title="Slide Title">
					<!-- MAIN IMAGE -->
					<img src="<?php echo base_url(); ?>assets/images/sliders/rev_bg3.jpg"  alt="kenburns3"  data-bgposition="left top" data-kenburns="on" data-duration="16000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100" data-bgpositionend="left top">
					<!-- LAYERS -->
					
					<div class="tp-caption oswald_font ren_num_a sfb fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="-150"
						data-speed="1000"
						data-start="1400"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
						2
					</div>
					<!-- LAYER NR. 1 -->
					<div class="tp-caption oswald_font upper reddishbg_heavy_80 lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="-55"
						data-speed="1000"
						data-start="800"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						Quality
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption oswald_font upper reddishbg_heavy_70 lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="30"
						data-speed="1000"
						data-start="1000"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						Creative Unique Design
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption reddishbg_heavy_30 italic lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="105"
						data-speed="1000"
						data-start="1200"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						Super Design - Clean Code  - Creative Theme
					</div>
				</li>
				<!-- SLIDE  -->
				<li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo base_url(); ?>assets/images/sliders/homeslider_thum4.jpg" data-delay="15000"  data-saveperformance="off"  data-title="Slide Title">
					<!-- MAIN IMAGE -->
					<img src="<?php echo base_url(); ?>assets/images/sliders/rev_bg4.jpg"  alt="kenburns4"  data-bgposition="right bottom" data-kenburns="on" data-duration="16000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100" data-bgpositionend="left top">
					<!-- LAYERS -->
			
					<!-- LAYER NR. 2 -->
					<div class="tp-caption white_heavy_70 oswald_font tp-fade fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="-60"
						data-speed="500"
						data-start="500"
						data-easing="Power4.easeOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.05"
						data-endelementdelay="0.05"
						data-endspeed="300"
						data-endeasing="Power1.easeOut"
						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">OUR FREEDOM
					</div>
			
					<!-- LAYER NR. 4 -->
					<div class="tp-caption light_medium_20 tp-fade fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="50"
						data-speed="600"
						data-start="800"
						data-easing="Power4.easeOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="600"
						data-endeasing="Power1.easeOut"
						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">&ldquo;Freedom is not worth having if it does not include<br/> the freedom to make mistakes.&rdquo; <br/>
			&mdash; Mahatma Gandhi
					</div>
				</li>
			</ul>
			<div class="tp-bannertimer"></div>	
		</div>
	</div>
	<!-- End Slider Revolution -->
	
	<!-- Intro Banner -->
	<div class="welcome_banner full_gray" style="background: #324545;">
		<div class="content clearfix">
			<h3><?php $label=$label_homepage->next_row(); echo $label->label_id; ?></h3>
			<a href="#" target="_self" class="btn_a f_right">
			    <span><i class="in_left ico-cart"></i><span><?php $label=$label_homepage->next_row(); echo $label->label_id; ?></span><i class="in_right ico-cart"></i></span>
			</a>
		</div>
	</div>  
	<!-- End Intro Banner -->
	
	<!-- Icon Boxes Style 1 F -->
	<section class="content_section bg_gray">
		<div class="container icons_spacer icon_boxes_con style1 img_icon_box just_icon_border upper_title centered clearfix">
			<div class="col-md-4">
				<div class="service_box">
					<span class="icon circle"><img src="<?php echo base_url(); ?>assets/images/icons/browser.png" alt="Super Coding"></span>
					<div class="service_box_con">
						<h3><?php echo $services->title_id; ?></h3>
						<span class="desc"><?php echo $services->desc_id; ?></span>
						<a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service_box">
					<span class="icon circle"><img src="<?php echo base_url(); ?>assets/images/icons/console.png" alt="Best User Interface"></span>
					<div class="service_box_con">
						<h3><?php $services=$services_homepage->next_row(); echo $services->title_id; ?></h3>
						<span class="desc"><?php echo $services->desc_id; ?></span>
						<a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service_box">
					<span class="icon circle"><img src="<?php echo base_url(); ?>assets/images/icons/weather.png" alt="Unique Design"></span>
					<div class="service_box_con">
						<h3><?php $services=$services_homepage->next_row(); echo $services->title_id; ?></h3>
						<span class="desc"><?php echo $services->desc_id; ?></span>
						<a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				</div>
			</div>
            <div class="col-md-4">
				<div class="service_box">
					<span class="icon circle"><img src="<?php echo base_url(); ?>assets/images/icons/browser.png" alt="Super Coding"></span>
					<div class="service_box_con">
						<h3><?php $services=$services_homepage->next_row(); echo $services->title_id; ?></h3>
						<span class="desc"><?php echo $services->desc_id; ?></span>
						<a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service_box">
					<span class="icon circle"><img src="<?php echo base_url(); ?>assets/images/icons/console.png" alt="Best User Interface"></span>
					<div class="service_box_con">
						<h3><?php $services=$services_homepage->next_row(); echo $services->title_id; ?></h3>
						<span class="desc"><?php echo $services->desc_id; ?></span>
						<a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service_box">
					<span class="icon circle"><img src="<?php echo base_url(); ?>assets/images/icons/weather.png" alt="Unique Design"></span>
					<div class="service_box_con">
						<h3><?php $services=$services_homepage->next_row(); echo $services->title_id; ?></h3>
						<span class="desc"><?php echo $services->desc_id; ?></span>
						<a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Icon Boxes Style 1 F -->
	
	<!-- Features Box 1 -->
	<!-- <section class="content_section">
		<div class="content no_padding row_spacer clearfix">
			<div class="col-md-6">
				
				<div class="main_title upper no_line">
					<h2>Awesome Featured</h2>
				</div>
				
				<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known printer of took a galley of type.</p>
				<p>and scrambled it to make a typea specimen book There are many variations of the paes sages the Lorem Ipsum available, but the majority have to suffered alteration iner some form with injected randomised words which.</p>
				
				<ul class="list1 list_circle clearfix">
					<li>Multiple Layout</li>
					<li>Awesome Shortcodes</li>
					<li>Browser Compatibility</li>
					<li>Easy to Edit Animations</li>
					<li>Parallax Effect</li>
					<li>Responsive Design</li>
				</ul>
			</div>
			<div class="col-md-6">
				<img class="" src="images/img4.jpg" alt="Image Description">
			</div>
		</div>
	</section> -->
	<!-- End Features Box 1 -->
	
	<!-- Section -->
	<!-- Why Choos  Us disini tempatnya-->
	<!-- End Section -->
	
	<!-- Features Slider 1-->
	<!--section class="content_section">

		<div class="content row_spacer clearfix">
		
		    <div class="main_title centered upper">
			<h2><span class="line"><span class="dot"></span></span>We are Arwen</h2>
		    </div>
		    
		    <span class="description4 centered">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour of this randomised words which don't look even slightly believable.</span>
		    
		    <div class="centered">
			    <img src="images/laptops1.png" alt="We are Arwen">
		    </div>
		    
		</div>

	</section>
	<!-- End Features Slider 1 -->
        
	<!-- Counter 3 -->
	<!--section class="content_section white_section bg_color2">
		<div class="content row_spacer">
			<div class="counter_b clearfix">
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="300">
						<span class="icon"><i class="ico-user5"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="1500">1500</span>
						<span class="title">clients</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="600">
						<span class="icon"><i class="ico-heart6"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="13">13</span>
						<span class="title">Awards</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="900">
						<span class="icon"><i class="ico-code2"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="94771">94771</span>
						<span class="title">Line Of Code</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="1200">
						<span class="icon"><i class="ico-paperplane"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="384">384</span>
						<span class="title">Projects</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter 3 -->
	
	<!-- Our Team 2 -->
	<!--section class="content_section">
		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				
				<div class="col-md-8">
					<h2 class="title1 upper">Our Vission</h2>
					<p><b>Lorem Ipsum is simply dummy text</b> of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known printer of took a galley of type and scrambled it to make a typea specimen book There are many variations of the paes sages the Lorem Ipsum.</p>
					<p>There are many variations of demo text passed sages of Lorem Ipsum available but the majority Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
				</div>
				<div class="col-md-4">
					<span class="spacer30"></span>
					<img alt="Image Title" src="images/device.png">
				</div>
			</div>
		</div>
	</section>
	<!-- End Our Team 2 -->
	
	<!-- Icon Boxes Style 2 A -->
	<section class="content_section white_section bg_color11">
		
	        <div class="container icons_spacer">
			<div class="main_title centered upper">
				<h2>Our Services</h2>
			</div>
			
			<!-- Icon Boxes Con -->
			<div class="icon_boxes_con style2 icon_left_right upper_title clearfix">
				<div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-desktop2"></i></span></a>
						<div class="service_box_con">
							<h3>Premium Sliders Included</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-tablet3"></i></span></a>
						<div class="service_box_con">
							<h3>100% Responsive Layout</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-beaker"></i></span></a>
						<div class="service_box_con">
							<h3>Powerful Performance</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-streetsign"></i></span></a>
						<div class="service_box_con">
							<h3>Awesome Mega menu</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
                <div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-beaker"></i></span></a>
						<div class="service_box_con">
							<h3>Powerful Performance</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-streetsign"></i></span></a>
						<div class="service_box_con">
							<h3>Awesome Mega menu</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
			</div>
			<!-- End Icon Boxes Con -->
		</div>
	</section>
	<!-- End Icon Boxes Style 2 A -->
    
    
	<!-- Isotope Filter 1 four columns full without padding -->
	<section class="content_section bg_gray border_b_n">
	    <div class="row_spacer_t clearfix">
	    
		    <div class="content">
			<div class="main_title centered upper">
			    <h2><span class="line"><i class="ico-wallet-travel"></i></span>Our Portfolio</h2>
			</div>
		    </div>
		
		    <!-- Filter Content -->
		    <div class="hm_filter_wrapper four_blocks project_text_nav full_portos no_sapce_portos nav_in_center upper_title porto_hidden_title">
			<div id="options" class="sort_options clearfix">
			    <ul data-option-key="filter" class="option-set clearfix" id="filter-by">
				<li><a data-option-value="*" class="selected" href="#"><span>all</span><span class="num"></span></a></li>
				<li><a data-option-value=".design" class="" href="#"><span>Design</span><span class="num"></span></a></li>
				<li><a data-option-value=".photography" class="" href="#"><span>Photography</span><span class="num"></span></a></li>
				<li><a data-option-value=".video" class="" href="#"><span>Video</span><span class="num"></span></a></li>
				<li><a data-option-value=".printing" class="" href="#"><span>Printing</span><span class="num"></span></a></li>
				<li><a data-option-value=".wordpress" class="" href="#"><span>Wordpress</span><span class="num"></span></a></li>
			    </ul>
			</div>     
				   
			<div class="hm_filter_wrapper_con">
			    <div class="filter_item_block video">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto1.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto1.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Flat Logo Design</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141213</span>2014/12/13</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">45</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">120</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design video printing wordpress">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto2.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto2.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Dawn of Justice</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141215</span>2014/12/15</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">12</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">100</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design wordpress">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto3.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto3.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Fly On the sky</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141210</span>2014/12/10</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">20</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">263</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design photography printing">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto4.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto4.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Need For Speed</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141220</span>2014/12/20</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">32</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">520</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design wordpress">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto5.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto5.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Days of Future</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141122</span>2014/11/22</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">423</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">40</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design wordpress photography printing">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto6.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto6.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Star Lord</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141110</span>2014/11/10</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">23</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">256</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design wordpress photography">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto7.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto7.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Into the light</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141011</span>2014/10/11</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">125</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">766</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design wordpress printing">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto8.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto8.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Dont be Shy</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141015</span>2014/10/15</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">221</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">345</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			</div>
		    </div>
		    <!-- End Filter Content -->
		
	    </div>    
	</section>
	<!-- End Isotope Filter 1 four columns full without padding -->
	
	<!-- Our Blog Grids -->
	<section class="content_section bg_gray">
		<div class="content row_spacer no_padding">	
			<div class="main_title centered upper">
				<h2><span class="line"><i class="ico-pencil2"></i></span>From The Blog</h2>
			</div>
			
			<!-- Filter Content -->
			<div class="hm_filter_wrapper masonry_posts three_blocks">  
				<ul class="hm_filter_wrapper_con">
			    		<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Awesome Gallery Post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<div class="porto_galla">
										<a href="<?php echo base_url(); ?>assets/images/blog/blog3.jpg" class="feature_inner_ling">
											<img src="<?php echo base_url(); ?>assets/images/blog/blog3.jpg" alt="Post Title">
										</a>
										<a href="<?php echo base_url(); ?>assets/images/blog/blog5.jpg" class="feature_inner_ling">
											<img src="<?php echo base_url(); ?>assets/images/blog/blog5.jpg" alt="Post Title">
										</a>
										<a href="<?php echo base_url(); ?>assets/images/blog/blog4.jpg" class="feature_inner_ling">
											<img src="<?php echo base_url(); ?>assets/images/blog/blog4.jpg" alt="Post Title">
										</a>
										<a href="<?php echo base_url(); ?>assets/images/blog/blog6.jpg" class="feature_inner_ling">
											<img src="<?php echo base_url(); ?>assets/images/blog/blog6.jpg" alt="Post Title">
										</a>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-gallery"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>45 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Photography</a>, <a href="#">Tutorials</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Amazing standard post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<a href="<?php echo base_url(); ?>assets/images/team/member1.jpg" class="feature_inner_ling" data-rel="magnific-popup">
										<img src="<?php echo base_url(); ?>assets/images/team/member1.jpg" alt="Post Title">
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-image4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>41 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">News</a>, <a href="#">Events</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block hosted_video_audio_con">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Self Hosted Audio</a></h6>
							</div>
							<div class="feature_inner no_corners">
								<div class="self_hosted_container">
									<audio class="hosted_audio" id="audio_player_1" width="100%" preload="metadata" controls="controls">
										<source src="http://www.enar.ideal-theme.com/html5/files/alro7-tasry.mp3" type="audio/mp3" />
									</audio>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-pencil4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 16, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>5 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Audio</a>, <a href="#">Music</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">My First Quote</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<!-- <div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div> -->
									<a href="#" class="quote_con">
										<span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</span>
										<span class="quote_author">Mike Ehrmantraut</span>
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-quote-right"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 19, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>7 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Articles</a>, <a href="#">Events</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Standard Blog Post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<a href="<?php echo base_url(); ?>assets/images/team/member2.jpg" class="feature_inner_ling" data-rel="magnific-popup">
										<img src="<?php echo base_url(); ?>assets/images/team/member2.jpg" alt="Post Title">
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-image4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 22, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>19 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Photography</a>, <a href="#">Tutorials</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">SoundCloud Audio Post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<!-- <a href="#" class="expand_image"><i class="ico-maximize"></i></a> -->
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<div class="embed-container">
										<iframe width="100%" style="overflow:hidden;border:none;" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/53909324&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-sound3"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 23, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>15 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Media</a>, <a href="#">Music</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry prine.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Vimeo Video Post</a></h6>
							</div>
							<div class="feature_inner no_corners">
								<div class="feature_inner_corners">
									<!-- <div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div> -->
									<div class="embed-container">
										<iframe src="http://player.vimeo.com/video/29193046" width="100%" style="border: 0px none;" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-video-camera"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 22, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>87 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Sports</a>, <a href="#">Summer</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry prine.</p>
							</div>
						</div>
					</li><!-- Item -->
				</ul>
			</div>
			<!-- End Filter Content -->
			<div class="centered">
				<a class="btn_c" href="#">
					<span class="btn_c_ic_a"><i class="ico-keyboard-arrow-right"></i></span>
					<span class="btn_c_t">See All Posts</span>
					<span class="btn_c_ic_b"><i class="ico-keyboard-arrow-right"></i></span>
				</a>
			</div>
		</div>
	</section>
	<!-- End Our Blog Grids -->
	
	<!-- Contact Us -->
	<section class="content_section">
		<div class="title_banner t_b_color3 upper centered">
			<div class="content">
				<h2>Contact Us</h2>
			</div>
		</div>
		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				<div class="col-md-6">
					<h2 class="title1 upper">Get On Touch</h2>
					<span class="spacer20"></span>
					
					<form class="hm_contact_form" id="contact-us-form" name="contact-us-form" action="php/phpmailer/sendemail.php" method="post">
						<div class="form_row clearfix">
							<label for="contact-us-name">
								<span class="hm_field_name">Name</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-name" id="contact-us-name" placeholder="Full Name" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-mail">
								<span class="hm_field_name">Email</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="email" name="contact-us-mail" id="contact-us-mail" placeholder="mail@sitename.com" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-subject">
								<span class="hm_field_name">Subject</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-subject" id="contact-us-subject">
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-message">
								<span class="hm_field_name">Message</span>
								<span class="hm_requires_star">*</span>
							</label>
							<textarea class="form_fill_fields hm_textarea" name="contact-us-message" id="contact-us-message" required></textarea>
						</div>
						<div class="form_row clearfix">
							<button type="submit" class="send_button full_button" name="contact-us-submit" id="contact-us-submit" value="submit">
								<i class="ico-check3"></i>
								<span>Send Your Message</span>
							</button>
						</div>
						<div class="form_row clearfix">
							<div id="form-messages"></div>
						</div>
						<div class="form_loader"></div>
					</form>
				</div><!-- Grid -->
				
				<div class="col-md-6">
					<h2 class="title1 upper">Locate Us on Map</h2>
					<span class="spacer20"></span>
					
					<div class="bordered_content with_text bordered">
						<div class="google_map" data-lat="-12.043333" data-long="-77.028333" data-text="Your location description 3">
						</div>
					</div>
					<span class="spacer10"></span>
					
                                        <h2 class="title1 upper">Contact Information</h2>
					<span class="c_detail">
						<span class="c_name">Address :</span>
						<span class="c_desc">34 Depot Street Massapequa, NY 11758</span>
					</span>
					<span class="c_detail">
						<span class="c_name">Phone :</span>
						<span class="c_desc">(305) 1234 5678 7891</span>
					</span>
					<span class="c_detail">
						<span class="c_name">Email :</span>
						<span class="c_desc">info@mail.com</span>
					</span>
					<span class="c_detail">
						<span class="c_name">Site :</span>
						<span class="c_desc">www.ideal-theme.com</span>
					</span>

				</div><!-- Grid -->
			</div>
		</div>
	</section>
	<!-- End Contact Us -->
	
	<!-- footer -->
	<footer id="footer">
		<div class="footer_copyright">
			<div class="container clearfix">
				<div class="col-md-6">
					<span class="footer_copy_text">Copyright &copy; 2015 Powered By <a href="#">IdealTheme</a> - <a href="#">Enar Theme</a> - All Rights Reserved</span>
				</div>
				<div class="col-md-6 clearfix">
					<ul class="footer_menu clearfix">
						<li><a href="#"><span>Home</span></a></li>
						<li>/</li>
						<li><a href="#"><span>About Us</span></a></li>
						<li>/</li>
						<li><a href="#"><span>Help Center</span></a></li>
						<li>/</li>
						<li><a href="#"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer -->
	<a href="#0" class="hm_go_top"></a>
</div>
<!-- End wrapper -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.js"><\/script>')</script>	
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>		
<script src="<?php echo base_url(); ?>assets/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/mediaelement-and-player.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
<script src="<?php echo base_url(); ?>assets/js/gmaps.js"></script>
<!-- this is where we put our custom functions -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/functions.js"></script>-->
</body>
</html>