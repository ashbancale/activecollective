<?php get_header(); ?>

  <div class="container error-block" id="main">

    <div class="fluid-width"> 
    <div class="inner-block row">
       
        <section class="row">
        <article class="twelve columns">

        <!-- Quick Links in Mobile -->
        <div id="sidebar" class="row">
          <?php get_template_part('inc/quick-links'); ?> 

        </div>        

					<h1>404 Page not Found</h1>                                            
					<h2>Sorry, the page you were looking for doesn't exist.</h2>
					<p>Please try the link below or use the search above to help find your way<br/><br/>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>site-map">Site Map</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact Us</a></p><br />
					<p>If you followed a broken link, <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">please let us know</a> where the broken link came from.</p>
				</article>
			</section>
		</div>
	</div>     
    <?php include 'sidebar-404.php'; ?>      
  </div>
  <?php get_footer(); ?> 