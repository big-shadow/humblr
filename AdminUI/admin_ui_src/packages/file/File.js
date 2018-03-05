import Vue from 'vue'

export default function (Vue) {
    Vue.file = {
        imageExists(url) {
            return new Promise((resolve, reject) => {
                const el = new Image()
                el.addEventListener('load', resolve)
                el.addEventListener('error', reject)
                el.src = url;
            })
        }
    }
}
Object.defineProperties(Vue.prototype, {
    $file: {
        get() {
            return Vue.file
        }
    }
})