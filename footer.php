<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 1.1
 */
?>

	</div><!-- #content -->
	<div class="container brands clear-fix">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/images/bosch-batteries.png" alt="Bosch Batteries" />
					</div>
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/images/trojan-batteries.png" alt="Trojan Batteries" />
					</div>
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/images/all-river-batteries.png" alt="All River Batteries" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="row">
						<?php dynamic_sidebar('Footer 1'); ?>
						<?php dynamic_sidebar('Footer 2'); ?>
						<?php dynamic_sidebar('Footer 3'); ?>
						<?php dynamic_sidebar('Footer 4'); ?>
					</div>
					<div class="site-info">
						&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- container -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>