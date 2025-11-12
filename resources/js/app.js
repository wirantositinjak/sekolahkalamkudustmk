import './bootstrap';

// Import Bootstrap JS
import * as bootstrap from 'bootstrap';

// Inisialisasi Tooltip Bootstrap
document.addEventListener('DOMContentLoaded', function () {
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
});

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
