<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

/*---------------------------------------------- PP Code Start ----------------------------------------------------*/

// Task 1 -  Write a function that will redirect the user away from the site if their IP address starts with 77.29. Use WordPress native hooks and APIs to handle this.//
 //$visitor = $_SERVER['REMOTE_ADDR'];

function ip_based_login() 
{
    if ($_SERVER['REMOTE_ADDR'] == '77.29.[0-255].[0-255]') 
    {
        wp_redirect("xyzwebsite.com/login2"(site_url($wp->request)));
    } 
    else 
    {
        exit;
    }
}
// Task 2


add_shortcode( 'hs_nice_chart', 'shortcode_handler_function' );

function shortcode_handler_function(){
    echo '<canvas id="chartJSContainer" width="600" height="400"></canvas>';
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
 var options = {
  type: 'line',
  data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      },
      {
        label: '# of Points',
        data: [7, 11, 5, 8, 3, 7],
        borderWidth: 1
      }
    ]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          reverse: false
        }
      }]
    }
  }
}

var ctx = document.getElementById('chartJSContainer').getContext('2d');
new Chart(ctx, options);

    </script> 

    <style> canvas { background-color : #eee;} </style>   
    <?php

 }


// Task 3 - Register post type called “Projects” and a taxonomy “Project Type” for this post type.

add_action( 'init', 'project_register' );   

function project_register() {   

    $labels = array( 
        'name' => _x('Project', 'post type general name'), 
        'singular_name' => _x('project Item', 'post type singular name'), 
        'add_new' => _x('Add New', 'project item'), 
        'add_new_item' => __('Add New Project Item'), 
        'edit_item' => __('Edit Project Item'), 
        'new_item' => __('New Project Item'), 
        'all_items' => __('All Projects'),
        'view_item' => __('View Project Item'), 
        'search_items' => __('Search Project'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => '' 
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        'menu_icon' => 'dashicons-format-quote', 
        'rewrite' => array( 'slug' => 'project', 'with_front'=> false ), 
        'capability_type' => 'post', 
        'hierarchical' => true,
        'has_archive' => true,  
        'menu_position' => null, 
        'supports' => array('title','editor','thumbnail') 
    );   

    register_post_type( 'project' , $args ); 

    register_taxonomy( 'project_type', array('project'), array(
        'hierarchical' => true, 
        'label' => 'Project Type', 
        'singular_label' => 'Category', 
        'rewrite' => array( 'slug' => 'project_type', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'project_type', 'project' );
}

// Task - 4 

  //  Custom post type pagination function 
    
    function cpt_pagination($pages = '', $range = 4)
    {
        $showitems = ($range * 2)+1;
        global $paged;
        if(empty($paged)) $paged = 1;
        if($pages == '')
        {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages)
            {
                $pages = 1;
            }
        }
        if(1 != $pages)
        {
            echo "<nav aria-label='Project navigation'>  <ul class='pagination'> <span>Page ".$paged." of ".$pages."</span>";
            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
            if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
            for ($i=1; $i <= $pages; $i++)
            {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                {
                    echo ($paged == $i)? "<li class=\"page-item active\"><a class='page-link'>".$i."</a></li>":"<li class='page-item'> <a href='".get_pagenum_link($i)."' class=\"page-link\">".$i."</a></li>";
                }
            }
            if ($paged < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\">i class='flaticon flaticon-back'></i></a></li>";
            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'><i class='flaticon flaticon-arrow'></i></a></li>";
            echo "</ul></nav>\n";
        }
  }