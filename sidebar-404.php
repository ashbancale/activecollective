      <aside id="sidebar" class="row">
        <?php get_template_part('inc/quick-links'); ?> 
        <div id="upcoming-shows">
        	<h4>
        		<?php echo do_shortcode("[pods name='sitesettings' field='sidebar_flex_box_title']"); ?>
        	</h4>
        	<?php echo do_shortcode("[pods name='sitesettings' field='sidebar_flex_box_text']"); ?>
        </div>

      </aside>