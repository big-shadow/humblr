import Vue from 'vue'

export default function (Vue) {
    Vue.rules = {
        required: (value) => !!value || 'Required.',
        email: (value) => {
            const pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            return pattern.test(value) || 'Invalid e-mail.'
        },
        number: (v) => !isNaN(v) || 'Must be a number.',
        money: (v) => /^(\d+\.\d{2})|(\d+)$/.test(v) || 'Must be currency.',
        words: (v) => /^[\w|\s|\d]{3,50}$/.test(v) || 'Must be letters, numbers and/or spaces; and between 3 and 50 characters.'
    }
}
Object.defineProperties(Vue.prototype, {
    $rules: {
        get() {
            return Vue.rules
        }
    }
})