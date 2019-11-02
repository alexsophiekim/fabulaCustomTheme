<?php
    /*
        Template Name: Text Template
        Template Post Type: page,post
    */
 ?>

<?php get_header(); ?>

<div class="about-bg">
  <div class="container">
    <div class="row">
        <div class="col-12 my-3">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                        <h2 class="display-3 text-center my-4"><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
</div>

<?php get_footer(); ?>
