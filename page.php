<?php get_header();?>
    </section>
    <section>
      <div class="content">
        <div class="col-md-2">
          <div class="lft_side">
            <div class="lft_con">
              <h2>Advertise On page<strong>djvictorys.Com</strong></h2>
              <a href="#">info@djvictorys.Com</a> <a href="#">Cell: &nbsp;0123456789</a> </div>
            <div class="lft_con">
              <h2>Follow me on:</h2>
              <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-facebook-square"></i></a> <a href="#"><i class="fa fa-linkedin-square"></i></a> </div>
            <div class="lft_con">
              <h2>Search:</h2>
              <input class="form-control" type="text" placeholder="Search">
              <input class="srch_btn" value="Search" type="button">
            </div>
            <div class="lft_con">
              <h2>About me:</h2>
              <ul>
                <li><a href="#"><i class="fa fa-google-plus-square"></i> djvictorys</a></li>
                <li><a href="#"><i class="fa fa-facebook-square"></i> djvictorys</a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i> djvictorys</a></li>
              </ul>
            </div>
            <div class="lft_con">
              <h2>Archive:</h2>
              <ul>
                <li><a href="#"> jan (10)</a></li>
                <li><a href="#"> Feb (20)</a></li>
                <li><a href="#"> Mar (30)</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-7">
		<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
<div class="mid_side">
            <h2 class="mndtyr">March 24, 2016</h2>
            <div class="mid_cont">
              <h3><a href="#"><?php the_title();?></a></h3>
              	<?php the_post_thumbnail('blogimage');?>
				<?php the_content();?>
				<?php comments_template(); ?>
				<?php comments_popup_link( 'No comments yet', '1 comment', '% comments');?>
				<ul class="social">
                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
              </ul>
              </div>
			  </div>		
		<?php endwhile;?>
		<?php else:?>
			<h2>404 not found!<h2>
		<?php endif;?>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
          
          <!--<div class="mid_side">
            <h2 class="mndtyr">March 23, 2016</h2>
            <div class="mid_cont">
              <h3><a href="#">POLICE RECRUITMENT: Application Portal has been Unveiled</a></h3>
              <img src="images/Economythisweek.jpeg" alt="Economythisweek">
              <p>The Police Service Commission (PSC) has announced that the process of the recruitment of 10,000 police men as directed by President Buhari at the National Security Summit last year has commenced.<br>
                <br>
                A statement by the spokesman of Police Service Commission (PSC) Ikechukwu Ani said the Commission had on Tuesday, March 22nd in Abuja unveiled the internet website portal for the recruitment.</p>
              <a href="#">CONTINUE >> </a> </div>
            <div class="mid_cont">
              <h3><a href="#">POLICE RECRUITMENT: Application Portal has been Unveiled</a></h3>
              <img src="images/Economythisweek.jpeg" alt="Economythisweek">
              <p>The Police Service Commission (PSC) has announced that the process of the recruitment of 10,000 police men as directed by President Buhari at the National Security Summit last year has commenced.<br>
                <br>
                A statement by the spokesman of Police Service Commission (PSC) Ikechukwu Ani said the Commission had on Tuesday, March 22nd in Abuja unveiled the internet website portal for the recruitment.</p>
              <a href="#">CONTINUE >> </a> </div>
            <div class="mid_cont">
              <h3><a href="#">POLICE RECRUITMENT: Application Portal has been Unveiled</a></h3>
              <img src="images/Economythisweek.jpeg" alt="Economythisweek">
              <p>The Police Service Commission (PSC) has announced that the process of the recruitment of 10,000 police men as directed by President Buhari at the National Security Summit last year has commenced.<br>
                <br>
                A statement by the spokesman of Police Service Commission (PSC) Ikechukwu Ani said the Commission had on Tuesday, March 22nd in Abuja unveiled the internet website portal for the recruitment.</p>
              <a href="#">CONTINUE >> </a> </div>
            <div class="mid_cont">
              <h3><a href="#">POLICE RECRUITMENT: Application Portal has been Unveiled</a></h3>
              <img src="images/Economythisweek.jpeg" alt="Economythisweek">
              <p>The Police Service Commission (PSC) has announced that the process of the recruitment of 10,000 police men as directed by President Buhari at the National Security Summit last year has commenced.<br>
                <br>
                A statement by the spokesman of Police Service Commission (PSC) Ikechukwu Ani said the Commission had on Tuesday, March 22nd in Abuja unveiled the internet website portal for the recruitment.</p>
              <a href="#">CONTINUE >> </a> </div>
          </div>-->
        </div>
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
      </div>
    </section>
  </div>
</div>
<?php wp_footer();?>
</body>
</html>