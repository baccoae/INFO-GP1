<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lanterne_pourpre
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"> <!--Pour le dinamique - On peut changer l'utf sur wp/admin-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lanterne_pourpre' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo(); //le logo -> si on clique dessus, il renvoit vers le home.php (?)
			if ( is_front_page() && is_home() ) : //affichage sur la page d'accueil
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lanterne_pourpre' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
				</nav><!-- #site-navigation -->
				<div class="icons">
					<a href="#"><i class="material-icons">account_circle</i></a>
					<a href="#"><i class="material-icons">favorite</i></a>
					<a href="#"><i class="material-icons">notifications</i></a>
				</div>
				<?php
			else : //affichage sur toutes les autres pages
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lanterne_pourpre' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
				</nav><!-- #site-navigation -->
				<div class="icons">
					<a href="#"><i class="material-icons">account_circle</i></a>
					<a href="#"><i class="material-icons">favorite</i></a>
					<a href="#"><i class="material-icons">notifications</i></a>
				</div>
				<?php
			endif;
			$lanterne_pourpre_description = get_bloginfo( 'description', 'display' );
			if ( $lanterne_pourpre_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $lanterne_pourpre_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

<!-- MON ESSAI
		<div class="haut">
		<div class="logo"><img alt="logo agence" class="header-image" src="/img/logo.jpg"></div>   Voir le code CSS pour le positionnement-->
			
	</header><!-- #masthead -->

	<div id="content" class="site-content">
