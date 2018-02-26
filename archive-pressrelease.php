  <?php get_header(); ?>

  <div class="container press-archive" id="main">

    <div class="fluid-width"> 
    <div class="inner-block row">
       
        <section class="row">
        <article class="twelve columns">

        <!-- Quick Links in Mobile -->
        <div id="sidebar" class="row">
          <?php get_template_part('inc/quick-links'); ?> 

        </div>        
            <h1>Press Releases</h1>

          <?php

            $args = array(

              'posts_per_page' => 200,

              'post_type' => 'pressrelease', 
              

            );


            $get_news = new WP_Query( $args );

            if ($get_news->have_posts()) :

                echo do_shortcode('[ajax_load_more container_type="div" post_type="pressrelease" posts_per_page="10" button_label="Load More"]'); ?>


                <?php //endwhile; 

            endif; ?>     


        </article>
       
      </section>

          
          </div>
      </div>
      <?php get_sidebar(); ?>
  </div>

  <?php get_footer(); ?>   