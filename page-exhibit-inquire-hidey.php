  <?php get_header(); ?>

  <div class="container exhibit-inquire" id="main">

    <div class="fluid-width"> 
    <div class="inner-block row">
       
        <section class="row">
        <article class="twelve columns">

        <!-- Quick Links in Mobile -->
        <div id="sidebar" class="row">
          <?php get_template_part('inc/quick-links'); ?> 
        </div>        
        <style>

        </style>

          <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?>
            <h2>Exhibit/Inquire</h2>
            <h1>Lorem ipsum dolor sit amet</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor tincidunt est ut viverra. Fusce leo ante, dignissim posuere semper ac, lobortis in turpis. Nam vitae egestas risus. Cras malesuada, urna sit amet hendrerit pellentesque, neque nulla consequat elit, in molestie odio diam at est. Nulla feugiat turpis erat, sed placerat arcu auctor eu. Vestibulum imperdiet consectetur mi ac malesuada.</p>
            
            <div class="button-area">
              <div class="label">I'm new. I want information about exhibiting </div>
              <div class="light-green-button centered-button"><a href="">Tell me more</a></div>
              <div class="label">I want to apply to exhibit/request a contract</div>
              <div class="dark-green-button centered-button"><a href="">Returning exhibitors</a></div>     
            </div>

          <?php endwhile; ?>

          <?php endif; ?>

        </article>
       
      </section>

          
          </div>
      </div>
      <?php get_sidebar(); ?>
  </div>

  <?php get_footer(); ?>   