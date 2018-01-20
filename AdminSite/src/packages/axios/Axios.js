import Vue from 'vue'
export default function (Vue) {
    Vue.axios = axios.create({
        baseURL: 'http://localhost:8000/',
        timeout: 10000,
        //headers: {'content-type': 'application/json'}
    })
    Vue.axios.interceptors.request.use(function (config) {
        console.log('Request:', config)
        return config;
    }, function (error) {
        return Promise.reject(error);
    });
    Vue.axios.interceptors.response.use(function (response) {
        console.log('Response:', response)
        return response;
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