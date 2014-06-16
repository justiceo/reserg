<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" >
   

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

   <?php wp_enqueue_script("jquery"); ?>
   <?php wp_head(); ?>
  </head>

  <body>
    
    <header>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo site_url(); ?>"><strong><?php bloginfo('name'); ?></strong><span class="separator">|</span><span class="tagline"><small><em><?php bloginfo_rss('description')?></em></small></span></a>
          <div class="nav-collapse collapse">       
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav pull-right' ) ); ?>
          </div> <!--/.nav-collapse-->
        </div>
      </div>
    </div>

        </header>

    <div class="container">