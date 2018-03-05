import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        messenger: {
            active: false,
            color: String(),
            message: String()
        }
    },
    mutations: {
        deactivate_messenger(state) {
            state.messenger.active = false
        },
    },
    actions:{
        messenger_broadcast({commit, state}, [color, message]) {
            state.messenger.color = color
            state.messenger.message = message
            state.messenger.active = true
            setTimeout(() => {
                state.messenger.active = false
            }, Vue.configuration.messenger_timeout + 250)
        }
    },
    getters: {
        app_name: state => {
            return Vue.configuration.app_name
        },
        messenger: state => {
            return state.messenger
        },
    }
})

export default store