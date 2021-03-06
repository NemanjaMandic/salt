<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package salt
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'salt' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif; 
			?>
		</div><!-- .site-branding -->

        <nav id="site-navigation-top" class="main-navigation-top">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu-top',
				) );
			?>
		</nav><!-- #site-navigation -->
			
			
			<div id="mySidenav" class="sidenav">
			  <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
				 <?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'primary-menu-bottom',
						'walker'         => new My_Walker(),
					) );
				?>
			</div>
			<span class="open-menu" style="font-size:30px;cursor:pointer" id="openNav">&#9776; open</span>
		
		<nav id="site-navigation" class="main-navigation">
			
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'primary-menu-bottom',
					'walker'         => new My_Walker(),
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
