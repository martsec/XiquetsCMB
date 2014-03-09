<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @author VCLL | https://vcll.info
 * @package Xiquets de Cambrils
 */
global $tlhome;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf8" />
	<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen, projection" />
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.php" rel="stylesheet" type="text/css" />
	<?php include('./wp-content/themes/xiquetscmb/inc/timeline.php'); ?>

	<?php wp_head(); ?>
</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
	<?php do_action( 'before' ); ?>
	<div id="background-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
        	<div class="active item" style="background-image:url(<?php print get_stylesheet_directory_uri(); ?>/img/fons1.jpg)"></div>
        	<div class="item" style="background-image:url(<?php print get_stylesheet_directory_uri(); ?>/img/fons2.jpg)"></div>
        	<div class="item" style="background-image:url(<?php print get_stylesheet_directory_uri(); ?>/img/fons3.jpg)"></div>
        	<div class="item" style="background-image:url(<?php print get_stylesheet_directory_uri(); ?>/img/fons4.jpg)"></div>
        	<div class="item" style="background-image:url(<?php print get_stylesheet_directory_uri(); ?>/img/fons5.jpg)"></div>
		</div>
	</div>
	<header class="container" role="banner">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
				</div>
				<div class="collapse navbar-collapse">
					<?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>
	<div id="content">

