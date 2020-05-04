<?php
/*
** Header file for rom-link theme
** http://www.rom-link.com
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset= "<?php bloginfo( 'charse' ); ?>" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="site-header" role="banner">
		<div class="search-bar">

		</div> <!-- .search-bar -->

		<div id="logo">
			<h3>Rom-Link</h3>
		</div> <!-- #logo -->

		<?php
		wp_nav_menu( array(
			'theme_location' => 'header-menu',
			'container_class' => 'header-menu'
		) );
		?>
	</header> <!-- .site-header -->
