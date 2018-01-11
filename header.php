<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>La Pizzeria</title>
	<?php wp_head(); ?>
</head>
<body>

<header class="site-header">
	<div class="container">
		<div class="logo">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logo-image" alt="logo La Pizzeria">
			</a>
		</div>
		<!-- /.logo -->

		<div class="header-information">
			<div class="socials">
				<?php
					$args = array(
						'theme_location'  => 'social-menu',
						'container'		  => 'nav',
						'container_class' => 'socials',
						'container_id'	  => 'socials',
						'link_before'	  => '<span class="sr-text">',
						'link_after'	  => '</span>'
					);
					wp_nav_menu($args);
				?>
			</div>
			<!-- /.socials -->
			<div class="address">
				<p>1, chemin du Mont 14210 Baron sur Odon</p>
				<p>Phone Number: +33(6) 86 45 98 17</p>
			</div>
			<!-- /.adress -->
		</div>
		<!-- /.header-informations -->
	</div>
	<!-- /.container -->
</header>

<div class="main-menu">
	<div class="navigation">
		<?php
			$args = array(
				'theme_location'  => 'header-menu',
				'container'		  => 'nav',
				'container_class' => 'site-nav'
			);
			wp_nav_menu($args);
		?>
	</div>
	<!-- /.navigation -->
</div>
<!-- /.main-menu -->