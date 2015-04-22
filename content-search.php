<?php
/**
 * @package Sundance
 * @since Sundance 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    $pt = '(' . get_post_type_object( $post->post_type )->labels->singular_name . ')';
//    if ( $post->post_type == 'ctrl_doc' ) {
//        $pt = '(DOCUMENT)';
//    } else
//    if ( $post->post_type == 'service' ) {
//        $pt = '(SERVICE)';
//    } else
//    if ( $post->post_type == 'definition' ) {
//        $pt = '(DEFINITION)';
//    }
    ?>

    <header class="entry-header">
        <h6 style="margin-bottom: 0"> </h6><h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'sundance' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?> <span style="font-size: 0.6em"><?php if ( !empty($pt) ) { echo ( $pt ); } ?></span></a></h2>
    </header><!-- .entry-header -->

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <footer>
    </footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->