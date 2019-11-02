<?php if(has_nav_menu( 'footer_nav' )): ?>
  <footer class="text-white p-2">
      <div class="container">
          <div class="row justify-content-center">
              <?php wp_nav_menu( array(
                  'theme_location' => 'footer_nav',
                  'container'      => '',
                  'menu_class'     => 'footerNav',
                  'walker'         => new WP_Bootstrap_Navwalker(),
              )); ?>
          </div>
          <?php if (get_theme_mod('fabula_theme_copyright')): ?>
                <p class="text-center"><?php echo get_theme_mod('fabula_theme_copyright') ?></p>
          <?php endif; ?>
      </div>
  </footer>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
