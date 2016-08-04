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
	<?php $seo=(array)$seo_homepage->row(); $label=(array)$label_portfolio->row(); $category=(array)$category_portfolio->row(); $portfolio=(array)$portfolio_portfolio->row(); $features=(array)$features_services->row(); $other=(array)$other_services->row(); ?>
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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" media="all" />
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icon-fonts.css" type="text/css" media="all" />

    
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
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
		<?php $this->load->view('menu');  ?>
	        <!-- End Main Header -->	    
    
	<!-- Isotope Filter 1 Three columns with padding -->
	<section class="content_section bg_gray border_t_n border_t_n">
	    <div class="row_spacer clearfix">
	    
		<div class="content">
		    <div class="main_title centered upper">
			<h2><span class="line"></span><?php $label=(array)$label_portfolio->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
		    </div>
		</div>
		
		    <!-- Filter Content -->
		    <div class="hm_filter_wrapper three_blocks project_text_nav boxed_portos has_sapce_portos nav_with_nums upper_title upper_title">
			<div id="options" class="sort_options clearfix">
			    <ul data-option-key="filter" class="option-set clearfix" id="filter-by">
				<li><a data-option-value="*" class="selected" href="#"><span>all</span><span class="num"></span></a></li>
				<li><a data-option-value=".<?php echo $category["category"]; ?>" class="" href="#"><span><?php echo $category["name_".WEB_LANG]; ?></span><span class="num"></span></a></li>
				<li><a data-option-value=".<?php $category=(array)$category_portfolio->next_row(); echo $category["category"]; ?>" class="" href="#"><span><?php echo $category["name_".WEB_LANG]; ?></span><span class="num"></span></a></li>
				<li><a data-option-value=".<?php $category=(array)$category_portfolio->next_row(); echo $category["category"]; ?>" class="" href="#"><span><?php echo $category["name_".WEB_LANG]; ?></span><span class="num"></span></a></li>
				<li><a data-option-value=".<?php $category=(array)$category_portfolio->next_row(); echo $category["category"]; ?>" class="" href="#"><span><?php echo $category["name_".WEB_LANG]; ?></span><span class="num"></span></a></li>
				<li><a data-option-value=".<?php $category=(array)$category_portfolio->next_row(); echo $category["category"]; ?>" class="" href="#"><span><?php echo $category["name_".WEB_LANG]; ?></span><span class="num"></span></a></li>
			    </ul>
			    <ul data-option-key="sortAscending" class="option-set clearfix" id="sort-direction">
				<li><a class="selected" data-option-value="true" href="#">
				    <span><i class="ico-keyboard-arrow-up"></i></span></a>
				</li>
				<li><a data-option-value="false" href="#" class="">
				    <span><i class="ico-keyboard-arrow-down"></i></span></a>
				</li>
			    </ul>
			</div>     
				   
			<div class="hm_filter_wrapper_con">
			    <div class="filter_item_block <?php echo $portfolio["category"]; ?>">
				    <div class="porto_block">
					    <div class="porto_type">
						    <div class="porto_galla">							
							    <a href="<?php echo base_url(); ?>assets/images/portfolio/porto1.jpg">
								    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto1.jpg" alt="Portfolio Name 1">
							    </a>														
							    <a href="<?php echo base_url(); ?>assets/images/portfolio/porto1.jpg">
								    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto1.jpg" alt="Portfolio Name 2">
							    </a>							
						    </div>
						    <div class="porto_nav">
							<a href="#" class="expand_img"><?php $label=(array)$label_portfolio->next_row(); echo $label["label_".WEB_LANG]; ?></a>
							<a href="#" class="detail_link"><?php $label=(array)$label_portfolio->next_row(); echo $label["label_".WEB_LANG]; ?></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name"><?php echo $portfolio["title_".WEB_LANG]; ?></h6>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block <?php $portfolio=(array)$portfolio_portfolio->next_row(); echo $portfolio["category"]; ?>">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto2.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto2.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img"><?php $label=(array)$label_portfolio->previous_row(); echo $label["label_".WEB_LANG]; ?></a>
							<a href="#" class="detail_link"><?php $label=(array)$label_portfolio->next_row(); echo $label["label_".WEB_LANG]; ?></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name"><?php echo $portfolio["title_".WEB_LANG]; ?></h6>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block <?php $portfolio=(array)$portfolio_portfolio->next_row(); echo $portfolio["category"]; ?>">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto3.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto3.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img"><?php $label=(array)$label_portfolio->previous_row(); echo $label["label_".WEB_LANG]; ?></a>
							<a href="#" class="detail_link"><?php $label=(array)$label_portfolio->next_row(); echo $label["label_".WEB_LANG]; ?></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name"><?php echo $portfolio["title_".WEB_LANG]; ?></h6>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block <?php $portfolio=(array)$portfolio_portfolio->next_row(); echo $portfolio["category"]; ?>">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto4.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto4.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img"><?php $label=(array)$label_portfolio->previous_row(); echo $label["label_".WEB_LANG]; ?></a>
							<a href="#" class="detail_link"><?php $label=(array)$label_portfolio->next_row(); echo $label["label_".WEB_LANG]; ?></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name"><?php echo $portfolio["title_".WEB_LANG]; ?></h6>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block <?php $portfolio=(array)$portfolio_portfolio->next_row(); echo $portfolio["category"]; ?>">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="<?php echo base_url(); ?>assets/images/portfolio/porto5.jpg">
							    <img src="<?php echo base_url(); ?>assets/images/portfolio/porto5.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img"><?php $label=(array)$label_portfolio->previous_row(); echo $label["label_".WEB_LANG]; ?></a>
							<a href="#" class="detail_link"><?php $label=(array)$label_portfolio->next_row(); echo $label["label_".WEB_LANG]; ?></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name"><?php echo $portfolio["title_".WEB_LANG]; ?></h6>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			</div>
		    </div>
		    <!-- End Filter Content -->
		
	    </div>    
	</section>
	<!-- End Isotope Filter 1 Three columns with padding -->
    
	<!-- footer -->
	<?php $this->load->view('footer');  ?>
	<!-- End footer -->
	<a href="#0" class="hm_go_top"></a>

</div>
<!-- End wrapper -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.js"><\/script>')</script>

<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
<!-- this is where we put our custom functions -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/functions.js"></script>
</body>
</html>