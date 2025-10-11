/**
 * Customizer Live Preview
 */

(function($) {
    'use strict';

    // Update company name
    wp.customize('company_name', function(value) {
        value.bind(function(newval) {
            $('.site-title a, .footer-section strong').first().text(newval);
        });
    });

    // Update phone number
    wp.customize('company_phone', function(value) {
        value.bind(function(newval) {
            $('a[href^="tel:"]').first().text(newval);
        });
    });

    // Update email
    wp.customize('company_email', function(value) {
        value.bind(function(newval) {
            $('a[href^="mailto:"]').first().text(newval);
        });
    });

})(jQuery);
