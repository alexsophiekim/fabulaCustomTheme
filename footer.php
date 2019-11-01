<?php if(has_nav_menu( 'footer_nav' )): ?>
  <footer class="bg-dark text-white p-5 mt-5">
      <div class="container">
          <div class="row justify-content-center">
              <?php wp_nav_menu( array(
                  'theme_location' => 'footer_nav',
                  'container'      => '',
                  'menu_class'     => 'footerNav',
                  'walker'         => new WP_Bootstrap_Navwalker(),
              )); ?>
          </div>
      </div>
  </footer>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
