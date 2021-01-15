<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Departamentul_de_Psihologie_Clinica
 */

?>

	<div class="body-container">
		<footer id="colophon" class="site-footer">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'universitatea-babes-bolyai-cluj-napoca' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'universitatea-babes-bolyai-cluj-napoca' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'Departamentul de Psihologie Clinică și Psihoterapie' ), 'Departamentul de Psihologie Clinică și Psihoterapie', '<a href="http://underscores.me/">Dragos Bogdan Nechita</a>' );
					?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
