jQuery(document).ready(function ($) {
	
	$("#order").change(function() {
		
		var totalPrice   = 0,
            values       = [];
        
		$('input[type=checkbox], input[type=radio]').each( function() {
            if( $(this).is(':checked') ) {
                values.push($(this).val());
				totalPrice += parseInt($(this).val());
            }
        });

		$("#price span").text(totalPrice);	
		
	});
	
});

