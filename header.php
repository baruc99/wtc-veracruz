
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js"><head>
	<title><?php echo is_front_page() ? get_bloginfo('name') : wp_title('') ." | ". get_bloginfo('description'); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <?php
      $branding = get_option("themeoption_branding");
      $configuration_theme = get_option("themeoption_general_setting");
   ?>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Icons -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon-32x32.png">

    <!-- Apple -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- FB / 560x560 -->
    <?php if(!is_home() && !is_archive()){ ?>
        <meta property="og:title" content="<?php echo get_the_title(); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="<?php echo get_img_feed($post->ID); ?>" />
        <meta property="og:url" content="<?php  echo get_permalink(); ?>" />
        <meta property="og:description" content="<?php echo get_the_title(); ?>" />
        <meta property="fb:admins" content="100000759628852" />
    <?php }else if(is_post_type_archive()){ ?>
      <meta property="og:title" content="<?php echo post_type_archive_title(); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/og.png" />
        <meta property="og:image:width" content="2000">
        <meta property="og:image:height" content="1500">
        <meta property="og:url" content="<?php  echo get_post_type_archive_link(); ?>" />
        <meta property="og:description" content="content" />
        <meta property="fb:admins" content="100000759628852" />
    <?php
    }else{ ?>
      <meta property="og:title" content="<?php bloginfo('name') ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/og.png" />
        <meta property="og:image:width" content="2000">
        <meta property="og:image:height" content="1500">
        <meta property="og:url" content="<?php  bloginfo('url'); ?>" />
        <meta property="og:description" content="content" />
        <meta property="fb:admins" content="100000759628852" />
    <?php } ?>

    <!-- Twitter / 560x300 -->
    <?php if(!is_home() && !is_archive()){ ?>
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@webpage" />
        <meta name="twitter:creator" content="@webpage" />
        <meta name="twitter:image" content="<?php echo get_img_feed($post->ID); ?>" />
        <meta name="twitter:url" content="<?php  echo get_permalink(); ?>" />
        <meta name="twitter:title" content="<?php echo get_the_title(); ?>" />
        <meta name="twitter:description" content="<?php echo get_the_title(); ?>" />
    <?php }else if(is_post_type_archive()){ ?>
      <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@webpage" />
        <meta name="twitter:creator" content="@webpage" />
        <meta property="twitter:image" content="<?php bloginfo('template_url'); ?>/images/og.png" />
        <meta property="twitter:url" content="<?php  echo get_post_type_archive_link(); ?>" />
      <meta property="twitter:title" content="<?php echo post_type_archive_title(); ?>" />
        <meta property="twitter:description" content="content" />
    <?php }else{ ?>
      <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@webpage" />
        <meta name="twitter:creator" content="@webpage" />
        <meta property="twitter:url" content="<?php  bloginfo('url'); ?>" />
      <meta property="twitter:title" content="<?php bloginfo('name') ?>" />
        <meta property="twitter:description" content="content" />
    <?php } ?>
    <?php wp_head(); ?>
</head>

    <header>
      <div class="wrapper-header">
        <div class="container">
          <div class="row">
            <div class="col">
              <p>Tel. 229 923 0300</p>
            </div>
            <div class="col-8">

            </div>
            <div class="col alignLogos">
              <a href="https://twitter.com/home?lang=es" target="_blank">
                <img class="logo-header" src="<?php echo get_template_directory_uri();?>/images/social-red/twitter-vino.png" alt="logo twiter">
              </a>
              <a href="https://www.facebook.com/" target="_blank">
                <img class="logo-header" src="<?php echo get_template_directory_uri();?>/images/social-red/facebook-vino.png" alt="logo facebook">
              </a>
              <a href="https://www.instagram.com/" target="_blank">
                <img class="logo-header" src="<?php echo get_template_directory_uri();?>/images/social-red/instagram-vino.png" alt="logo instagram">                  
              </a>             
            </div>
          </div>
        </div>

      </div>
      <nav class="container navbar" id="wrapper-menuheader">
        <div class="row sizeHeader">
          <div class="col-4 centrarmenu"> 
            <a href="#" class="navbar-brand">
              <img src="<?php echo get_template_directory_uri();?>/images/logo.png" class="" alt="Logo Principal">
            </a>
          </div>
          <div class="col centrarmenu">
            <?php
                  wp_nav_menu( array(
                    'menu' => 'Main Menu',
                    'menu_class' => 'nav nav-menu-header d-print-none',
                    'container_id' => 'navigation',
                  //   'container_class' => 'collapse navbar-collapse navbar-ex1-collapse'
                  ));
            ?>
          </div>
        </div>
      </nav>  
    </header>
    
<body>
    <div class="wrapper">