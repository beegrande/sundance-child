<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sundance
 * @since Sundance 1.0
 */
get_header();

if ( is_front_page() && ( 'enabled' == get_option( 'pms_demo_mode', 'enabled' ) ) ) {
    get_template_part( 'content', 'demo' );
}
?>

<div style="margin-left:11.2%; display:block">
    <?php
    if ( function_exists( 'cyclone_slider' ) && ( 'enabled' == get_option( 'pms_slider_on_pages', 'enabled' ) ) )
        cyclone_slider( get_option( 'pms_cyclone_slide_ID', '' ) );
    ?>
</div>
<div id="primary" class="site-content">
    <div class="clear"></div>
    <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'page' ); ?>

            <?php //comments_template( '', true );    ?>

        <?php endwhile; // end of the loop.    ?>

    </div><!-- #content -->
</div><!-- #primary .site-content -->

<?php get_sidebar(); ?>
<?php $recent_posts_title = get_option( 'pms_recent_post_boxes_title', 'Recent posts' ); ?>
<?php if ( is_front_page() && ( 'enabled' == get_option( 'pms_recent_post_boxes_on_frontpage', 'enabled' ) ) ) { ?>
    <div class="clear"></div>
    <div id="before-footer">
        <hr>
            <h2> <?php echo $recent_posts_title; ?></h2>
            <?php echo pams_get_floating_boxes_recent();
            ?>
    </div> <!-- before-footer -->
    <?php
    ?>
<?php } ?>
<?php if ( !is_front_page() && ( 'enabled' == get_option( 'pms_recent_post_boxes_on_pages', 'enabled' ) ) ) { ?>
    <div class="clear"></div>
    <div id="before-footer">
        <hr>
        <div class="floating-box-wrapper" data-rows="masonry">
            <h2> <?php echo $recent_posts_title; ?></h2>
            <?php
            echo pams_get_floating_boxes_recent();
            ?>
        </div>
    </div> <!-- before-footer -->
<?php } ?>
<?php get_footer(); ?>