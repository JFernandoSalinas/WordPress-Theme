    <?php get_header(); ?>

          <div class="row">

            <div class="col-sm-8 blog-main">
              <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

              <div class="blog-post">
                <h2 class="blog-post-title">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_Title() ?>
                  </a>
                </h2>

                <p class="blog-post-meta">
                  <?php the_date(); ?>
                  <?php the_time(); ?>
                  <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                    <?php the_author(); ?>
                  </a>
                </p>
                <?php if(has_post_thumbnail()) : ?>
                  <div class="post-thumb">
                   <?php the_post_thumbnail(); ?>
                  </div>
                 <?php endif; ?> 
                <?php the_excerpt(); ?>
              </div><!-- /.blog-post -->
                <?php endwhile; ?>
              <?php  else : ?>
                <p><?php __('No Posts Found'); ?> </p>
              <?php endif; ?>

             

            </div><!-- /.blog-main -->

      <?php get_footer(); ?> 