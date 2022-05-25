import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { i18nVue } from 'laravel-vue-i18n'
import { InertiaProgress } from '@inertiajs/progress'


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

InertiaProgress.init({
    // The color of the progress bar.
    color: '#feed01',

    // Whether to include the default NProgress styles.
    includeCSS: true,

    // Whether the NProgress spinner will be shown.
    showSpinner: false,
})
require('./bootstrap');
