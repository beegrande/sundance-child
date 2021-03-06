<?php
/**
 * 
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
            <div id="print-disclaimer"><?php echo ( get_option( 'pms_print_header', '') ); ?></div>
        <!--<div class="post-item">-->
        <!--<div class="post-info">-->
        <h2 class="entry-title">
            <a href="<?php the_permalink( ) ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <!--<p class="post-meta">Posted by <?php the_author(); ?></p>-->
        <!--</div>-->
        <div class="post-content">

            <?php 
            echo ( '<div id="doc_meta_wrap">' );
            echo ( 'Published on: ' );
            echo ( get_the_time( get_option( 'date_format' ) ) );
            echo ( ' | ' );
            if ( $last_id = get_post_meta( get_the_ID(), '_edit_last', true ) ) {
                $last_user = get_userdata( $last_id );
                echo ( sprintf( __( 'Last edited by: %1$s on %2$s at %3$s' ), esc_html( strtoupper( $last_user->display_name ) ), mysql2date( get_option( 'date_format' ), $post->post_modified ), mysql2date( get_option( 'time_format' ), $post->post_modified ) ) );
            }
            echo ( ' | ' );
            echo ( 'Revision interval: ' );
            echo ( get_field( 'revision_interval' ) );
            echo ( '</div>' );
            echo ( get_ctrldoc_meta_table( $post->ID ) );
            echo ( '<div class="clear"></div>' );
            echo ( '<div class="clear"></div>' );
//Show Objective and Orinciple
           // if ( 1 == ( $ctrl_doc_options['show_obj_prcpl'] ) ) {
                echo ( get_ctrldoc_obj_and_prcpl( $post->ID ) );
            //}
            //
            echo ( apply_filters( 'the_content', get_the_content('post_content', $post_ID) ) );
//Show children if any
                echo ( get_ctrldoc_children_box( $post->ID ) );
                //the_ctrldoc_list_children_with_excerpt($post->ID);
                //Show sub-pages START
                if ( has_ctrldoc_references( $post->ID ) ) {
                    echo ( '<h3>References</h3>' );
                    echo ( get_ctrldoc_ext_references_box( $post->ID ) );
                    echo ( '<div class="clear"></div>' );
                } else
                    echo ( '<div class="clear"></div>' );
            //}
            if ( has_tag() ) {
                echo ( '<div id="tags_wrap">' );
                echo ( get_the_tag_list( 'TAGS: ', ', ', '' ) );
                echo ( '</div>' );
            }
?>
        </div>
        <hr>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->