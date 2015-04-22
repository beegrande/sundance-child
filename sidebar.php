<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Sundance
 * @since Sundance 1.0
 */
?>
<div id="secondary" class="widget-area" role="complementary">
    <?php
    do_action( 'before_sidebar' );

    if ( $post_type == 'service' ) {
        if ( is_active_sidebar( 'sidebar_service' ) ) {
            dynamic_sidebar( 'sidebar_service' );
        }
    } else
    if ( $post_type == 'ctrl_doc' ) {
        if ( is_active_sidebar( 'sidebar_ctrl_doc' ) ) {
            dynamic_sidebar( 'sidebar_ctrl_doc' );
        }
    } else
    if ( $post_type == 'definition' ) {
        if ( is_active_sidebar( 'sidebar_definition' ) ) {
            dynamic_sidebar( 'sidebar_definition' );
        }
    } else
    if ( is_active_sidebar( 'sidebar_default' ) ) {
        dynamic_sidebar( 'sidebar_default' );
    }
    ?></div><!--#secondary .widget-area -->