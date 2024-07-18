var $ = jQuery;
import intlTelInput from '../../../../../../plugins/brainwave/assembly/node_modules/intl-tel-input';

export default function phoneMask() {

    let scriptExecuted = false;
    let country_info;
    let flag;

    const billingPhone = document.getElementById("billing-phone");
    intlTelInput(billingPhone, {
        initialCountry: "ua",
        utilsScript: "../utils.js",
    });


    if (document.querySelector('#billing-phone') && !scriptExecuted) {
        let mask_lang
        if($('body').hasClass('woocommerce-account') && localStorage.getItem('phone_mask_lang')) {
            mask_lang = localStorage.getItem('phone_mask_lang')
        } else {
            mask_lang = 'ua'
        }

        intlTelInput(billingPhone, {
            initialCountry: "ua",
            nationalMode: true,
            utilsScript: "../utils.js",
        });

        country_info = $('.iti--show-flags .iti__selected-country').eq(1).attr('title');
        flag = country_info.substring(country_info.indexOf("+"))
        console.log(flag);

        $("<div class=\"iti__code\"><p></p></div>").insertAfter('.iti__selected-country-primary .iti__flag');
        $('.iti__code p').text(flag)

        scriptExecuted = true;
    }
    // });

    $('#billing-phone').on('input paste countrychange', function() {

        country_info = $('.iti--show-flags .iti__selected-country').eq(1).attr('title');
        flag = country_info.substring(country_info.indexOf("+"));
        $('.iti__code p').text(flag)

        let full_phone = flag + $('#billing-phone').val().replace(/\s/g, '').replace(/-/g, '').replace(/\(/g, '').replace(/\)/g, '');
        $('#billing-phone-dub').val(full_phone)
    })
}