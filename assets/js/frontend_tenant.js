/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2016, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * This namespace contains functions that implement the book appointment page
 * functionality. Once the initialize() method is called the page is fully
 * functional and can serve the appointment booking process.
 *
 * @namespace FrontendTenant
 */
var FrontendTenant = {
    /**
     * This method initializes the book appointment page.
     *
     * @param {bool} bindEventHandlers (OPTIONAL) Determines whether the default
     * event handlers will be binded to the dom elements.
     * @param {bool} manageMode (OPTIONAL) Determines whether the customer is going
     * to make  changes to an existing appointment rather than booking a new one.
     */
    initialize: function (bindEventHandlers) {
        if (bindEventHandlers === undefined) {
            bindEventHandlers = true; // Default Value
        }


        $('#myWizard').easyWizard({
            buttonsClass: 'btn btn-default',
            submitButtonClass: 'btn btn-primary finish',
//            
           
        });
        /**
         function onFinish() {
         $('#wizard').smartWizard('showMessage', 'Finish Clicked');
         alert('Finish Clicked');
         console.log('finished');
         }
         **/


        // Bind the event handlers (might not be necessary every time
        // we use this class).
        if (bindEventHandlers) {
            FrontendTenant.bindEventHandlers();
        }










    },
    /**
     * This method binds the necessary event handlers for the book
     * appointments page.
     */
    bindEventHandlers: function () {




//        $(document).on('click', '.next', function (e) {
//            $('.form-group .required').each(function () {
//                if ($(this).val() === '') {
//                    $(this).parents('.form-group').addClass('has-error');
//                    missingFields = true;
//                    
//                }
//
//            });
//           e.preventDefault();
//        });
        
        
        $('.finish').click(function (event) {
            
            event.preventDefault();

            var missingFields = false;
            $('.form-group .required').each(function () {
                if ($(this).val() === '') {
                    $(this).parents('.form-group').addClass('has-error');
                    missingFields = true;
                    event.preventDefault();
                }

            });
//            if (missingFields === true)
//            {
//                return false;
//            }



            var formData = new Object();
            formData['customer'] = {
                'username': $('#inputUsername').val(),
                'last_name': $('#inputNom').val(),
                'first_name': $('#inputPrenom').val(),
                'password': $('#inputPassword').val(),
                'email': $('#inputEmail').val(),
                'phone_number': $("#inputPhoneNumber").intlTelInput("getNumber"),
                'address': $('#inputAdress').val(),
                'city': $('#inputCity').val()

            };
            formData['services'] = {
                'name': $('#inputServicename').val(),
                'duration': $('#inputDuration').val(),
                'price': $('#inputPrice').val(),
                'categorie': $('#inputCategoriename').val()

            };
            formData['provider'] = {
                'role': $('#inputPersonnelType').val(),
                'username': $('#inputPersonnelUsername').val(),
                'last_name': $('#inputPersonnelNom').val(),
                'first_name': $('#inputPersonnelPrenom').val(),
                'password': $('#inputPersonnelPassword').val(),
                'email': $('#inputPersonnelEmail').val(),
                'phone_number': $("#inputPersonnelPhoneNumber").intlTelInput("getNumber"),
                'address': $('#inputPersonnelAdress').val(),
                'city': $('#inputPersonnelCity').val()

            };
            formData['settings'] = {
                'company_name': $('#inputNomSociete').val(),
                'company_email': $('#inputEmailSociete').val(),
                'company_link': $('#inputLinkSociete').val(),
                'company_domain': $('#inputOccupationSociete').val()

            };
            console.log(formData);
//            var postData = {
//                'csrfToken': GlobalVariables.csrfToken,
//                'post_data': formData
//            };
//            var postUrl = GlobalVariables.baseUrl + 'index.php/user/inscription';
//
//            $('.alert.inscrit').addClass('hidden');
//
//            $.post(postUrl, postData, function (response) {
//                ////////////////////////////////////////////////////////////
//
//                console.log(response);
//
//                if (response == GlobalVariables.AJAX_SUCCESS) {
//                    window.location.href = GlobalVariables.baseUrl + 'index.php/home';
//                    ;
//                } else {
//                    json = JSON.parse(response.exceptions);
//                    $('.alert').text(json.message);
//                    $('.alert').removeClass('hidden')
//                            .addClass('alert-danger');
//
//                }
//
//                ////////////////////////////////////////////////////////////
//            }, 'json');



        });
    }


};
