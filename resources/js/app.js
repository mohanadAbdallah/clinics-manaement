import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import { createI18n } from "vue-i18n";
import localeMessages from "./vue-i18n-locales.generated";

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'


createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    title:title=>`${title} - Clinics Management`,
    setup({ el, App, props, plugin }) {
        const i18n = createI18n({
            locale: props.initialPage.props.locale, // user locale by props
            fallbackLocale: "en", // set fallback locale
            messages: localeMessages, // set locale messages
        });

        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(i18n)
            .mixin({methods:{route}})
            .mount(el)
    },
})
