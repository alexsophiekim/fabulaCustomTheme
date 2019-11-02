<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><<?php echo get_bloginfo('name'); ?></title>
      <?php wp_head(); ?>
  </head>
  <body>
    <?php if (has_nav_menu('top_nav')): ?>
    <nav class="navbar navbar-expand-md navbar-light bg-light d-flex navColour" role="navigation">
         <button class="navbar-toggler toggleBtn" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
           <?php  the_custom_logo('fabulaLogo'); ?>
             <?php  if (!has_custom_logo()):  ?>
                   <h1 style="text-align:center;"><?php bloginfo('name'); ?></h1>
             <?php endif;  ?>
                      <?php
                          wp_nav_menu( array(
                              'theme_location'    => 'top_nav',
                              'depth'             => 2,
                              'container'         => 'div',
                              'container_class'   => 'collapse navbar-collapse',
                              'container_id'      => 'top_nav',
                              'menu_class'        => 'nav navbar-nav',
                              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                              'walker'            => new WP_Bootstrap_Navwalker(),
                          ) );
                      ?>
                  </div>
              </nav>
          <?php endif; ?>
