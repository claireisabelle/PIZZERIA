	<footer>
		<?php
			$args = array(
				'theme_location' => 'header-menu',
				'container'		 => 'nav',
				'after'			 => '<span class="separator"> | </span>'
			);
			wp_nav_menu($args);
		?>

		<div class="location">
			<p>1, chemin du Mont 14210 Baron sur Odon</p>
			<p>Phone Number: 06 86 45 98 17</p>
		</div>
		<!-- /.location -->
		
		<p class="copyright">All rights reserved <?php echo date('Y'); ?></p>
	</footer>

<?php wp_footer(); ?>
</body>
</html>