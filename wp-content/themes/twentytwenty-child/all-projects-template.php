<?php
/**
 * Template Name:All Projects Template 
 */
 
 get_header(); 
 
 
 // Step 1 : Create Custom Query 
 
 $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
 
  $args = array(
               'posts_per_page' => 2,// query last 2 posts  
               'post_type' => 'project', 
               'paged' => $paged
             );
             
$customPostQuery = new WP_Query($args);


?>


<!-- Step 2: Display the Posts we Queried in the Step 1 -->

<div class="wrap">
 
    <div id="primary" class="content-area">
        
        <main id="main" class="site-main" role="main">
        
            <?php
            
            if($customPostQuery->have_posts() ): 
            
               while($customPostQuery->have_posts()) :
                   
                       $customPostQuery->the_post();
                       
                         global $post;
                ?>
        
                  <div class ="inner-content-wrap">
                  
                        <ul class ="cq-posts-list">
                        
                         <li>
                           <h3 class ="cq-h3"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
                                <div>
                                  <ul>
                                    <div>
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                                    </div>
                                  </ul>
                                  
                                  <ul>
                                            <p><?php echo the_content(); ?></p>
                                  </ul>
                                
                                </div>
                          </li>
                        </ul>
                </div> <!-- end blog posts -->
                          
            <?php endwhile; 
            
         endif; 
     
             wp_reset_query();

    // Step  3 : Call the Pagination Function Here  
             
  if (function_exists("cpt_pagination")) {
                
   cpt_pagination($customPostQuery->max_num_pages); 
             
}
?>
<style>
/**
 * Custom Post Type Pagination Styles
 * @author Joe Njenga
 */ 

.pagination {
   clear:both;
   position:relative;
   font-size:16px; 
   line-height:13px;
   float:right; 
    list-style-type:none;
    width:58%
}
.pagination span, .pagination a {
   display:block;
   float:left;
   margin: 2px 2px 2px 0;
   padding:6px 9px 5px 9px;
   text-decoration:none;
   width:auto;
   color:#fff; 
   background: #cd2653; 
}
.pagination a:hover{
   color:#fff;
   background: #000; 
}
.pagination .current{
   padding:6px 9px 5px 9px;
   background: #999; 
   color:#fff;
}
.inner-content-wrap {
    width: 50%;
    display: table-cell;
}
</style>