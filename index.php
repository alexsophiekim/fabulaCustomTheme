<?php get_header(); ?>
<div class="container h-100">
  <?php if (have_posts()): ?>
    <div class="row">
      <div class="col-12">
        <?php while(have_posts()): the_post(); ?>
          <div class="card fluid">
             <?php if (the_post_thumbnail('medium', ['class' => 'img-fluid'])): ?>
               <?php if(!is_singular()): ?>
            <div class="card-body">
              <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Details</a>
            </div>
          <?php endif; ?>
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
  <?php endif; ?>
</div>


<?php get_footer(); ?>
