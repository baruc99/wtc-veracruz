
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
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $branding['favicon']; ?>">

    <!-- Apple -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- scrips -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- tipografia -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">


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
    <?php 
      $branding = get_option("themeoption_branding");
	    $general_settings = get_option("themeoption_configuration_general");
      $newPhone =  inputTelephoneFormat($general_settings['phone']);
    ?>

    
    <header class="up-menu">
      <div class="wrapper-header">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-6">
              <?php if(isset($general_settings['phone']) && !empty($general_settings['phone'])){ ?>
                  <a href="tel:<?php echo $newPhone ?>" >
                    Tel. <?php echo $general_settings['phone']?>
                  </a>
                <?php }?>
            </div>
            <!-- <div class="col-md-2 d-none d-sm-block"></div> -->
            <div class="col-md-6 col-6 alignLogos">
            <?php if(isset($branding['twitter-url']) && !empty($branding['twitter-url'])){ ?>
                <a href="<?php echo $branding['twitter-url']; ?>" target="_blank">
                  <img class="logo-header" src="<?php echo get_template_directory_uri();?>/images/social-red/twitter-vino.png" alt="logo twiter">
                </a>
              <?php }?>
              <?php if(isset($branding['facebook-url']) && !empty($branding['facebook-url'])){ ?>
                <a href="<?php echo $branding['facebook-url']; ?>" target="_blank">
                  <img class="logo-header" src="<?php echo get_template_directory_uri();?>/images/social-red/facebook-vino.png" alt="logo facebook">
                </a>
              <?php }?>
              <?php if(isset($branding['instagram-url']) && !empty($branding['instagram-url'])){ ?>
                <a href="<?php echo $branding['instagram-url']; ?>" target="_blank">
                  <img class="logo-header" src="<?php echo get_template_directory_uri();?>/images/social-red/instagram-vino.png" alt="logo instagram">                  
                </a>    
              <?php }?>         
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="<?php echo( home_url() )  ?>">
            <img src="<?php echo $branding['logo-principal']; ?>" class="heightLogo" alt="Logo Principal">
          </a>
          <button id="responsive-menu-button" class="navbar-toggler borderOrange" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <ion-icon class="orangeColor" name="menu-outline"></ion-icon>
          </button>
  
          <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
            <?php
                    wp_nav_menu( array(
                      'menu' => 'Main Menu',
                      'menu_class' => 'nav nav-menu d-print-none menu-responsivo',
                      'container_id' => 'main-menu',
                      'current_class' => 'current-menu-item'
                    ));
              ?>
          </div>
        </nav>
      </div>

    </header>
    
<body>
    <div class="wrapper down-content">