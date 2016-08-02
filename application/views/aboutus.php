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
	<?php $seo=(array)$seo_homepage->row(); $menu=(array)$menu_homepage->row(); $label=(array)$label_aboutus->row(); $ourgoal=(array)$ourgoal_aboutus->row(); $whychoose=(array)$whychoose_homepage->row(); $ourskill=(array)$ourskill_aboutus->row(); $skillvalue=(array)$skillvalue_aboutus->row(); ?>
	<title><?php echo $label["label_".WEB_LANG]; ?></title>
	<meta name="author" content="Aptikma Studio" />
	<meta name="description" content="<?php echo $seo["meta_desc_".WEB_LANG]; ?>" />
	<meta name="keyword" content="<?php echo $seo["meta_keyword_".WEB_LANG]; ?>"/>
	<meta name="tag" content="<?php echo $seo["meta_tag_".WEB_LANG]; ?>"/>
	
	<!-- Don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" media="all" />
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
						<span><i class="ico-globe4"></i><span>Indonesia</span></span>
						<div class="languages-panel">
							<ul class="languages-panel-con">
								<li class="active"><a href="#">Indonesia <i class="ico-check lang_checked"></i></a></li>
								<li><a href="#">English</a></li>
							</ul>
						</div>
					</div>
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
		<!-- End topbar -->
			
		<div id="navigation_bar">
			<div class="content">
				<div id="logo">
					<a href="<?php echo base_url(); ?>aptikma/index">
						<img class="logo_dark" src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="Enar Logo">
						<img class="logo_light" src="<?php echo base_url(); ?>assets/images/logo-light.png" alt="Enar Logo">
					</a>
				</div>
				
				<!-- Top Card -->
				<!-- End Top Card -->
				
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
							<li class="normal_menu mobile_menu_toggle">
								<a href="<?php echo base_url(); echo $menu["url_link"]; ?>"><span><?php echo $menu["name_".WEB_LANG]; ?></span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle current_page_item">
								<a href="<?php echo base_url(); $menu=(array)$menu_homepage->next_row(); echo $menu["url_link"]; ?>"><span><?php echo $menu["name_".WEB_LANG]; ?></span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle">
							    <a href="<?php echo base_url(); $menu=(array)$menu_homepage->next_row(); echo $menu["url_link"]; ?>"><span><?php echo $menu["name_".WEB_LANG]; ?></span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="<?php echo base_url(); $menu=(array)$menu_homepage->next_row(); echo $menu["url_link"]; ?>"><span><?php echo $menu["name_".WEB_LANG]; ?></span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="<?php echo base_url(); $menu=(array)$menu_homepage->next_row(); echo $menu["url_link"]; ?>"><span><?php echo $menu["name_".WEB_LANG]; ?></span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="<?php echo base_url(); $menu=(array)$menu_homepage->next_row(); echo $menu["url_link"]; ?>"><span><?php echo $menu["name_".WEB_LANG]; ?></span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="<?php echo base_url(); $menu=(array)$menu_homepage->next_row(); echo $menu["url_link"]; ?>"><span><?php echo $menu["name_".WEB_LANG]; ?></span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="<?php echo base_url(); $menu=(array)$menu_homepage->next_row(); echo $menu["url_link"]; ?>"><span><?php echo $menu["name_".WEB_LANG]; ?></span></a>
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
	
        <!-- Page Title -->
	<section class="content_section white_section page_title has_bg_image bg_header1 enar_parallax">
		<div class="content clearfix">
			<h1 class=""><?php $label=(array)$label_aboutus->next_row(); echo $label["label_".WEB_LANG]; ?></h1>
			<div class="breadcrumbs">
				<a href="#">Home</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#">Pages</a>
			</div>
		</div>
	</section>
	<!-- End Page Title -->
	
	<!-- Icon Boxes Style 1 D -->
	<section class="content_section">
		<div class="container icons_spacer">
			<div class="main_title centered upper">
				<h2><span class="line"><span class="dot"></span></span><?php $label=(array)$label_aboutus->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
			</div>
			<div class="icon_boxes_con style1 circle upper_title just_icon_border solid_icon clearfix">
				<div class="col-md-4">
					<div class="service_box">
						<span class="icon"><i class="ico-tools-2"></i></span>
						<div class="service_box_con centered">
							<h3><?php echo $ourgoal["title_".WEB_LANG]; ?></h3>
							<span class="desc"><?php echo $ourgoal["desc_".WEB_LANG]; ?></span>
							<a href="#" class="ser-box-link"><span></span>Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service_box">
						<span class="icon"><i class="ico-mobile4"></i></span>
						<div class="service_box_con centered">
							<h3><?php $ourgoal=(array)$ourgoal_aboutus->next_row(); echo $ourgoal["title_".WEB_LANG]; ?></h3>
							<span class="desc"><?php echo $ourgoal["desc_".WEB_LANG]; ?></span>
							<a href="#" class="ser-box-link"><span></span>Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service_box">
						<span class="icon"><i class="ico-key4"></i></span>
						<div class="service_box_con centered">
							<h3><?php $ourgoal=(array)$ourgoal_aboutus->next_row(); echo $ourgoal["title_".WEB_LANG]; ?></h3>
						<span class="desc"><?php echo $ourgoal["desc_".WEB_LANG]; ?></span>
						<a href="#" class="ser-box-link"><span></span>Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Icon Boxes Style 1 D -->
	
	<!-- Counter -->
	<section class="content_section white_section bg_color2">
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
	<!-- End Counter -->
	
	<!-- Section -->
	<section class="content_section bg_gray">
		<div class="container row_spacer">
			<div class="rows_container clearfix">
				<!-- Tabs Container -->
				<div class="col-md-6">
					<div class="main_title upper small">
						<h2><span class="line"><span class="dot"></span></span><?php $label=(array)$label_aboutus->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
					</div>
					<div class="hm-tabs tabs1">
						<nav>
							<ul class="tabs-navi">
								<li><a data-content="quality" class="selected" href="#"><span></span>Quality</a></li>
								<li><a data-content="design" href="#"><span></span>Design</a></li>
								<li><a data-content="programming" href="#"><span></span>Programming</a></li>
							</ul>
							<!-- tabs-navi -->
						</nav>
					
						<ul class="tabs-body">
							<li data-content="quality" class="selected">
								<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
						                
								<div class="col-md-6">
									<ul class="list3 clearfix">
										<li>Multiple Layout</li>
										<li>Awesome Shortcodes</li>
										<li>Browser Compatibility</li>
										<li>Easy to Edit Animations</li>
										<li>Parallax Effect</li>
										<li>Responsive Design</li>
										<li>Many Home Page Versions</li>
										<li>Many Blog Pages</li>
									</ul>
								</div>
								<div class="col-md-6">
									<a href="<?php echo base_url(); ?>assets/images/portfolio/porto5.jpg" class="magnific-popup img_popup">
										<img src="<?php echo base_url(); ?>assets/images/portfolio/porto5.jpg" alt="Image Title">
										<span>
											<i class="ico-maximize"></i>
										</span>
									</a>
								</div>
								<div class="clear"></div>
							</li>
						
							<li data-content="design">
