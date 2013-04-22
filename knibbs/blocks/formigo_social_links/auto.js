ccmValidateBlockForm = function() {
	
	var services = $(".fservice");
	var uri = $(".furi");
	var serviceOrder = $(".forder");
	var badUri;
	var badOrder;
	var testUri;
	
	// Check service selected
	if (!services.is(":checked")) {
		
		 ccm_addError(ccm_t('noServiceSelected'));
		
	}
	
	// Check URI begins with http
	uri.each(function() {
		
		testUri = $(this).val();

		if(testUri != '') {
			
			if (testUri.substr(0,7) !== 'http://') {

				badUri = 1;

			}
			
		}
	
	});

	if (badUri == 1) {

		 ccm_addError(ccm_t('uriNotHttp'));

	}
	
	

	// Check order numeric
	serviceOrder.each(function() {

		if (isNaN($(this).val())) {

			badOrder = 1;

		}
	
	});

	if (badOrder == 1) {

		 ccm_addError(ccm_t('orderNotNumeric'));

	}
		
   return false;

}