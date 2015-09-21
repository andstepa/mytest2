<?php

function register_my_widgets(){
	// register_sidebar( array(
	// 	'name' => sprintf(__('Sidebar %d'), $i ),
	// 	'id' => "sidebar-$i",
	// 	'description' => '',
	// 	'class' => '',
	// 	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	// 	'after_widget' => "</li>\n",
	// 	'before_title' => '<h2 class="widgettitle">',
	// 	'after_title' => "</h2>\n",
	// ) );

	register_sidebar( array(
		'name' => 'top_widget',
		'id' => "top-widget",
		'description' => '',
		'class' => '',
		// 'before_widget' => '<li id="%1$s" class="widget %2$s">',
		// 'after_widget' => "</li>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n",
	) );
}
add_action( 'widgets_init', 'register_my_widgets' );

function register_menus(){
	register_nav_menu( 'topmenu', 'top menu' );
}

add_action( 'after_setup_theme', 'register_menus' );

function load_scripts() {
	// wp_enqueue_script(
	//      'less.js'
	//     , get_bloginfo('template_directory')."/js/less.js"
	//     // ,deps
	//     // ,ver
	//     // ,in_footer
	// );
	wp_enqueue_style(
		'my_less'
		, get_bloginfo('template_directory')."/css/my.less"
	);
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

?>