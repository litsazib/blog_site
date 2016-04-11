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


function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}


?>