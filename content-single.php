<?php
/**
 * @package Sundance
 * @since Sundance 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
//    if ( $post_type == 'ctrl_doc') {
//        if ( 'enabled' == get_option( 'pms_lypdos_ctrl_doc_show_clas', 'enabled' ) ) {
//        the_classification_row( $post->post_ID );
//    }
    ?>
    <div id="print-disclaimer" class="entry-content hentry"><?php echo ( get_option( 'pms_print_header', '') ); ?></div>
    <?php //} ?>
	<header style="clear:both" class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content hentry">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php edit_post_link( __( '(Edit)', 'sundance' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->