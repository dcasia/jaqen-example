import App from './App.vue'
import { createVueApp } from 'jaqen-js'
import Core from '../../vendor/dcasia/jaqen/resources/js/Bootstrap'

import Home from '@icon-park/vue-next/es/icons/Home'
import BookOne from '@icon-park/vue-next/es/icons/BookOne'

const object = createVueApp(App)
    .install(Core)
    .registerComponents({
        Home, BookOne
    })
    .mount('#app')

console.log(object)
