  <?php get_header(); ?>

  <div class="container search-results" id="main">

    <div class="fluid-width"> 
    <div class="inner-block row">
       
        <section class="row">
        <article class="twelve columns">

        <!-- Quick Links in Mobile -->
        <div id="sidebar" class="row">
          <?php get_template_part('inc/quick-links'); ?> 

        </div>        

        <h1>Search Results</h1>

        <div id="search-page">
            <span class="label">Search</span>
        <form action="<?php bloginfo('siteurl'); ?>/" class="show" id="search-form" method="get">
        <fieldset>
        <input class="in-search" id="s" name="s" type="text" value="<?php echo wp_specialchars($wp_query->query_vars['s'], 1); ?>"><input class="search" id="searchsubmit" onclick="if(q.value =='Search') q.value =''" type="submit" value="">
        </fieldset>
        </form>
        </div>

        <p class="num-results"><?php search_results_title(); ?></p>

        <div class="search-pagination cf">

        <div class="sort-by" style="float: right;margin-bottom:10px;">

                  Sort by&nbsp;

                    <span>
                    <?php if ($_GET['orderby'] == 'relevancy' || ($_GET['orderby']) == '') {
                        echo 'relevance';
                    }
                    else {
                        echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=relevancy&order=desc">relevance</a>';
                    }
                    ?>
                      &nbsp;|</span>&nbsp;<span>
                    <?php if ($_GET['orderby'] == 'post_date' && $_GET['order'] == 'desc') {
                        echo 'newest';
                    }
                    else {
                        echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc">newest</a>';
                    }
                    ?>              
                      
                      &nbsp;|</span>&nbsp;<span>
                    <?php if ($_GET['orderby'] == 'post_date' && $_GET['order'] == 'asc') {
                        echo 'oldest';
                    }
                    else {
                        echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=asc">oldest</a>';
                    }
                    ?>              
                    </span>

        </div>

        <div class="search-nav clearfix">

            <div class="pages">

                <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                    
                    echo '<span class="page-count">Page '.$paged.' of '.$wp_query->max_num_pages.'</span>'; 

                    if(function_exists('wp_paginate')){wp_paginate();} 
                ?>

            </div>

              
        </div>

    </div>

    <ul class="search-items">

            <?php 

            // the loop 

            if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <li><a href="<?php the_permalink(); ?>" class="title"><?php relevanssi_the_title(); ?></a>
                <div class="date"><?php the_date('m/d/Y'); ?></div>
                <?php relevanssi_the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="readmore">Read More &raquo;</a>

                 </li>

            <?php endwhile;

      else :

        ?>
        

          <li><h2>We're Sorry</h2>

          <p>We couldn't find any results to display for your search term. Please try a different keyword.</p></li>

      
        <?php

        endif;

            ?>

    </ul>

    <div class="search-nav clearfix">

        <div class="pages">

            <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                
                echo '<span class="page-count">Page '.$paged.' of '.$wp_query->max_num_pages.'</span>'; 

                if(function_exists('wp_paginate')){wp_paginate();} 
            ?>

        </div>

    </div>



        </article>
       
    </section>


    <script>jQuery('ol.wp-paginate li:first-child').addClass('sp-first');</script>      

          
          </div>
      </div>
      <?php get_sidebar(); ?>
  </div>

  <?php get_footer(); ?>   