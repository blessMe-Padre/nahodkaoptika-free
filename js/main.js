import { initNav } from "./module/nav.js";
import { initSlider } from "./module/sliders.js";
import { initPopup } from "./module/popup.js";
import { initCurrentYear } from "./module/current-year.js";
import { initAccordions } from "./module/tabs.js";
import { initPhoneMask } from "./module/phone-mask.js";
import { initPopupOrders } from "./module/popup-order.js";
import { cookieConsentChecker } from './module/cookie-consent-checker.js';



window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    initNav();
    baguetteBox.run('.gallery-wrapper');
    initSlider();
    initPopup();
    initCurrentYear();
    initAccordions();
    initPhoneMask();
    initPopupOrders();
    cookieConsentChecker();
});
