<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package Brain_Bytes
 * @subpackage Zaban_Couples
 * @since Zaban Couples 1.0
 */
?>
</div><!-- .site-content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'zabancouples' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'zabancouples' ), 'WordPress' ); ?></a>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
