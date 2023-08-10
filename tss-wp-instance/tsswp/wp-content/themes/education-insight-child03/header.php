<?php
/**
 * The header for our theme
 *
 * @subpackage Education Insight
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
<!-- 	<link rel='stylesheet' id='owl-carousel-style-css'  href='../wp-content/themes/education-pro/assets/css/owl.carousela78f.css?ver=5.7.1' type='text/css' media='all' /> -->
	
<!-- Blog Gallery CSS	 -->
<!-- 	<link rel="stylesheet" id="all-pages-style-css" href="https://www.ovationthemes.com/demos/education-insight/wp-content/themes/education-pro/assets/css/all-pages.css?ver=5.7.1" type="text/css" media="all"> 
	<link rel="stylesheet" id="bootstrap-style-css" href="https://www.ovationthemes.com/demos/education-insight/wp-content/themes/education-pro/assets/css/bootstrap.min.css?ver=5.7.1" type="text/css" media="all"> -->
	
	
<!-- edusite styles	 -->
<!-- 	<link rel='stylesheet' id='home-page-style-css'  href='https://www.ovationthemes.com/demos/education-insight/wp-content/themes/education-pro/assets/css/homepage.css?ver=5.7.1' type='text/css' media='all' /> -->
	
<!-- edusite styles End	 -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'education-insight' ); ?></a>
<!-- 	<div id="beaker_icon_bg"></div>
	<div id="scope_icon_bg"></div> -->
	<div id="page" class="site">	
		<div class="top_header row">
			
			<!--p class="tempnotice">
					<a href="#notice12" class="atempnotice"> In the memory of Uzair Ahmad... <em>The Great  loss to The Science School..!</em>
					</a> 
			</p-->
			<!-- 	toogle bar for mob view		 -->
			<?php if(has_nav_menu('primary-3')){?>
				<div class="toggle-menu gb_menu mobile_view_toggle col-md-4 col-sm-2">
					<button onclick="education_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-bars"></i></button>
					
<!-- 					<button onclick="education_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-ellipsis-h"></i><p><?php // esc_html_e('Menu','education-insight'); ?></p></button> -->
					
				</div>
			<?php }?>
<!-- 	toogle bar for mob view	END	 -->
			<div class="container contact_cap col-xl-12 col-lg-12 col-md-8 col-sm-10">
				<?php if( get_theme_mod('education_insight_call') != ''){ ?>
					<span><i class="fas fa-phone"></i><?php echo esc_html(get_theme_mod('education_insight_call','')); ?></span>		
				
				<?php }?>
				
				<?php if( get_theme_mod('education_insight_email') != ''){ ?>
					<span><i class="fa fa-envelope"></i><?php echo esc_html(get_theme_mod('education_insight_email','')); ?></span>
				<?php }?>
				<?php if(class_exists('woocommerce')){ ?>
					<?php if ( is_user_logged_in() ) { ?>
						<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><?php esc_html_e('MY ACCOUNT','education-insight'); ?></a>
					<?php }
					else { ?>
						<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><?php esc_html_e('LOGIN / REGISTER','education-insight'); ?></a>
					<?php } ?>
                <?php }?>
			</div>
		</div>
		<div id="header">
			<div class="wrap_figure">
				<div class="container">
					<div class="row menus">
						<div class="col-lg-6" id="left-menus">
						   	<div class="menu_box">
						   		<?php get_template_part('template-parts/navigation/navigation-left'); ?>
						   	</div>
						</div>
						
						<div class="col-lg-6" id="right-menus">
							<div class="row toggle_design">
<!-- 								<div class="col-lg-12 col-md-9 col-3"> -->
								<div class="col-lg-12 col-md-12 col-12">
								   	<div class="menu_box">
								   		<?php get_template_part('template-parts/navigation/navigation-right'); ?>
								   	</div>
								   	<?php if(has_nav_menu('primary-3')){?>
										<div class="toggle-menu gb_menu hidden_menu">
											<button onclick="education_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-ellipsis-h"></i><p><?php esc_html_e('Menu','education-insight'); ?></p></button>
										</div>
									<?php }?>
									<div class="menu_box_mobile">
								   		<?php get_template_part('template-parts/navigation/navigation-responsive'); ?>
								   	</div>
								</div>
<!-- 								<div class="col-lg-4 col-md-8 col-sm-9">
									<div class="links">
										<?php if( get_theme_mod('education_insight_facebook') != ''){ ?>
											<a href="<?php echo esc_url(get_theme_mod('education_insight_facebook','')); ?>"><i class="fab fa-facebook-f"></i></a>
										<?php }?>
										<?php if( get_theme_mod('education_insight_twitter') != ''){ ?>
											<a href="<?php echo esc_url(get_theme_mod('education_insight_twitter','')); ?>"><i class="fab fa-twitter"></i></a>
										<?php }?>
										<?php if( get_theme_mod('education_insight_linkedin') != ''){ ?>
											<a href="<?php echo esc_url(get_theme_mod('education_insight_linkedin','')); ?>"><i class="fab fa-linkedin-in"></i></a>
										<?php }?>
										<?php if( get_theme_mod('education_insight_pintrest') != ''){ ?>
											<a href="<?php echo esc_url(get_theme_mod('education_insight_pintrest','')); ?>"><i class="fab fa-pinterest-p"></i></a>
										<?php }?>
									</div>
								</div> -->
							</div>
						</div>
					</div>
					
					<div class="row desktop_header" id="head_down_content">
						<div class="col-lg-5 col-md-5 col-sm-5">
							<div class="menu_down_h"> <b><h1>The Science School</h1></b> </div>
							<div class="menu_down_p"><i><p> &nbsp; Faith – Purpose – Action – Leadership </p></i></div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-3">
							<div class="logo1">
						        <?php if ( has_custom_logo() ) : ?>
				            		<?php the_custom_logo(); ?>
					            <?php endif; ?>
				              	<?php $blog_info = get_bloginfo( 'name' ); ?>
					                <?php if ( ! empty( $blog_info ) ) : ?>
					                  	<?php if ( is_front_page() && is_home() ) : ?>
					                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					                  	<?php else : ?>
				                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				                  		<?php endif; ?>
					                <?php endif; ?>
					                <?php
				                  		$description = get_bloginfo( 'description', 'display' );
					                  	if ( $description || is_customize_preview() ) :
					                ?>
				                  	<p class="site-description">
				                    	<?php echo esc_html($description); ?>
				                  	</p>
				              	<?php endif; ?>
						    </div>
						</div>
						<div class="col-lg-5 col-md-4 col-sm-4" style="text-align:right">
							<img src="http://thescienceschool.edu.pk/tsswp/wp-content/uploads/2021/03/Arbi.png">
							<i><p class="menu_down_p_right">“And give us (the grace) to lead the righteous.”(Al Quran)</p></i>
						</div>
					</div>
					
					<div class="mobile_header" id="head_down_content">
						<div class="row">
								<div class="logo col-3">
									<?php if ( has_custom_logo() ) : ?>
										<?php the_custom_logo(); ?>
									<?php endif; ?>
									<?php $blog_info = get_bloginfo( 'name' ); ?>
										<?php if ( ! empty( $blog_info ) ) : ?>
											<?php if ( is_front_page() && is_home() ) : ?>
												<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
											<?php else : ?>
												<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
											<?php endif; ?>
										<?php endif; ?>
										<?php
											$description = get_bloginfo( 'description', 'display' );
											if ( $description || is_customize_preview() ) :
										?>
										<p class="site-description">
											<?php echo esc_html($description); ?>
										</p>
									<?php endif; ?>
								</div>
							<div class="col-9" style="text-align:left">
								<div class="menu_down_h"> <b><h1>The Science School</h1></b> </div>
								<div class="menu_down_p"><i><p>Faith – Purpose – Action – Leadership </p></i></div>
							</div>
						</div>
						<div style="text-align:right">
							<img src="http://thescienceschool.edu.pk/tsswp/wp-content/uploads/2021/03/Arbi.png">
							<i><p class="menu_down_p_right">“And give us (the grace) to lead the righteous.”(Al Quran)</p></i>
						</div>
					</div>
					
					<!-- <marquee id="header-marquee" width="100%" direction="left">
							<a href="https://thescienceschool.edu.pk/tsswp/#point_result" style="position: relative;width:100%;line-height:10px;">
							<span style="color: red; font-size:12px !important;">The Science School AS and O Level Results</span>
							</a>
							<span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
							<a href="https://thescienceschool.edu.pk/tsswp/#point_nustCompetition" style="position: relative;width:100%;line-height:10px;">
							<span style="color: red; font-size:12px !important;">A science technology, mathematics competition organised by the NUST University.</span>
							</a>
						</marquee> -->
					
				</div>
			</div>

		</div>
	</div>