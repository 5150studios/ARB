<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 1.1
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
			
						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php _e( 'Error 404 - Page Not Found', 'upbootwp' ); ?></h1>
							</header><!-- .page-header -->
							<div class="page-content">
								<p><?php _e( 'Sorry, please try your request again, or visit our ', 'upbootwp' ); ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" rel="home" class="404-link">home page</a>.</p>

							</div><!-- .page-content -->
						</section><!-- .error-404 -->
			
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>