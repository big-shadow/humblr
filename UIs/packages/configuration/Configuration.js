import Vue from "vue";

export default function (Vue) {
    Vue.configuration = {
        client_secret: _CONF.client_secret,
        client_id: _CONF.client_id,
        api_url: _CONF.api_url,
        vendor: _CONF.vendor,
        app_name: _CONF.app_name,
        request_timeout: Infinity,
        production: false,
        messenger_timeout: 3000
    };
};
Object.defineProperties(Vue.prototype, {
    $configuration: {
        get() {
            return Vue.configuration;
        }
    }
});