import Vue from 'vue'

export default function (Vue) {
    Vue.rules = {
        required: (value) => !!value || 'Required.',
        email: (value) => {
            const pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            return pattern.test(value) || 'Invalid e-mail.'
        },
        number: (v) => !isNaN(v) || 'Must be a number.',
        money: (v) => /^(\d+\.\d{2})|(\d+)$/.test(v) || 'Must be currency.'
    }
}
Object.defineProperties(Vue.prototype, {
    $rules: {
        get() {
            return Vue.rules
        }
    }
})