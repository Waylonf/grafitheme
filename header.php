<?php
/**
 * The template for displaying the header.
 *
 * Displays all of the markup within the <head>
 *
 * @package 	WordPress
 * @subpackage 	{THEME-NAME}
 * @since 		{THEME-NAME} {THEME-VERSION}
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!-- TODO Add dns prefetch with hook -->
		<!-- TODO Add dns prefetch for other resources -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="wrapper">
			<!-- TODO Check that the skip to content link targets the correct div -->
			<a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'TEXTDOMAIN' ); ?></a>
			<?php //get_template_part( 'plugables/topbar'); ?>
		
			<header id="masthead" class="site-header" role="banner">

				<!-- Navigation -->
				<nav id="site-navigation" class="site-navigation" role="navigation">
	            	<div class="navbar navbar-default">
	        			<div class="container">
		                    <div class="row">
		                        <div class="col-xs-12">
		                            <div class="navbar-header">

		                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		                                    <span class="sr-only"><?php _e( 'Toggle navigation', 'TEXTDOMAIN' ); ?></span>
		                                    <span class="icon-bar"></span>
		                                    <span class="icon-bar"></span>
		                                    <span class="icon-bar"></span>
		                                </button>

	                        			<!-- Site title -->
	                        			<a class="navbar-brand image" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	                        				<?php //bloginfo( 'name' ); ?>
	                        				<?php $navbar_logo = get_theme_mod( 'navbar_logo', '' ); ?>
	                        				<img src="<?php echo esc_url_raw( $navbar_logo ) ?>">
	                    				</a>
		                            </div>

		                            <!-- The WordPress menu -->
		                            <?php wp_nav_menu(
	                                    array(
	                                        'theme_location'    => 'primary',
	                                        'container_class'   => 'collapse navbar-collapse navbar-responsive-collapse',
	                                        'menu_class'        => 'nav navbar-nav navbar-right',
	                                        'fallback_cb'       => '',
	                                        'walker'            => new wp_bootstrap_navwalker()
	                                    )
	                                ); ?>

		                        </div> <!-- /.col-md-11 or col-md-12 -->
		                    </div> <!-- /.row -->
		                </div> <!-- /.container -->
		            </div><!-- /.navbar -->
		        </nav><!-- /.site-navigation -->
		    

			    <?php $header_image = get_header_image();

			    if ( ! empty( $header_image ) ) : ?>
			    <!-- TODO Add inline styles in wp_header hook -->
				<div id="site-header-image" class="site-header-image" style="background: url('<?php header_image(); ?>') no-repeat; min-height: <?php echo get_custom_header()->height; ?>px;">
					<h1 class="page-title">
						<?php single_post_title( $prefix = '', $display= true ); ?>
					</h1>
					<div class="site-description" id="desc">
						<?php bloginfo( 'description' ); ?>
					</div>
				</div>
			    <?php endif; ?>

				<!-- Breadcrumbs -->
			    <div class="site-breadcrumbs hidden-xs">
	    			<?php gws_breadcrumbs( $custom_home_icon = '<i class="fa fa-fw fa-home"></i>' ); ?>
		    	</div> <!-- /.breadcrumb -->

	    	</header>