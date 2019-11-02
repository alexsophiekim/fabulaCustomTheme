<?php get_header(); ?>

  <?php if (have_posts()): ?>
    <div class="container mx-auto">
      <div class="row slideBox">
        <div id="carouselExampleIndicators" class="carousel slide slideBox" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner position-relative">
            <p class="h1 contentText text-center position-absolute z-index"><?php echo get_theme_mod('fabula_contentText'); ?></p>
            <div class="carousel-item active">
              <img class="d-block w-100 slideImg" src="<?php echo esc_url( get_theme_mod( 'fabula_contentImg_1' ) ); ?>" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 slideImg" src="<?php echo esc_url( get_theme_mod( 'fabula_contentImg_2' ) ); ?>" alt="Second slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="row justify-content-center">
        <?php while(have_posts()): the_post(); ?>
            <div class="col-12 col-md-4 my-4">
             <?php if (the_post_thumbnail('medium', ['class' => 'img-fluid'])): ?>
                <div class="card-body">
                  <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <p class="card-text"><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Details</a>
                </div>
                <?php else: ?>
              <?php endif; ?>
          <div class="col">
            <div>
                <?php if( !is_singular() ): ?>
                    <?php the_excerpt() ; ?>
                <?php else: ?>
                    <?php the_content(); ?>
                <?php endif; ?>
            </div>
          </div>
          <?php if( !is_singular() ): ?>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Details</a>
          <?php endif; ?>
          </div>
        <?php endwhile; ?>
        </div>
    </div>
  </div>
  <?php endif; ?>

<?php get_footer(); ?>
