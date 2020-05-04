<?php

wp_enqueue_style( 'style', get_stylesheet_uri() );

add_action( 'init', 'add_nav_menu' );
function add_nav_menu(){
	register_nav_menu( 'header-menu', 'Header Menu' );
}

register_sidebar( array(
	'name' => 'Footer left',
	'id' => 'footer_left_sidebar',
	'description' => 'Widgets placed here will appear in the left footer',
	'before_widget' => '<div class=" sidebar-widget footer-left-sidebar-widget ">',
	'after_widget' => '</div> <!-- .footer.left-sidebar-widget -->',
	'before_title' => '<h3 class="widget_title">',
	'after_title' => '</h3>'
) );

register_sidebar( array(
	'name' => 'Footer Middle',
	'id' => 'footer_middle_sidebar',
	'description' => 'Widgets placed here will appear in the middle footer',
	'before_widget' => '<div class="sidebar-widget footer-middle-sidebar-widget">',
	'after_widget' => '</div> <!-- .footer-middle-sidebar-widget -->',
	'before_title' => '<h3 class="widget_title">',
	'after_title' => '</h3>'
) );

register_sidebar( array(
	'name' => 'Footer Right',
	'id' => 'footer_right_sidebar',
	'description' => 'Widgets placed here will appear in the right sidebar',
	'before_widget' => '<div class="sidebar-widget footer-right-sidebar-widget">',
	'after_widget' => '</div> <!-- .footer-right-sidebar-widget -->',
	'before_title' => '<h3 class="widget_title">',
	'after_title' => '</h3>'
) );

?>
