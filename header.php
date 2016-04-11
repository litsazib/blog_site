<?php
/**
Theme Name: DJ-Victorys
Theme URI: https://codingavatar.com
Author: GRAND SOFT TECHNOLOGY
Author URI: https://codeavater.com/
Description:DJ-Victorys Blog theme 
Version: 1.0

 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta <?php bloginfo('charset');?>>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name');?></title>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
<div class="mainwraper">
  <div class="container">
    <section>
      <header>
        <div class="logo"> <a href="#">
          <h1><a href="<?php echo site_url();?>">djvictorys.top</a></h1>
          </a> </div>
		  
        <div class="main_nav">
          <nav class="navbar navbar-default">
            <div class="container-fluid"> 
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  	<?php
						wp_nav_menu(array(
						'menu_class' => 'nav navbar-nav',
						'container' => false, 	
						'theme_location' => 'menu_name',
						'fallback_cb' => 'true', 

						));
				?>
                <!--<ul class="nav navbar-nav">
                  <li class="active"><a href="#">Entertainment</a></li>
                  <li><a href="#">Lifestyle</a></li>
                  <li><a href="#">Politricks</a></li>
                  <li><a href="#">Social Issues</a></li>
                </ul>-->
              </div>
              <!-- /.navbar-collapse --> 
            </div>
            <!-- /.container-fluid --> 
          </nav>
        </div>
		
      </header>
