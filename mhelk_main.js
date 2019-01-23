function showPopUp(name)
{
	$('div[pd-popup="'+name+'"]').show();
}

function Pop_Add_Mode(name)
{
	switch(name) {
	  case 'customer_entry':
	  		$('.C_E_ADD_MODE').css('display', 'block');
		    $('.C_E_DELETE_MODE').css('display', 'none');
	  		$('div[name="customer_entry_popup"]').addClass('popup-inner-xl');
		    $('div[name="customer_entry_popup"]').removeClass('popup-inner');
	  		$('input[name="C_E_INPUT_ID"]').attr('required', '');
	  		$('select[name="C_E_SELECT_type"]').select2('val', '');
	  		$('input[name="C_E_TEXT_NAME"]').val('');
	  		$('textarea[name="C_E_TEXTAREA_ADD"]').val('');
	  		$('input[name="C_E_TEXT_MOBILE_NUMBER"]').val('');
	  		$('input[name="C_E_EMAIL_EMAILADD"]').val('');
	  		$('input[name="C_E_TEXT_PHONE"]').val('');
	  		$('input[name="C_E_TEXT_TIN"]').val('');
	  		$('input[name="C_E_TEXT_FAX"]').val('');
	  		$('input[name="C_E_TEXT_CONTACT_PERSON"]').val('');
	  		$('select[name="C_E_SELECT_MOP"]').select2('val', '');
	  		$('input[name="C_E_TEXT_CREDIT_LIMIT"').val('');
	  		$('select[name="C_E_SELECT_SUBLEDGER"]').select2('val', '');
	  		$('textarea[name="C_E_TEXTAREA_RMKS"]').val('');
	  		$('span[name="C_E_MODE"]').empty();
	  		$('span[name="C_E_MODE"]').text('(ADD)');
	    break;
	  default:
	    	console.log('Undocumented Add Mode');
	    break;
	}

}