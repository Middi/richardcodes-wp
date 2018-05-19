<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package richardcodes
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>RichardCodes</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Open+Sans:800|Slabo+27px" rel="stylesheet">
	

	<?php wp_head(); ?>
</head>


<!-- <!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
		
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'richardcodes' ); ?></a>

		<header>
			<div class="container-header">

				<div id="logo" class="menuUp">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
					<div id="navToggle">
						<a href="#">&#9776;</a>
					</div>
				</div>

				<?php
					wp_nav_menu( array(
						'theme_location'	=> 'primary',
						'container'			=> 'nav',
						'container_class'	=> 'nav',
						'menu_class'		=> 'nav-ul'
					));
				?>
				
			</div>
		</header> -->

		