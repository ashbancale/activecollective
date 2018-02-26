   <div class="footer-container">
      <!--div class="ad-space btm-ad"-->
      <?php if(!(is_front_page())) : ?>
        <div id='activewear_728_Bottom' class="ad-script">
        <script type='text/javascript'>
        googletag.cmd.push(function() { googletag.display('activewear_728_Bottom'); });
        </script>
        </div>
      <!--/div-->   
    <?php endif; ?>
     <footer class="container row">
      <div class="nav-column">
        <div class="title"><a href="http://www.collectiveshows.com" target="_blank">Collective Shows</a></div>
        <ul>
            <li><a href="http://www.activewearcollective.com">Active - California</a>
            <li><a href="http://newyork.activewearcollective.com">Active - New York</a>
            <li><a href="http://www.swimcollective.com" target="_blank">Swim</a></li>
         </ul>       
      </div>
      <div class="footer-nav">
       <div>
        <p class="misc-links">
            <a href="http://www.collectiveshows.com/about-us" target="_blank">About Us</a> | 
            <a href="<?php bloginfo('siteurl'); ?>/contact-us">Contact Us</a> | 
            <a href="<?php bloginfo('siteurl'); ?>/site-map">Site Map</a> |
            <a href="<?php bloginfo('siteurl'); ?>/terms">Terms</a> | 
            <a href="<?php bloginfo('siteurl'); ?>/privacy">Privacy</a>
         </p>  
       </div>
         <div class="copyright">
              <p>
              &copy; <?php echo date('Y'); ?> <a href="http://www.emeraldexpositions.com" target="_blank">Emerald Expositions, LLC</a>. All rights reserved.  
              </p>         
         </div>
      </div><!-- end footer nav -->
     </footer>
   </div> <!-- end footer container -->
</div>  

<!-- End Document 
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script> 

<?php wp_footer(); ?>

<script id="new-royalslider-init-code" type="text/javascript">
jQuery(document).ready(function($) {
  $('.new-royalslider-2').royalSlider({template:'default',image_generation:{imageWidth:934,imageHeight:420,thumbImageWidth:'',thumbImageHeight:''},thumbs:{thumbWidth:96,thumbHeight:72},autoPlay:{enabled:!0},visibleNearby:{enabled:!0,hiddenOverflow:!1,centerArea:0.48,breakpoint:500,breakpointCenterArea:1,navigateByCenterClick:!0},video:{autoHideBlocks:!0,forceMaxVideoCoverResolution:'standard'},block:{moveOffset:20,speed:400,delay:200},width:'1920 px',height:'420px',autoScaleSlider:!0,autoScaleSliderWidth:1920,autoScaleSliderHeight:420,slidesSpacing:0,imageScaleMode:'fill',controlNavigation:'none',arrowsNavAutoHide:!1,loop:!0,randomizeSlides:!0,keyboardNavEnabled:!0,fadeinLoadedSlide:!1,addActiveClass:!0});
});
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58dec3393394e068"></script> 

</body>
</html>