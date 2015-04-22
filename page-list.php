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

if ( is_front_page() && ( 'enabled' == get_option( 'pms_demo_mode', 'enabled' ) ) )
    get_template_part( 'content', 'demo' );
?>

    <div style="margin-left:11.2%; display:block">
        <?php if ( function_exists( 'cyclone_slider' ) ) cyclone_slider( 'front-page' ); ?>
    </div>
<div id="primary" class="site-content">
    <div class="clear"></div>
    <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'page' ); ?>

            <?php //comments_template( '', true );  ?>

        <?php endwhile; // end of the loop.  ?>

    </div><!-- #content -->
</div><!-- #primary .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>