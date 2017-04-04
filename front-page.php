<?php

get_header(); ?>

    <div id="primary" class="content-area">
        <div id="primary-row">
    		<div id="left_sidebar" class="widget-area sidebar-cell cell" ><?php get_sidebar('left-sidebar');?></div>
	    	<div id="main" class="site-main content-cell cell">
    
		    <?php
		        if ( is_front_page() ) {
                    if( have_posts() ) {
                        the_post();
                        the_content();
			        }
				} 
            ?>
		    </div><!-- #main -->
            <div id="right_sidebar" class="widget-area sidebar-cell cell" ><?php get_sidebar('right-sidebar');?></div>
        </div><!-- #primary-row -->
	</div><!-- #primary -->

<?php

get_footer();
