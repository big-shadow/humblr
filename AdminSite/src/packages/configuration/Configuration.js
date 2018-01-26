import Vue from 'vue'

export default function (Vue) {
    Vue.configuration = {
        /* --- Base URL including final slash --- */
        api_url:'http://localhost:8000/'
    }
}
Object.defineProperties(Vue.prototype, {
    $configuration: {
        get() {
            return Vue.configuration
        }
    }
})