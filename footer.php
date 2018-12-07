<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lanterne_pourpre
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<section id="footer-top">
				<?php dynamic_sidebar( 'footer-top' ); ?>
			</section>
			<section id="footer-bot">
				<?php dynamic_sidebar( 'footer-bot' ); ?>
			</section>
			<section id="footer-footer">
				<?php dynamic_sidebar( 'footer-footer'); ?>
			</section>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

