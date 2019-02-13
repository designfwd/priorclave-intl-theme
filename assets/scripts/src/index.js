'use strict';

// Don't touch this area, this is extracted with webpack
require('../../styles/src/main.scss');

// Global JS imports and settings
require('./vendor/cookieconsent');
require('./vendor/dialog-polyfill');
require('./vendor/jquery-globals');
require('./vendor/lazysizes.js');
require('slick-carousel');
require('./vendor/smoothscroll-polyfill.js');

// Module-level scripts
require('./modules/article-preview.js');
require('./modules/brand-slideshow.js');
require('./modules/directory-faq.js');
require('./modules/distirbutor-country.js');
require('./modules/hero-slider.js');
require('./modules/map-dropdown.js');
// require('./modules/nav-block.js'); // TODO: Fix this
require('./modules/primary-nav.js');
require('./modules/product-options.js');
require('./modules/product-specifications.js');
require('./modules/spotlight-slider.js');
require('./modules/testimonial-slider.js');
