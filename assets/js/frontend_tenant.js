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


        $('#wizard').smartWizard();
        
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

        function onFinishCallback() {
            $('#wizard').smartWizard('showMessage', 'Finish Clicked');
            alert('Finish Clicked');
            console.log('holloo');
        }







    }


};
