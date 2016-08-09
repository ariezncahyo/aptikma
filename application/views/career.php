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
	<?php $seo=(array)$seo_homepage->row(); $label=(array)$label_career->row(); $job=(array)$job_career->row(); $category=(array)$category_blog->row(); $features=(array)$features_services->row(); $other=(array)$other_services->row(); ?>
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
	<?php $this->load->view('menu');  ?>        
	<!-- End Main Header -->
    
	<!-- Page Title -->
	<section class="content_section white_section page_title has_bg_image bg_header4 enar_parallax">
		<div class="content clearfix">
			<h1 class="">Karir</h1>
			<div class="breadcrumbs">
				<a href="#">Home</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#">Pages</a>
			</div>
		</div>
	</section>	
	<!--<section class="content_section page_title">
		<div class="content clearfix">
			<h1 class=""><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></h1>
			<div class="breadcrumbs">
				<a href="#">Home</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#">Pages</a>
			</div>
		</div>
	</section>!-->
	<!-- End Page Title -->
	
	<!-- Section -->
	<section class="content_section">
		<div class="container row_spacer clearfix">
			<div class="content">
				<div class="main_title lato small_space">
					<h2><span class="line"><span class="dot"></span></span><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
				</div>
				<div class="main_desc">
					<p><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></p>
				</div>
				<span class="spacer20"></span>
			</div>
			<div class="rows_container clearfix">
				<div class="col-md-7">
					<h2 class="title1 upper"><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
					
					<!-- Job -->
					<div class="enar_accordion plus_minus" data-type="accordion">
						<div class="enar_occ_container" data-expanded="true">
							<span class="enar_occ_title"><?php echo $job["name_".WEB_LANG]; ?></span>
							<div class="enar_occ_content">
								<div class="acc_content">
								<?php echo $job["desc_".WEB_LANG]; ?>
									<div class="small_title">
										<span class="small_title_con">
											<span class="s_text"><?php $label=(array)$label_career->row(5); echo $label["label_".WEB_LANG]; ?>:</span>
										</span>
									</div>
									<ul class="list2">
										<li>
											<i class="ico-check4"></i>
											Lorem Ipsum is simply dummy text of the printing and typeseting.
										</li>
										<li>
											<i class="ico-check4"></i>
											Earum recusandae rem animi accusamus quisquam reprehenderit.
										</li>
										<li>
											<i class="ico-check4"></i>
											Inbox Lorem ipsum dolor sit amet printing and typeseting.
										</li>
									</ul>
									<div class="small_title">
										<span class="small_title_con">
											<span class="s_text"><?php $label=(array)$label_career->row(6); echo $label["label_".WEB_LANG]; ?>:</span>
										</span>
									</div>
									<ul class="list3 clearfix">
										<li>At least 10 years experience</li>
										<li>Live in New York</li>
										<li>Must have a car</li>
										<li>maximum 30 years of age</li>
									</ul>
									<div>
										<a href="#" target="_self" class="send_button3"><?php $label=(array)$label_career->row(7); echo $label["label_".WEB_LANG]; ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Job -->
					
					<!-- Job -->
					<div class="enar_accordion plus_minus" data-type="accordion">
						<div class="enar_occ_container" data-expanded="false">
							<span class="enar_occ_title"><?php $job=(array)$job_career->next_row(); echo $job["name_".WEB_LANG]; ?></span>
							<div class="enar_occ_content">
								<div class="acc_content">
								<?php echo $job["desc_".WEB_LANG]; ?>
									<div class="small_title">
										<span class="small_title_con">
											<span class="s_text"><?php $label=(array)$label_career->row(5); echo $label["label_".WEB_LANG]; ?>:</span>
										</span>
									</div>
									<ul class="list2">
										<li>
											<i class="ico-check4"></i>
											Lorem Ipsum is simply dummy text of the printing and typeseting.
										</li>
										<li>
											<i class="ico-check4"></i>
											Earum recusandae rem animi accusamus quisquam reprehenderit.
										</li>
										<li>
											<i class="ico-check4"></i>
											Inbox Lorem ipsum dolor sit amet printing and typeseting.
										</li>
									</ul>
									<div class="small_title">
										<span class="small_title_con">
											<span class="s_text"><?php $label=(array)$label_career->row(6); echo $label["label_".WEB_LANG]; ?>:</span>
										</span>
									</div>
									<ul class="list3 clearfix">
										<li>At least 10 years experience</li>
										<li>Live in New York</li>
										<li>Must have a car</li>
										<li>maximum 30 years of age</li>
									</ul>
									<div>
										<a href="#" target="_self" class="send_button3"><?php $label=(array)$label_career->row(7); echo $label["label_".WEB_LANG]; ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Job -->
					
					<!-- Job -->
					<div class="enar_accordion plus_minus" data-type="accordion">
						<div class="enar_occ_container" data-expanded="false">
							<span class="enar_occ_title"><?php $job=(array)$job_career->next_row(); echo $job["name_".WEB_LANG]; ?></span>
							<div class="enar_occ_content">
								<div class="acc_content">
								<?php echo $job["desc_".WEB_LANG]; ?>
									<div class="small_title">
										<span class="small_title_con">
											<span class="s_text"><?php $label=(array)$label_career->row(5); echo $label["label_".WEB_LANG]; ?>:</span>
										</span>
									</div>
									<ul class="list2">
										<li>
											<i class="ico-check4"></i>
											Lorem Ipsum is simply dummy text of the printing and typeseting.
										</li>
										<li>
											<i class="ico-check4"></i>
											Earum recusandae rem animi accusamus quisquam reprehenderit.
										</li>
										<li>
											<i class="ico-check4"></i>
											Inbox Lorem ipsum dolor sit amet printing and typeseting.
										</li>
									</ul>
									<div class="small_title">
										<span class="small_title_con">
											<span class="s_text"><?php $label=(array)$label_career->row(6); echo $label["label_".WEB_LANG]; ?>:</span>
										</span>
									</div>
									<ul class="list3 clearfix">
										<li>At least 10 years experience</li>
										<li>Live in New York</li>
										<li>Must have a car</li>
										<li>maximum 30 years of age</li>
									</ul>
									<div>
										<a href="#" target="_self" class="send_button3"><?php $label=(array)$label_career->row(7); echo $label["label_".WEB_LANG]; ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Job -->			
				</div><!-- End Columns -->
				
				<div class="col-md-5">
					<h2 class="title1 upper"><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
					<form class="hm_contact_form full_contact_form" id="careers-form" name="careers-form" action="php/phpmailer/sendemail-attachment.php" method="post">
						<div class="form_row clearfix">
							<label for="career-name">
								<span class="hm_field_name"><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="career-name" id="career-name" placeholder="<?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?>" required>
						</div>
						<div class="form_row clearfix">
							<label for="career-email">
								<span class="hm_field_name"><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="email" name="career-email" id="career-email" placeholder="<?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?>" required>
						</div>
						<div class="form_row clearfix">
							<label for="career-address">
								<span class="hm_field_name"><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="career-address" id="career-address" placeholder="<?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?>">
						</div>
						<div class="form_row clearfix">
							<div class="my_col_half">
								<label for="birth-date">
									<span class="hm_field_name"><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></span>
									<span class="hm_requires_star">*</span>
								</label>
								<input class="form_fill_fields hm_input_text" type="date" name="birth-date" id="birth-date" placeholder="<?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?>" required>	
							</div>
							<div class="my_col_half">
								<label for="experience-years">
									<span class="hm_field_name"><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></span>
									<span class="hm_requires_star">*</span>
								</label>
								<input class="form_fill_fields hm_input_text" type="number" name="experience-years" id="experience-years" placeholder="<?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?>" required>	
							</div>
						</div>
						<div class="form_row clearfix">
							<label for="career-position">
								<span class="hm_field_name"><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></span>
								<span class="hm_requires_star">*</span>
							</label>
							<label class="orderby_label" for="career-position">
								<select class="shipping_country" id="career-position" name="career-position" required>
									<option value=""><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></option>
									<option>Senior Software developer</option>
									<option>Senior Sales Engineer</option>
									<option>Senior Accountant</option>
									<option>UX Team Leader</option>
									<option>Web Designer </option>
									<option>Senior SharePoint developer</option>
									<option>Marketing Manager</option>
									<option>Junior Software developer</option>
								</select>
							</label>
						</div>
						<div class="form_row clearfix">
							<label for="career-message">
								<span class="hm_field_name"><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></span>
							</label>
							<textarea class="form_fill_fields hm_textarea" name="career-message" id="career-message"></textarea>
						</div>
						<div class="form_row clearfix">
							<label for="cv-attachment">
								<span class="hm_field_name"><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></span>
							</label>
							<input type="file" id="cv-attachment" name="cv-attachment">
						</div>
						<div class="form_row clearfix">
							<button type="submit" name="careers-submit" id="careers-submit" class="send_button full_button">
								<i class="ico-check3"></i>
								<span><?php $label=(array)$label_career->next_row(); echo $label["label_".WEB_LANG]; ?></span>
							</button>
						</div>
						<div class="form_row clearfix">
							<div id="form-messages"></div>
						</div>
						<div class="form_loader"></div>
					</form>
				</div><!-- End Columns -->
			</div>
		</div>
	</section>
	<!-- End Section -->
	
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