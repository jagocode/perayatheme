<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
   <?php wp_head();?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
  <div class="container">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="<?php images('perayalogo.png');?>" height="30"></img>
      </a>
    </div>
    
     <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    
    
  </div>
</nav>
<!-- End Navbar -->
<!-- Banner -->
<div class="banner">
    
</div>
<!-- End Banner -->
<!-- Feature -->
<div class="feature">
    
    <div class="container">
        <div class="feature-title">
            <h1>Kenapa Harus Kami?</h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="<?php images('mentor.png');?>"></img>
                    </div>
                    <div class="feature-description">
                        <h4>Mentor Berpengalaman</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Feature -->

    <?php wp_footer();?>
  </body>
</html>