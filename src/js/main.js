// import fslightbox
require('fslightbox');

// some bootstrap scripts needs popper
import '@popperjs/core';

// Import just what we need
// import 'bootstrap/js/dist/alert';
import 'bootstrap/js/dist/button';
// import 'bootstrap/js/dist/carousel';
import 'bootstrap/js/dist/collapse';
// import 'bootstrap/js/dist/dropdown';
// import 'bootstrap/js/dist/modal';
// import 'bootstrap/js/dist/popover';
// import 'bootstrap/js/dist/scrollspy';
// import 'bootstrap/js/dist/tab';
// import 'bootstrap/js/dist/toast';
// import 'bootstrap/js/dist/tooltip';

// Custom scripts
import scrollTop from './modules/scrollTop';
import menuToggle from './modules/menuToggle';

// menu handler
menuToggle();

// scroll to top button handler
scrollTop();
