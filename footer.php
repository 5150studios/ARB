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
	<div class="container brands">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/images/bosch-batteries.png" alt="Bosch Batteries" />
					</div>
					<div class="col-sm-4 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/images/trojan-batteries.png" alt="Trojan Batteries" />
					</div>
					<div class="col-sm-4 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/images/all-river-batteries.png" alt="All River Batteries" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div id="colophon" class="site-footer" role="contentinfo">
					<div class="row">
						<?php dynamic_sidebar('Footer 1'); ?>
						<?php dynamic_sidebar('Footer 2'); ?>
						<?php dynamic_sidebar('Footer 3'); ?>
						<?php dynamic_sidebar('Footer 4'); ?>
					</div><!-- /row -->
					<div class="row copyright">
						<div class="site-info">
							&copy; Copyright <?php bloginfo('name'); ?> <?php echo date("Y"); ?>
						</div><!-- .site-info -->
						<div class="site-info-links">
							<?php wp_nav_menu(array('theme_location' => 'copyright_menu', 'container_class' => 'copyrightnav')); ?>
						</div><!-- .site-info-links -->
					</div><!-- Row -->
				</div><!-- #colophon -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- container -->
</div><!-- /footer -->

</div><!-- /#page -->
<?php wp_footer(); ?>

</body>
</html>