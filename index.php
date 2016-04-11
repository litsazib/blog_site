<?php get_header();?>
    </section>
    <section>
      <div class="content">
        <div class="col-md-2">
          <div class="lft_side">
            <div class="lft_con">
              <h2>Advertise On <strong>djvictorys.Com</strong></h2>
              <a href="#">info@djvictorys.Com</a> <a href="#">Cell: &nbsp;0123456789</a> </div>
            <div class="lft_con">
              <h2>Follow me on:</h2>
              <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-facebook-square"></i></a> <a href="#"><i class="fa fa-linkedin-square"></i></a> </div>
            <div class="lft_con">
			<form role="search" method="get" id="searchform"
				class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div>
					<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
					<!--<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />-->
					<!--<input type="submit" id="searchsubmit"
						value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />-->
						
						
				<h2>Search:</h2>
              <input class="form-control" type="text" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" id="s">
              <input class="srch_btn" value="Search" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" >
				</div>
			</form>
			
			

            </div>
            <div class="lft_con">
              <h2>About me:</h2>
              <ul>
                <li><a href="<?php echo $google;?>"><i class="fa fa-google-plus-square"></i> djvictorys</a></li>
                <li><a href="<?php echo $facebook;?>"><i class="fa fa-facebook-square"></i> djvictorys</a></li>
                <li><a href="<?php echo $in;?>"><i class="fa fa-linkedin-square"></i> djvictorys</a></li>
              </ul>
            </div>
            <div class="lft_con">	
			<?php dynamic_sidebar( 'footer_wid' ) 	;?>

             <!-- <h2>Archive:</h2>	-->
  
              <!--<ul>
                <li><a href="#"> jan (10)</a></li>
                <li><a href="#"> Feb (20)</a></li>
                <li><a href="#"> Mar (30)</a></li>
              </ul>-->
            </div>
          </div>
        </div>
        <div class="col-md-7">
		<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
			<?php
					$google=get_post_meta($post->ID,'google_link',true);
					$facebook=get_post_meta($post->ID,'facebook_link',true);
					$in=get_post_meta($post->ID,'linkedin_link',true);
			?>
		<div class="mid_side">
            <h2 class="mndtyr"><?php the_time('M d y')?></h2>            
            <div class="mid_cont">
              <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
              	<?php the_post_thumbnail('blogimage');?>
				<?php the_excerpt('30'); ?>              
              <a href="<?php echo  the_permalink(); ?>">CONTINUE >> </a> 
              <ul class="social">
                <li><a href="<?php echo $google;?>"><i class="fa fa-google-plus-square"></i></a></li>
                <li><a href="<?php echo $facebook;?>"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="<?php echo $in;?>"><i class="fa fa-linkedin-square"></i></a></li>
              </ul>			  
              </div> 
          </div>	  
		<?php endwhile;?>
			<div class="col-md-12"> 
			<div class="mid_side"><div class="navigation"><p><?php posts_nav_link('&#8734;','&laquo;&laquo; PreviesPost','NextPost &raquo;&raquo;'); ?></p></div></div>		
		</div>	
		<?php else:?>
			<h2>404 not found!<h2>
		<?php endif;?>		
        </div>
	
		
		
		
		
		
        <div class="col-md-3">
          <div class="rght_side">
            <h2 class="mndtyr">POPULAR POSTS >></h2>
            <div class="rght_cont"> 
			
<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
<img class="img-responsive img-thumbnail" src="<?php echo get_stylesheet_directory_uri();?>/images/Economythisweek.jpeg" alt="Economythisweek">
<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
<p><?php the_excerpt('10'); ?> <br>	  		  
		<?php endwhile;?>
		<?php else:?>
			<h2>404 not found!<h2>
		<?php endif;?>				
            </div>


          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php wp_footer();?>
</body>
</html>