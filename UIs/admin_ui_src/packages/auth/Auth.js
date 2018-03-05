export default function (Vue) {
    Vue.auth = {
        getToken() {
            let access_token = localStorage.getItem('access_token')
            let expires_in = localStorage.getItem('expires_in')

            if (!access_token || !expires_in) {
                return null
            }

            if (Date.now() > parseInt(expires_in)) {
                this.destroyToken()
                return null
            }
            else {
                return access_token
            }
        },
        setToken(access_token, expires_in) {
            localStorage.setItem('access_token', access_token)
            localStorage.setItem('expires_in', parseInt(expires_in) + Date.now())
        },
        destroyToken() {
            localStorage.removeItem('access_token')
            localStorage.removeItem('expires_in')
        },
        isAuthenticated() {
            return this.getToken()
        }
    }
    Object.defineProperties(Vue.prototype, {
        $auth: {
            get() {
                return Vue.auth
            }
        }
    })
}