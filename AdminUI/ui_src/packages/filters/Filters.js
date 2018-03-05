import Vue from 'vue'

// Global Filter Declarations
Vue.filter('round', function (number, precision) {
    let factor = Math.pow(10, precision);
    return Math.round(number * factor) / factor;
})