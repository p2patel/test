<?php
/**
 * Template Name: Custom Post Template
 */

get_header(); ?>

<div id="main-content" class="main-content">

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <?php
            echo "hello priyal";



                // Start the Loop.
                while ( have_posts() ) : the_post();

                    // Include the page content template.

                    get_template_part( 'partials/content', 'page' );
                    //get_template_part( 'content', '$project_type' );

                endwhile;
            ?>
        </div><!-- #content -->
    </div><!-- #primary -->
</div><!-- #main-content -->



<?php
get_sidebar();
get_footer();