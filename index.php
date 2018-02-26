<?php 

/**  Template Name: Home Template */ 

?>
  <?php get_header(); ?>

  <section id="splash">
    <div id="slider clearfix"> 
     <?php $splashImage = get_field('splash_image'); ?>
          <img src="<?php echo $splashImage['url']; ?>"
          <?php if (!empty($splashImage['alt'])) { ?>
              alt="<?php echo $splashImage['alt']; ?>"
              <?php } ?>
          /> 
    </div> 
  </section>
  
  <div class="container homepage" id="main">

    <div class="fluid-width"> 
    <div class="inner-block row">
       
        <section class="row">
        <article class="twelve columns">

          <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?>
                               
          <div class="intro-lead">
            <?php the_field('intro_lead'); ?>
          </div>
          <div class="intro-body">
            <?php the_content(); ?> 
          </div>

          <?php endwhile; ?>

          <?php endif; ?>

        </article>
       
      </section>

          
          </div><!-- end inner-block -->
      </div><!-- end fluid width -->

      <aside id="sidebar" class="row">
        <?php get_template_part('inc/quick-links'); ?> 
      </aside>
      

   </div><!-- end container -->

   <div class="full-container">
    <?php echo do_shortcode("[new_royalslider id='2']"); ?>
  </div>

    <?php get_footer(); ?>   