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
	<header class="site-header">
    <div class="container nav-container">
        <div class="flex-wrapper">
            <!-- Logo -->
            <div class="site-logo">
                <?php the_custom_logo(); ?>
            </div>
			<!-- Navigation -->
			<nav class="main-nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'primary-menu',
						'container'      => false,
					)
				);
				?>

			<!-- Dropdown Menu (Hidden by default) -->
			<div id="experiences-dropdown" class="experiences-dropdown hidden">
				<ul>
					<li><a href="#">Experience 1</a></li>
					<li><a href="#">Experience 2</a></li>
					<li><a href="#">Experience 3</a></li>
				</ul>
			</div>

			</nav>

			<!-- Airbnb-Style Search Box -->
			<div class="search-box" role="search" aria-label="Search homes">
			<ul class="search-box__list">
				<li class="search-box__item search-box__item--location">
				<span class="search-box__label">Where</span>
				<input type="text" placeholder="Search destinations" class="search-box__input" />
				</li>
				<li class="search-box__divider"></li>
				<li class="search-box__item search-box__item--checkin">
				<span class="search-box__label">Check in</span>
				<input type="date" class="search-box__input" />
				</li>
				<li class="search-box__divider"></li>
				<li class="search-box__item search-box__item--checkout">
				<span class="search-box__label">Check out</span>
				<input type="date" class="search-box__input" />
				</li>
				<li class="search-box__divider"></li>
				<li class="search-box__item search-box__item--guests">
				<span class="search-box__label">Who</span>
				<input type="text" placeholder="Add guests" class="search-box__input" />
				</li>
				<li class="search-box__item search-box__item--search">
				<button type="submit" class="search-box__button" aria-label="Search">
					<!-- SVG Search Icon -->
					<svg xmlns="http://www.w3.org/2000/svg" class="search-box__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
					<circle cx="11" cy="11" r="8" />
					<line x1="21" y1="21" x2="16.65" y2="16.65" />
					</svg>
				</button>
				</li>
			</ul>
			</div>

			<!-- Airbnb Your Home -->
			<div class="airbnb-your-home">
				<a href="/host">Airbnb your home</a>
			</div>

			<!-- Profile Menu -->
			<div class="profile-menu">
				<button class="profile-icon">👤</button>
			</div>
        </div>
    </div>
</header>
