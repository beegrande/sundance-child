<?php
/**
 * Template Name: Print all
 *
 */
get_header();
?>

<div id="primary" class="site-content">
    <div id="content" role="main">
<?php
//$args = array(
//            'numberposts' => -1,
//            'offset' => 0,
//            'category' => 0,
//            'orderby' => 'name',
//            'order' => 'DESC',
//            'post_type' => array('ctrl_doc','service'),
//        );
    $args = array(
        'post_type' => array( 'ctrl_doc' ),
        'orderby' => array( 'type' => 'DESC', 'name' => 'ASC' ),
        'posts_per_page' => -1,
    );

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) :
            echo ( '<div class="print-break">' );
            setup_postdata( $post );
            get_template_part( 'content', 'print-ctrl_doc' );
            echo ( '</div>' );
        endforeach;
        wp_reset_postdata();
        ?>
    </div><!-- #content -->
</div><!-- #primary .site-content -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>