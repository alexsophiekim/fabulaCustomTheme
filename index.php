<?php get_header(); ?>

  <div class="container">
      <div class="row">
        <?php if(has_nav_menu('side_nav')): ?>
          <nav class="nav nav-pills flex-column flex-sm-row">
                  <?php wp_nav_menu(array(
                      'theme-location' => 'side_nav',
                      'menu_class' => 'list-group list-group-flush',
                      'container' => '',
                      'menu_id' => 'sideNav'
                  )); ?>
            </nav> 
          <?php endif; ?>
      </div>
  </div>

<?php get_footer(); ?>
