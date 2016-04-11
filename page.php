<?php get_header();?>
    </section>
    <section>
      <div class="content">
        <div class="col-md-3">
          <div class="rght_side">
            <h2 class="mndtyr">POPULAR POSTS >></h2>
            <div class="rght_cont"> 
            <img class="img-responsive img-thumbnail" src="images/Economythisweek.jpeg" alt="Economythisweek">
              <h3><a href="#">POLICE RECRUITMENT: Application Portal has been Unveiled</a></h3>
              <p>The Police Service Commission (PSC) has announced that the process of the recruitment...<br>
            </div>
            <div class="rght_cont"> <img class="img-responsive img-thumbnail" src="images/Economythisweek.jpeg" alt="Economythisweek">
              <h3><a href="#">POLICE RECRUITMENT: Application Portal has been Unveiled</a></h3>
              <p>The Police Service Commission (PSC) has announced that the process of the recruitment...<br>
            </div>
            <div class="rght_cont"> <img class="img-responsive img-thumbnail" src="images/Economythisweek.jpeg" alt="Economythisweek">
              <h3><a href="#">POLICE RECRUITMENT: Application Portal has been Unveiled</a></h3>
              <p>The Police Service Commission (PSC) has announced that the process of the recruitment...<br>
            </div>
          </div>
        </div>
		
        <div class="col-md-9">
		<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
<div class="mid_side">
            <h2 class="mndtyr"><?php wp_title();?></h2>
            <div class="mid_cont">
              <h3><a href="#"><?php the_title();?></a></h3>
              	<?php the_post_thumbnail('blogimage');?>
				<?php the_content();?>
				<?php comments_template(); ?>
              </div>
			  </div>		
		<?php endwhile;?>
		<?php else:?>
			<h2>404 not found!<h2>
		<?php endif;?>	
        </div>
      </div>
    </section>
  </div>
</div>
<?php wp_footer();?>
</body>
</html>