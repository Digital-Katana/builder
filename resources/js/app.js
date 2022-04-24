import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { i18nVue } from 'laravel-vue-i18n'



createInertiaApp({
    resolve: name => require(`../Vue/Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(i18nVue, {
                lang: 'en',
                resolve: lang => import(`../../lang/${lang}.json`),
            })
            .mount(el)
    },
})

require('./bootstrap');
