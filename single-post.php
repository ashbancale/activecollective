  <?php get_header(); ?>

  <div class="container open-template" id="main">

    <div class="fluid-width"> 
    <div class="inner-block row">
       
        <section class="row">
        <article class="twelve columns">

        <!-- Quick Links in Mobile -->
        <div id="sidebar" class="row">
          <?php get_template_part('inc/quick-links'); ?> 

        </div>        

          <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <?php
                //Chck for featured image
                $image = get_the_post_thumbnail(get_the_ID()); 

                if ( has_post_thumbnail(get_the_ID()) ) { ?>   
                  <img class="articleImage" src="<?php the_post_thumbnail_url( 'full' ); ?>" border="0"
                            <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                alt="<?php the_post_thumbnail_alt(get_the_ID()); ?>"
                                <?php } ?>
                            />
                <?php } 
                //endif; 
                ?>                               

          <?php the_content(); ?>       

          <?php endwhile; ?>

          <?php endif; ?>

        </article>
       
      </section>

          
          </div>
      </div>
      <?php get_sidebar(); ?>
  </div>

  <?php get_footer(); ?>   