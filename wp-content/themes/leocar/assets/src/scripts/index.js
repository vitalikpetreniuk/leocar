var $ = jQuery;

import "./utils/swiper";
import "./utils/imask";
import "./utils/datepicker-full";
import header from "./utils/header";
import modal from "./utils/modal";
import home from "./utils/home";
import catalog from "./utils/catalog";
import reviews from "./utils/reviews";
import faq from "./utils/faq";
import seo from "./utils/seo";
import popup from "./utils/popup";

import prices from "./utils/prices";
import car from "./utils/car";
import checkout from "./utils/checkout";
import phoneMask from "./utils/phoneMask";

export default function init() {
    header();
    modal();
    catalog();
    reviews();
    faq();
    seo();
    popup();
    home();

    prices();
    car();
    checkout();
    phoneMask();
}



document.addEventListener('DOMContentLoaded', function() {
    init();

    let inputTel = document.querySelector('section.leo-consult form input[type="tel"], section.leo-questions form input[type="tel"]');
    let callTel = document.querySelector('#leo-modals .modal.call input[type="tel"]');
    let driveTel = document.querySelector('#leo-modals .modal.drive input[type="tel"]');

    const maskOptions = {
        mask: '+{38} (000) 000-00-00'
    };
    const timeOptions = {
        mask: '00:00'
    };
    if(inputTel) {
        let mask = IMask(inputTel, maskOptions);
    }
    if(callTel) {
        let mask = IMask(callTel, maskOptions);
    }
    if(driveTel) {
        let mask = IMask(driveTel, maskOptions);
    }
});