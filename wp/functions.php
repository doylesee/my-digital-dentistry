<?php

/* Set the content width based on the theme's design and stylesheet. */
if ( ! isset( $content_width ) )
	$content_width = 1128;

/* Tell WordPress to run atheme_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'atheme_setup' );

if ( ! function_exists( 'atheme_setup' ) ):
function atheme_setup() {
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
	// This theme uses post thumbnails
	// IMP: ADD/REMOVE more image size as required BEFORE starting implementation.
	add_theme_support( 'post-thumbnails' );
	add_image_size('section_1_image',645,639,false);
	add_image_size('section_2_image',951,563,false);
	add_image_size('section_3_image',1105,580,false);
	add_image_size('section_4_col_1_image',551,505,false);
	add_image_size('section_4_col_2_image',546,504,false);
	add_image_size('section_5_image',747,566,false);

	// This theme uses wp_nav_menu() in two location.
	// IMP: ADD/REMOVE more nav if needed.
	register_nav_menus( array(
		'header-menu' => __( 'Header Menu', 'atheme' ),
	) );
}
endif;

// Add class to body
function add_body_class( $classes ) {
  global $post;

  if( isset( $post ) ) {
    $classes[] = $post->post_type.'-'.$post->post_name;
  }
  return $classes;
}
add_filter('body_class', 'add_body_class');

?>