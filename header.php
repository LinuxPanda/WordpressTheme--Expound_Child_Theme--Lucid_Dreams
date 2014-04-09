<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Lucid Dreams
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'expound_header_before' ); ?>
	<header id="masthead" class="site-header" role="banner">

		<nav id="navigation-top" class="navigation-top" role="navigation">
			<h1 class="menu-top-toggle"><?php _e( 'Top Menu', 'expound' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'expound' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'depth' => 1 ) ); ?>
			<?php do_action( 'expound_navigation_after' ); ?>
		</nav><!-- #top-navigation -->

		<div class="site-branding">
			<div class="fl">
				<div class="site-title-group">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div><!-- .site-title-group -->
			</div>

			<div class="fr">
				<?php
					if ( is_active_sidebar( 'header-area' ) ) { ?>
						<div class="site-header-area">
							<?php dynamic_sidebar( 'header-area' ); ?>
						</div>
						<?php
					}
				?>
			</div>
		</div><!-- .site-branding -->

		<div class="navigation-main-container">
			<nav id="site-navigation" class="navigation-main" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Main Menu', 'expound' ); ?></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'expound' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 3 ) ); ?>
				<?php do_action( 'expound_navigation_after' ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- #main-navigation-container -->
	</header><!-- #masthead -->
	<?php do_action( 'expound_header_after' ); ?>

	<div id="main" class="site-main">
