<?php get_header(); ?>
<div class="container" style="text-align:center">
<div class="row">
    <div class="col-md-12">
        <!-- WP error message method -->
            <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'WP_Labb' ); ?></h2>
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'WP_Labb' ); ?></p>
            <div style="text-align:center"><?php get_search_form(); ?></div>
            <img src="<?php bloginfo('template_directory')?>/img/404.png" alt="404: Page Not Found">
    </div>
</div>
                    

</div><!-- .container -->


<?php get_footer(); ?>