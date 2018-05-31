$(document).ready(function(){
	$('#searchform input').on('keyup', function(){
		search = $('#searchform input').val();
		if(search.length < 4){
			return false
		}
		data = {
			s: search,
			action: 'search-ajax',
			nonce: search_form.nonce
		};
		$.ajax({
			url: search_form.url,
			data: data,
			type: 'POST',
			dataType: 'json',
			beforeSend: function(xhr){

			},
			success: function(data){
				// $('body').html(data.out);
			}
		})
		
	})
})

