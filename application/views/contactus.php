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
	<?php $seo=(array)$seo_homepage->row(); $label=(array)$label_contactus->row(); $contact=(array)$contact_homepage->row(); $portfolio=(array)$portfolio_portfolio->row(); $features=(array)$features_services->row(); $other=(array)$other_services->row(); ?>
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
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-57x57.png" />
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
	<?php $this->load->view('menu');  ?>
	    <!-- End Main Header -->
    
	<!-- Page Title -->
	<section class="content_section white_section page_title has_bg_image bg_header4 enar_parallax">
		<div class="content clearfix">
			<h1 class=""><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></h1>
			<div class="breadcrumbs">
				<a href="#">Home</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#">Pages</a>
			</div>
		</div>
	</section>
	<!-- End Page Title -->
	
	<!-- Contact Us -->
	<section class="content_section">
		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				<div class="col-md-6">
					<h2 class="title1 upper"><i class="ico-pencil5"></i><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-location5"></i>
						</span>
						<div class="c_con">
							<span class="c_title"><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></span>
							<span class="c_detail">
								<span class="c_desc"><?php echo $contact['value'] ?></span>
								<!--<span class="c_name">Main Office :</span>
								<span class="c_desc">NO.28 - 23 Street Name - City, Country</span>-->
							</span>
							<!--<span class="c_detail">
								<span class="c_name">Customer Center :</span>
								<span class="c_desc">NO.123 - 45 Street Name - City, Country</span>
							</span>-->
						</div>
					</div>
					
					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-bubble4"></i>
						</span>
						<div class="c_con">
							<span class="c_title"><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></span>
							<span class="c_detail">
								<!--<span class="c_name">Main Office :</span>-->
								<span class="c_desc"><?php $contact=(array)$contact_homepage->next_row(); echo $contact['value'] ?></span>
							</span>
							<!--<span class="c_detail">
								<span class="c_name">Customer Support :</span>
								<span class="c_desc">+000 456 123 978</span>
							</span>
							<span class="c_detail">
								<span class="c_name">Sales :</span>
								<span class="c_desc">+000 123 456 789</span>
							</span>-->
						</div>
					</div>
					
					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-paperplane"></i>
						</span>
						<div class="c_con">
							<span class="c_title"><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></span>
							<span class="c_detail">
								<!--<span class="c_name">Customer support :</span>-->
								<span class="c_desc"><?php $contact=(array)$contact_homepage->next_row(); echo $contact['value'] ?></span>
							</span>
							<!--<span class="c_detail">
								<span class="c_name">Technical support :</span>
								<span class="c_desc">support@mail.com</span>
							</span>-->
						</div>
					</div>
					
					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-pen2"></i>
						</span>
						<div class="c_con">
							<span class="c_title"><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></span>
							<span class="c_detail">
								<!--<span class="c_name">Site Name :</span>-->
								<span class="c_desc"><?php $contact=(array)$contact_homepage->next_row(); echo $contact['value'] ?></span>
							</span>
						</div>
					</div>
				</div><!-- Grid -->
				
				<div class="col-md-6">
					<h2 class="title1 upper"><i class="ico-envelope3"></i><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
					<form class="hm_contact_form" id="contact-us-form" name="contact-us-form" action="php/phpmailer/sendemail.php" method="post">
						<div class="form_row clearfix">
							<label for="contact-us-name">
								<span class="hm_field_name"><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-name" id="contact-us-name" placeholder="<?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?>" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-mail">
								<span class="hm_field_name"><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="email" name="contact-us-mail" id="contact-us-mail" placeholder="<?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?>" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-phone">
								<span class="hm_field_name"><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-phone" id="contact-us-phone" placeholder="<?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?>">
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-subject">
								<span class="hm_field_name"><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-subject" id="contact-us-subject" placeholder="<?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?>">
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-message">
								<span class="hm_field_name"><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></span>
								<span class="hm_requires_star">*</span>
							</label>
							<textarea class="form_fill_fields hm_textarea" name="contact-us-message" id="contact-us-message" required placeholder=""></textarea>
						</div>
						<div class="form_row clearfix">
							<button type="submit" class="send_button full_button" name="contact-us-submit" id="contact-us-submit" value="submit">
								<i class="ico-check3"></i>
								<span><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></span>
							</button>
						</div>
						<div class="form_row clearfix">
							<div id="form-messages"></div>
						</div>
						<div class="form_loader"></div>
					</form>
				</div><!-- Grid -->
			</div>
		</div>
	</section>
	<!-- End Contact Us -->
        
	<!-- Google Map -->
	<section class="content_section">
		<div class="title_banner t_b_color1 upper centered">
			<div class="content">
				<h2><?php $label=(array)$label_contactus->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
			</div>
		</div>
		<div class="bordered_content">
			<div class="google_map" data-lat="-12.043333" data-long="-77.028333" data-main="yes" data-text="Your location description 2">
				<span class="location" data-lat="-12.040397656836609" data-long="-77.03373871559225" data-text="Your sub location description 1"></span>
				<span class="location" data-lat="-12.050047116528843" data-long="-77.02448169303511" data-text="Your sub location description 2"></span>
			</div>
		</div>
	</section>
	<!-- End Google Map -->
	
	<!-- footer -->
	<?php $this->load->view('footer');  ?>
	<!-- End footer -->
	<a href="#0" class="hm_go_top"></a>
</div>
<!-- End wrapper -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.js"><\/script>')</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
<script src="<?php echo base_url(); ?>assets/js/gmaps.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>

<!-- this is where we put our custom functions -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/functions.js"></script>
</body>
</html>