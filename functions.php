<?php


// Functionality starts here.

add_theme_support( 'post-thumbnails' ); 
function get_the_post_thumbnail_alt($post_id) {
    return get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true);
}

function the_post_thumbnail_alt($post_id) {
    echo get_the_post_thumbnail_alt($post_id);
}

// Menus activate! 

register_nav_menus(

    array(

        'Primary Menu' => 'Main Menu',

    )

);

function new_excerpt_more( $more ) {

    return '...';

}

add_filter('excerpt_more', 'new_excerpt_more');

function wpb_mce_buttons_2($buttons) {

    array_unshift($buttons, 'styleselect');

    return $buttons;

}

add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/
 
function my_mce_before_init_insert_formats( $init_array ) { 
 
// Define the style_formats array
 
    $style_formats = array( 
/*
* Each array child is a format with it's own settings
* Notice that each array has title, block, classes, and wrapper arguments
* Title is the label which will be visible in Formats menu
* Block defines whether it is a span, div, selector, or inline style
* Classes allows you to define CSS classes
* Wrapper whether or not to add a new block-level element around any selected elements
* 
*/

        array( 

            'title' => 'Hollow Button', 

            'block' => 'div', 

            'classes' => 'hollow-button',

            'wrapper' => true,

             

        ), 

        array( 

            'title' => 'Light Green Button', 

            'block' => 'div', 

            'classes' => 'light-green-button',

            'wrapper' => true,

        ),

        array( 

            'title' => 'Dark Green Button', 

            'block' => 'div', 

            'classes' => 'dark-green-button',

            'wrapper' => true,

        ),

        array( 

            'title' => 'Light Green Header', 

            'block' => 'span', 

            'classes' => 'light-green-header',

            'wrapper' => true,

        ),    

        array( 

            'title' => 'Contact Us Section', 

            'block' => 'h2', 

            'classes' => 'contact-us-section',

            'wrapper' => false,

        ),  

        array( 

            'title' => 'Contact Name', 

            'block' => 'h3', 

            'classes' => 'contact-name',

            'wrapper' => false,

        ),          

        array( 

            'title' => 'Flex Center', 

            'block' => 'div', 

            'classes' => 'flex-center',

            'wrapper' => true,

        ),   

        array( 

            'title' => 'Flex Space Around', 

            'block' => 'div', 

            'classes' => 'flex-space-around',

            'wrapper' => true,

        ),

    ); 

    // Insert the array, JSON ENCODED, into 'style_formats'

    $init_array['style_formats'] = json_encode( $style_formats ); 

     

    return $init_array; 

   

}

// Attach callback to 'tiny_mce_before_init'

add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

function search_results_title() {

  if( is_search() ) {

  

    global $wp_query;

    

    if( $wp_query->post_count == 1 ) {

      $result_title .= '1 search result found';

    } else {

      $result_title .= 'Showing ' . $wp_query->found_posts . ' results';

    }

    

    $result_title .= " for “<span class='terms'>" . wp_specialchars($wp_query->query_vars['s'], 1) . "</span>”";

    

    echo $result_title;

  

  }

}
?>