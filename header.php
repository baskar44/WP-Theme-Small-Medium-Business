<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lindsay_Almond_Glass_&_Aluminium
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous">
	</script>
	<script src="/wp-content/themes/lindsay-almond-glass-aluminium/js/slider.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Header -->
	<header>
		<div id="headerContainer" class="container">
			<div class="header-left">
				<div class="brand">
					<a href="<?php echo home_url('/'); ?>">
					<img src="wp-content/themes/lindsay-almond-glass-aluminium/img/logo.png">
					</a>
				</div>
			</div>
		</div>
	</header> <!-- / Header -->
	
	<!-- Navigation Bar -->
	<nav class="navigation main-navigation">
		<div class="container">
			<?php

			$args = array(
				'theme_location' => 'primary'
			);
			?>

			<?php wp_nav_menu($args); ?>
		</div>	
	</nav> <!-- / Navigation Bar -->
