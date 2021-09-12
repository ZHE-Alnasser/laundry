require('./bootstrap');

import Alpine from 'alpinejs';
import handler from './handler.js'

Alpine.data('handler', handler)


window.Alpine = Alpine;

Alpine.start();


import "./flatpickr";
// window.flatpckr = flatpckr;
