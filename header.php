<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stay_Hungry_Club
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stay-hungry-club' ); ?></a>
	<header>
		<div class = "hero-carousel">
			<?php if(have_rows('carousel','option')):?>
					<?php while(have_rows('carousel','option')): the_row();
						$images = get_sub_field('image_slide', 'option');			
					?>
					<?php if($images):?>
						<img src="<?php echo $images['url'];?>" class = "img-fluid">
					<?php endif;?>
					<?php endwhile;?>
				<?php endif;?>
				</div>
	<div class = "navigation-container">
	<div id="masthead" class="site-header" style ="position: fixed; width: 100%; top: 0;">
		<div class="site-branding">
		<img src="<?php the_field('image_logo'); ?>" class="custom-logo_1">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;
			$stay_hungry_club_description = get_bloginfo( 'description', 'display' );
			if ( $stay_hungry_club_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $stay_hungry_club_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'stay-hungry-club' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>
	</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$('.hero-carousel').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  prevArrow: false,
  nextArrow: false,
  autoplay: true,
  autoplaySpeed: 2000,
});
});
</script>
	</header><!-- #masthead -->
