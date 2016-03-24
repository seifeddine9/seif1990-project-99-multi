$(function() {
	$('#myWizard').easyWizard({
		buttonsClass: 'btn btn-default',
		submitButtonClass: 'btn btn-primary',
		
	});
        $('#myWizard').easyWizard('goToStep', 2);
});