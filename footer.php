<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Lucid Dreams
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<!-- Social Icons -->
			<?php wp_nav_menu( array(
				'theme_location' => 'social',
				'depth' => 1,
				'container_id' => 'expound-social',
				'link_before' => '<span>',
				'link_after' => '</span>',
				'fallback_cb' => '',
			) ); ?>
		<!-- Social Icons -->

		<div class="site-info">
			<?php do_action( 'site_credits' ); ?>
			<?php do_action( 'expound_credits' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
