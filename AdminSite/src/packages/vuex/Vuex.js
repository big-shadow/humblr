import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        appName: 'Room Service'
    },
    getters: {
        appName: state => {
            return state.appName
        }
    }
})

export default store