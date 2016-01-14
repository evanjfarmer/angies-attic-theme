<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Angies_Attic_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="row"><!-- Foundation .row start -->
				<div class="small-12 columns"><!-- Foundation .columns start -->		
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'angies-attic-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'angies-attic-theme' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'angies-attic-theme' ), 'angies-attic-theme', '<a href="http://evanjfarmer.com" rel="designer">Evan Farmer</a>' ); ?>
				</div><!-- .site-info -->
			</div><!-- Foundation .columns end -->
		</div><!-- Foundation .row end -->		
	</footer><!-- #colophon -->
</div><!-- #page -->
		<!-- close the off-canvas menu -->
		<a class="exit-off-canvas"></a>

		</div><!-- .inner-wrap -->
</div><!-- .off-canvas-wrap -->

<?php wp_footer(); ?>

</body>
</html>
