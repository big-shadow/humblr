import Vue from 'vue'

export default function (Vue) {
    Vue.axios = axios.create({
        baseURL: Vue.configuration.api_url,
        timeout: Vue.configuration.request_timeout
        //headers: {'content-type': 'application/json'}
    })
    Vue.axios.interceptors.request.use(function (config) {
        if (!Vue.configuration.production) {
            if (!config.params) {
                config.params = {}
            }
            config.params.XDEBUG_SESSION_START = "PHPSTORM"
            console.log('Request:', config)
        }
        return config;
    }, function (error) {
        return Promise.reject(error);
    });
    Vue.axios.interceptors.response.use(function (response) {
        if (!Vue.configuration.production) {
            console.log('Response:', response)
        }
        return response.data;
    }, function (error) {
        return Promise.reject(error);
    });
}
Object.defineProperties(Vue.prototype, {
    $axios: {
        get() {
            return Vue.axios
        }
    }
})