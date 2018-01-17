<?php 
/*
 * Template Name: Contact Us
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

		<div class="main-content container reservation">
			
			<main class="content-text clear">

				<div class="reservation-info">				

					<form method="post" class="reservation-form">
						<h2>Faire une réservation</h2>
						<div class="field">
							<input type="text" name="name" placeholder="Nom" required>
						</div>
						<!-- /.field -->

						<div class="field">
							<input type="datetime-local" name="date" placeholder="Date" required>
						</div>
						<!-- /.field -->

						<div class="field">
							<input type="demail" name="email" placeholder="E-mail" required>
						</div>
						<!-- /.field -->

						<div class="field">
							<input type="tel" name="phone" placeholder="Téléphone" required>
						</div>
						<!-- /.field -->

						<div class="field">
							<textarea name="message" placeholder="Message" required></textarea>
						</div>
						<!-- /.field -->

						<input type="submit" name="reservation-send" class="button" value="Envoyer">

						<input type="hidden" name="hidden" value="1">

					</form>

				</div>
				<!-- /.reservation-info -->

			</main>

		</div>
		<!-- /.main-content -->
		

	<?php endwhile; ?>
	
<?php get_footer(); ?>