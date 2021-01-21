<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Departamentul_de_Psihologie_Clinica
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'universitatea-babes-bolyai-cluj-napoca' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="site-title-box-left">
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Departamentul de</br>Psihologie Clinică</br>și Psihoterapie</a></p>
			</div>
			<div class="logo-box">
			<?php
			the_custom_logo();
				?>
			</div>
			<div class="site-title-box-right">
				<p class="site-title">
					<a href="https://www.ubbcluj.ro/ro/" rel="UBB">
					Universitatea </br> Babeș-Bolyai </br> din Cluj-Napoca
					</a>
				</p>
			</div>

			<!-- <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>

				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				
				<?php
			else :
				?>
				
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$something_description = get_bloginfo( 'description', 'display' );
			if ( $something_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $something_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?> -->
		</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Meniu', 'universitatea-babes-bolyai-cluj-napoca' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'container' => '',
						'container_class' => '',
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
				<button class="menu-toggle" aria-controls="menu-studenti" aria-expanded="false"><?php esc_html_e( 'Meniu Studenti', 'universitatea-babes-bolyai-cluj-napoca' ); ?></button>
			<nav class='meniu-studenti'>
				<?php
					wp_nav_menu( array(
						'container' => '',
						'container_class' => '', 
						'theme_location' => 'menu-2'
					)); ?>
			</nav>
			<nav>
				<button class="menu-toggle" aria-controls="menu-cercetare" aria-expanded="false"><?php esc_html_e( 'Meniu Cercetare', 'universitatea-babes-bolyai-cluj-napoca' ); ?></button>
				<?php
					wp_nav_menu( array('container_class' => 'navigation-cercetare', 'theme_location' => 'menu-3')); ?>
			</nav>
			</nav>
			<nav>
				<button class="menu-toggle" aria-controls="menu-comunitate" aria-expanded="false"><?php esc_html_e( 'Meniu Comunitate', 'universitatea-babes-bolyai-cluj-napoca' ); ?></button>
				<?php
					wp_nav_menu( array('container_class' => 'navigation-comunitate', 'theme_location' => 'menu-4')); ?>
			</nav>
			</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
