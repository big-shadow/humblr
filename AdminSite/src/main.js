import Vue from 'vue'
import Vuetify from 'vuetify'
import Vue2Filters from 'vue2-filters'

// Components
import App from './App'

// Wrappers
import router from './router'
import store from './packages/vuex/Vuex'

// Managed packages
import Configuration from './packages/configuration/Configuration'
import Rules from './packages/rules/Rules'
import Axios from './packages/axios/Axios'
import Auth from './packages/auth/Auth'
import File from './packages/file/File'
import * as Filters from './packages/filters/Filters'
import * as Partials from './packages/partials/Partials'

Vue.use(Vuetify, {
    theme: {
        primary: '#E9D460',
        secondary: '#424242',
        accent: '#674172',
        error: '#C0392B',
        info: '#446CB3',
        success: '#1E824C',
        warning: '#EB9532'
    }
})

// Vue.use(Vuetify, {
//     theme: {
//         primary: '#121212',
//         accent: colors.grey.darken3,
//         secondary:  colors.amber.darken3,
//         info:  colors.teal.lighten1,
//         warning:  colors.amber.base,
//         error:  colors.deepOrange.accent4,
//         success:  colors.green.accent3
//     }
// })

Vue.use(Configuration)
Vue.use(Rules)
Vue.use(Auth)
Vue.use(Axios)
Vue.use(File)
Vue.use(Vue2Filters)
Vue.use(Filters)
Vue.use(Partials)

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
})