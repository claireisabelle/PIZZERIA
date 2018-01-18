<div class="reservation-info">				

	<form method="post" class="reservation-form">
		<h2>Faire une réservation</h2>
		<div class="field">
			<input type="text" name="name" placeholder="Nom" required>
		</div>
		<!-- /.field -->

		<div class="field">
			<input type="datetime-local" name="date" placeholder="Date" step="300" required>
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