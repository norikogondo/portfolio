<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php  body_class(); ?>>
<header class="site-header">
    <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </h1>

      <img src="<?php echo get_template_directory_uri(); ?>/images/open.png" alt="OPEN" class="open" id="open_btn">

      <div class="site-navigation">
      <img src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="CLOSE" class="close" id="close_btn">
      
        <?php
          wp_nav_menu( array(
              'theme_location'    =>  'menu_main',
              'container'         =>  'nav',
              'container_class'   =>  'menu-main'
          ) );
        ?>
      </div>
      <div class="side-social-menu">
        <?php
            wp_nav_menu( array(
                'theme_location'    =>  'menu_social',
                'container'         =>  'nav',
                'container_class'   =>  'menu-social',
                'link_before'   =>  '<span>',
                'link_after'   =>  '</span>'
            ) );
        ?>
      </div>
    </header>

    <main id="main" class="site-main">