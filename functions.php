<?php

// Include php files
include get_theme_file_path('/includes/shortcodes.php');

// Enqueue needed scripts
function needed_styles_and_scripts_enqueue() {

    // Add-ons


    // Custom script
    wp_enqueue_script( 'wpbs-custom-script', get_stylesheet_directory_uri() . '/assets/javascript/script.js' , array( 'jquery' ) );

    // enqueue style
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );


}
add_action( 'wp_enqueue_scripts', 'needed_styles_and_scripts_enqueue' );

function cc_mime_types($mimes) {
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


add_filter( 'widget_text', 'do_shortcode' );

//Dynamic Year
function site_year(){
	ob_start();
	echo date( 'Y' );
	$output = ob_get_clean();
    return $output;
}
add_shortcode( 'site_year', 'site_year' );

//
// Your code goes below
//
register_nav_menus( array(
  'primary' => esc_html__( 'Primary', '3dpx-bootstrap' ),
  'header' => esc_html__( 'Header' , '3dpx-bootstrap' ),
  'footer_1' => esc_html__( 'Footer 1', '3dpx-bootstrap' ),
  'footer_2' => esc_html__( 'Footer 2', '3dpx-bootstrap' ),
  'footer_3' => esc_html__( 'Footer 3', '3dpx-bootstrap' )
) );

function threedpx_bootstrap_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', '3dpx-bootstrap-starter' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', '3dpx-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 0', '3dpx-bootstrap-starter' ),
        'id'            => 'footer-0',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', '3dpx-bootstrap-starter' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', '3dpx-bootstrap-starter' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', '3dpx-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', '3dpx-bootstrap-starter' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', '3dpx-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 4', '3dpx-bootstrap-starter' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here.', '3dpx-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 5', '3dpx-bootstrap-starter' ),
        'id'            => 'footer-5',
        'description'   => esc_html__( 'Add widgets here.', '3dpx-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'threedpx_bootstrap_widgets_init' );

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
 return '<a class="moretag" href="'. get_permalink($post->ID) . '"> <br/>Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*********************************/
/* Change Search Button Text
/**************************************/

function html5_search_form( $form ) { 
    $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
   
    <input type="search" class="search-text" value="' . get_search_query() . '" name="s" id="s" placeholder="Enter your question or keywords" />
    <input type="submit" class="search-submit" id="searchsubmit" value="'. esc_attr__('GO!', 'domain') .'" />
    </form></section>';
    return $form;
}

add_filter( 'get_search_form', 'html5_search_form' );