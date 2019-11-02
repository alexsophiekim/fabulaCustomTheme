<?php
    /*
        Template Name: Soap Template
        Template Post Type: page
    */
 ?>

<?php get_header(); ?>

  <div class="container">
    <div class="row">
        <div class="col-12 my-3">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                  <div class="card" style="width: 18rem;">

                    <div class="card-body">
                      <h5 class="card-title"><?php the_title(); ?></h5>
                      <p class="card-text"><?php the_content(); ?></p>
                      <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Details</a>
                    </div>
                  </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
      </div>
</div>

<?php get_footer(); ?>
