<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 1.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="pull-right"><?php bloginfo('description'); ?></span>
				</div>
			</div>
		</div>
	</div>
	<header id="masthead" class="site-header container" role="banner">
		<nav class="" role="navigation">
		
			<div class="container">
				<div class="row">
					<div class="col-md-12">
				        <div class="row">
							<div class="col-md-5">
				            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"  class="logo"><?php bloginfo( 'name' ); ?></a>
				        	</div>
				        <div class="col-md-7">
				        	<h3 class="phone-number pull-right">1300 255 748</h3>
				            <?php 
						$args = array('theme_location' => 'primary', 
									  'container_class' => 'main-menu pull-right', 
									  'menu_class' => 'nav nav-pills',
									  'fallback_cb' => '',
			                          'menu_id' => 'main-menu',
			                          'walker' => new Upbootwp_Walker_Nav_Menu()); 
						wp_nav_menu($args);
						?>
				        </div>
					</div><!-- .col-md-12 -->
				</div><!-- row -->
			</div><!-- container -->
		</nav>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    
		    <div class="item active">
		      <img src="<?php echo get_template_directory_uri(); ?>/images/all-river-batteries-team.jpg" alt="all-river-batteries-team">
		    </div>

		    <div class="item ">
		      <img src="<?php echo get_template_directory_uri(); ?>/images/all-river-batteries-trucks.jpg" alt="all-river-batteries-trucks">
		    </div>

		    <div class="item ">
		      <img src="<?php echo get_template_directory_uri(); ?>/images/all-river-batteries-vehicles.jpg" alt="all-river-batteries-vehicles">
		    </div>


		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div>


	<?php //get_template_directory_uri(); ?>
