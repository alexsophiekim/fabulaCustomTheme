<?php get_header(); ?>

    <div class="container my-3">
        <div class="row">

            <?php if (has_post_thumbnail()): ?>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <?php if(!is_home()):?>
                        <div class="card-body">
                          <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                            <div class="row justify-content-center">
                              <h5 class="text-center my-3"><?php the_title(); ?></h5>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <?php while( have_posts() ): the_post(); ?>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="p-4 d-flex justify-content-around flex-column">
                                <?php if(is_home()): ?>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="mt-4 btn btn-outline-primary mb-3">View Details</a>
                                <?php else:?>
                                    <?php the_content(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            <?php elseif (!has_post_thumbnail()): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <div class="col-12">
                      <div class="p-4 d-flex justify-content-around flex-column">
                          <?php if(is_home()): ?>
                              <?php the_excerpt(); ?>
                              <a href="<?php the_permalink(); ?>" class="mt-4 btn btn-outline-primary mb-3">View Details</a>
                          <?php else:?>
                              <?php the_content(); ?>
                          <?php endif; ?>
                      </div>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>
