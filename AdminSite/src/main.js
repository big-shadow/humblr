import Vue from 'vue'
import Vuetify from 'vuetify'
import Vue2Filters from 'vue2-filters'

// Components
import App from './App'

// Wrappers
import router from './router'
import store from './packages/vuex/Vuex'

// Managed packages
import Axios from './packages/axios/Axios'
import Auth from './packages/auth/Auth'
import File from './packages/file/File'

Vue.use(Vuetify, {
    theme: {
        primary: '#42b983',
        secondary: '#424242',
        accent: '#82B1FF',
        error: '#FF5252',
        info: '#2196F3',
        success: '#4CAF50',
        warning: '#FFC107'
    }
})

Vue.use(Auth)
Vue.use(Axios)
Vue.use(File)
Vue.use(Vue2Filters)

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
})