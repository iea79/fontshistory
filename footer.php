<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frondendie
 */

?>

	<footer id="colophon" class="footer">
		<div class="footer__content">
			<div class="footer__logo"><?php the_custom_logo(); ?></div>
			<div class="footer__copy">&copy; 2021</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