<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
						                
								<div class="col-md-6">
									<ul class="list3 clearfix">
										<li>Multiple Layout</li>
										<li>Awesome Shortcodes</li>
										<li>Browser Compatibility</li>
										<li>Easy to Edit Animations</li>
										<li>Parallax Effect</li>
										<li>Responsive Design</li>
										<li>Many Home Page Versions</li>
										<li>Many Blog Pages</li>
									</ul>
								</div>
								<div class="col-md-6">
									<a href="<?php echo base_url(); ?>assets/images/portfolio/porto3.jpg" class="magnific-popup img_popup">
										<img src="<?php echo base_url(); ?>assets/images/portfolio/porto3.jpg" alt="Image Title">
										<span>
											<i class="ico-maximize"></i>
										</span>
									</a>
								</div>
								<div class="clear"></div>
							</li>
						
							<li data-content="programming">
							    <p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
						                
								<div class="col-md-6">
									<ul class="list3 clearfix">
										<li>Multiple Layout</li>
										<li>Awesome Shortcodes</li>
										<li>Browser Compatibility</li>
										<li>Easy to Edit Animations</li>
										<li>Parallax Effect</li>
										<li>Responsive Design</li>
										<li>Many Home Page Versions</li>
										<li>Many Blog Pages</li>
									</ul>
								</div>
								<div class="col-md-6">
									<a href="<?php echo base_url(); ?>assets/images/portfolio/porto4.jpg" class="magnific-popup img_popup">
										<img src="<?php echo base_url(); ?>assets/images/portfolio/porto4.jpg" alt="Image Title">
										<span>
											<i class="ico-maximize"></i>
										</span>
									</a>
								</div>
								<div class="clear"></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- End Tabs Container -->
				
				<div class="col-md-6">
					<div class="main_title upper small">
						<h2><span class="line"><span class="dot"></span></span><?php $label=(array)$label_aboutus->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
					</div>
					<!-- My Accordion -->
					<div class="enar_accordion plus_minus" data-type="accordion"> <!-- accordion - toggle -->
						<div class="enar_occ_container" data-expanded="true">
							<span class="enar_occ_title"><i class="ico-head"></i><?php echo $whychoose["title_".WEB_LANG]; ?></span>
							<div class="enar_occ_content">
								<div class="acc_content">
									<p><?php echo $whychoose["desc_".WEB_LANG]; ?></p>
								<!--<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
	<p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor standar dummyy text ever since the when an iunesi known.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>-->
								</div>
							</div>
						</div>
						<div class="enar_occ_container" data-expanded="false">
							<span class="enar_occ_title"><i class="ico-heart3"></i><?php $whychoose=(array)$whychoose_homepage->next_row(); echo $whychoose["title_".WEB_LANG]; ?></span>
							<div class="enar_occ_content">
								<div class="acc_content">
									<p><?php echo $whychoose["desc_".WEB_LANG]; ?></p>
								<!--<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
	<p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor standar dummyy text ever since the when an iunesi known.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>-->
								</div>
							</div>
						</div>
						<div class="enar_occ_container" data-expanded="false">
							<span class="enar_occ_title"><i class="ico-check3"></i><?php $whychoose=(array)$whychoose_homepage->next_row(); echo $whychoose["title_".WEB_LANG]; ?></span>
							<div class="enar_occ_content">
								<div class="acc_content">
									<p><?php echo $whychoose["desc_".WEB_LANG]; ?></p>
								<!--<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
	<p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor standar dummyy text ever since the when an iunesi known.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>-->
								</div>
							</div>
						</div>
						<div class="enar_occ_container" data-expanded="false">
							<span class="enar_occ_title"><i class="ico-head"></i><?php $whychoose=(array)$whychoose_homepage->next_row(); echo $whychoose["title_".WEB_LANG]; ?></span>
							<div class="enar_occ_content">
								<div class="acc_content">
									<p><?php echo $whychoose["desc_".WEB_LANG]; ?></p>
								<!--<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
	<p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor standar dummyy text ever since the when an iunesi known.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>-->
								</div>
							</div>
						</div>
						<div class="enar_occ_container" data-expanded="false">
							<span class="enar_occ_title"><i class="ico-heart3"></i><?php $whychoose=(array)$whychoose_homepage->next_row(); echo $whychoose["title_".WEB_LANG]; ?></span>
							<div class="enar_occ_content">
								<div class="acc_content">
									<p><?php echo $whychoose["desc_".WEB_LANG]; ?></p>
								<!--<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
	<p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor standar dummyy text ever since the when an iunesi known.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>-->
								</div>
							</div>
						</div>
						<div class="enar_occ_container" data-expanded="false">
							<span class="enar_occ_title"><i class="ico-check3"></i><?php $whychoose=(array)$whychoose_homepage->next_row(); echo $whychoose["title_".WEB_LANG]; ?></span>
							<div class="enar_occ_content">
								<div class="acc_content">
									<p><?php echo $whychoose["desc_".WEB_LANG]; ?></p>
								<!--<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
	<p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor standar dummyy text ever since the when an iunesi known.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>-->
								</div>
							</div>
						</div>						
					</div>
					<!-- End My Accordion -->
				</div>
				
			</div>
			<!-- End Rows Container -->
		</div>
	</section>
	<!-- End Section -->
	
	<!-- Skills 2 -->
	<section class="content_section white_section bg_color5">
		<span class="section_icon"><i class="ico-strategy"></i></span>
		<div class="content row_spacer no_padding">	
			<div class="main_title centered upper">
			    <h2><span class="line"></span><?php $label=(array)$label_aboutus->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
			</div>
			
			<div class="rows_container clearfix">
				<div class="col-md-6">
					<h2 class="title1 upper"><?php echo $ourskill["title_".WEB_LANG]; ?></h2>
					<p><?php echo $ourskill["desc_".WEB_LANG]; ?></p>
					<!--<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known printer of took a galley of type.</p>
					<p>and scrambled it to make a typea specimen book There are many variations of the paes sages the Lorem Ipsum available, but the majority have to suffered alteration iner some form with injected randomised words which.</p>-->
					<ul class="list1 black list_circle clearfix">
						<li>Multiple Layout</li>
						<li>Awesome Shortcodes</li>
						<li>Browser Compatibility</li>
						<li>Easy to Edit Animations</li>
						<li>Parallax Effect</li>
						<li>Responsive Design</li>
						<li>Many Home Page Versions</li>
						<li>Many Blog Pages</li>
						<li>Multiple Layout</li>
						<li>Awesome Shortcodes</li>
					</ul>
				</div><!-- Grid 6 -->
				
				<div class="col-md-6">
					<div class="prog_bar2_con">
						<span class="title"><i class="ico-laptop2"></i><span class="prog_bar2_title"><?php echo $skillvalue["title_".WEB_LANG]; ?></span></span>
						<div class="progress_bar prog_bar2" data-progress-val="<?php echo $skillvalue["value"]; ?>" data-progress-animation="easeOutQuad" data-progress-delay="300" data-progress-color="#0BACB8">
							<div class="fill_con2">
								<div class="fill">
									<span class="value"><span class="num"></span><span>%</span></span>
								</div>
							</div>
							<div class="fill_con">
								<div class="fill"></div>
							</div>
						</div>
					</div>
					
					<div class="prog_bar2_con">
						<span class="title"><i class="ico-code2"></i><span class="prog_bar2_title"><?php $skillvalue=(array)$skillvalue_aboutus->next_row(); echo $skillvalue["title_".WEB_LANG]; ?></span></span>
						<div class="progress_bar prog_bar2" data-progress-val="<?php echo $skillvalue["value"]; ?>" data-progress-animation="easeOutQuad" data-progress-delay="600" data-progress-color="#B97FDB">
							<div class="fill_con2">
								<div class="fill">
									<span class="value"><span class="num"></span><span>%</span></span>
								</div>
							</div>
							<div class="fill_con">
								<div class="fill"></div>
							</div>
						</div>
					</div>
					
					<div class="prog_bar2_con">
						<span class="title"><i class="ico-heart2"></i><span class="prog_bar2_title"><?php $skillvalue=(array)$skillvalue_aboutus->next_row(); echo $skillvalue["title_".WEB_LANG]; ?></span></span>
						<div class="progress_bar prog_bar2" data-progress-val="<?php echo $skillvalue["value"]; ?>" data-progress-animation="easeOutQuad" data-progress-delay="900" data-progress-color="">
							<div class="fill_con2">
								<div class="fill">
									<span class="value"><span class="num"></span><span>%</span></span>
								</div>
							</div>
							<div class="fill_con">
								<div class="fill"></div>
							</div>
						</div>
					</div>
					
					<div class="prog_bar2_con">
						<span class="title"><i class="ico-search42"></i><span class="prog_bar2_title"><?php $skillvalue=(array)$skillvalue_aboutus->next_row(); echo $skillvalue["title_".WEB_LANG]; ?></span></span>
						<div class="progress_bar prog_bar2" data-progress-val="<?php echo $skillvalue["value"]; ?>" data-progress-animation="easeOutQuad" data-progress-delay="1200" data-progress-color="#00BC90">
							<div class="fill_con2">
								<div class="fill">
									<span class="value"><span class="num"></span><span>%</span></span>
								</div>
							</div>
							<div class="fill_con">
								<div class="fill"></div>
							</div>
						</div>
					</div>
					
					<div class="prog_bar2_con">
						<span class="title"><i class="ico-key32"></i><span class="prog_bar2_title"><?php $skillvalue=(array)$skillvalue_aboutus->next_row(); echo $skillvalue["title_".WEB_LANG]; ?></span></span>
						<div class="progress_bar prog_bar2" data-progress-val="<?php echo $skillvalue["value"]; ?>" data-progress-animation="easeOutQuad" data-progress-delay="1500" data-progress-color="#FF513E">
							<div class="fill_con2">
								<div class="fill">
									<span class="value"><span class="num"></span><span>%</span></span>
								</div>
							</div>
							<div class="fill_con">
								<div class="fill"></div>
							</div>
						</div>
					</div>
				</div><!-- Grid 6-->
			</div>
		</div>
	</section>
	<!-- End Skills 2 -->
	
	<!-- Features 3-->
	<section class="content_section">
		<div class="container row_spacer clearfix">
			<div class="content">
				<div class="main_title centered upper">
					<h2><span class="line"><span class="dot"></span></span><?php $label=(array)$label_aboutus->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
				</div>
			</div>
			<!-- Rows Container -->
			<div class="icon_boxes_con style2 icon_box_no_border upper_title clearfix">
				<div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-desktop2"></i></span></a>
						<div class="service_box_con">
							<h3>Premium Sliders Included</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-tablet3"></i></span></a>
						<div class="service_box_con">
							<h3>100% Responsive Layout</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-beaker"></i></span></a>
						<div class="service_box_con">
							<h3>Powerful Performance</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<img src="<?php echo base_url(); ?>assets/images/looking1.jpg" alt="Image Title">
				</div>
			</div>
			<!-- End Rows Container -->
		</div>
	</section>
	<!-- End Features 3 -->

	<!-- End Clients 1 -->
	
	<!-- footer -->
	<footer id="footer">
		<div class="footer_copyright">
			<div class="container clearfix">
				<div class="col-md-6">
					<span class="footer_copy_text">Copyright &copy; 2016 <a href="#">Aptikma Studio</a> -  All Rights Reserved</span>
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

<!-- this is where we put our custom functions -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/functions.js"></script>
</body>
</html>