<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Sundance
 * @since Sundance 1.0
 */
if ( !is_user_logged_in() )
    auth_redirect();
get_header();
?>

<div id="primary" class="site-content">
    <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php
//            if ( $post_type == 'ctrl_doc' ) {
//                get_template_part( 'content', 'single-ctrl_doc' );
//            } else
//            if ( $post_type == 'service' ) {
//                get_template_part( 'content', 'single-service' );
//            } else
            if ( $post_type == 'risk_doc' ) {
                echo '<div class="full_w">'; 
                get_template_part( 'content', 'single-risk_doc' );
                echo '</div>';
            } else
            get_template_part( 'content', 'single' );
            ?>
            <?php //sundance_content_nav( 'nav-below' ); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template
//					if ( comments_open() || '0' != get_comments_number() )
//						comments_template( '', true );
            ?>

        <?php endwhile; // end of the loop.  ?>

    </div><!-- #content -->
</div><!-- #primary .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>