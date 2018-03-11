import Vue from 'vue'
import Router from 'vue-router'

// Components
import Login from '../components/Login'
import Dashboard from '../components/Dashboard'
import Inventory from '../components/Inventory'
import Welcome from '../components/Welcome'

Vue.use(Router)
let r = new Router({
    mode: 'history',
    routes: [
        {path: '/', redirect: '/dashboard'},
        {
            path: '/login',
            name: 'Login',
            component: Login,
            meta: {
                public: true
            }
        },
        {
            path: '/dashboard',
            name: 'Dashboard',
            component: Dashboard
        },
        {
            path: '/welcome',
            name: 'Welcome',
            component: Welcome
        },
        {
            path: '/inventory',
            name: 'Inventory',
            component: Inventory
        }
    ]
})

r.beforeEach((to, from, next) => {
    let authenticated = Vue.auth.isAuthenticated()

    // if (Vue.configuration.route && authenticated) {
    //     let route = Vue.configuration.route
    //     Vue.configuration.route = null
    //     next({
    //         path: '/' + route
    //     })
    // } else
    if (to.meta.public && authenticated) {
        next({
            path: '/dashboard'
        })
    } else if (!to.meta.public && !authenticated) {
        next({
            path: '/login'
        })
    } else {
        next()
    }
})

export default r