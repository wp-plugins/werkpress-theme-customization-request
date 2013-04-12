$j = jQuery.noConflict();
$j(document).ready(function(){
    
    var formReady = false;
    var formValues = new Array();

    $j('#ww_form').find('input, textarea, select').each( function() {
        if ( $j(this).hasClass('required') ) {
            $j(this).prevAll('.req').text(' *');
        }
    });
    
    	$j('#ww_form').submit(function(event){
    		event.preventDefault();
    		var data = {};
            data.action = 'ajaxcontact_send_mail';
    		data.name = $j('#ww_name').val();
    		data.company = $j('#ww_company').val();
    		data.email = $j('#ww_email').val();
    		data.website = $j('#ww_website').val();
    		data.theme = $j('#ww_theme').val();
    		data.hosting = $j('#ww_hosting').val();
    		data.changes = $j('#ww_changes').val();
    		data.budget = $j('#ww_budget').val();
        
            // Clear formValues array for resubmit
            
            formValues = [];
            
            $j('#ww_form').find('input.required, select.required').each(function() {
                
                if ( $j(this).val() == '' ) {
                    formValues.push('false');
                }
            });
            
            //Submit post if all required fields are populated
            if ( $j.inArray('false', formValues) == '-1' && (data.email).indexOf('@') !== -1 ) {
		        
        		$j.ajax({
        			type: 'POST',
        			url: ajaxcontactajax.ajaxurl,
        			data: data,
        			success: function(data) {
                        $j('#werkpress-dashboard-widget').css('border', 'none');
                        $j('#werkpress-dashboard-widget').html('<div class="updated" style="text-align:center;"><p>Thanks for submitting your request. Werkpress will contact you shortly!</p></div>');
        			},
        			error: function(XMLHttpRequest, textStatus, errorThrown){
        				alert(errorThrown);
        			}
			
        		});
            
            }
            // Else add message
            else {
                if ( $j('#werkpress-dashboard-widget .missing-info').length == 0  ) {
                    $j('<div class="updated missing-info">Please fill in all required fields</div>').insertAfter('#werkpress-dashboard-widget h1');
                }
            }   
    	});

});