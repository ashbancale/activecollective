<?php 

/**  Template Name: Home Template */ 

?>
  <?php get_header(); ?>

  <section id="splash">
    <div id="slider clearfix"> 
    <?php if (!empty(get_field('splash_link'))) { ?>
    <a href="<?php the_field('splash_link'); ?>">
     <?php $splashImage = get_field('splash_image'); ?>
          <img src="<?php echo $splashImage['url']; ?>"
          <?php if (!empty($splashImage['alt'])) {
              echo 'alt="'.$splashImage['alt'].'"';
          } ?>
          /> 
    </a>
    <?php } else { ?>

     <?php $splashImage = get_field('splash_image'); ?>
          <img src="<?php echo $splashImage['url']; ?>"
          <?php if (!empty($splashImage['alt'])) {
              echo 'alt="'.$splashImage['alt'].'"';
          } ?>
          />     
    <?php } ?>    
    
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
      <div id="new-royalslider-2" class="royalSlider new-royalslider-2 rsDefaultInv visibleNearbySimple ace" style="width:1920 px;height:420px;;">

          <?php

            // check if the repeater field has rows of data

            if( have_rows('ad_slider') ) :

              // loop through the rows of data 

                while ( have_rows('ad_slider') ) : the_row(); ?>
                  <?php 

                  $image = get_sub_field('image');

                  ?>

                 <div class="rsContent">
                        <img class="rsImg" src="<?php echo $image['url']; ?>"
                        <?php if (!empty($image['alt'])) { ?>
                            alt="<?php echo $image['alt']; ?>"
                            <?php } ?>
                        /> 

                </div>                
                                                                   

                <?php 

                endwhile;

            endif; ?>  

    </div>
    </div>

    <?php get_footer(); ?>   