<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Sundance
 * @since Sundance 1.0
 */
if ( 'enabled' == get_option( 'pms_demo_mode', 'enabled' ) ) {
    echo sprintf('<div id="about_pams"><a href="http://www.lypdos.com" title="Read about LYPDOS"><img src="%s/wp-content/plugins/pams-lypdos/images/About_pams_triang3.png"></a></div>', site_url() );
}

?>
	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php //do_action( 'sundance_credits' ); ?>
			<a href="http://www.lypdos.com" title="<?php esc_attr_e( 'A Lightweight, yet powerful documentation system', 'sundance' ); ?>" rel="generator"><?php printf( __( 'PAMS LYPDOS | A Lightweight, yet powerful documentation system.' ) ); ?></a>
			<!--<span class="sep"> | </span>-->
			<?php //printf( __( 'Theme: %1$s by %2$s.', 'sundance' ), 'Sundance', '<a href="http://theme.wordpress.com/" rel="designer">WordPress.com</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>
