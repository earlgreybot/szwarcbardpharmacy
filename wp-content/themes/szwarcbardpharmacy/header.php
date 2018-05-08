<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Szwarcbard_Pharmacy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'szwarcbardpharmacy' ); ?></a>

	<header id="masthead" class="site-header container">
		<div class="site-branding">
			<div class='row'>
				<div class="site-title col-md-6 col-xs-12">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<div>
							<h1 class='mainheading'>Geoff and Sue</h1> 
							<h1 class='subheading'>Szwarcbard Pharmacy</h1>
						</div>
					</a>
				</div>
				<div class="logo col-xs-12 col-md-6"> <?php the_custom_logo(); ?> </div>
				<?php
			$szwarcbardpharmacy_description = get_bloginfo( 'description', 'display' );
			if ( $szwarcbardpharmacy_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $szwarcbardpharmacy_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation"> 
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'szwarcbardpharmacy' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
