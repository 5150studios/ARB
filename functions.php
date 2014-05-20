<?php
/**
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 1.1
 */

if (!isset($content_width)) $content_width = 770;

/**
 * upbootwp_setup function.
 * 
 * @access public
 * @return void
 */
function upbootwp_setup() {

	require 'inc/general/class-Upbootwp_Walker_Nav_Menu.php';

	load_theme_textdomain('allriverbatteries', get_template_directory().'/languages');

	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	register_nav_menus( 
		array('primary' => __( 'Primary Menu', 'Bootstrap WP Primary' ),'copyright_menu' => 'Copyright Menu',
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'upbootwp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	)));
	
	
}

add_action( 'after_setup_theme', 'upbootwp_setup' );

//Add support for thumbnails...
add_theme_support('post-thumbnails');
add_image_size('featured', 750, 400, true);

/**
 * Register widgetized area and update sidebar with default widgets
 */
function upbootwp_widgets_init() {
	register_sidebar(array(
		'name'          => __('Sidebar','upbootwp'),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
		register_sidebar(array('id' => 'arb-footer', 'name' => 'Footer 1', 'before_title'  => '<h4 class="widget-title">', 'after_title'   => '</h4>', 'before_widget' => '<div id="%1$s" class="widget col-md-4 col-sm-6 %2$s">', 'after_widget'  => '</div>'));
		register_sidebar(array('id' => 'arb-footer2', 'name' => 'Footer 2', 'before_title'  => '<h4 class="widget-title">', 'after_title'   => '</h4>', 'before_widget' => '<div id="%1$s" class="widget col-md-3 col-sm-6 %2$s">', 'after_widget'  => '</div>'));
		register_sidebar(array('id' => 'arb-footer3', 'name' => 'Footer 3', 'before_title'  => '<h4 class="widget-title">', 'after_title'   => '</h4>', 'before_widget' => '<div id="%1$s" class="widget col-md-3 col-sm-6 %2$s">', 'after_widget'  => '</div>'));
		register_sidebar(array('id' => 'arb-footer4', 'name' => 'Footer 4', 'before_title'  => '<h4 class="widget-title">', 'after_title'   => '</h4>', 'before_widget' => '<div id="%1$s" class="widget col-md-2 col-sm-6 %2$s">', 'after_widget'  => '</div>'));
}
add_action( 'widgets_init', 'upbootwp_widgets_init' );

function upbootwp_scripts() {
	wp_enqueue_style( 'upbootwp-css', get_template_directory_uri().'/css/upbootwp.min.css', array(), '1.1');
	wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(), null);
	wp_enqueue_style( 'styles-css', get_template_directory_uri().'/css/styles.min.css', array(), null);
	wp_enqueue_script( 'upbootwp-jQuery', get_template_directory_uri().'/js/jquery.js',array(),'2.0.3',true);
	wp_enqueue_script( 'upbootwp-basefile', get_template_directory_uri().'/js/bootstrap.min.js',array(),'1.1',true);
	wp_enqueue_script( 'html5shiv', get_template_directory_uri().'/js/html5shiv.js',array(),null,true);
	wp_enqueue_script( 'respond', get_template_directory_uri().'/js/respond.js',array(),null,true);
	wp_enqueue_script( 'scripts', get_template_directory_uri().'/js/scripts.js',array(),null,true);
}
add_action( 'wp_enqueue_scripts', 'upbootwp_scripts' );


/**
 * upbootwp_less function.
 * Load less for development or even on the running website. If you want to use less just enable this function
 * @access public
 * @return void
 */
function upbootwp_less() {
	printf('<link rel="stylesheet" type="text/less" href="%s" />', get_template_directory_uri().'/less/bootstrap.less?ver=1.1'); // raus machen :) 
	printf('<script type="text/javascript" src="%s"></script>', get_template_directory_uri().'/js/less.js?ver=1.6.1');
}
// Enable this when you want to work with less
//add_action('wp_head', 'upbootwp_less');



/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory().'/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory().'/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory().'/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory().'/inc/jetpack.php';


/**
 * Shortcodes for Grid Layout
 */
function md_row($atts, $content = null) {
	return '<div class="row">' . wpautop(do_shortcode($content)) . '</div>';
}
add_shortcode("row", "md_row");

function md_span3($atts, $content = null) {
	return '<div class="col-sm-3">' . wpautop(do_shortcode($content)) . '</div>';
}
add_shortcode("span3", "md_span3");

function md_span3_offset($atts, $content = null) {
	return '<div class="col-sm-3 col-sm-offset-1">' . wpautop(do_shortcode($content)) . '</div>';
}
add_shortcode("span3_offset", "md_span3_offset");

function md_span4($atts, $content = null) {
	return '<div class="col-sm-4">' . wpautop(do_shortcode($content)) . '</div>';
}
add_shortcode("span4", "md_span4");

function md_span6($atts, $content = null) {
	return '<div class="col-sm-6">' . wpautop(do_shortcode($content)) . '</div>';
}
add_shortcode("span6", "md_span6");

function md_span8($atts, $content = null) {
	return '<div class="col-sm-8">' . wpautop(do_shortcode($content)) . '</div>';
}
add_shortcode("span8", "md_span8");

function md_span12($atts, $content = null) {
	return '<div class="col-sm-12">' . wpautop(do_shortcode($content)) . '</div>';
}
add_shortcode("span12", "md_span12");

function md_icon($atts, $content = null) {
	return '<span class="glyphicon ' . do_shortcode($content) . '"></span>';
}
add_shortcode("icon", "md_icon");

function social_media_links() {		
	$link = urlencode(get_permalink());
	$title = urlencode(get_the_title());
				
	echo '<ul><li><strong>Share:</strong></li>
	<li><a href="http://www.facebook.com/sharer.php?u='.$link.'&amp;t='.$title.'" target="_blank"><i class="icon-facebook-sign"></i> Facebook</a></li>
	<li><a href="http://twitter.com/share?text='.$title.'&url='.$link.'" target="_blank"><i class="icon-twitter-sign"></i> Twitter</a></li>
	<li><a href="https://plusone.google.com/_/+1/confirm?hl=en&url='.$link.'&title='.$title.'" target="_blank"><i class="icon-google-plus-sign"></i> Google+</a></li>
	<li><a href="'.get_bloginfo('rss2_url').'"><i class="icon-rss"></i> RSS</a></li></ul>';		
}



/**
 * upbootwp_breadcrumbs function.
 * Edit the standart breadcrumbs to fit the bootstrap style without producing more css
 * @access public
 * @return void
 */
function upbootwp_breadcrumbs() {

	$delimiter = '&raquo;';
	$home = 'Home';
	$before = '<li class="active">';
	$after = '</li>';

	if (!is_home() && !is_front_page() || is_paged()) {

		echo '<ol class="breadcrumb">';

		global $post;
		$homeLink = get_bloginfo('url');
		echo '<li><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . '</li> ';

		if (is_category()) {
			global $wp_query;
			$cat_obj = $wp_query->get_queried_object();
			$thisCat = $cat_obj->term_id;
			$thisCat = get_category($thisCat);
			$parentCat = get_category($thisCat->parent);
			if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
			echo $before . single_cat_title('', false) . $after;

		} elseif (is_day()) {
			echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('d') . $after;

		} elseif (is_month()) {
			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('F') . $after;

		} elseif (is_year()) {
			echo $before . get_the_time('Y') . $after;

		} elseif (is_single() && !is_attachment()) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
				echo $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				echo $before . get_the_title() . $after;
			}

		} elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;

		} elseif (is_attachment()) {
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;

		} elseif ( is_page() && !$post->post_parent ) {
			echo $before . get_the_title() . $after;

		} elseif ( is_page() && $post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;

		} elseif ( is_search() ) {
			echo $before . 'Search results for "' . get_search_query() . '"' . $after;

		} elseif ( is_tag() ) {
			echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

		} elseif ( is_author() ) {
			global $author;
			$userdata = get_userdata($author);
			echo $before . 'Articles posted by ' . $userdata->display_name . $after;

		} elseif ( is_404() ) {
			echo $before . 'Error 404' . $after;
		}

		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo ': ' . __('Page') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}

		echo '</ol>';

	}
}