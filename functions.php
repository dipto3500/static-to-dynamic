<?php

require_once(get_theme_file_path('/inc/csf/codestar-framework.php'));
require_once(get_theme_file_path('/inc/csf.php'));
require_once(get_theme_file_path('/inc/tgm.php'));
require_once( get_theme_file_path( "/inc/cmb2-attach-file.php" ) );
require_once( get_theme_file_path( "/lib/carbon-fields/vendor/autoload.php" ) );
require_once( get_theme_file_path( "/lib/carbon-fields/carbon_fields_new.php" ) );
require_once( get_theme_file_path( "/lib/carbon-fields/text.php" ) );
	function newone_setup() {
		load_theme_textdomain("newone", get_theme_file_path("/language") );
		add_theme_support("title-tag");
		add_theme_support('post-formats', array('quote', 'image', 'audio', 'video', 'link'));
		add_theme_support("post-thumbnails");
		add_image_size('newone-img-size1', 400, 400, array('left', 'top'));
		add_image_size('newone-img-size2', 450, 450, array('right', 'top'));
		add_image_size('newone-img-size3', 500, 500, array('center', 'center'));
		$newone_logo = array(
			'width' => 250,
			'height' => 100, 
			'flex-height' => true,
			'flex-width' => true
		);
		add_theme_support("custom-logo", $newone_logo);
			}
		register_nav_menus( array(
		    'primary' => __( 'Primary Menu', 'menuone' ),
		) );

	add_action("after_setup_theme", 'newone_setup');


	function newone_assets() {
		wp_enqueue_style('newone_bootstap_css', get_theme_file_uri('/css/bootstrap.min.css'), '', '1.1.0');
		wp_enqueue_style('newone_bootstapicone_css', get_theme_file_uri('/css/bootstrap-icons.css'), '', '1.1.0');
		wp_enqueue_style('newone_templatemo-ebook-landing.css_css', get_theme_file_uri('/css/templatemo-ebook-landing.css'), '', '1.1.0');
		wp_enqueue_style('maincss', get_stylesheet_uri(), '', '1.0.0');
		wp_enqueue_style('responsive', get_theme_file_uri('/css/responsive.css'), '', '1.1.0');

		// js



		wp_enqueue_script("newone_bootstap_css", get_theme_file_uri('/js/bootstrap.bundle.min.js'), array("jquery"), "1.0.1", true);
		wp_enqueue_script("newone_bootstap_css", get_theme_file_uri('/js/jquery.sticky.js'), array("jquery"), "1.0.1", true);
		wp_enqueue_script("newone_bootstap_css", get_theme_file_uri('/js/click-scroll.js'), array("jquery"), "1.0.1", true);
		wp_enqueue_script("newone_bootstap_css", get_theme_file_uri('/js/custom.js'), array("jquery"), "1.0.1", true);

		wp_enqueue_script("mainjs", get_theme_file_uri('/js/main.js'), array("jquery"), "1.0.1", true);
	}
	add_action("wp_enqueue_scripts", 'newone_assets');

	
function register_new_class(){
	require_once get_template_directory() . '/lib/new_class.php';
}
add_action( 'after_setup_theme', 'register_new_class' );


	

?>