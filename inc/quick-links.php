        <div class="quicklinks clearfix">
          <a class="attend" href="<?php echo do_shortcode("[pods name='sitesettings' field='attendee_registration_link']"); ?>" <?php if(do_shortcode("[pods name='sitesettings' field='attendee_registration_link_target']") == "Yes") { echo 'target="_blank"'; } ?>>Register to Attend</a>
          <a class="exhibit" href="<?php echo do_shortcode("[pods name='sitesettings' field='exhibitor_inquiry_link']"); ?>" <?php if(do_shortcode("[pods name='sitesettings' field='exhibit_inquire_link_target']") == "Yes") { echo 'target="_blank"'; } ?>>Exhibit/Inquire</a>
          <div class="exhibitorlist">
            <i class="fa fa-map-marker" aria-hidden="true" style="color:#414d5f;font-size:18px;"></i><a class="exhibitorlist" href="<?php echo do_shortcode("[pods name='sitesettings' field='exhibitor_list_link']"); ?>" <?php if(do_shortcode("[pods name='sitesettings' field='exhibitor_list_link_target']") == "Yes") { echo 'target="_blank"'; } ?>>Exhibitor List</a>
          </div>
          <div class="floorplan">
            <i class="fa fa-list-ul" aria-hidden="true" style="color:#414d5f;font-size:18px;"></i> <a class="floorplan" href="<?php echo do_shortcode("[pods name='sitesettings' field='floor_plan_link']"); ?>" <?php if(do_shortcode("[pods name='sitesettings' field='floor_plan_link_target']") == "Yes") { echo 'target="_blank"'; } ?>>Floor Plan</a>
          </div>
        </div>