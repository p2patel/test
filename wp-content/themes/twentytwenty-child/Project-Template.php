<?php
/**
 * Template Name: Project Template
 */
 
 get_header(); 
 
 
 // Step 1 : Create Custom Query 
 
 $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
 
  $args = array(
               'posts_per_page' => 2,// query last 2 posts  
               'post_type' => 'tutorial', 
               'paged' => $paged
             );
             
$customPostQuery = new WP_Query($args);


?>