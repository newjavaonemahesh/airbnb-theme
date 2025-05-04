<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Airbnb_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'airbnb-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
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
			$airbnb_theme_description = get_bloginfo( 'description', 'display' );
			if ( $airbnb_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $airbnb_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'airbnb-theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


		
	<header id="masthead" class="airbnb-header">
    <div class="container">
        <!-- Logo (as custom header) -->
		<?php
        the_custom_logo();
	    if ( is_front_page() && !is_home() ) : ?>	
        <!-- Navigation -->
        <nav class="main-nav">
            <ul>
                <li><a href="/homes">Homes</a></li>
                <li><a href="/experiences">Experiences</a></li>
            </ul>
        </nav>

        <!-- Search Box -->
        <div class="search-box">
            <input type="text" placeholder="Where are you going?" />
            <input type="date" placeholder="Check-in" />
            <input type="date" placeholder="Check-out" />
            <button type="submit">Search</button>
        </div>

        <!-- Airbnb Your Home -->
        <div class="airbnb-your-home">
            <a href="/host">Airbnb your home</a>
        </div>

        <!-- Profile Menu -->
        <div class="profile-menu">
            <button class="profile-icon">👤</button>
        </div>
		<?php endif; ?>
    </div>
</header>
