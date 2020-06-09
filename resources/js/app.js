/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('menu-component', require('./components/MenuComponent.vue').default);

import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import VueMask from 'v-mask';
import money from 'v-money'

[VueRouter, Vuetify, VueMask].forEach((x) => Vue.use(x));
Vue.use(money, {precision: 4});

const routes = [
    {
        path: '',
        component: () => import('./views/dashboard/Dashboard'),
        meta: {
            title: 'Dashboard',
        }
    },
    {
        path: '/usuarios',
        component: () => import('./views/usuarios/Usuarios'),
        meta: {
            title: 'Usuários',
        }
    },
    {
        path: '/fiis',
        component: () => import('./views/fiis/Fiis'),
        meta: {
            title: 'Fiis',
        }
    },
    {
        path: '/cotas',
        component: () => import('./views/cotas/Cotas'),
        meta: {
            title: 'Cotas',
        }
    },
    {
        path: '/cotas/adicionar',
        component: () => import('./views/cotas/Adicionar'),
        meta: {
            title: 'Adicionar Nova Cota',
        }
    },
];

const router = new VueRouter({
    routes // short for `routes: routes`
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    router,
    el: '#app',
    vuetify: new Vuetify({
        theme: {
            themes: {
                light: {
                    primary: '#673AB7',
                    secondary: '#512DA8',
                    accent: '#82B1FF',
                    error: '#D32F2F',
                    info: '#1976D2',
                    success: '#00796B',
                    warning: '#FFA000',
                },
            },
        },
    })
});
