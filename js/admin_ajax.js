$ = jQuery.noConflict();

$(document).ready(function(){
	$('.remove_reservation').on('click', function(e){

		// Annule le comportement du navigateur : ici pour ne pas ouvrir le lien et rester sur la même page
		e.preventDefault();
		
		var id = $(this).attr('data-reservation');

		$.ajax({
			type :'post',
			data : {
				'id' : id,
				'type' : 'delete'
			},
		});

	});
});