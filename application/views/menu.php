
<header id="site_header">	
	<div class="topbar"><!-- class ( topbar_colored  ) -->
			<div class="content clearfix">
			
				<div class="top_details clearfix f_left">
					<div class="languages-select languages-drop"><?php if(WEB_LANG == 'id') {$primary_lang="Indonesia"; $secondary_lang="English"; $link_s_lang="http://en.aptikmastudio.com"; } else {$primary_lang="English"; $secondary_lang="Indonesia"; $link_s_lang="http://aptikmastudio.com";} ?>
						<span><i class="ico-globe4"></i><span><?php echo $primary_lang; ?></span></span>
						<div class="languages-panel">
							<ul class="languages-panel-con">
								<li class="active"><a href="#"><?php echo $primary_lang; ?><i class="ico-check lang_checked"></i></a></li>
								<li><a href="<?php echo $link_s_lang; ?>"><?php echo $secondary_lang; ?></a></li>
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
		<div id="navigation_bar">
			<div class="content">
				<div id="logo">
					<a href="<?php echo base_url(); ?>aptikma/index">
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


				<?php $men=(array)$menu_homepage->result(); 

				foreach ($men as $mens)
				{
					$myclas = "";
					if ($page == $mens->{"id_menu_homepage"}){
						$myclas = "normal_menu mobile_menu_toggle current_page_item";
					}else{
						$myclas = "normal_menu mobile_menu_toggle";
					}
					echo '<li class="'.$myclas.'">
							<a href="'.base_url() .$mens->{"url_link_".WEB_LANG}.'"><span>'.$mens->{"name_".WEB_LANG}.'</span></a>
						</li>';
				}




				?>
				</ul>
					</div>
				</nav>


				
				<!-- End Nav -->	
				
				<div class="clear"></div>
			</div>
		</div>
 	</header>

						


