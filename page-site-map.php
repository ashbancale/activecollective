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

                <?php wp_nav_menu(
                  array(
                    'menu'    => 'Primary Menu',
                    'container' => false,
                    'menu_class' => 'site-map',
                    'menu_id' => '',
                    )
                ); ?>     

          <?php endwhile; ?>

          <?php endif; ?>

        </article>
       
      </section>

          
          </div>
      </div>
      <?php get_sidebar(); ?>
  </div>

  <?php get_footer(); ?>   