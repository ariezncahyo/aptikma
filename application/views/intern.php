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
	<?php $seo=(array)$seo_homepage->row(); $label=(array)$label_intern->row(); $list=(array)$list_intern->result(); $page=(array)$page_intern->row(); ?>
	<title><?php echo $label['label_'.WEB_LANG]; ?></title>
	<meta name="author" content="Aptikma Studio" />
	<meta name="description" content="<?php echo $seo['meta_desc_'.WEB_LANG]; ?>" />
	<meta name="keyword" content="<?php echo $seo['meta_keyword_'.WEB_LANG]; ?>"/>
	<meta name="tag" content="<?php echo $seo['meta_tag_'.WEB_LANG]; ?>"/>
	
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
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/>css/magnific-popup.css" type="text/css" media="all" />
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
	<?php $this->load->view('menu');  ?>
        <!-- End Main Header -->
    
	<!-- Page Title -->
	<section class="content_section page_title">
		<div class="content clearfix">
			<h1 class=""><?php $label=(array)$label_intern->next_row(); echo $label["label_".WEB_LANG]; ?></h1>
			<div class="breadcrumbs">
				<a href="#">Home</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#">Pages</a>
			</div>
		</div>
	</section>
	<!-- End Page Title -->
	
	<!-- Section -->
	<section class="content_section">
		<div class="container row_spacer clearfix">
			<div class="content">
				<!--div class="main_title lato small_space">
					<h2><span class="line"><span class="dot"></span></span>We are Hiring</h2>
				</div>
				<div class="main_desc">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh metus.</p>
				</div-->
			</div>
				<div class="main_title centered upper">
					<h2><span class="line"><i class="ico-columns"></i></span><?php echo $page['title_top_'.WEB_LANG]; ?></h2>
				</div>
				<div class="table_container table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
                                <th><b><?php $label=(array)$label_intern->next_row(); echo $label["label_".WEB_LANG]; ?></b></th>
								<th><b><?php $label=(array)$label_intern->next_row(); echo $label["label_".WEB_LANG]; ?></b></th>
								<th><b><?php $label=(array)$label_intern->next_row(); echo $label["label_".WEB_LANG]; ?></b></th>
								<th><b><?php $label=(array)$label_intern->next_row(); echo $label["label_".WEB_LANG]; ?></b></th>
                                <th><b><?php $label=(array)$label_intern->next_row(); echo $label["label_".WEB_LANG]; ?></b></th>
                                <th><b><?php $label=(array)$label_intern->next_row(); echo $label["label_".WEB_LANG]; ?></b></th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$i=1;
							foreach ($list as $lists) 
							{
								
							?>
							<tr>
								<th scope="row"><?php echo $i; ?></th>
								<td><?php echo $lists->{"name"}; ?></td>
								<td><?php echo $lists->{"instance"}; ?></td>
								<td><?php echo $lists->{"department"}; ?></td>
                                <td><?php echo $lists->{"start_date"}; ?></td>
                                <td><?php echo $lists->{"finish_date"}; ?></td>
							</tr>
							<?php
								$i+=1;
							};
							?>
						</tbody>
					</table>
				</div>
            
		</div>
	</section>
	<!-- End Section -->
	<!-- How to Apply -->
    <div class="title_banner t_b_color3 upper centered">
    	<div class="content">
	   		<h2><?php echo $page['title_bottom_'.WEB_LANG]; ?></h2>
        </div>
    </div>
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