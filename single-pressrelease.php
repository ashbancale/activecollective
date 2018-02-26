  <?php get_header(); ?>

  <div class="container press-release" id="main">

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

        <?php if ( is_single() || is_singular() ) : ?>
          <?php
            // Setup the Pods object
            $pods = pods( get_post_type(), get_the_ID() );
          ?>

            <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>press-releases">Press Releases</a></h2>
            <h1><?php the_title(); ?></h1>
            <div class="subheader"><?php echo $pods->field( 'subheader' ); ?></div>
            <div class="date">Posted <?php the_date('m/d/Y'); ?></div>

            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_inline_share_toolbox"></div>

                              

          <?php the_content(); ?>       


          <?php endif; ?>

        <?php endwhile; ?>
        <?php endif; ?>          

        </article>
       
      </section>

          
          </div>
      </div>
      <?php get_sidebar(); ?>
  </div>

  <?php get_footer(); ?>   