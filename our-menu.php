<?php
/*
 * Template Name: Nos specialités
 */

?>

<?php get_header(); ?> 

	<?php while(have_posts()): the_post(); ?>

		<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
			<div class="hero-content">
				<div class="hero-text">
					<h2><?php the_title(); ?></h2>
				</div>
				<!-- /.hero-text -->
			</div>
			<!-- /.hero-content -->
		</div>
		<!-- /.hero -->

		<div class="main-content container">
			<main class="text-center content-text">
				<?php the_content(); ?>
			</main>
		</div>
		<!-- /.main-content -->

	<?php endwhile; ?>

	<div class="our-specialties container">
		
		<h3 class="primary-text">Pizzas</h3>
		
		<div class="container-grid specialty-content">
			<?php
				$args = array(
					'post_type' 	 => 'specialties',
					'posts_per_page' => 10,
					'orderby'		 => 'title',
					'order'			 => 'ASC',
					'category_name'	 => 'pizzas'
				);

				$pizzas = new WP_Query($args);
				while($pizzas->have_posts()): $pizzas->the_post();
			?>

			<div class="columns2-4">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('specialties'); ?>
					<h4><?php the_title(); ?> <span><?php the_field('prix'); ?> €</span></h4>
					<?php the_content(); ?>
				</a>
			</div>
			<!-- /.columns2-4 -->

			<?php endwhile; wp_reset_postdata(); ?>

		</div>
		<!-- /.container-grid -->

		<h3 class="primary-text">Autres</h3>
		
		<div class="container-grid specialty-content">
			<?php
				$args = array(
					'post_type' 	 => 'specialties',
					'posts_per_page' => 10,
					'orderby'		 => 'title',
					'order'			 => 'ASC',
					'category_name'	 => 'autres'
				);

				$pizzas = new WP_Query($args);
				while($pizzas->have_posts()): $pizzas->the_post();
			?>

			<div class="columns2-4">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('specialties'); ?>
					<h4><?php the_title(); ?> <span><?php the_field('prix'); ?> €</span></h4>
					<?php the_content(); ?>
				</a>
			</div>
			<!-- /.columns2-4 -->

			<?php endwhile; wp_reset_postdata(); ?>

		</div>
		<!-- /.container-grid -->
	</div>
	<!-- /.our-specialties -->
	
<?php get_footer(); ?>