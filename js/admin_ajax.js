$ = jQuery.noConflict();

$(document).ready(function(){

	$('.remove_reservation').on('click', function(e){

		// Annule le comportement du navigateur : ici pour ne pas ouvrir le lien et rester sur la même page
		e.preventDefault();
		
		var id = $(this).attr('data-reservation');

		swal({
			title: 'Etes-vous sur ?',
			text: "Si vous continuez, la réservation sera définitivement supprimée",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Oui, supprimer la réservation'
			}).then((result) => {
			if (result.value) {

				$.ajax({
					type :'post',
					data : {
						'action': 'lapizzeria_delete_reservation',
						'id' : id,
						'type' : 'delete'
					},
					url: admin_ajax.ajaxurl,
					success: function(data){
						var result = JSON.parse(data);
						if(result.response == 'success'){
							// Pour ne plus afficher la ligne une fois qu'elle a été supprimée (sinon il faut recharger la page pour voir que la ligne a bien été supprimée)
							jQuery("[data-reservation='"+ result.id +"']").parent().parent().remove();

							// Alert personnalisée venant de sweetalert2
							swal(
								'Réservation supprimée',
								'La réservation a bien été supprimée',
								'success'
								)
						}
					}
				});
			}
		});
	});
});