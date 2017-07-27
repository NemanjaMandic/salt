<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package salt
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="naar-wrapper">
			<div class="naar-text">
				<h2>Benieuwd naar wat we voor u kunnen betekenen?</h2>
				<p><a href="#">contacteer ons</a>  voor een afspraak of meer info over onze projecten.</p>
			</div>
			<div class="naar-logo-wrap">
				<div class="naar-logo" style="color: white;"></div>
			</div>
		</div>
		<div class="footer-line"></div>
		<div class="site-info">
			<div class="info-item">
					<a href="<?php echo esc_url( __( 'https://salt-nemanjamandic.c9users.io/contact/', 'salt' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( __( '	Kursaalstraat 6<br> %s', 'salt' ), '
8300 Knokke-Heist' );
			?></a>
			
			</div>
			<div class="info-item">
				<p>T +32 (0)50 53 93 96<br>
				 F +32 (0)50 53 94 98</p>
			</div>
			<div class="info-item">
				<p>Erkenning: D kl. 5<br>
BIV 501760</p>
			</div>
			<div class="info-item">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'salt' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Made by by %s', 'salt' ), 'Nemus' );
			?></a>
			</div>
			
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
