<?php 
//Basic Setting 
function clean_default_function(){
	add_theme_support('title_tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
	add_theme_support('custom-header');

} 
add_action('after_setup_theme','clean_default_function');
//Include stylesheet and JavaScript all file 
include_once('include/jquary_css.php');

// Image Crop resize 
add_image_size('blogimage',970,250 ,true);

//Menu Dynamic 
function theme_menu(){
	register_nav_menus(array(
		'menu_name'=>'Main Menu'
	));
}
add_action('init','theme_menu');

function default_menu(){
		echo '<ul class="nav navbar-nav navbar-right">';		
		
		if ('page' != get_option('show_on_front')) {
		echo '<li><a href="'. site_url() . '/">Home</a></li>';			
		}
		wp_list_pages('title_li=');
		
		echo '</ul>';
}

function moderna_footer_widget(){
	register_sidebar(array(
		'name'=>'Footer Widgets',
		'id'=>'footer_wid',
		'description'=>'Developed by:CodingAvatar Inc. ',
		'before_widget'=>'<div class="lft_con">	',
		'after_widget'=>'',
		'before_title'=>'',
		'after_title'=>'</div>',
	
	));	
}
add_action('widgets_init','moderna_footer_widget');

function pupolar_post(){
register_sidebar(array(
		'name'=>'POPULAR POST',
		'id'=>'pupolarpost',
		'description'=>' ',
		'before_widget'=>' <div class="rght_cont"> ',
		'after_widget'=>'',
		'before_title'=>'',
		'after_title'=>'</div>',
	
	));
}
add_action('widgets_init','pupolar_post');





?>