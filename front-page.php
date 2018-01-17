<?php get_header(); ?> 

	<?php while(have_posts()): the_post(); ?>

		<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
			<div class="hero-content">
				<div class="hero-text">
					<h2><?php echo esc_html(get_option('blogdescription')); ?></h2>
					<?php the_content(); ?>
					<?php $url = get_page_by_title('A propos'); ?>
					<a class="button secondary" href="<?php echo get_permalink($url->ID) ?>">En savoir +</a>

				</div>
				<!-- /.hero-text -->
			</div>
			<!-- /.hero-content -->
		</div>
		<!-- /.hero -->
	
	<?php endwhile; ?>

		<div class="main-content container">
			<main class="container-grid clear">
				<h2 class="primary-text text-center">Nos spécialités</h2>

				<?php
					$args = array(
						'posts_per_page' => 3,
						'post_type'		 => 'specialties',
						'category_name'	 => 'pizzas',
						'orderby'		 => 'rand'
					);

					$specialties = new WP_Query($args);
					while($specialties->have_posts()): $specialties->the_post();
				?>

				<div class="specialty columns1-3">
					<div class="specialty-content">
						
						<?php the_post_thumbnail('specialty-portrait'); ?>
						
						<div class="information">
							<?php the_title('<h3>', '</h3>'); ?>
							
							<?php the_content(); ?>
							
							<p class="price"><?php the_field('prix'); ?> €</p>

							<a href="<?php the_permalink(); ?>" class="button primary">En savoir +</a>
						</div>
						<!-- /.information -->
					</div>
					<!-- /.specialty-content -->
				</div>
				<!-- /.specialty columns1-3 -->

				<?php endwhile; wp_reset_postdata(); ?>
			</main>
		</div>
		<!-- /.main-content -->
		

	
	
<?php get_footer(); ?>