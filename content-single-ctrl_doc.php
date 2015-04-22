<?php
/**
 * 
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if ( 'enabled' == get_option( 'pms_lypdos_ctrl_doc_show_clas', 'enabled' ) ) {
        the_classification_row( $post->post_ID );
    }
    ?>
    <div id="print-disclaimer" class="entry-content hentry"></div>
    <!--<div class="post-item">-->
    <!--<div class="post-info">-->
    <h2 class="entry-title">
        <a href="<?php get_the_permalink( $post->post_ID ) ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <!--<p class="post-meta">Posted by <?php //the_author();           ?></p>-->
    <!--</div>-->
    <div class="post-content">

        <?php
//            if ( 1 == 1  && function_exists('the_revision_note_prd')) {
//                the_revision_note_prd();
//            }
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
        if ( 'enabled' == get_option( 'pms_lypdos_ctrl_doc_show_metabox', 'enabled' ) ) {
            echo ( get_ctrldoc_meta_table( $post->ID ) );
            echo ( '<div class="clear"></div>' );
            echo ( '<div class="clear"></div>' );
        }
        if ( 'enabled' == get_option( 'pms_lypdos_ctrl_doc_show_activities', 'enabled' ) ) {
            the_activities();
        }
//Show Objective and Orinciple
        // if ( 1 == ( $ctrl_doc_options['show_obj_prcpl'] ) ) {
        echo ( get_ctrldoc_obj_and_prcpl( $post->ID ) );
        //}
        //
            echo ( apply_filters( 'the_content', get_the_content( 'post_content', $post_ID ) ) );
//Show children if any
        if ( 'enabled' == get_option( 'pms_lypdos_ctrl_doc_show_child', 'enabled' ) ) {
            echo ( get_ctrldoc_children_box( $post->ID ) );
            //the_ctrldoc_list_children_with_excerpt($post->ID);
            //Show sub-pages START
        }
        if ( 'enabled' == get_option( 'pms_lypdos_ctrl_doc_show_references', 'enabled' ) ) {

            if ( has_ctrldoc_references( $post->ID ) ) {
                echo ( '<h3>References</h3>' );
                echo ( get_ctrldoc_ext_references_box( $post->ID ) );
                echo ( '<div class="clear"></div>' );
            } else
                echo ( '<div class="clear"></div>' );
        } else
            echo ( '<div class="clear"></div>' );

//Show stakeholders is setting is TRUE                        
        //Show Stakeholders if any
        if ( 'enabled' == get_option( 'pms_lypdos_ctrl_doc_show_stakeholders', 'enabled' ) ) {
            echo ( '<div id="print-only">' );
            echo ( '<h3>Stakeholders</h3>' );
            the_stakeholders();
            echo ('</div>');
        }

//Show tags is any            
        if ( has_tag() ) {
            echo ( '<div id="tags_wrap">' );
            echo ( get_the_tag_list( 'TAGS: ', ', ', '' ) );
            echo ( '</div>' );
        }

        //echo '</div>';
//Show revisions if setting is TRUE
        if ( 'enabled' == get_option( 'pms_lypdos_ctrl_doc_show_revisions', 'enabled' ) ) {
            echo '<hr>';
            if ( current_user_can( 'read' ) ) {
                if ( function_exists( 'the_revision_list_prd' ) ) {
                    the_revision_list_prd( true );
                }
            }
            if ( current_user_can( 'read' ) ) {
                if ( function_exists( 'the_revision_diffs_prd' ) ) {
                    the_revision_diffs_prd();
                }
            }
        }
        ?>
    </div>
    <footer>
        <?php edit_post_link( __( '(Edit)', 'sundance' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>
</article><!-- #post-<?php the_ID(); ?> -->